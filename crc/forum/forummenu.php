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
    <title>CRC - Forum</title>
    <link rel="stylesheet" href="../css/generic.css">  
</head>
<body>
    <header>
        <?php include "../user.php"?>
        <a href="../index.php" class="back"><- Go Back</a>
        <h1>Cat Rock Cafe - Forum</h1>
    </header>
    <main>
        <a href="forumadd.php" class="linkButton">Add New Topic</a>
        <br><br><?php include "forumtopiclist.php"?>
    </main>
</body>
</html>