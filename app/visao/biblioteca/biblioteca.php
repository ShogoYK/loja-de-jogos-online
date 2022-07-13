<!DOCTYPE html>

<head>
    <title>Biblioteca de Jogos</title>
    <?php include __DIR__ . "/../../libs/libs.php" ?>
    <style>
        <?php include __DIR__ . "./biblioteca.css" ?>
    </style>
</head>

<body>
    <?php include __DIR__ . "/../header.php" ?>
    <div class="topo">
        <div class="topo-titulo">
            <h2>Meus Jogos: </h2>
        </div>
        <div class="topo-ordenar">
            <h3>Ordenar por: <select name="" id=""></select></h3>
        </div>
    </div>
    <div class="prateleira">

        <div class="prateleira-jogo">
            <img src="./public/images/GrandChaseClassic.jpg" alt="">
        </div>
        <div class="prateleira-jogo">
            <img src="./public/images/DD tank.jpg" alt="">
        </div>
        <div class="prateleira-jogo">
            <img src="./public/images/Tibia.jpg" alt="">
        </div>
        <div class="prateleira-jogo">
            <img src="./public/images/Minecraft.jpg" alt="">
        </div>
        <div class="prateleira-jogo">
            <img src="./public/images/League of Legends.jpg" alt="">
        </div>
        <div class="prateleira-jogo">
            <img src="./public/images/dota 2.jpg" alt="">
        </div>
        <div class="prateleira-jogo">
            <img src="./public/images/rocketleague.jpg" alt="">
        </div>
        <div class="prateleira-jogo">
            <img src="./public/images/age of.jpg" alt="">
        </div>
        <div class="prateleira-jogo">
            <img src="./public/images/the sims.png" alt="">
        </div>

        <!-- <?php foreach ($data as $jogo) { ?>
        <div class="prateleira-jogo">
            <img src="<?= $jogo->localImagem ?>" alt="">
            <p><?= $jogo->nomeJogo ?></p>
        </div>
    <?php } ?> -->
    </div>
</body>

</html>