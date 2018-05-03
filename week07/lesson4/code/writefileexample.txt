<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/form.css">
    <title>Write File</title>
</head>
<body>
    <?php
        //vars
        //
        $nameErr = $emailErr = $aliveErr = $gameErr = $genreErr = "";
        $name = $email = $alive = $comment = $genre = $game = $date = "";
        $pcSelect = $xboxSelect =$psSelect = $switchSelect = $cubeSelect = $jaguarSelect = $piSelect = $phoneSelect = $plugSelect = "";

        //clean inputs
        //
        function testInput($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        //run if subbmited
        //
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //check name
            //
            if (empty($_POST["name"])) {
                $nameErr = "Name is required";
            } 
            else {
                $name = testInput($_POST["name"]);
                $pattern= "/^[a-zA-Z ]*$/"; 
                if (preg_match($pattern,$name)!== 1) {
                $nameErr = "Only letters and white space allowed"; 
                }
            }

            //check email
            //
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } 
            else {
                $email = testInput($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                }
            }

            //check date
            //
            if (!empty($_POST["date"])) {
                $date = testInput($_POST["date"]);
            } 
            
            //check game
            //
            if (empty($_POST["game"])) {
                $gameErr = "Game name is required";
            } 
            else {
                $game = testInput($_POST["game"]);
            }

            //check genre
            //
            if (empty($_POST["genre"])) {
                $genreErr = "Genre is required";
            } 
            else {
                $genre = testInput($_POST["genre"]);
            }

            //check platform
            //
            if(!empty($_POST["platform"])){
                foreach($_POST["platform"] as $value){
                    if ($value == "pc") {
                        $pcSelect = true;
                    }
                    if ($value == "xbox") {
                        $xboxSelect = true;
                    }
                    if ($value == "playstation") {
                        $psSelect = true;
                    }
                    if ($value == "switch") {
                        $switchSelect = true;
                    }
                    if ($value == "gamecube") {
                        $cubeSelect = true;
                    }
                    if ($value == "jaguar") {
                        $jaguarSelect = true;
                    }
                    if ($value == "raspberrypi") {
                        $piSelect = true;
                    }
                    if ($value == "phone") {
                        $phoneSelect = true;
                    }
                    if ($value == "plugnplay") {
                        $plugSelect = true;
                    }
                } 
            } 

            //check alive
            //
            if (empty($_POST["alive"])) {
                $aliveErr = "Living status is required";
            } 
            else {
                $alive = testInput($_POST["alive"]);
            }

            //check comments
            //
            if (!empty($_POST["comment"])) {
                $comment = testInput($_POST["comment"]);
            } 

            //save if no errors
            //
            if ($nameErr == "" && $emailErr == "" && $aliveErr =="" && $gameErr == "" && $genreErr == ""){
                $myFile = fopen("data.txt","w") or die("File not found");
                
                $txt = $name;
                fwrite($myFile, $txt . "\n");
                $txt = $email;
                fwrite($myFile, $txt . "\n");                
                $txt = $genre;
                fwrite($myFile, $txt . "\n");                
                $txt = $game;
                fwrite($myFile, $txt . "\n");                

                fclose($myFile);

                header("Location:readfileexample.php");
            }
        }
    ?>
    <div id="formBox">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <fieldset id="box">
                <legend>Favorite Game</legend>
                <p id="req">* required fields</p>
                
                <p>
                <label class="formLabel" for="name">* Name:</label>
                <input type="text" class="formEntry" name="name" id="idName" value="<?php echo $name ?>">
                <br><span class="error"><?php echo $nameErr;?></span>
                </p>

                <p>
                <label class="formLabel" for="email">* Email:</label>
                <input type="text" class="formEntry" name="email" id="idEmail" value="<?php echo $email ?>">
                <br><span class="error"><?php echo $emailErr;?></span>
                </p>

                <p>
                <label class="formLabel" for="date">Birth Date:</label>
                <input type="date" class="formEntry" name="date" id="idDate" value="<?php echo $date ?>">
                </p>

                <p>
                <label class="formLabel" for="game">* Game Name:</label>
                <input type="text" class="formEntry" name="game" id="idGame" value="<?php echo $game ?>">
                <br><span class="error"><?php echo $gameErr;?></span>
                </p>

                <p>
                <label class="formLabel" for="genre">* Genre:</label>
                <select class="formEntry" name="genre" id="idGenre">
                    <option value="">Select One</option>                    
                    <option <?php if ($genre == "action") echo "selected";?> value="action">Action</option>
                    <option <?php if ($genre == "stealth") echo "selected";?> value="stealth">Stealth</option>
                    <option <?php if ($genre == "story") echo "selected";?> value="story">Story</option>
                    <option <?php if ($genre == "racing") echo "selected";?> value="racing">Racing</option>
                    <option <?php if ($genre == "fighter") echo "selected";?> value="fighter">Fighter</option>
                </select>
                <br><span class="error"><?php echo $genreErr;?></span>
                </p>

                <p>
                <label class="formLabel" for="platform">Prefered Platforms:</label>
                <div class="formEntry" style="background-color: #222; display: flex; flex-wrap: wrap; justify-content: space-around; margin-left:35%;">
                    <span><input type="checkbox" name="platform[]" id="pc" value="pc" <?php if ($pcSelect) echo "checked"; ?>>PC</span>
                    <span><input type="checkbox" name="platform[]" id="xbox" value="xbox" <?php if ($xboxSelect) echo "checked"; ?>>XBOX</span>
                    <span><input type="checkbox" name="platform[]" id="play" value="playstation" <?php if ($psSelect) echo "checked"; ?>>PlayStation</span>
                    <span><input type="checkbox" name="platform[]" id="switch" value="switch" <?php if ($switchSelect) echo "checked"; ?>>Switch</span>
                    <span><input type="checkbox" name="platform[]" id="cube" value="gamecube" <?php if ($cubeSelect) echo "checked"; ?>>GameCube</span>
                    <span><input type="checkbox" name="platform[]" id="jaguar" value="jaguar" <?php if ($jaguarSelect) echo "checked"; ?>>Jaguar</span>
                    <span><input type="checkbox" name="platform[]" id="pi" value="raspberry pi" <?php if ($piSelect) echo "checked"; ?>>Raspberry Pi</span>
                    <span><input type="checkbox" name="platform[]" id="phone" value="phone" <?php if ($phoneSelect) echo "checked"; ?>>Phone</span>
                    <span><input type="checkbox" name="platform[]" id="plug" value="plugnplay" <?php if ($plugSelect) echo "checked"; ?>>Plug n' Play</span>
                </div>
                </p>

                <p>
                <label class="formLabel" for="alive">* Are you alive:</label>
                <div class="formEntry" name="alive" style="background-color: #222; display: flex; flex-wrap: wrap; justify-content: space-around; margin-left:35%;">
                    <span><label for="idYes">Yes:</label>
                    <input type="radio" name="alive" id="idYes" value="yes" <?php if (isset($alive) && $alive=="yes") echo "checked";?>></span>
                    <span><label for="idNo">No:</label>
                    <input type="radio" name="alive" id="idno" value="no" <?php if (isset($alive) && $alive=="no") echo "checked";?> ></span>
                </div>
                <br><span class="error"><?php echo $aliveErr;?></span>
                </p>

                <p>
                <label class="formLabel" for="comment">Comments:</label>
                <textarea class="formEntry" name="comment" style="resize:vertical;"><?php echo $comment?></textarea>
                </p>

                <div id="butts">
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>