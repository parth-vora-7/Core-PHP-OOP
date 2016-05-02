<?php

abstract class mainClass { // must declare as abstract if there is a abstract method in class
    abstract protected function fun(); // Must be implemented into child class
}

class subClass extends mainClass {
    function fun() {
        echo 'yo';
    }
}
//$obj1 = new mainClass(); // Can't be instantiated due to abstract 
$obj2 = new subClass();

echo '<pre>';
print_r($obj2);
