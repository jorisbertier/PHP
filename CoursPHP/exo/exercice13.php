<?php include_once __DIR__ . '/../component/header.php';
include_once __DIR__ . '/../functun-dump.php';

?>
<p>## Exercice 13 ##
Créer une fonction qui va prendre un (gros) nombre en paramètre (EXEMPLE : 1350)
	- Rentrer dans une boucle qui va décrémenter votre nombre d'un nombre aléatoire compris entre 1 et 50.
	- Compter combien de passages sont nécéssaire dans votre boucle pour que votre nombre de base soit égal ou inférieur à zéro.
	
	- Afficher le nombre donné, ex : 1569
	- Afficher en dessous le nombre de passage dans la boucle : ex : 45 passages.

</p>
<?php 

function bigNumber(int $number) {
	
	
	echo "Decrementation de " . $number . " <br>";
	$i = 0;

	for($i = 0;$i <$number; $i++) {
		if($number > 0) {
			$random= rand(1, 50);
			$result = $number-= $random ;
			if($result < 0){
				$result = 0;
			}
			echo "Decrementation de " . $result . " <br>";
		}
		
	}
	echo "<br> Nombre total de tour : " . $i;
}

echo bigNumber(150);



?>

<?php include_once __DIR__ . '/../component/footer.php' ?>