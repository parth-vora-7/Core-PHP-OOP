<?php

class GrandFather
{
	protected $money = 50;
}

class Father extends GrandFather
{

}

class GrandChild extends Father
{
	public static $home = 'Home';

	public function getMoney()
	{
		return $this->money;
	}

	public function getHome()
	{
		return self::$home;
	}
}

var_dump((new GrandChild)->getMoney());
var_dump(GrandChild::getHome());
//var_dump(GrandChild::$home);