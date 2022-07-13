<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        <?php include __DIR__ . './login.css' ?><?php include __DIR__ . '/../../../../libs/base.css' ?>
    </style>
</head>

<body>
    <?php include __DIR__ . "/../../header.php" ?>
    <div class="Container">
        <div class="Container-top">INICIAR SESSÃO</div>
        <div class="Container-forms">
            <form method="POST">
                <div class="form-email">
                    <label for="email">
                        Email:
                    </label>
                    <input name="email" type="email" placeholder="email@email.com">
                </div>
                <br>
                <div class="form-senha">
                    <label for="senha">
                        Senha:
                    </label>
                    <input name='senha' type="password" placeholder="****">
                </div>
                <br>
                <button class="login-button" type="submit">Iniciar sessão</button>
            </form>
            <div class="botoes">
                <br>
                <a class="register-button" href="/register">Criar conta</a>
            </div>
        </div>
    </div>
</body>

</html>