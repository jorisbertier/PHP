<?php
if(isset($_POST['plat'])) {
    $plat = $_POST['plat'];
    if($plat == ''){
        echo "Pas de plat selectionne";
    } else echo "Vous avez choissi ".$plat;
}

if(isset($_POST['food'])) {
    $food = $_POST['food'];
    echo '<ul>';
    if(!empty($food)) {
        foreach($food as $item) {
            echo "<li>".$item."</li>";
        }
    }echo "</ul>";
}