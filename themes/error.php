<?php $v->layout("_theme");?>

<div class="error">
    <h2>Ooooooops erro <?= $error; ?>!</h2>
</div>

<?php $v->start("sidebar"); ?>
    <a href="<?=url()?>" title="Voltar ao início!">Voltar</a>
<?php $v->end(); ?>