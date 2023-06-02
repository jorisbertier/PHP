<?php include_once __DIR__ . '/../component/header.php' ?>
<p>## Exercice 11 ##
Faire une fonction qui permet de déterminer si une chaîne de caractères est un "Pangram".
Elle prendra en paramètre une chaîne de caractère, et elle retournera un booléen : true si la chaine est un pangram, false sinon.
Qu'est-ce qu'un pangram ?
Un pangram est une phrase qui utilise **toutes** les lettres de l'alphabet au moins une fois.
Vous allez avoir besoin de ça : ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"]
Vous pouvez tester un résultat "true" avec cette phrase : "The quick brown fox jumps over the lazy dog."

	- Afficher la string X donnée
	- Afficher le résultat true ou false en dessous grace à votre fonction
</p>
<?php 


// foreach($sentence as $item) {
// 	echo $item;
// }

function verifyPangram(string $sentence) {
	$pangram =  ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
	$sentenceArray = str_split(strtolower($sentence)); // Convertit la phrase en minuscules et la transforme en tableau
	$result = array_diff($pangram, $sentenceArray); // Trouve les lettres manquantes dans la phrase

	if(empty($result)) {
		echo "C'est un pangram";
	} else {
		echo "Ce n'est pas un pangram";
	}

}
$sentence = "The quick brown fox jumps over the lazy dog";
echo verifyPangram($sentence)

// function verifyPangram(string $sentence) {
// 	$regex = "/^(?=.*[a-z]).{26}$/i";
	

// 	if(preg_match($regex, $sentence)) {
// 		echo "Valide";
// 	} else {
// 		echo "non valide";
// 	}

// }

// function isPangram($param) {
		
// 	$sentences = strtolower(trim($param));
// 	$letters = str_split("thequickbrownfoxjumpsoverthelazydog");

// 	foreach ($letters as $letter) {
// 		if (!strstr($sentences, $letter))
// 			return false;
// 	}

// 	return true;
// 	echo '<pre>';
// var_dump($letters);
// echo '</pre>';
// }




// foreach($pangram as $item) {
// 	echo $item;
// }
?>

<?php include_once __DIR__ . '/../component/footer.php' ?>