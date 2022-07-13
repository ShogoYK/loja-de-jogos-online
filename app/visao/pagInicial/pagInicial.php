<!DOCTYPE html>

<head>
    <title>Pagina Inicial</title>
    <?php include __DIR__ . "/../../../libs/libs.php" ?>
    <style>
        <?php include __DIR__ . "./pagInicial.css";
        include __DIR__ . "/../../../libs/base.php" ?>
    </style>
</head>

<body>
    <?php include __DIR__ . "/../header.php"   ?>
    <div id="container-master">
        <div class="col-left">
            <div class="container-game">
                <img class="img-game" src="./public/images/dota2.jpg" alt="Minha Figura">
                <div class="overlay">
                    <div class="text">Dota 2</div>
                </div>
            </div>
            <div class="container-game">
                <img class="img-game" src="./public/images/lol.jpg" alt="Minha Figura">
                <div class="overlay">
                    <div class="text">League Of Legends</div>
                </div>
            </div>
            <div class="container-game">
                <img class="img-game" src="./public/images/ddtank.jpg" alt="Minha Figura">
                <div class="overlay">
                    <div class="text">DDTank</div>
                </div>
            </div>
        </div>
        <div class="col-right">
            <div class="carousel">
                <div class="container-carousel" id="img">
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    <div class="slide first">
                        <img clas="img-carousel" src="./public/images/vampire.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img class="img-carousel" src="./public/images/outlast2.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img class="img-carousel" src="./public/images/vrising.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img class="img-carousel" src="./public/images/csgo.jpg" alt="">
                    </div>
                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                    </div>
                </div>
                <div class="manual-navigation">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                </div>
            </div>
            <script src="./index.js"></script>
            <div class="games">
                <div class="prateleira">
                    <div class="prateleira-jogo">
                        <img src="./public/images/cgg.jpg" alt="">
                    </div>
                    <div class="prateleira-jogo">
                        <img src="./public/images/minecraft.jpg" alt="">
                    </div>
                    <div class="prateleira-jogo">
                        <img src="./public/images/tibia.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>