<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        <?php include __DIR__ . './cadastro.css' ?><?php include __DIR__ . '/../../../../libs/base.css' ?>
    </style>
</head>

<body>
    <?php include __DIR__ . "/../../header.php" ?>
    <div class="Container">
        <div class="Container-top">CADASTRO</div>
        <div class="Container-forms">
            <form method="POST">
                <?php require 'app/visao/alert.php' ?>
                <div class="form-nome">
                    <label for="name">
                        Nome:
                    </label>
                    <input type="text" placeholder="Seu Nome" id="name" name="nome">
                </div>
                <br>
                <div class="form-email">
                    <label for="email">
                        Email:
                    </label>
                    <input type="email" placeholder="email@email.com" id="email" name="email">
                </div>
                <br>
                <div class="form-senha">
                    <label for="senha">
                        Senha:
                    </label>
                    <input type="password" placeholder="****" id="password" name="senha">
                </div>
                <br>
                <div class="botoes">
                    <button class="form-button-cadastrar" type="submit">Cadastrar</button>
            </form>
            <form action="/login">
                <button class="form-button-login" type="submit">Entrar</button>
            </form>
        </div>
    </div>
    </div>
</body>

</html>