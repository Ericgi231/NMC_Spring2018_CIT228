<?php
    session_start();
    ob_start();
    include "../connect.php";

    $userName = test_input(mysqli_real_escape_string($dat, $_POST['userName']));
    $pass = test_input(mysqli_real_escape_string($dat, $_POST['pass']));
    $fullName = test_input(mysqli_real_escape_string($dat, $_POST['fullName']));
    $email = test_input(mysqli_real_escape_string($dat, $_POST['email']));
    $phone = test_input(mysqli_real_escape_string($dat, $_POST['phone']));
    $zip = test_input(mysqli_real_escape_string($dat, $_POST['zip']));
    $address = test_input(mysqli_real_escape_string($dat, $_POST['address']));
    $city = test_input(mysqli_real_escape_string($dat, $_POST['city']));
    $state = test_input(mysqli_real_escape_string($dat, $_POST['state']));

    $fullName = explode(" ", $fullName);
    $fName = $fullName[0];
    $lName = $fullName[1];

    $query1 = mysqli_query($dat, "INSERT INTO user (user_name,pass,f_name,l_name,email,phone,zip) VALUES ('".$userName."','".$pass."','".$fName."','".$lName."','".$email."','".$phone."','".$zip."')");
    $query2 = mysqli_query($dat, "INSERT INTO address (zip,address,city,state) VALUES ('".$zip."','".$address."','".$city."','".$state."')");

    if ($query1) {
        $_SESSION['userName'] = $userName;
        header("Location: ../index.php");
    } else {
        header("Location: createaccount.html");
    }
?>