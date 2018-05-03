<?php
    session_start();
    ob_start();
    include "../connect.php";

    $que = mysqli_query($dat,"SELECT * FROM topic");

    echo "<form action='forumtopic.php' method='POST'><table><tr><th>ID</th><th>Topic</th><th>Poster</th><th>Time Stamp</th></tr>";

    while ($newArray = mysqli_fetch_array($que, MYSQLI_ASSOC)) {
        $id = $newArray['id'];
        $topic = $newArray['title'];
        $op = $newArray['user'];
        $time = $newArray['time_stamp'];
        echo "<tr><td><input type='submit' name='topicID' value='$id'></td><td>$topic</td><td>$op</td><td>$time</td></tr>";
    }
    echo "</table></form>";

    mysqli_close($dat);
?>