<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use xparthxvorax\demo\classes\SayHello;

echo SayHello::world();

echo "\n";

echo SayHello::subClass();

echo "\n";
