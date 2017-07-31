<?php

$var1 = "Hello World";
$var2 = "Hello";

if(($place = strpos($var1, $var2)) != false) {
  echo 'Substring found at position: ' . $place;
} else {
  echo 'Substring not found';
}


