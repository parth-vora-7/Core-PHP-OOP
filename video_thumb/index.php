<?php

require __DIR__ . '/vendor/autoload.php';

$ffmpeg = FFMpeg\FFMpeg::create();

$video = $ffmpeg->open('./video/small.mp4');
$frame = $video->frame(FFMpeg\Coordinate\TimeCode::fromSeconds(1));
$frame->save('./image.jpg');

var_dump(1);
