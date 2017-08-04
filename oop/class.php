<?php

class A
{
	function fun()
	{
		if(isset($this)) {
			return '$this defined';
		} else {
			return '$this not defined';
		}
	}
}

class B
{
	function fun()
	{
		return A::fun();
	}
}

$a = new A;

echo $a->fun() . "<br>";
echo A::fun() . "<br>";

$b = new B;

echo $b->fun() . "<br>";
echo B::fun() . "<br>";