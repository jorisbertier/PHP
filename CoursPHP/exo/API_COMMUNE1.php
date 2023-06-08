<?php include_once __DIR__ . '/../component/header.php' ?>
<?php
if(isset($_GET['codeDepartement'])) {
    $codeDepartement = $_GET['codeDepartement'];

}

$url = 'https://geo.api.gouv.fr/departements/'.$codeDepartement."/communes"; // Remplacez l'URL par celle de votre API

$json = file_get_contents($url);

$data = json_decode($json, true);




?>


<ul>
    <?php
    foreach($data as $item) {
        echo "<li>".$item['nom']."</li>";
    }
?>

</ul>




<?php include_once __DIR__ . '/../component/footer.php' ?>