<?php include_once __DIR__ . '/../component/header.php' ?>
<?php


if(isset($_GET['code'])) {
    $code = $_GET['code'];
}

$url = 'https://geo.api.gouv.fr/regions/'.$code."/departements"; // Remplacez l'URL par celle de votre API

$json = file_get_contents($url);
$data = json_decode($json, true);




?>
<ul>
<?php
foreach($data as $item) {
    echo "<li>".$item['nom']."</li>";
    echo '<a href="API_COMMUNE1.php?codeDepartement='.$item['code'].'">Cliquez ici</a>';
}
?>
</ul>

<?php include_once __DIR__ . '/../component/footer.php' ?>