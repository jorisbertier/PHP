<?php include_once __DIR__ . '/../component/header.php' ?>
<p>## Exercice 5 ##
Écrivez une fonction pour supprimer les doublons d’un tableau : Exemple : [1, 2, 3, 3, 3, 4, 5, 5] Résultat attendu : [1, 2, 3, 4, 5]
	- Afficher le tableau sur votre page, sous cette forme = X, X, X, X, X, X, X.
	- Afficher le résultat sur votre page, sous cette forme = X, X, X, X.

</p>
<?php 


function deleteNumber(array $array)
{
	

	$returnArray = [];
	foreach($array as $item){

		$isInArray = in_array($item, $returnArray);

		if($isInArray === false){
			$returnArray[] = $item;
		}
	}
	echo implode(' ', $array);
	echo '<br>';
	echo implode(' ', $returnArray);
}

$array = [1, 1, 2, 3, 3, 3, 4, 5];

deleteNumber($array);
// function removeDuplicates(array $array)
// {
//     $uniqueArray = [];

//     foreach ($array as $item) {
//         if (!in_array($item, $uniqueArray)) {
//             $uniqueArray[] = $item;
//         }
//     }

//     // Afficher le tableau initial
//     echo 'Tableau initial : ';
//     echo implode(', ', $array);
//     echo '<br>';

//     // Afficher le résultat
//     echo 'Résultat : ';
//     echo implode(', ', $uniqueArray);
// }

// $array = [1, 2, 3, 3, 3, 4, 5, 5];
// removeDuplicates($array);

?>

<?php include_once __DIR__ . '/../component/footer.php' ?>