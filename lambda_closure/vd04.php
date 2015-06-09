<?php
$a = range(1, 5);
// $data = array();
// foreach ($a as $key => $value) {
//     $data[] = $value * 3;
// }
// echo '<pre>';
// print_r($data);
// echo '</pre>';

$data = array_map(function($i){
    return $i * 3;
}, $a);

echo '<pre>';
print_r($data);
echo '</pre>';