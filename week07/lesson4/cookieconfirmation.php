<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/form.css">
    <title>Cookie Confirmation</title>
</head>
<body>
    <div id="formBox">
        <fieldset id="box">
            <legend>Submission Successful</legend>
            <?php
            if (isset($_COOKIE["name"])){
                echo "<h2>" . $_COOKIE["name"] . " your information has been submitted.</h2>";
            } else {
                echo "<h2> Your information has been submitted.</h2>";                
            }

            if (isset($_COOKIE["email"])){
                echo "<h2>Confirmmation will be emailed to: " . $_COOKIE["email"] . "</h2>";
            } else {
                echo "<h2>You will receive confirmation through your email.</h2>";                
            }

            if (isset($_COOKIE["genre"])){
                echo "<h2>You selected a genre of " . $_COOKIE["genre"] . ".</h2>";
            }
            ?>
        </fieldset>
    </div>
</body>
</html>