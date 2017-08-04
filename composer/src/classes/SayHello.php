<?php 

namespace xparthxvorax\demo\classes;

use xparthxvorax\demo\classes\inc\SubClass;

class SayHello extends SubClass
{
    public static function world()
    {
        return 'Hello World, Composer!';
    }
}
