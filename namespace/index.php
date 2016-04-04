<?php
//namespace a;
require_once('lib1/a.php');
require_once('lib2/a.php');
//use ns\lib1 as lib1;
use ns\lib2 as lib2;

class a {
    public $a = __FILE__;
    function fun() {
        echo basename(__DIR__);
    }
}

$obj1 = new a();
print_r($obj1);
echo '<br><br>';
$obj2 = new ns\lib1\a();
print_r($obj2);
echo '<br><br>';
$obj3 = new lib2\a();
print_r($obj3);
?>