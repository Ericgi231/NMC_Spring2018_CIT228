<?php 
$width = 75; 
$height = 30; 

$img = imagecreate($width, $height); 
$md5 = md5(rand(0,999)); 

$pass = substr($md5, 10, 5); 

$white = imagecolorallocate($img, 255, 255, 255); 
$black = imagecolorallocate($img, 0, 0, 0); 
$grey = imagecolorallocate($img, 204, 204, 204); 

imagefill($img, 0, 0, $white); 

imagestring($img, 10, 20, 8, $pass, $black); 

imagerectangle($img,0,0,$width-1,$height-1,$grey); 
imageline($img, 0, $height/4, $width, $height/4, $grey); 
imageline($img, $width/4, 0, $width/4, $height, $grey); 
imageline($img, 0, $height/2, $width, $height/2, $grey); 
imageline($img, $width/2, 0, $width/2, $height, $grey); 

header("Content-Type: image/jpeg"); 
imageJpeg($img); 
imagedestroy($img); 
?>