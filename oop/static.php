<?php

class counter {
    private static $counter1 = 0;
    protected $counter2 = 0;
    function __construct() {
        self::$counter1++;
    }
    public static function showCounter1() {
        return self::$counter1;
    }
    public function showCounter2() {
        return $this->counter2;
    }
}

$obj1 = new counter();
$obj2 = new counter();
$obj3 = new counter();

/*echo "counter1: " . $obj1->showCounter1();
echo "\n";
echo "counter2: " . $obj1->showCounter2();
echo "\n";*/

class A 
{
    private $var1 = 'var1';
    public static $var2 = 'var2';

    public static function fun()
    {
        return self::$var2;
    }
}

$obj = new A;

var_dump(A::$var2);


