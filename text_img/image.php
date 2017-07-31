<?php

$base = new Imagick('1.jpg');
$mask = new Imagick('CwOrM.png');

$base->compositeImage($mask, Imagick::COMPOSITE_COPYOPACITY, 0, 0);
$base->writeImage('result.png');