<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/form.css">
    <title>Session Confirmation</title>
</head>
<body>
    <div id="formBox">
        <fieldset id="box">
            <legend>Submission Successful</legend>
            <?php
            if (isset($_SESSION["name"])){
                echo "<h2>" . $_SESSION["name"] . " your information has been submitted.</h2>";
            } else {
                echo "<h2> Your information has been submitted.</h2>";                
            }

            if (isset($_SESSION["email"])){
                echo "<h2>Confirmmation will be emailed to: " . $_SESSION["email"] . "</h2>";
            } else {
                echo "<h2>You will receive confirmation through your email.</h2>";                
            }

            if (isset($_SESSION["genre"])){
                echo "<h2>You selected a genre of " . $_SESSION["genre"] . ".</h2>";
            }
            ?>
        </fieldset>
    </div>
</body>
</html>