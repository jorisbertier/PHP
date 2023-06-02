<?php include_once __DIR__ . '/component/header.php' ?>

<?php
$array = [ 'bonjour', 'aurevoir', 'salut', 'sayonara'];
?>

<ul>
    <?php foreach($array as $item) : ?>
        <li><?= $item?></li>
        <a href="/page/truc.php?id=<?=$item?>">monlien</a>
    <?php endforeach; ?>
</ul>

<p>Bonjour</p>
<button type="button" class="btn btn-danger">Primary</button>

<?php include_once __DIR__ . '/component/footer.php' ?>
