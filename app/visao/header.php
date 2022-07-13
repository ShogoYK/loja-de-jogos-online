<?php include __DIR__ . "/../../libs/libs.php" ?>
<style>
    <?php include __DIR__ . "/header.css" ?>
</style>
<div class="header">
    <div class="header-top">
        <div class="header-top-menu">
            <ion-icon name="menu-outline"></ion-icon>
        </div>
        <div class="header-top-logo">
            <div class="logo">
                <form action="/">
                    <button type="submit">Logo</button>
                </form>
            </div>
            <div class="index">
                <form action="/jogo/cadastrar">
                    <button type="submit">Adicionar Jogo</button>
                </form>
            </div>
            <div class="index">
                <form action="/biblioteca">
                    <button type="submit">Meus Jogos</button>
                </form>
            </div>
            <div class="index">
                <form action="/jogo/listar">
                    <button type="submit">Todos os Jogos</button>
                </form>
            </div>
        </div>
        <div class="header-top-search">
            <div class="searchbar">
                <input placeholder="  Procurar...">
                <ion-icon name="search-outline"></ion-icon>
            </div>
        </div>
        <div class="header-top-user">
            <a href="/login">
                <img border="0" width="100" height="100" class="imagem" src="/public/images/person-circle-outline_1.png">
            </a>
            </form>
        </div>

    </div>
    <br>
</div>
<div class="limite"></div>