<?php include_once __DIR__ . '/../component/header.php' ?>

<h1>Cours PHP sur les outputs</h1>

<?php 

// echo permet d'afficher le contenu sur notre page
echo "Hello world FROM echo function <br> ";
echo "Bonjour";
?>

<!-- Utiliser le raccourci echo dans l'html -->
<p>Bonjour <?= "Jules"?>

<!-- pour vous debogger en php on utilise var_dump -->
<?php var_dump('Jules') ?>



<?php include_once __DIR__ . '/../component/footer.php' ?>