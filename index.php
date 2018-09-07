<?php

require 'vendor/autoload.php';

use Intervention\Image\ImageManagerStatic as Image;


$mjera = array(
            10,  10,  
            50,  40, 
            240,  200,  
            60, 60,  
            20,  240,  
            40,  50   
            );


$slika = imagecreatetruecolor(300, 300);


$pozadina   = imagecolorallocate($slika, 0, 0, 255);
$boja = imagecolorallocate($slika, 255, 0, 0);
$boja1 = imagecolorallocate($slika, 255, 255, 255);



imagefilledrectangle($slika, 0, 0, 300, 300, $pozadina);


imagefilledpolygon($slika, $mjera, 6, $boja);

imageellipse($slika, 150, 150, 299, 299, $boja1);



header('Content-type: image/png');
imagepng($slika);
imagedestroy($slika);




$slika = Image::make('img/slika.jpg')->resize(350, 350)->save("img/slika-2.jpg", 100);



echo '<img src="img/slika-2.jpg" alt=""/>';

?>




