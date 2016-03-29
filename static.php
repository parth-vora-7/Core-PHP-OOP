<?php

class counter {
    private static $counter = 0;
    function __construct() {
        self::$counter++;
    }
    public static function show() {
        echo (self::$counter);
    }
}

$obj1 = new counter();
echo (counter::show());
echo '<br/>';
$obj2 = new counter();
echo (counter::show());
echo '<br/>';
$obj3 = new counter();
echo (counter::show());
echo '<br/>';

