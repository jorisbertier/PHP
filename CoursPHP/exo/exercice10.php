<?php include_once __DIR__ . '/../component/header.php' ?>
<p>## Exercice 10 ##
Faire une fonction qui permet d'inverser une chaîne de caractères.
Elle prendra en paramètre une chaîne de caractère et la chaîne de caractères inversées sera retournée par la fonction.
	- Afficher la string X donnée
	- Afficher grace à l'appel de votre fonction la string X rendue
</p>
<?php 

function reverseString(string $string) : string {
	return strrev($string); 
}
echo reverseString("Salut toi");

?>

<?php include_once __DIR__ . '/../component/footer.php' ?>