<?php include_once __DIR__ . '/../component/header.php' ?>

<form action="/exo/formEx4_treat.php" method="post">

    <h2>Choississez votre plat :</h2>
    <select name="plat" id="plat">
    <option value="pizza">Pizza</option>
    <option value="burger">Burger</option>
    <option value="pates">Pasta</option>
    <option value="salade">Salade</option>
    </select><br>

    <div>
    <h2>Choississez vos supplements</h2>
    <div>
        <label id="fromage">fromage</label>
        <input type="checkbox" value="fromage" id="fromage" name="food[]">
    </div>
    <div>
        <label id="reblochon">Reblochon</label>
        <input type="checkbox" value="reblochon" id="reblochon" name="food[]">
    </div>
    <div>
        <label id="piment">piment</label>
        <input type="checkbox" value="piment" id="piment" name="food[]">
    </div>
    <div>
        <label id="champignons">champignons</label>
        <input type="checkbox" value="champignons" id="champignons" name="food[]">
    </div>
</div>

    <button type="submit">Envoyer</button><br>
</form>

<?php include_once __DIR__ . '/../component/footer.php' ?>