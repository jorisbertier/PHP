<?php include_once __DIR__ . '/../component/header.php' ?>
<p>## Exercice 6 ##
Avec le moins de lignes de code possible, proposez moi un algorithme qui,
 pour un nombre donné, affiche la table de multiplication liée. Par exemple : Si je demande 1, je veux voir :
1x1 = 1
1x2 = 2
etc Et ce jusqu'à 12

	- Afficher le nombre donné sur votre page : Nombre donné : 3
	- Puis affiché le résultat comme au dessus
</p>
<?php 

// $j = 5;

// for ($i = 1; $i < 13; $i++) {
// 	$result = $j * $i;
// 	echo $j .'*' .$i. " = " . $result;
// 	echo '<br>';
// }



function multiplication(int $i, int $j): string
{
  $output = '';
  for ($i = 1; $i < 13; $i++) {
    $result = $j * $i;
    $output .= $j . ' * ' . $i . " = " . $result . '<br>';
  }
return $output;
}

echo multiplication(2, 3);
?>

<?php include_once __DIR__ . '/../component/footer.php' ?>