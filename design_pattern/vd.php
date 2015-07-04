<?php
class Qhonline
{
    public static $count = 0;
    public static $instance;
    protected function __construct()
    {
        self::$count++;
        echo "Qhonline class";
    }

    public static function getInstance()
    {
        if (self::$instance === null) { 
            $qho = self::$instance = new Qhonline();
            return $qho;
        }
    }

    public function test()
    {
        echo "Test function";
    }

    protected function __clone()
    {
        
    }
}
//$qho = new Qhonline();
//$qho2 = new Qhonline();
$qho = Qhonline::getInstance();
//$qho2 = Qhonline::getInstance();
$qho2 = clone $qho;
$qho->test();
echo "<br/>" . Qhonline::$count . " call";
