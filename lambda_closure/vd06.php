<?php
// function demo($param)
// {
//     echo "call demo with param : $param";
// }
// $demo = function($param){
//     echo "call demo with param : $param";
// };
// call_user_func(function($param){
//      echo "call demo with param : $param";
// }, 999);

call_user_func_array(function($param1, $param2){
    echo "call demo with param : $param1 and $param2";
}, array('one', 'two'));