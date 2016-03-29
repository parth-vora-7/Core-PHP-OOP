<?php
class overload {
    var $con;
    function __call($method, $params) {
        if($method == "fun") {
           $this->con = 1;
            $no_of_params = count($params);
            switch($no_of_params)
            {
                case 1:
                    echo "__call with 1 arg";
                    break;
                case 2:
                    echo "__call with 2 arg";
                    break;
                default:
                   throw new exception("Bad argument");
            }
        } else {
            throw new exception("Function $method does not exists ");  
        }        
    }
}

$obj = new overload();
$obj->fun(1,2);

?>