<?php include_once __DIR__ . '/../component/header.php' ?>
<p>## Exercice 3 ##
Faire une fonction qui prend en paramètre une température d’un volume d’eau, on veut savoir dans quel état est l’eau (solide, liquide ou gaz) (positif : liquide, négatif : solide, au dela de 100°: gaz)
	- Afficher la température sur votre page sous cette forme = X degré
	- En dessous grace à l'appel de votre fonction, afficher le résultat de cette manière : "l'eau est dans un état solide/liquide/gaz"
</p>
<?php 

function calculVolume(float $temperature) : string
{
    if ($temperature < 0) {
        return "Liquide";
    }if ($temperature > 100) {
        return "Gaz";
    }
    else {
        return "Solide";
    }
}
echo "L'eau est dans un état ". calculVolume(110) . "<br>";
echo "L'eau est dans un état ". calculVolume(10) . "<br>";
echo "L'eau est dans un état ". calculVolume(-10) . "<br>";

?>

<?php include_once __DIR__ . '/../component/footer.php' ?>