<?php if ($_GET['mensagem']) { ?>
    <div class="borda" id="borda">
        <div id="alert" class="alerta" role="alert">
            <p><?= $_GET['mensagem'] ?></p>
        </div>
    </div>
<?php } ?>
<script>
    setTimeout(() => {
        document.getElementById('alert').remove();
        document.getElementById('borda').remove();
    }, 3000);
</script>
<style>
    <?php include_once __DIR__ . '/alert.css' ?>
</style>