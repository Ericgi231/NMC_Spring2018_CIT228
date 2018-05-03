<?php
    session_start();
    include "connect.php";

    $op = test_input(mysqli_real_escape_string($dat, $_POST['replyName']));
    $txt = test_input(mysqli_real_escape_string($dat, $_POST['replyText']));

    $com = "INSERT INTO posts (topic,original_poster,txt,time_stamp) VALUES ('".$_SESSION["recentTopicId"]."','".$op."','".$txt."',NOW())";
    $que = mysqli_query($dat, $com);

    if ($que) {
        header("Location: forumtopic.php");
    } else {
        printf("Could not insert record: %s\n", mysqli_error($dat));
    }

    mysqli_close($dat);
?>