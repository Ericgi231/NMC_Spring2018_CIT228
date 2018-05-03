<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Compare Numbers</h1>    
<?php
$num1 = 15;
$num2 = 18;

function testCompare($i, $n){
    echo "<p>$i = $n: ";
    if ($i == $n){
        echo "True";
    } else {
        echo "False";
    }
    echo "</p>";

    echo "<p>$i < $n: ";
    if ($i < $n){
        echo "True";
    } else {
        echo "False";
    }
    echo "</p>";
    
    echo "<p>$i > $n: ";
    if ($i > $n){
        echo "True";
    } else {
        echo "False";
    }
    echo "</p>";
    
    echo "<p>$i <= $n: ";
    if ($i <= $n){
        echo "True";
    } else {
        echo "False";
    }
    echo "</p><br>";    
}

testCompare($num1, $num2);
$num1 = 25;
$num2 = 25;
testCompare($num1, $num2);
?>
</body>
</html>