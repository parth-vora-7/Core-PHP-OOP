<?php
class mainClass {
    function fun() {
        echo __FUNCTION__ . ' in ' . __CLASS__;
    }
}
class subClass extends mainClass {
    function fun() {
        echo __FUNCTION__ . ' in ' . __CLASS__;
    }
}
$obj = new mainClass();
$obj->fun();
echo '<br>';
$obj = new subClass();
$obj->fun();
?>