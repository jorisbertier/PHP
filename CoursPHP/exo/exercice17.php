<?php include_once __DIR__ . '/../component/header.php' ?>
<!-- ### 1.
Faire une fonction qui prend en paramètre un âge,
 et doit renvoyer l'année de naissance en fonction de l'âge.


### 2.
Faire une fonction qui à partir d'un tableau en calcule la moyenne.
Tester votre fonction à partir de ce tableau [ 12, 15, 19, 2, 14].


### 3.
Faire une fonction qui prend en paramètre un prix HT unitaire d’un produit, et son nombre de produit.
On veut connaitre le total TTC arrondi à 2 chiffres après la virgule.


### 4.
Faire une fonction qui prend en paramètre une température d’un volume d’eau, on veut savoir dans quel état est l’eau (solide, liquide ou gaz) (positif : liquide,
 négatif : solide, au dela de 100°: gaz)


### 5.
On souhaite stocker les notes d'étudiants, vous utiliserez un tableau associatif pour ça

Données :

Albert : 12, 8, 9, 7, 13
Michel : 14, 13, 12, 11, 10
Vincent : 17, 16, 15, 18, 13
Faite une fonction qui prend en paramètre un tableau de note et permet de calculer la moyenne de l'étudiant


### 6.
Faire une fonction qui prend 2 arguments en paramètres : un prix et un pourcentage.

La fonction doit renvoyer le prix augmenté avec le pourcentage


### 7.

Écrivez une fonction pour supprimer les doublons d’un tableau : Exemple : [1, 2, 3, 3, 3, 4, 5, 5] Résultat attendu : [1, 2, 3, 4, 5] -->
<?php 

// function dateBirth (int $age) : int {
//     return $dateBirthday = date("Y")- $age;
// }

// echo dateBirth(50);

// $note = [12, 15, 19, 2, 14];

// function averageNote (array $note) : float {
//     $total = 0;
//     foreach($note as $item) {
//         $total += $item;
//     }
//     return $total / count($note);
// }

// echo averageNote($note);

// function totalPrice(int $quantityProduct, float $priceHT) : float|int {
//         return (($priceHT*0.2)+$priceHT )* $quantityProduct;

// }
// echo totalPrice(2, 10);

function stateWater (int $degree) : int {
   if($degree > 100) {
    return "Gaz";
   }elseif($degree < 0) {
    return "Liquide";
   } else return "Solide";
}

echo stateWater(100);
echo stateWater(500);
echo stateWater(-10);
?>
<?php include_once __DIR__ . '/../component/footer.php' ?>, 