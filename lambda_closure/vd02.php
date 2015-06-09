<?php
$name = "Jackie";
function demo()
{
    $name = "Bibi";
    $function = function() use (&$name){
        $name = "Kenny";
    };

    $function();
    echo $name;
}

demo();