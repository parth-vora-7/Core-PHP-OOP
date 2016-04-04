<?php
namespace ns\lib1;
class a {

    private $a = __FILE__;

    function fun() {
        echo basename(__DIR__);
    }

}

?>