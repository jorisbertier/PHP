<?php include_once __DIR__ . '/../component/header.php' ?>

<?php
	$movie = [
		"Interstellar" => 15,
		"Donnie Darko" => 16,
		"L'effet papillon" => 5,
		"Pulp Fiction" => 8,
		"Star wars" => 15
	];

?>

<h1>Formulaire</h1>
<h2>Choisi un film :</h2>

<form method="POST" action="/exo/formEx5_treat.php">

    <select name="movie" id="movie">
        <?php foreach ($movie as $item => $value) : ?>
            <option value="<?= $item ?>"><?= $item." - ".$value." €"?></option>
        <?php endforeach; ?>
    </select>
    

    <label for="quantity">
        Quantité :
    </label>
    <input type="number" name="quantity" id="quantity"><br>

    <div><br>
    <h2>Livraison</h2>
    <div>
        <label id="delivery">Oui</label>
        <input type="checkbox" value="oui" id="delivery" name="delivery">
    </div>
    <div>
        <label id="delivery">Non</label>
        <input type="checkbox" value="non" id="delivery" name="delivery">
    </div>

</div>


    <button type="submit">Envoyer</button>
</form>

<?php include_once __DIR__ . '/../component/footer.php' ?>