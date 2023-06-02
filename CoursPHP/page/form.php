<?php include_once __DIR__ . '/../component/header.php' ?>


<h1>Formulaire</h1>
<form method="POST" action="/page/form_treat.php">

    <label for="animal_name">
        Nom de l'animal
    </label>
    <input type="text" name="animal_name" id="animal_name"><br>

    <label for="animal_age">
        Age de l'animal
    </label>
    <input type="number" name="animal_age" id="animal_age"><br>

    <h2>Radio : </h2>
    <label for="animal_crabe">Crabe</label><br>
    <input type="radio" name="type" id="animal_crabe" value="crabe" checked><br>

    <label for="animal_raccoon">Raccoon</label><br>
    <input type="radio" name="type" id="animal_raccoon" value="raccoon"><br>

    <label for="animal_rat">Rat taupe nu</label><br>
    <input type="radio" name="type" id="animal_rat" value="rat"><br>

<div>
    <h2>Checkbox</h2>
    <div>
        <label id="pate">Paté</label>
        <input type="checkbox" value="pate" id="pate" name="food[]">
    </div>
    <div>
        <label id="croquette">Croquette</label>
        <input type="checkbox" value="croquette" id="croquette" name="food[]">
    </div>
    <div>
        <label id="autre">Autre</label>
        <input type="checkbox" value="autre" id="autre" name="food[]">
    </div>
</div>

<h2>Select simple</h2>
<div>
<label for="accessory">Accessoire:</label>

<select name="accesorry" id="accessory">
    <option value="">--Please choose an option--</option>
    <option value="laisse">Laisse</option>
    <option value="collier">Collier</option>
    <option value="jouet">Jouet</option>

</select>

</div>
<h2>Select multiple</h2>
<div>

<label for="candy">Candy:</label>
<select name="candy[]" id="candy" multiple>
    <option value="candy_1">Candy 1</option>
    <option value="candy_2">Candy 2</option>
    <option value="candy_3">Candy 3</option>
</select>

</div><br>


    <button type="submit">Envoyer</button>
</form>
<?php

?>


<?php include_once __DIR__ . '/../component/footer.php' ?>