<?php include_once __DIR__ . '/../component/header.php' ?>


<?php

//METHODE FILE
$url = 'https://hp-api.onrender.com/api/characters'; // Remplacez l'URL par celle de votre API

$json = file_get_contents($url);

$data = json_decode($json, true);



?>

    <div class="row gx-3 mx-auto">
    <?php foreach ($data as $item) : ?>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
            <?php 
            
            if($item['house'] == 'Gryffindor') {
                $img = "./gryfonfor.jpg";
            }if($item['house'] == 'Slytherin') {
                $img = "./serdaigle.jpg";
            }if($item['house'] == 'Hufflepuff') {
                $img = "/img/poutsoufle.jpg";
            }if($item['house'] == 'Ravenclaw') {
                $img = "./serpentard.jpg";
            }
            ?>  <div class="heart">
                <img src="<?= ($item['image']) !=='' ? $item['image'] : "./harry.jpg" ?>" class="card-img-top imgPrincipal" alt="<?= $item['name'] ?>">
                <div class="logo"><img src="<?= ($item['alive']) == true ? './coeur.png' : '' ?>" class="logo1"></div>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $item['name'] ?></h5>
                    <img src="<?=$img?>" class="card-img-top maison" alt="">
                    <h6 class="card-title"><?= $item['house'] ?></h6>
                    <h6 class="card-title">Née le <?= $item['dateOfBirth'] ?></h6>
                    <h6 class="card-title">Age : <?= 2023-$item['yearOfBirth'] ?></h6>
                    <h6 class="card-title">Acteur : <?= $item['actor'] ?></h6>
 
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>


<?php include_once __DIR__ . '/../component/footer.php' ?>