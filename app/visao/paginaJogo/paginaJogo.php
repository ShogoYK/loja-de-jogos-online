<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jogo</title>
    <?php require __DIR__ . '/../../../libs/libs.php' ?>
    <style>
        <?php require __DIR__ . "./paginaJogo.css" ?>
    </style>
</head>

<body>
    <?php require __DIR__ . '/../../visao/header.php' ?>
    <br>

    <div class="titulo">
        <h2>Nome do jogo</h2>
    </div>
    <div class="jogo">
        <div class="jogo-img">
            <!-- TODO -->
            <img src="./gronjos.jpg" alt="">
        </div>
        <div class="jogo-descricao">
            <h2><strong>Descrição</strong></h2>
            <h3></h3>
            <!-- TODO -->
        </div>
        <br>
        <div class="botoes">
            <button class="botoes-jogar"> <strong> Jogue de graça!</strong></button>
            <p><strong> ou então</strong></p>
            <button class="botoes-wishlist"><strong>Adicionar na sua lista de desejos</strong></button>
        </div>
        <div class="comentarios">
            <h2>Avaliações e comentários: </h2>
            <div class="comentarios-container">
                <ion-icon name="person-circle-outline"></ion-icon>
                <div class="comentario">
                    <p>Nome do usuario do comentario</p>
                    <p>Cometário</p>
                </div>
            </div>
        </div>
    </div>


</body>

</html>