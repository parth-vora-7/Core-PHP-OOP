<?php

interface InterfaceA 
{
	const VAR_A = 'A';
	function funA();
}

interface InterfaceB extends InterfaceA
{
	function funA();
}

interface InterfaceC
{
	function funA();
	function funC();
}

class ClassA implements InterfaceB, InterfaceC
{
	function funA() { 
		return InterfaceA::VAR_A;
	}
	function funB() {}
	function funC() {}
}

$obj = new ClassA;
var_dump($obj->funA());