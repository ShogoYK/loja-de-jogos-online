<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cadastrar um jogo</title>
    <?php require __DIR__ . '/../../../libs/libs.php' ?>
    <style>
        <?php require __DIR__ . '/cadastroJogo.css' ?>
    </style>
</head>

<body>
    <?php require __DIR__ . '/../../visao/header.php' ?>
    <?php require __DIR__ . '/../../visao/alert.php' ?>

    <div class="container">
        <div class="container-top">Cadastro de jogo</div>
        <div class="container-forms">
            <form method="POST" action="/jogo/cadastrar">
                <div class="form-nome">
                    <label for="name">
                        Nome do jogo:
                    </label>
                    <input type="text" id="name" name="nomeJogo">
                </div>
                <br>
                <br>
                <div class="form-descricao">
                    <label for="desc">
                        Descrição:
                    </label>
                    <input type="text" id="desc" name="descricao">
                </div>
                <br>
                <br>
                <div class="form-price">
                    <label for="price">
                        Preço: R$
                    </label>
                    <input type="number" min="0" step="any" placeholder="0,00" id="price" name="preco">
                </div>
                <br>
                <br>
                <div class="form-upload">
                    Selecione uma imagem:
                    <!-- <input type="file" name="localImagem" id="arquivo"> -->
                </div>
                <br>
                <br>
                <div class="form-button">
                    <button type="submit">Cadastrar Jogo</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>