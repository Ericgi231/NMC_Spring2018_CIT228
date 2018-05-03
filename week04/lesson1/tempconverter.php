<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Celsius</th>
            <th>Fahrenheit</th>
        </tr>

<?php
for ($c = 0; $c < 50; $c+=5) {
    $f = 9/5 * ($c + 32);
    echo 
    "<tr>
        <th>$c</th>
        <th>$f</th>
    </tr>";
}
?>

    </table>
</body>
</html>