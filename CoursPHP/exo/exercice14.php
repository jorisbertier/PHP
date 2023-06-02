<?php include_once __DIR__ . '/../component/header.php';
include_once __DIR__ . '/../functun-dump.php';

?>
<p>## Exercice 14 ##
Le jeu du petit cochon! Attention plûtot difficile dans l'algo!
   - Un cochon peut avoir : 4 pattes, 2 yeux, 1 queue, 2 oreilles
   - Une fois le cochon assemblé, vous avez gagné !
   - Pour se faire il faut lancer un dé spécial :
      - Ce dé est composé de 6 faces :
      * 3 avec des pattes
      * 1 avec un oeil
      * 1 avec une queue
      * 1 avec une oreille
        (Les faces avec les pattes, se sont pas toutes collées)
        
   Objectif (fonction à faire) :
   - Vous devez compter en combien de lancé de dé vous avez réussi à assembler votre cochon ! 
   
   - Affichez pour chaque lancé de dés, quelle face avez vous eu : ex en premier : pattes, ensuite : oeil etc etc
   - Affichez à la toute fin, combien de lancé vous avez du faire, exemple : j'ai du faire X lancés !

</p>
<?php 


// Fonction pour vérifier si le cochon est assemblé
function cochonAssemble() {
    $patte = 0;
	$oeil = 0;
	$queue = 0;
	$oreille = 0;
	$fullPig = false;
	$i = 0;

	dump($patte);

	while($fullPig === false) {
		$dee = rand(1,6);
		$i++;

		switch ($dee) {
            case 1:
            case 2:
            case 3:
                echo "Lancé $i : pattes <br>";
                // Effectuer les actions nécessaires pour assembler les pattes du cochon
				$patte++;

                break;
            case 4:
                echo "Lancé $i : oeil <br>";
                // Effectuer les actions nécessaires pour assembler l'œil du cochon
				$oeil++;

                break;
            case 5:
                echo "Lancé $i : queue <br>";
                // Effectuer les actions nécessaires pour assembler la queue du cochon
				$queue++;

                break;
            case 6:
                echo "Lancé $i: oreille <br>";
                // Effectuer les actions nécessaires pour assembler une oreille du cochon
				$oreille++;
                break;
        }
		if($patte > 4 && $oeil > 2 && $queue > 1 && $oreille > 2) {
			$patte = 4;
			$oeil = 2;
			$queue = 1;
			$oreille = 2;
			echo " <br> <br> Nbr de lancer " .$i . "  <br> <br> Cochon assembler il a ". $patte. " pattes, ".$oeil. " yeux, ".$queue. " queue, ".$oreille. " oreilles.";
			return $fullPig = true;
			
		}
		

}
}

cochonAssemble();



//Correction

// $arrayDice = ['pattes', 'pattes', 'pattes', 'oeil', 'queue', 'oreille'];
// $pig = [
//     'pattes' => 0,
//     'oeil' => 0,
//     'queue' => 0,
//     'oreille' => 0
// ];

// $count = 0;
// while (!isPigComplete($pig)) {
//     $dice = $arrayDice[rand(0, 5)];
//     $pig[$dice] += 1;
//     $count++;
// }

// function isPigComplete(array $pig): bool
// {
//     if (
//         $pig['pattes'] >= 4 &&
//         $pig['oeil'] >= 2 &&
//         $pig['queue'] >= 1 &&
//         $pig['oreille'] >= 2
//     ) {
//         return true;
//     }

//     return false;
// }

?>

<?php include_once __DIR__ . '/../component/footer.php' ?>