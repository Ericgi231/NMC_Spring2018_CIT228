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
        <a href="forummenu.php" class="back"><- Go Back</a>
        <h1>Cat Rock Cafe - Forum</h1>
    </header>
    <main>
        <form class="postForm" action="forumadd_.php" method="POST">
            <h2>New Topic</h2>
            <input style="color:aliceblue;background-color:#222;padding:10px;margin:10px;border:none;border-bottom:2px solid aliceblue;width:80%;" type="text" name="title" id="title" placeholder="title..."><br>
            <textarea name="txt" id="txt" cols="50" rows="6" placeholder="body text..."></textarea><br>
            <input style="background-color:#222;padding:10px;color:aliceblue;border:2px solid aliceblue;" type="submit" value="Post!">
        </form>
    </main>
</body>
</html>