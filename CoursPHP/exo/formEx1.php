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

if(isset($_GET['status']) && isset($_GET['status_msg'])) {
    $status = $_GET['status'];
    $statusMsg = $_GET['status_msg'];
        if($status !== 'success' && $statusMsg !== 'success') {
            echo 'Mail et mot invalide';
        }
        elseif($status !== 'success') {
            echo "Email invalide";
        }elseif($statusMsg !== 'success') {
            echo "Mot interdit";
        }else{
            echo "compte créée";
        }
}

?>

<?php include_once __DIR__ . '/../component/footer.php' ?>