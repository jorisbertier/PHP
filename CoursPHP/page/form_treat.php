
<p> Post : </p>
<pre>
<?php var_dump($_POST); ?>
</pre>

<p>Get : </p>
<?php var_dump($_GET); ?>


<?php 

if(isset($_POST['nom'])) {
    $nom = $_POST['nom'];
    if($nom === "Bonjour!") {
        $succes = "Le nom est correct";
        header('Location: form2.php?error=succes');
        
    }else header('Location: form2.php?error=error');
    
}else {
    
}
echo "<br>";

?>

