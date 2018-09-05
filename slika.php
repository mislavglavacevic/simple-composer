<?php
 

header("Content-type: image/png"); 
 

$width = 350;
$height = 360;
 

$im = ImageCreateTrueColor($width, $height); 
 

ImageAntiAlias($im, true);
 

$white = ImageColorAllocate($im, 255, 255, 255); 
ImageFillToBorder($im, 0, 0, $white, $white);
 

$black = ImageColorAllocate($im, 0, 0, 0);
$blue = ImageColorAllocate($im, 0, 0, 255);
 

$r_width = 150;
$r_height = 100;
$r_x = 100;
$r_y = 50;
 
ImageRectangle($im, $r_x, $r_y, $r_x+$r_width, $r_y+$r_height, $black);
 

$r_width = 150;
$r_height = 100;
$r_x = 100;
$r_y = 200;
 
ImageFilledRectangle($im, $r_x, $r_y, $r_x+$r_width, $r_y+$r_height, $blue);
 

ImagePNG($im); 
 

ImageDestroy($im); 
 
?>
