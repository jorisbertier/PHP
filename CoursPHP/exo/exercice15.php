<?php include_once __DIR__ . '/../component/header.php';
include_once __DIR__ . '/../functun-dump.php';

?>
<p>## Exercice 15 ##
Un jeu de Yahtzee ! Attention plûtot difficile dans l'algo (même très difficile, attention aux noeuds au cerveau) !
Faire une fonction qui simule un jeu de yatzee (https://fr.wikipedia.org/wiki/Yahtzee)
   Le Yatzee est un jeu de lancer de dé (au nombre de 5)
   Vous devrez afficher chaque lancé de dé random, on va rester simple et afficher quelque chose de ce style :
   (1) (4) (6) (2) (4)
   
   Une fois le lancé affiché, la fonction doit informer l'utilisateur de ce qu'il a fait :
   - Brelan (3 dés du même résultat)
   - Carré (4 dés du même résultat)
   - Full (3 dés du même résultat et 2 dés du même résultat)
   - Yams (5 dés du même résultat)
   - Petite suite : 4 dés se suivent (1, 2, 3, 4 ou 2, 3, 4, 5 ou 3, 4, 5, 6)
   - Grande suite : les 5 dés se suivent

	Exemple à afficher à l'utilisateur une fois les calculs terminés : 
	(2) (2) (4) (4) (4)
	Est ce une grande suite : Non
	Est ce une petite suite : Non
	Est ce que c'est un Yatzhee : Non
	Est ce que c'est un Square : Non
	Est ce que c'est un Full : Oui
	Est ce que c'est un Brelan : Oui

</p>
<?php 



function lancerDee() {

    $dee = [rand(1,6), rand(1,6), rand(1,6), rand(1,6), rand(1,6), rand(1,6)];
    
    
    if(isYams($dee)) {
        echo "C'est un Yhatzee";
    }
    if(isBrelan($dee)){
        echo "C'est un Brelan";
    }
    if(isCarre($dee)) {
        echo "C'est un carré";
    }
    

    // $isGrandeSuite = isGrandeSuite($dee);
    // if($isGrandeSuite === true){

    // }

    var_dump($dee);

}

function isGrandeSuite(array $dee): bool{

    return true;
}

function isCarre(array $dee): bool {
    return count(array_unique($dee)) === 4;
}

function isBrelan(array $dee): bool {
    return count(array_unique($dee)) === 3;

}


function isFull(array $dee): bool {
    
    return true;
}

function isPeiteSuite(array $dee): bool {


}

function isYams(array $dee): bool {
    // if($dee[0] == $dee[1] == $dee[2] == $dee[3] == $dee[4] == $dee[5]){
    //     return true;
    // }
    return count(array_unique($dee)) === 1;

}

lancerDee();

// echo $dee[rand(0,5)];

?>

<?php include_once __DIR__ . '/../component/footer.php' ?>, 