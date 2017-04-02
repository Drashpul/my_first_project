<?php
// - фунции замыкания
$array = range(1,100);
echo '<pre>';
var_dump($array);
echo '</pre>';
$st = function ($item) {return $item += 1; };
function my_array_map($function, $array) {
    $result = [];
    foreach($array as $key => $value) {
        $result[] = $function($value);
    }
    return $result;
}
echo '<pre>';
var_dump(my_array_map($st, $array ));

echo '</pre>';
