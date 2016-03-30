<?php
//require_once 'classes/a.php';
//require_once 'classes/b.php';
//require_once 'classes/c.php';

function __autoload($class) {
    require_once ('classes/' . $class . '.php');
}


$obj1 = new a();
print_r($obj1);
echo '<br>';

$obj2 = new b();
print_r($obj2);
echo '<br>';

$obj3 = new c();
print_r($obj3);
echo '<br>';