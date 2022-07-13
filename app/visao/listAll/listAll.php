<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lista de jogos</title>
    <?php include __DIR__ . "/../../../libs/libs.php" ?>
    <style>
        <?php include __DIR__ . "./listAll.css";
        include __DIR__ . "/../../../libs/base.php" ?>
    </style>
</head>

<body>
    <?php include __DIR__ . "/../header.php"   ?>
    <?php include __DIR__ . "/../alert.php" ?>
    <div class="listAll">
        <table class="tabela-jogos">
            <thead>
                <tr>
                    <th class="head-img"></th>
                    <th class="head-nome">Nome</th>
                    <th class="head-descricao">Descrição</th>
                    <th class="head-preco">Preço</th>
                    <th class="head-action">Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $jogo) { ?>
                    <tr>
                        <td class="body-img"><a href="/jogo/info/<?= $jogo->idJogo ?>"><img src="<?= $jogo->localImagem ?>" alt=""></a> </td>
                        <td class="body-nome"><?= $jogo->nomeJogo ?></td>
                        <td class="body-desc"><?= $jogo->descricao ?></td>
                        <td class="body-preco">R$<?= $jogo->preco ?></td>
                        <td class="body-remove">
                            <form method="POST" action="/jogo/listar/remove" class="delete-form">
                                <input type="hidden" name="nomeJogo" value="<?= $jogo->nomeJogo ?>">
                                <button type="submit">
                                    <ion-icon name="trash-outline"></ion-icon>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>