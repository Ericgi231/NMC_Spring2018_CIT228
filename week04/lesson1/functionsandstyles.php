<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
function printBR($txt, $color, $size){
    echo "<span style=\"color:$color;font-size:$size;\">".$txt."</span><br>";
}

printBR("Red as a ruby.","red","15pt");
printBR("Blue as a saphire.","blue","20pt");
printBR("Purple as a garnet.","purple","25pt");
?>
</body>
</html>