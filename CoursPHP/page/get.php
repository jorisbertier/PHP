<?php include_once __DIR__ . '/../component/header.php' ?>
<?php include_once __DIR__ . '/../ressources/userData.php' ?>

<h1>Le paramètre GET</h1>
<p>Le paramètre GET est ou sont passés dans l'url et commence par un: ?</p>

<h2>Exemple simple</h2>
<p>https://www.youtube.com/results?search=query=toto</p>
<i>Le paramètre search_query est passé dans l'url et il vaut toto</i>

<p>On peux envoyer plusieurs paramètres, ils ont séparé par: &</p>
<i>exemple : ?my_var=123&m_second_var=456&my_third_var=789</i>

<h2>Comment le récuperer</h2>
<p>Voir code</p>
<?php
//ecrire toto dans l'url sinon erreur
// echo '<pre>';
// var_dump($_GET);
// var_dump($_GET['toto']);
// echo '</pre>';

//vérifier si le paramètre toto à été envoyé et verifie également s'il n'est pas null
if(isset($_GET['toto'])) {
    $toto = $_GET['toto'];
}


foreach($users as $item) {
    echo '<a href="http://localhost:8080/exo/random.php?id='.$item['id'].'">'.$item['email'].'</a><br>';
}

?>
<br><br>
<a href="http://localhost:8080/exo/random.php?toto=titi&tata=kkj">lien vers random/exercice</a><br>
<a href="http://localhost:8080/exo/random.php?firstName=Jules&lastName=Pauly&job=Dev&age=32">lien vers random 2/exercice 1</a><br>
<a href="http://localhost:8080/exo/random.php?number=53841">lien vers random 3/exercice2</a>
<a href="http://localhost:8080/exo/random.php">lien vers random 3/exercice3</a>




<?php include_once __DIR__ . '/../component/footer.php' ?>