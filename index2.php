<?php

$filename = 'ticket.png';
$im = imagecreatefrompng($filename);
$white = imagecolorallocate($im, 255, 255, 255);
$font = './Roboto-Regular.ttf';

// text, font and size to draw
$text = '#125';
$font = './Roboto-Regular.ttf';
$size = 48;

// determine the size of the text so we can center it
$box = imagettfbbox($size, 0, $font, $text);
$text_width = abs($box[2]) - abs($box[0]);
$text_height = abs($box[5]) - abs($box[3]);
$image_width = imagesx($im);
$image_height = imagesy($im);
$x = ($image_width - $text_width) / 2;
//$y = ($image_height + $text_height) / 2;
$y = 285;

// add text
imagettftext($im, $size, 0, $x, $y, $white, $font, $text);
imagepng($im, 'test.png');