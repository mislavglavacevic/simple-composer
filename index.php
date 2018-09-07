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


$slika = imagecreatetruecolor(250, 250);


$pozadina   = imagecolorallocate($slika, 0, 0, 255);
$boja = imagecolorallocate($slika, 255, 0, 0);


imagefilledrectangle($slika, 0, 0, 249, 249, $pozadina);


imagefilledpolygon($slika, $mjera, 6, $boja);


header('Content-type: image/png');
imagepng($slika);
imagedestroy($slika);

$image = Image::make('img/slika.jpg')->resize(300, 200)->save("img/slika-2.jpg", 100);



echo '<img src="img/slika-2.jpg" alt=""/>';

?>
