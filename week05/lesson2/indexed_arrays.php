<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Indexed Arrays</title>
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
    $salePrice = array(9.99, 15.99, 24.99, 29.99);
    $regPrice = array(15.00, 25.00, 30.00, 40.00);
    $quantity = array(1,2,3,4);
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
    for ($n=0; $n < count($quantity); $n++) { 
        printf("%4d item at $ %-6.2f each is on sale for <span style='color:green;'> $ %-6.2f </span>each<br>", $quantity[$n], $regPrice[$n], $salePrice[$n]);
    }
    printf("</span></pre>");    
?>
</body>
</html>