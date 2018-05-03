<?php
session_start();
ob_start();
include "../connect.php";

if (!$_SESSION['userName']) {
    header("Location: ../login/loginaccount.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRC - Forum</title>
    <link rel="stylesheet" href="../css/generic.css">  
    <script src='jquery-3.3.1.min.js'></script>
</head>
<body>
    <header>
        <?php include "../user.php"?>
        <a href="forummenu.php" class="back"><- Go Back</a>
        <h1>Cat Rock Cafe - Forum</h1>
    </header>
    <main>
        <?php
            if($_POST['topicID']){
                $topicID = test_input(mysqli_real_escape_string($dat, $_POST['topicID']));
                $_SESSION["recentTopicId"] = $topicID;
            } else {
                $topicID = $_SESSION["recentTopicId"];
            }
            
            $topicQue = mysqli_query($dat, "SELECT * FROM topic WHERE id=".$topicID."");
            $postsQue = mysqli_query($dat, "SELECT * FROM post WHERE topic_id=".$topicID."");
        
            while ($newArray = mysqli_fetch_array($topicQue, MYSQLI_ASSOC)) {
                $topicTitle = $newArray['title'];
                $txt = $newArray['txt'];
                $op = $newArray['user'];
                $time = $newArray['time_stamp'];
                
                if($op == $_SESSION['userName']){
                    echo "<button class='deletePost' style='background-color:#222;padding:10px;margin-bottom:10px;color:aliceblue;'>Delete Post</button>";
                }
                echo "<div class='post' style='border-bottom: 2px solid aliceblue;'><h2>$topicTitle</h2>";
                echo "<ul><li>$op | $time</li>";
                echo "<ul><li>$txt</li></ul></ul></div>";
            }

            echo "<ul>";

            while ($newArray = mysqli_fetch_array($postsQue, MYSQLI_ASSOC)) {
                $op = $newArray['user'];
                $time = $newArray['time_stamp'];
                $txt = $newArray['txt'];
                
                echo "<div class='post'><li>$op | $time</li>";
                echo "<ul><li>$txt</li></ul></div>";
            }

            echo "</ul>";

            mysqli_close($dat);
        ?>

        <form class="postForm" action="forumreply.php" method="POST">
            <h2>Reply to Topic</h2>
            <textarea name="replyText" id="replyText" cols="50" rows=6 max="4000" placeholder="response..."></textarea><br>
            <input style="background-color:#222;padding:10px;color:aliceblue;" type="submit" value="Reply">
        </form>
    </main>    
    <script>
    $('.deletePost').click(function() {
        $.ajax({
            type: "POST",
            url: "deletetopic.php",
        })
    });
    </script>
</body>
</html>