<?php

require 'vendor/autoload.php';

use Intervention\Image\ImageManagerStatic as Image;

$image = Image::canvas(100, 100, '#ddd');


$image->rectangle(10, 10, 190, 190);


$image->rectangle(5, 5, 195, 195, function ($draw) {
    $draw->background('#ff0000');
});


$image->rectangle(5, 5, 195, 195, function ($draw) {
    $draw->background('rgba(255, 255, 255, 0.5)');
    $draw->border(2, '#000');
});

$image = Image::make('img/slika.jpg')->resize(300, 200)->save("img/slika-2.jpg", 100);



echo '<img src="img/slika-2.jpg" alt=""/>';

?>
