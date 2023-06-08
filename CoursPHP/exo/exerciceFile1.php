<?php include_once __DIR__ . '/../component/header.php';?>


<h2>Uploader un fichier</h2>
<?php 

var_dump($_POST);
echo "<pre>";
var_dump($_FILES);
echo "</pre>";

if(isset($_FILES["my_super_file"])) {

    $fileName = pathinfo($_FILES['my_super_file']['name'], PATHINFO_FILENAME);
    $fileType = pathinfo($_FILES['my_super_file']['name'], PATHINFO_EXTENSION);
    $fileSize = $_FILES['my_super_file']['size'];
    $safeFileName = $fileName."-". uniqid().'.'.$fileType;
    echo gettype($fileSize);
    

$isValid = true;
    if($fileType == "jpg") {
        $isValid = false;
        echo "Pas de jpg accepter<br>";
    }
    if($fileSize > 1500) {
        $isValid = false;
        echo "Au dessus de 1500 octets non accepter<br>";
    }

if($isValid == true) {

    move_uploaded_file(
        $_FILES["my_super_file"]['tmp_name'],
        __DIR__ . '/../upload/'. $safeFileName
    );
    echo "Fichier accepter";
}
    
}



?>


<form action="" method="post" enctype="multipart/form-data">
    <label for="my_file">Ajouter un fichier</label>
    <input type="file" name="my_super_file" id="my_file">

    <button type="submit">Valider</button>
</form>



<?php include_once __DIR__ . '/../component/footer.php' ?>, 