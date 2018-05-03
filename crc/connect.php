<?php
    global $dat;

    $dat = mysqli_connect("localhost","admin","password1","CatRockCafe");
    if (mysqli_connect_errno()){
        die("<br>Connction Failed: <br>" . mysqli_connect_errno() . "<br>" . $con->connect_error);
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        //$data = htmlspecialchars($data);
        $data = str_replace("'","''","$data");
        return $data;
    }
?>