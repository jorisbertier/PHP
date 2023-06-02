<?php include_once __DIR__ . '/../component/header.php';
include_once __DIR__ . '/../functun-dump.php';

?>
<p>## Exercice 12 ##
Faire une fonction qui permet de calculer la valeur d'un mot au Scrabble.

Elle prendra en paramètre une chaîne de caractère et la valeur en point du mot sera retournée.

Valeurs des lettres :

- 1 point: "A", "E", "I", "O", "U", "L", "N", "R", "S", "T",
- 2 points: "D", "G",
- 3 points: "B", "C", "M", "P",
- 4 points: "F", "H", "V", "W", "Y",
- 5 points: "K",
- 8 points: "J", "X",
- 10 points: "Q", "Z",

	- Afficher le mot donnée, exemple : CHAT
	- Afficher en dessous le nombre de point obtenu grace à votre fonction, ex : 10 pts
</p>
<?php 


$test = [
	1 => ["A", "E", "I", "O", "U", "L", "N", "R", "S", "T"],
	2 => ["D", "G"],
	3 => ["B", "C", "M", "P"],
	4=> ["F", "H", "V", "W", "Y"],
	5=> ["K"],
	8 => ["J", "X"],
	10 => ["Q", "Z"]
];


function calculerPointsScrabble($string) {


		$total = 0;
		for($i =0; $i < strlen($string); $i++) {
			$lettre = strtoupper($string[$i]);

			dump($lettre);
			// var_dump($lettre);

			if(in_array($lettre, array("A", "E", "I", "O", "U", "L", "N", "R", "S", "T"))) {
			$total += 1;
			} elseif(in_array($lettre, array("D", "G"))) {
			$total += 2;
			} elseif(in_array($lettre, array("B", "C", "M", "P"))) {
				$total += 3;
			} elseif(in_array($lettre, array("F", "H", "V", "W", "Y"))) {
				$total += 4;
			} elseif(in_array($lettre, array("K"))) {
				$total += 5;
			} elseif(in_array($lettre, array("J", "X"))) {
				$total += 8;
			} elseif(in_array($lettre, array("Q", "Z"))) {
				$total += 10;
			}
		}
		return $total;
}

$mot = "CHAT";
echo calculerPointsScrabble($mot);


// echo '<pre>';
//     var_dump($test[1]);
//     echo '</pre>';


// 	$total = 0;
// 	$string = str_split($string); // transforme en tableau

// 	if((in_array("a",$string)) ||(in_array("a",$string)) {
// 		echo $total += 10;
// 	} else {
// 		echo "0";
// 	}
// }

// echo totalPoint("tor");

?>

<?php include_once __DIR__ . '/../component/footer.php' ?>