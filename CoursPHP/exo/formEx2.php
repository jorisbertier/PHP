<?php include_once __DIR__ . '/../component/header.php' ?>



<form action="/exo/formEx2_treat.php" method="post">
    <div>
        <label for="lastName">Nom :</label>
        <input type="text" id="lastName" name="lastName">
    </div><br>
    <div>
        <label for="firstName">Prenom :</label>
        <input type="text" id="firstName" name="firstName">
    </div><br>
    <div>
        <label for="mail">e-mail :</label>
        <input type="email" id="mail" name="mail">
    </div><br>
    <div>
        <label for="birth">Date de naissance :</label>
        <input type="date" id="birth" name="birth">
    </div>

    <h2>Radio : </h2>
    <label for="male">homme</label><br>
    <input type="radio" name="type" id="male" value="male" checked><br>

    <label for="female">femme</label><br>
    <input type="radio" name="type" id="female" value="female"><br>


    <div>
    <label for="password">Password :</label>
    <input type="password" id="password" name="password">
</div>
    <div>
    <label for="passwordVerify">Password :</label>
    <input type="password" id="passwordVerify" name="passwordVerify">
</div>

<div>
    <h2>Checkbox</h2>
    <div>
        <label id="anglais">Anglais</label>
        <input type="checkbox" value="anglais" id="anglais" name="langue[]">
    </div>
    <div>
        <label id="francais">Français</label>
        <input type="checkbox" value="francais" id="francais" name="langue[]">
    </div>
    <div>
        <label id="espagnol">Espagnol</label>
        <input type="checkbox" value="espagnol" id="espagnol" name="langue[]">
    </div>
</div>

<h2>Select simple</h2>
<div>
<label for="pays">Choisi un pays :</label>

<select name="pays" id="pays">
    <option value="france">France</option>
    <option value="state">Etats-unis</option>
    <option value="espagne">Espagne</option>
    <option value="angleterre">Royaume-unis</option>

</select>

</div>

    <button type="submit">Envoyer</button><br>
</form>

<?php
if(isset($_GET['lastName_status'])) {
    $lastName = $_GET['lastName_status'];
    if($lastName == "error") {
        echo "Champs nom vide";
    }
    
    
}

if(isset($_GET['firstName_status'])) {
    $firstName = $_GET['firstName_status'];
    if($firstName == "error") {
        echo "Champs prenom vide";
    }
}

if(isset($_GET['mail_status'])) {
    $mail = $_GET['mail_status'];
    if($mail == "error") {
        echo "Email vide";
    }
}

if(isset($_GET['birth_status'])) {
    $birth = $_GET['birth_status'];
    if($birth == "error") {
        echo "Date de naissance non rempli";
    }
}


?>

<?php include_once __DIR__ . '/../component/footer.php' ?>