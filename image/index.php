<?php

// To create an image from the text
$text = 'Donec sollicitudin molestie malesuada. Nulla porttitor accumsan tincidunt. Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta. ';

$im = imagecreate(500, 500);

// White background and blue text
$bg = imagecolorallocate($im, 255, 255, 255);
$textcolor = imagecolorallocate($im, 0, 0, 255);

// Write the string at the top left
$textlength = strlen($text);
$charperline = 50; 

imagestring($im, 5, 10, 250, $text, $textcolor);	

// Output the image
header('Content-type: image/png');

imagepng($im);
exit;
// */

// To add an watermark image on the image

$stamp = imagecreatefrompng('stamp.png');
$im = imagecreatefrompng('download.png');

// Set the margins for the stamp and get the height/width of the stamp image
$marge_right = 10;
$marge_bottom = 10;
$sx = imagesx($stamp);
$sy = imagesy($stamp);

// Copy the stamp image onto our photo using the margin offsets and the photo 
// width to calculate positioning of the stamp. 
imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));

// Output and free memory
header('Content-type: image/png');
imagepng($im);
imagedestroy($im);



