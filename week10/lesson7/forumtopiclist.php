<?php
    include "connect.php";

    $que = mysqli_query($dat,"SELECT * FROM topics");

    echo "<style>table, th, td {border: 1px solid black;text-align:left;padding:5px;}</style>";
    echo "<form action='forumtopic.php' method='POST'><table><tr><th>ID</th><th>Topic</th><th>Poster</th><th>Time Stamp</th></tr>";

    while ($newArray = mysqli_fetch_array($que, MYSQLI_ASSOC)) {
        $id = $newArray['id'];
        $topic = $newArray['title'];
        $op = $newArray['original_poster'];
        $time = $newArray['time_stamp'];
        echo "<tr><td><input type='submit' name='topicID' value='$id'></td><td>$topic</td><td>$op</td><td>$time</td></tr>";
    }
    echo "</table></form>";

    mysqli_close($dat);
?>