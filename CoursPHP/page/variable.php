<?php include_once __DIR__ . '/../component/header.php' ?>


<h1>Les variables</h1>

<?php
$name = "Jules"; // string, integer, float, array, booleeen


// ajouter + 1 au nombre
$myNumber = 1;

//equivalent
$myNumber++;
$myNumber = $myNumber + 1;
$myNumber +=1;

//les concatenations
//!!! ATTENTION en JS c'est + mais en PHP c'est .
$concatenationOne = 'Jules' . ' ' . 'Pauly';
$newAge = 32;
$firstName = 'Jules';
$lastName = 'Pauly';

$sentence = "Je m'appelle " . $firstName . " " . $lastName . " et j'ai " . $newAge . " ans";

?>

<p><?= $sentence ?> </p>

<?php 
// tableau
$myFirstArray = [5, 45, 65, 89, 52];

//tableau associatif
$mySecondArray = [
    "FirstName" => "Jules",
    "lastName" => "Pauly",
    "age" => 32
];
$mySecondArray["age"];

$myThirdArray = [
    'user' => [
        [
            'name' => 'Jules'
        ],
        [
            'name' => 'tkt'
        ]
    ]
];

$myThirdArray['user'][0]['name'];

//parcourir les tableaux
// $mySecondArray.forEach((item) => {})

foreach($mySecondArray as $item) {
    echo $item . ' ';
}
foreach($mySecondArray as $key => $value) {
    echo $key . ' : ' . $value . " /";
}

//while
$nbTour = 1;

while($nbTour < 10) {
    echo $nbTour;
    $nbTour++;
}

//do while

$nbTour = 1;
do {
    $nbTour++;
} while ($nbTour < 10)



?>

<?php include_once __DIR__ . '/../component/footer.php' ?>