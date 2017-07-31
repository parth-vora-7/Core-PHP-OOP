<?php

class baseClass {
    private $priVar = "A private variable";
    protected $proVar = "A protected variable";
    public $pubVar = "A public variable";
    static $staticVar = "A static variable";
    function basePublicMethod() {
        echo $this->priVar . '<br>' . $this->proVar . '<br>' . $this->pubVar;
    }
    static function baseStaticMethod() {
        echo 'A static method';
    }
}

class subClass extends baseClass {
    function subPublicMethod() {
        echo $this->priVar . '<br>' . $this->proVar . '<br>' . $this->pubVar;
    }
}

$baseObj = new baseClass();
$baseObj->basePublicMethod();
echo '<br><br>';
$subObj = new subClass();
$subObj->subPublicMethod();
echo '<br><br>';
echo baseClass::$staticVar;
echo '<br><br>';
echo baseClass::baseStaticMethod();



