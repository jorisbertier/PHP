<?php include_once __DIR__ . '/../component/header.php' ?>
<p>## Exercice 4 ##
Faire une fonction qui prend 2 arguments en paramètres : un prix et un pourcentage.
La fonction doit renvoyer le prix augmenté avec le pourcentage.
	- Afficher les deux paramètres dans votre page sous cette forme = X euros, X pourcentage
	- En dessous grace à l'appel de votre fonction, afficher le résultat de cette manière : X euros
</p>
<?php 

function priceTotal(int $price, int $pourcentage) : int|float
{
    return ($price * ($pourcentage/100)) + $price;
}

echo priceTotal(10, 20) . " euros";

?>

<?php include_once __DIR__ . '/../component/footer.php' ?>