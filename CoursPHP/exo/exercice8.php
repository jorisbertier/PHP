<?php include_once __DIR__ . '/../component/header.php' ?>
<p>## Exercice 8 ##
Faites une fonction checkPassword, dont le but est de vérifier la validité d'un mot de passe,
qui sera pris en argument Un mot de passe est considéré valide lorsqu'il fait plus de 9 caractères,
et qu'il contient au moins le caratère '@' La fonction renverra un booléen pour indiquer la validité du mot de passe.
	- Afficher sur votre page la string X que vous aller checker
	- Afficher grace au retour de votre fonction : valide OU invalide

</p>
<?php 

function checkPassword(string $password) : bool {
  if(preg_match('/^(?=.*@).{9,}$/', $password)) {
    return true;
  } else {
    return false;
  }
}



if(checkPassword("dksd@dddddd")){
  echo 'valide';
} else {
  echo 'invalide';
}
?>

<?php include_once __DIR__ . '/../component/footer.php' ?>