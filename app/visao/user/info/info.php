<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cadastro</title>
    <style>
        <?php include __DIR__ . './info.css' ?><?php include __DIR__ . '/../../../../libs/base.css' ?>
    </style>
</head>

<body>
    <?php require __DIR__ . '/../../header.php' ?>
    <div class="Container">
        <div class="Container-top">Informações da conta</div>
        <div class="Container-forms">
            <form method="POST" action="/logout">
                <div class="form-nome">
                    <label for="name">
                        Nome:
                    </label>
                    <input type="text" value="<?= $data->nome ?>" disabled>
                </div>
                <br>
                <div class="form-email">
                    <label for="email">
                        Email:
                    </label>
                    <input type="email" value="<?= $data->email ?>" disabled>
                </div>
                <br>
                <div class="form-senha">
                    <label for="senha">
                        Senha:
                    </label>
                    <input type="password" value="<?= $data->senha ?>" disabled>
                </div>
                <br>
                <div class="sair">
                    <button class="sair-button" type="submit">Sair</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>