<?php

/*
// Set the content-type
header('Content-Type: image/png');

// The text to draw
$text = "Of course; there are those critics - New York critics as a rule - who say; 'Well; Maya Angelou has a new book out and of course it's good but then she's a natural writer.' Those are the ones I want to grab by the throat and wrestle to the floor because it";

$text = wordwrap($text, 38, "\n");

// Create the image
$im = imagecreatetruecolor(500, 500);

// Create some colors
$white = imagecolorallocate($im, 255, 255, 255);
$grey = imagecolorallocate($im, 128, 128, 128);
imagefilledrectangle($im, 0, 0, 499, 499, $white);

// Replace path by your own font path
$font = 'raleway/Raleway-MediumItalic.ttf';

$textlength = strlen($text);
$charperline = 53;
$lines = $textlength / $charperline;

imagettftext($im, 20, 0, 20, 100, $grey, $font, $text);

// Using imagepng() results in clearer text compared with imagejpeg()
imagepng($im);
imagedestroy($im);
exit;
// */

// To add an watermark image on the image

$stamp = imagecreatefrompng('stamp.png');
$im = imagecreatefrompng('download.png');

// Set the margins for the stamp and get the height/width of the stamp image
$marge_right = 30;
$marge_bottom = 50;
$sx = imagesx($stamp);
$sy = imagesy($stamp);

// Copy the stamp image onto our photo using the margin offsets and the photo
// width to calculate positioning of the stamp.
imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));

// Output and free memory
header('Content-type: image/png');
imagepng($im);
imagedestroy($im);
