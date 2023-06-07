<?php include_once __DIR__ . '/../component/header.php' ?>



<form action="/exo/formEx1_treat.php" method="post">
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

    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="msg"></textarea>
    </div><br>

    <button type="submit">Envoyer</button>
</form>

<?php

if(isset($_GET['status_mail'])) {
    $statusMail = $_GET['status_mail'];
    

        if($statusMail == 'error') {
            echo "Email invalide";
        }
}

if(isset($_GET['status_msg'])) {
    $statusMsg = $_GET['status_msg'];

        if($statusMsg == 'error') {
        echo "Mot interdit";
        }
}

if(isset($_GET['status'])) {
    $status = $_GET['status'];

    if($status == "success") {
        echo "Compte créer ";
    }
}
    

?>

<?php include_once __DIR__ . '/../component/footer.php' ?>