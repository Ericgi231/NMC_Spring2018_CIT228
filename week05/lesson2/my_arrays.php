<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Arrays</title>
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
    $index = array("Tabby","Siamese","Ragdoll","Calico","Maine Coon","Bengal");

    $asso = array(
        2000=>"Diablo 2", 
        2001=>"Metal Gear Solid 2", 
        2002=>"The Legend Of Zelda: Wind Waker", 
        2003=>"Beyond Good & Evil",
        2004=>"Metal Gear Solid 3",
        2005=>"Shadow of the Colossus",
        2006=>"The Elder Scrolls IV: Oblivion",
        2007=>"Bioshock"
    );

    $multi = array(
        array("Metal Gear Solid 3", "Konami", "Sneaky", 2004),
        array("Resident Evil 4", "Capcom", "Action", 2005),
        array("Night in the Woods", "Infinite Fall", "Story", 2017),
        array("Undertale", "Toby Fox", "Story", 2015),
        array("Persona 4", "Atlus", "Story", 2008),
        array("Dark Souls 1", "FromSoftware", "Action", 2011)
    );

    //functions
    //
    function printArrays($index,$asso,$multi){
        //indexed
        //
        echo "<h2 style='color:orange'>Cat Breeds - Indexed</h2>";
        printf("<pre>%-6s %-20s<br>","Index","Cat Breed");
        printf("====================================================================<br>");
        for ($n = 0; $n < count($index); $n++) {
            printf("%-6s %-20s <br>",$n ,$index[$n]);
        }
        printf("</pre>");

        //associative
        //
        echo "<h2 style='color:blue'>Games of the Years - Associative</h2>";
        printf("<pre>%-6s %-20s<br>","Year","Game");
        printf("====================================================================<br>");
        foreach ($asso as $y => $g) {
            printf("%-6s %-20s <br>",$y ,$g);
        }
        printf("</pre>");

        //multidemnsional
        //
        echo "<h2 style='color:green'>Favorite Game Info - Multidemnsional</h2>";
        printf("<pre>%-20s %-15s %-10s %-6s<br>","Game","Developer","Genre","Year");
        printf("====================================================================<br>");
        foreach ($multi as $m) {
            printf("%-20s %-15s %-10s %-6d<br>",$m[0] , $m[1], $m[2], $m[3]);
        }
        printf("</pre><br><hr><br>");
    }

    echo "<h1>Before Addition</h1>";
    printArrays($index,$asso,$multi);

    //add to index
    //
    array_push($index,"Sphynx");
    
    //add to asso
    //
    $asso[2008] = "Burnout Paradise";

    //add to multi
    //
    $multi[count($multi)+1] = array("Rainbow 6 Siege", "Ubisoft", "Shooter", 2015);

    echo "<h1>After Addition</h1>";
    printArrays($index,$asso,$multi);    
?>
</body>
</html>