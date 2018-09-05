<?php

require 'vendor/autoload.php';

use Intervention\Image\ImageManagerStatic as Image;


$image = Image::canvas(300, 200, '#ddd');


$image->circle(100, 50, 50, function ($draw) {
    $draw->background('#0000ff');
});


$image->circle(10, 100, 100, function ($draw) {
    $draw->background('#0000ff');
    $draw->border(1, '#f00');
});


$image->circle(70, 150, 100, function ($draw) {
    $draw->border(5, '000000');
});

$image = Image::make('img/slika.jpg')->resize(300, 200)->save("img/slika-2.jpg", 100);



echo '<img src="img/slika-2.jpg" alt=""/>';

?>
