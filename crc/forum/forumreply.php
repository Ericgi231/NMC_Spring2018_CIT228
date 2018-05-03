<?php
    session_start();
    ob_start();
    include "../connect.php";

    $txt = test_input(mysqli_real_escape_string($dat, $_POST['replyText']));

    $com = "INSERT INTO post (topic_id,user,txt,time_stamp) VALUES ('".$_SESSION["recentTopicId"]."','".$_SESSION["userName"]."','".$txt."',NOW())";
    $que = mysqli_query($dat, $com);

    if ($que) {
        header("Location: forumtopic.php");
    } else {
        printf("Could not insert record: %s\n", mysqli_error($dat));
    }

    mysqli_close($dat);
?>