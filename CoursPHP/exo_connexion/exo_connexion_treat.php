<?php include_once __DIR__ . '/user.php' ?>
<?php
session_start();

$user1 = new user("John doe", "10");



$users = [
    "John doe" => "123",
    "Jean" => "1234",
    "Marine" => "12",
    "Yo" => "1"
];



if (isset($_POST['connexion'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $authenticated = false;

    foreach ($users as $item => $mdp) {
        if ($name == $item && $password == $mdp) {
            $_SESSION["Autoriser"] = "oui";
            $authenticated = true;
            break;
        }
    }

    if ($authenticated) {
        echo "Vous êtes connecté";
    } else {
        header('Location: exo_connexion.php?error=error');
        exit();
    }
}


include_once __DIR__ . '/../component/footer.php'; ?>


<form action="deconnexion_treat.php" method="POST">

    <input type="submit" value="Deconnexion">
    </form>