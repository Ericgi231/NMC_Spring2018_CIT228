<?php
    session_start();
    
    include "../connect.php";

    mysqli_query($dat, "DELETE FROM topic WHERE id=".$_SESSION['recentTopicId']."");
    mysqli_query($dat, "SELECT * FROM post WHERE topic_id=".$_SESSION['recentTopicId']."");
?>