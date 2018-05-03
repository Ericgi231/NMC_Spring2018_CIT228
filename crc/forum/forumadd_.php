<?php
    session_start();
    ob_start();
    include "../connect.php";

    $title = test_input(mysqli_real_escape_string($dat, $_POST['title']));
    $txt = test_input(mysqli_real_escape_string($dat, $_POST['txt']));

    $com = "INSERT INTO topic (title,txt,user,time_stamp) VALUES ('".$title."','".$txt."','".$_SESSION["userName"]."',NOW())";
    $que = mysqli_query($dat, $com);

    if ($que) {
        header("Location: forummenu.php");
    } else {
        printf("Could not insert record: %s\n", mysqli_error($dat));
    }

    mysqli_close($dat);
?>