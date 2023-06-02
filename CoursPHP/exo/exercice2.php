<?php include_once __DIR__ . '/../component/header.php' ?>
<p>## Exercice 2 ##
Faire une fonction qui prend en paramètre un prix HT unitaire d’un produit, et son nombre de produit.
On veut connaitre le total TTC.
	- Afficher le prix unitaire et le quantitée sur votre page, de cette manière = X HT, X Quantité
	- En dessous grace à l'appel de votre fonction, afficher le résultat de cette manière = XX euros.
</p>
<?php 



function price(float $priceHt, float $nbrProduct): int|float
{
    $priceTTC = $priceHt * 0.2 + $priceHt;
    return  $priceTTC * $nbrProduct;
    
}

echo price(10, 2) . " euros";


?>

<?php include_once __DIR__ . '/../component/footer.php' ?>