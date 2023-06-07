<?php
if(isset($_POST['number1'])) {
    $number1 =$_POST['number1'];
    if($number1 == '' ) {
        header('Location: formEx3.php?nb1_status=error');
        exit();
    } else echo "Number1 non vide;<br>";

}

if(isset($_POST['number2'])) {
    $number2 =$_POST['number2'];
    if($number2 == '') {
        header('Location; formEx3.php?nb2_status=error');
    } else echo "Number2 non vide <br>";
}


if(isset($_POST['operation'])) {
    $operation = $_POST['operation'];
}


switch ($operation) {
    case "+":
        echo $number1 + $number2;
        break;
    case "-":
        echo $number1 - $number2;
        break;
    case "*":
        echo $number1 * $number2;
        break;
    case "/":
        echo $number1 / $number2;
        break;
    case "%":
        echo $number1 / $number2;
        break;
    default:
        echo "Pas de valeur";
}

