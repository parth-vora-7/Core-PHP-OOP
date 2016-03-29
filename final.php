<?php
final class mainClass { // class can't be inherited due to final keyword
    final function fun() { // this method can't be overridden due to final keyword
        echo __FUNCTION__ . ' in ' . __CLASS__;
    }
}
class subClass extends mainClass {
    function fun() {
        echo __FUNCTION__ . ' in ' . __CLASS__;
    }
}
$obj = new subClass();
$obj->fun();
?>