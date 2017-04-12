<?php

// Convert to square image
$author_img = imagecreateFrompng("./author-square.png");
$x = imagesx($author_img);
$y = imagesy($author_img);

$author_square_img = dirname(__FILE__) . '/author-circle.png';

$circle = imagecreatetruecolor($x, $y);
$bg = imagecolorallocate($circle, 255, 255, 255);
imagefill($circle, 0, 0, $bg);

$e = imagecolorallocate($circle, 0, 0, 0);
$r = $x <= $y ? $x : $y;

imagefilledellipse($circle, ($x/2), ($y/2), $r, $r, $e); 
imagecolortransparent($circle, $e);
imagecopymerge($author_img, $circle, 0, 0, 0, 0, $x, $y, 100);
imagecolortransparent($author_img, $bg);
imagepng($author_img, $author_square_img);
imagedestroy($author_img);
imagedestroy($circle);

// Resize image
$filename = $author_square_img;
$percent = 0.5;
list($width, $height) = getimagesize($filename);
$newwidth = $width * $percent;
$newheight = $height * $percent;
$thumb = imagecreatetruecolor($newwidth, $newheight);
$source = imagecreatefrompng($filename);
imagecopyresampled($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
imagepng($thumb, $author_square_img);
imagedestroy($thumb);

// Add watermark
$quote = imagecreateFromjpeg('./quote.jpg');
$author_square_img = imagecreatefrompng($author_square_img);
$marge_right = 800;
$marge_bottom = 500;
$sx = imagesx($author_square_img);
$sy = imagesy($author_square_img);

imagecopy($quote, $author_square_img, imagesx($quote) - $sx - $marge_right, imagesy($quote) - $sy - $marge_bottom, 0, 0, imagesx($author_square_img), imagesy($author_square_img));

header("Content-type: image/png");
imagepng($quote);


