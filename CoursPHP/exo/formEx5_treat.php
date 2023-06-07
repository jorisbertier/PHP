<?php
	$movie = [
		"Interstellar" => 15,
		"Donnie Darko" => 16,
		"L'effet papillon" => 5,
		"Pulp Fiction" => 8,
		"Star wars" => 15
	];

$price = 0;

if(isset($_POST['movie'])) {
    $movieName = $_POST["movie"];

    if(array_key_exists($movieName, $movie)){
        $price = $movie[$movieName];
    }
  

}

if(isset($_POST['quantity'])) {
    $quantity = $_POST['quantity'];
}

$priceDelivery = 0;

if(isset($_POST['delivery'])) {
    $delivery = $_POST['delivery'];
    if($delivery == "oui") {
        $priceDelivery = 10;
    }
}

echo "Voici le total ".$price * $quantity + $priceDelivery. " €";