<?php
session_start();
ob_start();
include "../connect.php";

if (!$_SESSION['userName']) {
    header("Location: ../login/loginaccount.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRC - XML</title>
    <link rel="stylesheet" href="../css/generic.css">  
</head>
<body>
    <header>
        <?php include "../user.php"?>
        <a href="../index.php" class="back"><- Go Back</a>
        <h1>Cat Rock Cafe - Load</h1>
    </header>
    <main>
        <table>
            <tr>
                <th>Zip</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
            </tr>
            <?php
                $xmlList = simplexml_load_file("addresses.xml") or die("Error: Cannot find XML file.");
                foreach($xmlList->address as $a){
                    $zip = $a->zip;
                    $add = $a->add;
                    $cit = $a->cit;
                    $sta = $a->sta;

                    echo "<tr><td>".$zip."</td><td>".$add."</td><td>".$cit."</td><td>".$sta."</td></tr>";
                }
            ?>    
        </table>
    </main>
</body>
</html>