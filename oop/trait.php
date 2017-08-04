<?php

trait traitA 
{
    public function fun1()
    {
        return __TRAIT__;
    }
}

trait traitB
{
    public function fun2()
    {
        return __TRAIT__;
    }
}

class sub
{
    use traitA, traitB;
}

var_dump(sub::fun1(), sub::fun2());
var_dump(sub::fun1(), sub::fun2());