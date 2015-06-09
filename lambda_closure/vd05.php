<?php
class Demo
{
    public $name = 'Jackie';
    public $job = "Developer";
    public $output;
    public function test($string)
    {
        $this->output = function() use ($string){
            return $this->name . ' - ' . $this->job . ' - param:' . $string ;
        };

        return $this->output();
    }

    public function __call($method, $param)
    {
        if (is_callable(array($this, $method))) {
            return call_user_func_array($this->$method, $param);
        }
    }

    public function __invoke($param)
    {
        return "call object as function with $param";
    }
}

$demo = new Demo();
echo $demo->test('Qhonline.info');
echo $demo(999);