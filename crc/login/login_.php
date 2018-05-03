<?php
    session_start();
    ob_start();
    include "../connect.php";

    $valid = false;
    $userName = test_input(mysqli_real_escape_string($dat, $_POST['userName']));
    $pass = test_input(mysqli_real_escape_string($dat, $_POST['pass']));

    $query = mysqli_query($dat, "SELECT * FROM user");

    while ($account = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
        $u = $account['user_name'];
        $p = $account['pass'];

        if ($userName == $u and $pass == $p) {
            $_SESSION['userName'] = $userName;
            $valid = true;
            header("Location: ../index.php");
        }
    }

    if (!$valid) {
        header("Location: loginaccount.html");        
    }
?>