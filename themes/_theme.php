<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=url('../src/assets/css/style.css');?>"/>
</head>
<body>

<nav class="main_nav">
    <?php if ($v->section("sidebar")):
        echo $v->section("sidebar");
    else:
        ?>
        <div class="nav_content"><span>BeerClub</span></div>
    <?php   
    endif; ?>
</nav>

<main class="main_content">
    <?= $v->section("content");?>
</main>

<footer class="main_footer">
    <p><?= SITE; ?> - Todos os Direitos Reservados</p>
</footer>

<script src="<?=url("../src/assets/js/jquery-3.5.1.js")?>"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<?= $v->section("scripts"); ?>
</body>
</html>