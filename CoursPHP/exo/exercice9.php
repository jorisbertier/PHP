<?php include_once __DIR__ . '/../component/header.php' ?>
<p>## Exercice 9 ##
Faire une fonction qui ajoute derrière chaque voyelle d'une chaine de caractères 'fe' et répète ensuite la voyelle
Par exemple :
Chat donne : chafeat
	- Afficher la string X donnée
	- Afficher grace à l'appel de votre fonction la string X rendue

</p>
<?php 



// $txt = "Il est l'heure de manger la soupe";
// $tab = "aeiouy";
// $tab = str_split($tab);
// $tot = 0;


// foreach($tab as $voyelle){
//  $tot += substr_count(strtolower($txt), $voyelle);
// }
// echo $tot.' voyelles';  // Affiche le total si tu veux, sinon autre chose

//EXO 9
$word = 'chat';
$voyelle = ['a', 'e', 'i', 'o', 'u', 'y'];

echo '<br>';
function returnCompiledWord(string $myWord, array $voyelle): string
{
    $strTab = str_split($myWord);

    $newString = '';

    foreach ($strTab as $value) {
        if (in_array($value, $voyelle)) {
            $newString .= $value . "fe";
        }
        $newString.= $value;
    }

    return $newString;
}

echo returnCompiledWord($word, $voyelle);

?>

<?php include_once __DIR__ . '/../component/footer.php' ?>