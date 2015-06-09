<?php
namespace test;
class Demo
{
    public static function test()
    {
        $param = func_get_args();
        //echo "call test with $param1 , $param2";
        echo '<pre>';
        print_r($param);
        echo '</pre>';
    }
}

call_user_func_array(array('test\Demo', 'test'),array('one', 'two', 'three', 'four'));