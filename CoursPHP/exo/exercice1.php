<?php include_once __DIR__ . '/../component/header.php' ?>
<p>## Exercice 1 ##
Créer une fonction qui à partir d'un tableau de chiffre nous donne une moyenne. Si aucune note n'est présente dans le tableau, la fonction va nous rendre 0.
	- Afficher le tableau sur votre page, sous cette forme = X, X, X, X, X, X, X.
	- En dessous grace à l'appel de votre fonction, afficher le résultat sous cette forme = résulat : X </p>
<?php 
$noteArray = [10, 5, 20, 20, 15];

function getAverageFromArray(array $array): int|float
{   
    if(empty($array)) {
        return 0;
    }
    
    $total = 0;
    foreach($array as $item) {
        $total += $item;
    }
    return round($total / count($array));
}


echo getAverageFromArray($noteArray);
?>

<?php include_once __DIR__ . '/../component/footer.php' ?>