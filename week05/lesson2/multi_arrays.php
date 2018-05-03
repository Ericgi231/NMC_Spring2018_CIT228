<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multidimensional Arrays</title>
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
    $prices = array(
        array("PlanA",1,9.99,15.00),
        array("PlanB",2,15.99,25.00),
        array("PlanC",3,24.99,30.00),
        array("PlanD",4,29.99,40.00),
    );

    $plants = array(
        array("shade01","Lily-of-the-Valley"),
        array("shade02","Gibralter Azalea"),
        array("shade03","Hydrangea"),
        array("shade04","Japanese Painted Fern"),
        array("shade05","Silver Gem Appalachian Blue Violet"),
        array("shade06","Snowbele Mockorange"),
        array("sun01","Jewel of Desert Peridot Ice Plant"),
        array("sun02","Rose"),
        array("sun03","Hollyhock"),
        array("sun04","Peony"),
        array("sun05","Tutti Fruitti Hummingbird Mint"),
        array("sun06","Bergenia Dragonfly 'Sakura'"),
        array("sun07","Indian Summer Peruvian Lily"),
        array("sun08","Kaleidoscope Butterfly Bush"),
    );

    //print plants
    //
    echo "<h1 style='color:blue'>Plants & Pricing</h1>";
    echo "<h1 style='color:orange'>Plants in Stock</h1>";
    printf("<pre>%-15s %-40s<br>","Product Code","Product Name");
    printf("====================================================================<br>");
    foreach ($plants as $plant) {
        printf("%-15s %-40s <br>",$plant[0],$plant[1]);
    }
    printf("</pre>");

    //print prices
    //
    echo "<h2 style='color:green'>Price Plans</h1>";
    foreach ($prices as $p) {
        printf("For %s, the quantity is %d, the regular price is $%4.2f and the sale price is $%4.2f<br>",$p[0],$p[1],$p[2],$p[3]);
    }
?>
</body>
</html>