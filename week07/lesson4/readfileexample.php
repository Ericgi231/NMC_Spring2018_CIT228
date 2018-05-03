<?php
$handle = fopen("data.txt", "r") or die("File not found");

while (!feof($handle)){
    $line = fgets($handle);
    echo $line . "<br>";
}

fclose($handle);
?>