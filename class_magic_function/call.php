<?php
trait TestTrait 
{
    public function getTraitName() {
        return 'This class uses trait ' . __TRAIT__;
    }
}

class Foo
{
    use TestTrait;
    
    public function __get($property)
    {
        return 'Property ' . $property . ' does not exist on class ' . __CLASS__;
    }
    
    public function __call($method, $args)
    {
        return $method . ' does not exist or not accessible on class ' . __CLASS__;
    }
}

$obj = new Foo();

echo $obj->prop1;
echo '<br/>';
echo $obj->undefinedMethod();
echo '<br/>';
echo $obj->getTraitName();

-----------
Answers:
A) Output:
PHP Notice:  Undefined property: Foo::$prop1
PHP Fatal error:  Call to undefined method Foo::undefinedMethod()
This class uses trait TestTrait

B) Output:
Property prop1 does not exist on class Foo
PHP Fatal error:  Call to undefined method Foo::undefinedMethod()

C) Output:
PHP Notice:  Undefined property: Foo::$prop1
PHP Fatal error:  Call to undefined method Foo::undefinedMethod()

D) Output: *
Property prop1 does not exist on class Foo
undefinedMethod does not exist or not accessible on class Foo
This class uses trait TestTrait

