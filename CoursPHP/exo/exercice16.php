
<p>Faire une fonction (avec le moins de ligne de code possible, et non vous n'avez pas le droit de tout écrire sur une seule ligne ;) qui permet de faire cette chanson :

``````
99 bottles of beer on the wall, 99 bottles of beer.
Take one down and pass it around, 98 bottles of beer on the wall.</p>

<?php include_once __DIR__ . '/../component/header.php';
include_once __DIR__ . '/../functun-dump.php';




for($i = 100; $i > 0; $i--) {
    echo $i." bottles of beer on the wall, ".$i." bottles of beer.<br>
    Take one down and pass it around, ".($i-1)." bottles of beer on the wall.<br><br>";
        if($i == 1) {
            echo "No more bottles of beer on the wall, no more bottles of beer.<br>
            Go to the store and buy some more, 99 bottles of beer on the wall.";
    }
}

?>

<?php include_once __DIR__ . '/../component/footer.php' ?>, 