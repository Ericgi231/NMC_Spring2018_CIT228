<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Data Types</h1>
<?php
$txt = "Woop";
$num = 40;
$bool = true;
$dec = 5.45;
$array = array(1,2,3);

function printDataType($data){
    echo "<p>";

    if (is_array($data)) {
        foreach ($data as $i){
            echo "$i, ";
        }
        echo ": Array";
    } else if (is_bool($data)){
        echo "$data: Bool";
    } else if (is_string($data)){
        echo "$data: String";
    } else if (is_int($data)){
        echo "$data: Int";
    } else if (is_double($data)){
        echo "$data: Decimal";
    }

    echo"</p>";
}

printDataType($txt);
printDataType($num);
printDataType($bool);
printDataType($dec);
printDataType($array);

?>
</body>
</html>
