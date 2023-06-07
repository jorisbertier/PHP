<?php

// REG EX
$email = "example@example.com";
$pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";



$isMailOk = false;
if(isset($_POST['mail'])) {
    $mail = $_POST['mail'];
    if(preg_match($pattern, $mail)) {
        $isMailOk = true;
    } else {
        header('Location: formEx1.php?status_mail=error');
        exit();
    }
}


$isBanOk = false;
$mot=['salut', 'tkt', 'lazy', 'lol'];
if(isset($_POST['msg'])) {
    $msg= $_POST['msg'];
    foreach($mot as $item) {
        if(strpos($msg, $item) !== false) {
           header('Location: formEx1.php?status_msg=error');
           exit();
        }else {
            $isBanOk = true;
        }
    }
    
}

if($isBanOk = true && $isMailOk = true){
    header('Location: formEx1.php?status_msg=success&status=success');
    exit();
}

?>