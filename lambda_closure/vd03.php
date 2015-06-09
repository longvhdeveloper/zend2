<?php
$e = function($a){
    if ($a % 2 == 0) {
        return "chan";
    } else {
        return "le";
    }
};
$test = function($param, $param2, $param3 = 300) use ($e){
    echo $e($param);
    echo "test - Param : $param, $param2, $param3 \n";
};
$test(100, 200, 500);