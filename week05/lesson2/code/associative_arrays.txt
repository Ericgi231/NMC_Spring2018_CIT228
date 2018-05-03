<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Associative Arrays</title>
    <style>
        body{
            background-color:#ffffe5;
        }
    </style>
</head>
<body>
<?php
    //vars
    //
    $salePrice = array(1=>9.99, 2=>15.99, 3=>24.99, 4=>29.99);
    $regPrice = array(1=>15.00, 2=>25.00, 3=>30.00, 4=>40.00);

    $shadePlants = array("Lily-of-the-Valley","Gibralter Azalea","Hydrangea","Japanese Painted Fern", "Silver Gem Appalachian Blue Violet", "Snowbele Mockorange");
    $sunPlants = array("Jewel of Desert Peridot Ice Plant", "Rose", "Hollyhock", "Peony", "Tutti Fruitti Hummingbird Mint", "Bergenia Dragonfly 'Sakura'", "Indian Summer Peruvian Lily", "Kaleidoscope Butterfly Bush");

    //print shade plants
    //
    echo "<h1 style='color:blue'>Shade Plants</h1>";
    foreach ($shadePlants as $plant) {
        echo $plant."<br>";
    }

    //print sun plants
    //
    echo "<hr><h1 style='color:orange'>Sun Plants</h1>";
    foreach ($sunPlants as $plant) {
        echo $plant."<br>";
    }

    //print pricing
    //
    echo "<hr><h1 style='color:green'>Quantity & Pricing</h1>";
    printf("<pre><span style='font-size:12pt;'>");
    foreach ($salePrice as $n => $price) {
        echo "A quantity of ".$n." is on sale for <span style='color:green;'>$".$price."</span> with an original price of $".$regPrice[$n]."<br>";
    }
    printf("</span></pre>");    
?>
</body>
</html>