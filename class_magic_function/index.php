<?php
namespace Foo\Bar;

function fun()
{
    return 'This is function ' . __FUNCTION__ . ' (__FUNCTION__)';
}

trait TestTrait 
{
    public function getTraitName() {
        return 'This class uses trait ' . __TRAIT__ . ' (__TRAIT__)';
    }
}

class Foo
{
    use TestTrait;
    
    public function __construct() {
        echo 'Object instantiated, so constructor get called. (__construct())';
    }

    public function __get($property)
    {
        if(property_exists($this, $this->$property)) {
            return $this->$property;
        }
        return 'Property ' . $property . ' does not exist on class ' . __CLASS__
                . ' (__get())';
    }
    
    public function __set($property, $value)
    {
        if(property_exists($this, $property)) {
            $this->$property = $value;
        }
        echo 'Property ' . $property . ' does not exist or not accessible '
                . 'on class ' . __CLASS__ . ' (__set())';
    }
    
    private function getClassName()
    {
        return 'This is class ' . __CLASS__ . ' (__CLASS__)';
    }

    private function method()
    {
        return 'This is method ' . __METHOD__ . ' (__METHOD__)';
    }
    
    public function __call($method, $args)
    {
        if(method_exists($this, $method)) {
            return call_user_func(array($this, $method), $args);
        } 
        
        return $method . ' does not exist or not accessible on class ' 
                . __CLASS__ . ' (__call())';
    }
    
    public function __callStatic($method, $args)
    {
        if(method_exists(__CLASS__, $method)) {
            return call_user_func(array(__CLASS__, $method), $args);
        } 
        
        return $method . ' does not exist or not accessible on class ' 
                . __CLASS__ . ' (__callStatic())';
    }
    
    public function __destruct() {
        echo 'Object destroyed, so destructor get called. (__destruct())';
    }
}

echo '<h1>PHP magic constants and magic method examples</h1>';

$obj = new Foo();

echo '<br/>';
echo $obj->prop1;

echo '<br/>';
$obj->prop2 = '1';

echo '<br/>';
echo $obj->getClassName();

echo '<br/>';
echo $obj->method();

echo '<br/>';
echo $obj->undefinedMethod();

echo '<br/>';
echo Foo::staticMethod();

echo '<br/>';
echo $obj->getTraitName();

echo '<br/>';
echo fun();

echo '<br/>';
echo 'Current directory is ' . __DIR__ . ' (__DIR__)';

echo '<br/>';
echo 'Running file is ' . __FILE__ . ' (__FILE__)';

echo '<br/>';
echo 'This is written on line ' . __LINE__ . ' (__LINE__)';

echo '<br/>';
echo 'Current namespace is ' . __NAMESPACE__ . ' (__NAMESPACE__)';

echo '<br/>';