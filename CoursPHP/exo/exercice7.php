<?php include_once __DIR__ . '/../component/header.php' ?>
<p>## Exercice 7 ##
Faites une fonction qui prend en argument une chaîne de caractères (LONGUE) Cette fonction doit afficher les 15 premiers caractères puis '...' Par exemple :
Je passe la chaîne : 'Lorem quisque class vestibulum'
La fonction doit afficher 'Lorem quisque c...'
	- Afficher la chaine de charactere longue sur votre page : 'Lorem quisque class vestibulum'
	- En dessous grace à l'appel de votre fonction, affiché le résultat voulu

</p>
<?php 

// function longueurMax(string $string) {
//   if(strlen($string) > 15) {
//     for($i= 0; $i < strlen($string); i++) {
//       $result = "";
//       if(strlen($string) < 15) {
//         return $string;
//       }else {
//         return $string .= ".";
//       }
//     }
//   }
//}


function longeurMax(string $string) {

if(strlen($string) > 15) {
    return substr($string, 0, 15) . "...";
}else {
  return $string;
}
}

echo longeurMax("Hola el mundo, como estas?")

?>

<?php include_once __DIR__ . '/../component/footer.php' ?>