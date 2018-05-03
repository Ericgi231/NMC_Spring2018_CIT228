<?php
$img = imagecreatefromjpeg("media/cat.jpg");

$black = imagecolorallocate($img, 0,0,0);
$white = imagecolorallocate($img, 255,255,255);
$blue = imagecolorallocate($img, 0,0,255);

$txt = "oc, pls do not steal";

$font = "font/CaviarDreams.ttf";

imagettftext($img, 20, 33, 16, 180, $white, $font, $txt);
imagettftext($img, 20, 33, 15, 180, $black, $font, $txt);

header("Content-Type: image/png");
imagepng($img);
imagedestroy($img);
?>
