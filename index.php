<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require 'animal.php';
    require 'frog.php';
    require 'ape.php';
    $sheep = new Animal("shaun");

    echo $sheep->name , "<br>"; // "shaun"
    echo $sheep->legs, "<br>"; // 4
    echo $sheep->cold_blooded, "<br>"; // "no"

    // NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
    $sungokong = new Ape("kera sakti");
    $sungokong->yell(); // "Auooo"

    $kodok = new Frog("buduk");
    $kodok->jump(); // "hop hop"

    echo "Name : ", $sheep->name, "<br>";
    echo "legs : ", $sheep->legs, "<br>";
    echo "cold blooded : ", $sheep->cold_blooded, "<br>";
    
    echo "Name : ", $kodok->name, "<br>";
    echo "legs : ", $kodok->legs, "<br>";
    echo "cold blooded : ", $kodok->cold_blooded, "<br>";
    echo "Jump : ", $kodok->jump();

    echo "Name : ", $sungokong->name, "<br>";
    echo "legs : ", $sungokong->legs, "<br>";
    echo "cold blooded : ", $sungokong->cold_blooded, "<br>";
    echo "Yell : ", $sungokong->yell();
    ?>
</body>
</html>