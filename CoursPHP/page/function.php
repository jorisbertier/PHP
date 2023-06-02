<?php include_once __DIR__ . '/../component/header.php' ?>

<h1>Les fonctions en PHP</h1>

<?php 
// penser a typer le retour de vos fonctions
function test(): void {
    echo "Bonjour";
}

test();

// =fuction avec un argument

function getCompiledInfos(string $firstName, string $lastName, int $age) : string {

return $firstName . ' ' . $lastName . ' ' . $age;
}

$truc = getCompiledInfos('Jules', 'Paul', 32);

echo $truc;

?>

<?php include_once __DIR__ . '/../component/footer.php' ?>