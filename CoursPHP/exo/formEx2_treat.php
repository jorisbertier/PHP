<?php 


$isLastName = false;
if(isset($_POST['lastName'])){
    $lastName = $_POST['lastName'];
    if($lastName == "") {
        // header('Location: formEx2.php?lastName_status=error');
        // exit();
    }else $isLastName = true;
}

$isFirstName = true;
if(isset($_POST['firstName'])){
    $firstName = $_POST['firstName'];
    if($firstName == "") {
        // header('Location: formEx2.php?firstName_status=error');
        // exit();
    } else $isFirstName = true;
}

$isEmail = false;
if(isset($_POST['mail'])){
    $mail = $_POST['mail'];
    if($mail == "") {
        // header('Location: formEx2.php?mail_status=error');
        // exit();
    } else $isEmail = true;
}

$isBirth = false;
if(isset($_POST['birth'])) {
    $birth = $_POST['birth'];
    $birthDate = new DateTime($birth);
    $currentDate = new DateTime(); // Date actuelle
   
    $age = $currentDate->diff($birthDate)->y;
    echo "L'age est de ".$age;



    if(empty($birth)) {
        // header('Location: formEx2.php?birth_status=error');
        // exit();
    } else $isBirth = true;

    if($age < 18) {
        // header('Location: formEx2.php');
        // exit();
    } else echo "Majeur";

}




if(isset($_POST['password'])) {
    $password = $_POST['password'];
}
if(isset($_POST['passwordVerify'])) {
    $passwordVerify = $_POST['passwordVerify'];
}

$isPassword = false;
if($password != $passwordVerify) {
    // header('Location: formEx2.php?password_status=error');
    // exit();
} else $isPassword = true;


if(isset($_POST['langue'])) {
    $langue = $_POST['langue'];

    echo "<ul>";
    foreach($langue as $item) {
        echo "<li>".$item."</li>";
    }
    echo "</ul>";
}

$isPays = false;
if(isset($_POST['pays'])) {
    $pays = $_POST['pays'];
}


?>