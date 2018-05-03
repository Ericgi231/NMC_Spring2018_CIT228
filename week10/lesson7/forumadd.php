<?php
    include "connect.php";

    $title = test_input(mysqli_real_escape_string($dat, $_POST['title']));
    $op = test_input(mysqli_real_escape_string($dat, $_POST['uName']));

    $com = "INSERT INTO topics (title,original_poster,time_stamp) VALUES ('".$title."','".$op."',NOW())";
    $que = mysqli_query($dat, $com);

    if ($que) {
        header("Location: forummenu.php");
    } else {
        printf("Could not insert record: %s\n", mysqli_error($dat));
    }

    mysqli_close($dat);
?>