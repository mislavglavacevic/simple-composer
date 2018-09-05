<?php

require 'vendor/autoload.php';

use Intervention\Image\ImageManagerStatic as Image;

$image = Image::make('img/shape.jpg')->resize(300, 200)->save("img/shape-2.jpg", 100);

echo '<img src="img/shape-2.jpg" alt=""/>';

?>
