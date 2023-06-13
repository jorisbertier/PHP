<?php include_once __DIR__ . '/../component/header.php' ?>


<form action="exo_connexion_treat.php" method="POST">
    <label for="name">Pseudo</label>
    <input type="name" id="name" name="name"><br><br>

    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password"><br><br>
    <?php
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        echo "Le user n'existe pas ou le mot de passe est incorrecte";
    }
    ?><br><br>

    <input type="submit" name="connexion" value="Connexion">
</form>

<?php include_once __DIR__ . '/../component/footer.php' ?>