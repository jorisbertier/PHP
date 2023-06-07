<?php include_once __DIR__ . '/../component/header.php' ?>

<form action="/exo/formEx3_treat.php" method="post">
    <div>
        <label for="number1">Number 1</label>
        <input type="number" id="number1" name="number1">
    </div><br>

    <div>
        <label for="number2">Number 2</label>
        <input type="number" id="number2" name="number2">
    </div><br>

    <select name="operation" id="operation">
    <option value="+">addition</option>
    <option value="*">multiplication</option>
    <option value="-">soustraction</option>
    <option value="/">division</option>
    <option value="%">modulo</option>
    </select><br>

    <button type="submit">Envoyer</button><br>
</form>

<?php include_once __DIR__ . '/../component/footer.php' ?>