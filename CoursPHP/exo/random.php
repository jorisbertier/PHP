<?php include_once __DIR__ . '/../component/header.php' ?>

<?php include_once __DIR__ . '/../ressources/userData.php' ?>



<?php

// EXERCICE TEST
// var_dump($_GET);


// if(isset($_GET['toto']) && isset($_GET['tata'])) {
//     $toto = $_GET['toto'];
//     $tata = $_GET['tata'];
//     echo $toto;
//     echo $tata;
// } else {
//     header('Location: /page/get.php');
//     exit();
// }

// EXERCICE 1
// if(isset($_GET['firstName']) && isset($_GET['lastName']) && isset($_GET['job']) && isset($_GET['age'])){
//     $firstName = $_GET['firstName'];
//     $lastName = $_GET['lastName'];
//     $job = $_GET['job'];
//     $age = $_GET['age'];
//     echo "Mon prénom est".$firstName." , mon nom de famille est ".$lastName." , mon métier est ".$job." , mon age est ". $age.".";
// }if(isset($_GET['lastName']) && isset($_GET['job'])) {
//     $lastName = $_GET['lastName'];
//     $job = $_GET['job'];
//     echo "Mon nom de famille est " .$lastName .  " , mon job est " . $job;
// }if (isset($_GET['firstName']) && isset($_GET['lastName'])) {
//     $firstName = $_GET['firstName'];
//     $lastName = $_GET['lastName'];
//     echo "Mon prénom est ".$firstName." , mon nom de famille est ".$lastName.".";
// }else {
//     echo "Aucun paramètres envoyés.";
    
// }

//EXERCICE 2
// if(isset($_GET['number'])) {
//     $number = $_GET['number'];
// }
// $number = str_split($number);


// $i = 0;

// foreach($number as $item) {
//     $rand = 0; 
//     while($item != $rand) {
//     $rand = rand(1,9);
//     $i++;
// }
// echo "Je recupere le numero ".$item. " et je bouble ". $i. "<br><br>";
// $i =0;
// }



//EXERICE 4


if(isset($_GET['id'])) {
    $id = $_GET['id'];
}


$i = 0;
foreach($users as $item) {

    if($item['id'] === $id){
        echo $users[$i]['id']. "<br>";
        echo $users[$i]['name']. "<br>";
        echo $users[$i]['age']. "<br>";
        echo $users[$i]['password']. "<br>";
    }

    $i++;
}


// if(isset($_GET['id']) && isset($_GET['name']) && isset($_GET['email']) && isset($_GET['age']) && isset($_GET['password']) && isset($_GET['isAdmin'])){
//     $id = $_GET['id'];
//     $name = $_GET['name'];
//     $email = $_GET['email'];
//     $age = $_GET['age'];
//     $password = $_GET['password'];
//     $isAdmin = $_GET['isAdmin'];


?>

<!-- EXERCICE TEST -->
<!-- <p><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam inventore ratione placeat consequuntur ut accusantium tenetur ab ducimus ullam obcaecati voluptas voluptatem delectus, voluptatum beatae. Amet voluptatibus quasi earum nesciunt.
Necessitatibus accusamus doloribus, eius vitae ullam incidunt dolorum animi qui in maxime quis non repellat. Temporibus, recusandae obcaecati non dolorum, quas esse, repudiandae expedita soluta quos aliquid quod adipisci ea.
Maiores nulla optio similique eius cupiditate nobis, voluptas excepturi accusamus voluptatum? At molestias obcaecati nisi aliquid. Molestias fugiat blanditiis eum iusto ipsa neque eaque, repellendus eveniet, error voluptate repudiandae excepturi!
Architecto quibusdam magnam natus nesciunt eius voluptatum nobis fuga perferendis saepe quaerat, at vitae recusandae eum molestiae delectus dolore quasi repellat assumenda inventore sint quod placeat. Fugit cumque eum molestiae!
Ipsum sapiente in praesentium nulla a aliquam obcaecati itaque quisquam possimus quidem provident quod doloremque, neque molestias ipsa modi harum ab quo nostrum? Tempora cumque nisi ex? Accusantium, sequi exercitationem?
Facere ad, soluta impedit voluptates voluptatibus nemo quia. Reiciendis totam ipsum sunt veritatis labore fuga nobis repellendus magnam debitis pariatur modi, esse suscipit eligendi consequuntur, quia placeat aut perspiciatis? Distinctio?
Sed dicta atque eum, laboriosam ducimus dolorem architecto totam amet accusantium reiciendis vero maiores ea provident repudiandae rem explicabo laborum hic eveniet odit earum voluptatum? Ea rerum dolores sequi mollitia?
Atque ea libero quisquam repellat mollitia ad enim odit minima! Tenetur hic accusantium sequi omnis at consectetur nostrum quod doloribus nihil aspernatur cum nemo modi, provident repudiandae totam consequuntur ex.
Numquam, cupiditate nihil. Mollitia temporibus doloremque accusantium debitis explicabo ducimus vel voluptatem provident! Ea ab molestias dicta ullam sunt eveniet nulla, eius nesciunt doloribus quidem fuga fugiat repellendus exercitationem voluptas.
Dignissimos molestias, magnam eaque doloremque error rerum saepe impedit hic magni eos quos cum harum doloribus laboriosam rem consectetur. Itaque possimus in ipsa quo sunt, sapiente quam corporis reprehenderit voluptatibus?
Accusamus sapiente recusandae dignissimos voluptatem, aperiam placeat quas distinctio numquam animi, dolore deserunt molestias iure minus earum quidem maxime eaque tenetur. Quas minima magni dolores doloribus corporis delectus, enim vel.
Amet minima exercitationem fuga sequi nostrum omnis alias quaerat officiis odio nihil totam sit, quis eaque? A, nobis autem. Voluptate ipsam iusto fugiat ut expedita nesciunt veritatis hic ullam blanditiis?
Repellat dignissimos illum, dolor quasi illo esse iure! Rem modi praesentium officia maxime similique vitae cum ab voluptatum accusantium velit. Fuga tenetur quos porro totam explicabo dolores sequi tempore mollitia!
Sit, mollitia officiis necessitatibus dolore inventore eius molestias unde harum distinctio quo eos voluptatem vero sapiente veritatis enim illum libero dignissimos id molestiae asperiores impedit nihil? Tempora eligendi totam pariatur.
Assumenda eveniet ad minus? Voluptates accusantium delectus ipsam non. Harum architecto nostrum blanditiis facilis repudiandae omnis! Iure ullam blanditiis eum delectus ex dicta natus quos officiis. Aspernatur, aperiam voluptas? Assumenda.
Quaerat ipsum assumenda fuga vero autem unde non quisquam beatae, ipsa numquam quod voluptatibus soluta voluptas provident repellat. Provident dignissimos, quia debitis illum dolorem quibusdam accusantium neque amet consequatur cum?
Numquam eum optio atque deserunt earum reiciendis quaerat quod quis ad impedit, id delectus, unde tempora. Eaque facere consequuntur quas ab? Praesentium neque maxime adipisci a. Saepe ab accusantium esse.
Earum nulla optio nisi placeat asperiores, totam quia at quis eius, et reprehenderit pariatur aut tempora ut, aliquid a quod perspiciatis cum nesciunt culpa dolor laborum repellat! Ratione, qui similique.
Nobis voluptas illo, laudantium deleniti pariatur reiciendis, eligendi, libero ipsum velit nulla magni cupiditate ex fugiat iusto nisi atque aliquid assumenda temporibus quasi accusantium impedit inventore nam vel voluptatum? Molestiae.
Voluptates, dolorum! Odio, reprehenderit debitis repellat nostrum dolorum aut, consequuntur maxime obcaecati beatae dolore quae numquam recusandae consequatur est temporibus maiores blanditiis officia facilis atque sit eveniet! Quasi, explicabo eos.
</p> -->


<?php include_once __DIR__ . '/../component/footer.php' ?>