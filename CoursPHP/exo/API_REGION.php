<?php include_once __DIR__ . '/../component/header.php' ?>


<?php

//METHODE FILE
$url = 'https://geo.api.gouv.fr/regions'; // Remplacez l'URL par celle de votre API

$json = file_get_contents($url);

$data = json_decode($json, true);

if ($json === false) {
    // Gestion des erreurs
    die('Erreur lors de la récupération des données depuis l\'API');
}

?>
<ul>
    <?php foreach ($data as $item) : ?>
        <li><?= $item['nom'] ?></li>
        <li><a href="/exo/API_DEPARTEMENT.php?code=<?=$item['code']?>">Cliquer ici</a></li>
    <?php endforeach; ?>

</ul>

<?php include_once __DIR__ . '/../component/footer.php' ?>