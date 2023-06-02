<?php include_once __DIR__ . '/../component/header.php' ?>


<?php

$codeDepartement = $_GET['code'];

$url = "https://geo.api.gouv.fr/departements/".$codeDepartement."/communes";
$json = file_get_contents($url);

$data = json_decode($json, true);




?>
<ul>
    <?php foreach($data as $commune): ?> 
        <li><?=$commune['nom']?></li>
    <?php endforeach;?>
    
</ul>



<?php include_once __DIR__ . '/../component/footer.php' ?>