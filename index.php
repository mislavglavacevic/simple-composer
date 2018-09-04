<?php

require 'vendor/autoload.php';

use Intervention\Image\ImageManagerStatic as Image;

$image = Image::make('img/slika.jpg')->resize(300, 200)->save("img/slika-2.jpg", 100);

echo '<img src="img/slika-2.jpg" alt=""/>';

?>
