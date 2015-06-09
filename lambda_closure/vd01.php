<?php
$e = "PHP nang cao";
$test = function($param, $param2, $param3 = 300) use (&$e){
    $e = "Zend Framework";
    echo "test - Param : $param, $param2, $param3, $e \n";
};
$test(100, 200, 500);
echo $e;

