<?php include_once __DIR__ . '/../component/header.php' ?>


<?php

//METHODE FILE
$url = 'https://geo.api.gouv.fr/regions'; // Remplacez l'URL par celle de votre API

$json = file_get_contents($url);

$data = json_decode($json, true);





?>
<ul>
    <?php
    var_dump($data);
    foreach($data as $item) {
        echo "<li>".$item['nom']."</li>";
        echo '<a href="API_DEPARTEMENT2.php?code='.$item['code'].'">Cliquez Ici</a>';
    }
    ?>
</ul>


<?php include_once __DIR__ . '/../component/footer.php' ?>