<?php
session_start();
ob_start();
include "connect.php";

if (!$_SESSION['userName']) {
    header("Location: login/loginaccount.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRC - Home</title>
    <link rel="stylesheet" href="css/generic.css">  
</head>
<body>
    <header>
        <?php include "user.php"?>
        <h1>Cat Rock Cafe</h1>
    </header>
    <main>
        <a href="login/loginaccount.html" class='back'>Change User</a>
        <a href="forum/forummenu.php" class="linkButton">Official Forums</a><br><br>
        <a href="xml/save.php" class="linkButton">XML Save Addresses</a>
        <?php if($_SESSION['saved']){$_SESSION['saved']=false;echo "Saved!";} ?><br><br>
        <a href="xml/load.php" class="linkButton">XML Load Addresses</a>        
    </main>
</body>
</html>