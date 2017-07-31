<?php

require_once("vendor/autoload.php");

\Tinify\setKey("ylDeTGl02pU_2RIUx78nA6sEsiOX1jNd");

define('IMG_SOURCE_DIR_PATH', 'source_img');
define('IMG_COMPRESSED_DIR_PATH', 'compressed_img');

$source_img_dir = scandir(IMG_SOURCE_DIR_PATH);

foreach ($source_img_dir as $file) {
	$source_file = IMG_SOURCE_DIR_PATH . '/' . $file;
	$compressed_file = IMG_COMPRESSED_DIR_PATH . '/' . $file;
	if(is_file($source_file) && !file_exists($compressed_file) && checkImageType($source_file))
	{
		$source = \Tinify\fromFile($source_file);
		$source->toFile($compressed_file);
	}
}

function checkImageType($imgfile) {
	if(in_array(exif_imagetype($imgfile), [2, 3])) {
		return true;
	} 
	return false;
}