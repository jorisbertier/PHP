<?php include_once __DIR__ . '/../component/header.php' ?>

<?php 

if(isset($_GET['error'])) {

    if($_GET['error'] == "succes") {
        echo "<strong>Reussi</strong>";
    } else {
        echo "Mot incorrecte";
    }
}


?>
<h1>Formulaire</h1>
<form method="POST" action="/page/form_treat.php">

    <label for="nom">
        Nom (doit être égale à Bonjour !) :
    </label>
    <input type="text" name="nom" id="nom"><br>


    <button type="submit">Envoyer</button>
</form>
<?php

?>


<?php include_once __DIR__ . '/../component/footer.php' ?>