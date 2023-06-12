<?php include_once __DIR__ . '/../component/header.php' ?>
<?php include_once __DIR__ . '/../../model/Vehicule.php' ?>



<h1>Programmation orienté objet - Introduction</h1>

<?php 
$vehicule1 = new Vehicule('brown', 10);

// echo $vehicule1->getColor();

// $vehicule1->setColor('red');
// echo $vehicule1->getColor();

// echo "Mon véhicule a " . $vehicule1->getWheelNb() . " roues.";

$mario = new Personnage('mario', 10);
$bowser = new Personnage('bowser', 10);

$bowser->setHp(500);
$bowser->setHpMax(500);
$bowser->setStrength(50);
echo "<pre>";
// var_dump($mario);
// echo "<pre>";

// echo "<pre>";
// var_dump($bowser);
// echo "<pre>";

echo $mario->getInfo();
echo "<br>";
echo $bowser->getInfo();
echo "<br>";


while($bowser->getHp() > 0) {
    $mario->frapper($bowser);
}

if($bowser->getHp()< 0) {
    echo "<br> bowser est ko";
}

?>

<?php include_once __DIR__ . '/../component/footer.php' ?>