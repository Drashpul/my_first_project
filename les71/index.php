<?php
//$abc =function(){};
//
//
//var_dump($abc());
//-------

$abc =function($arg){ return $arg += 1; };


//var_dump($abc());
//echo "<br>";
//var_dump($abc);
//echo "<br>";
//
array_map(functiom($item),range(0,100));

$array = range(1,100);
var_dump($array);
echo '.<br>';
$array = array_map(functiom($item) {$item +=1}, $array);
var_dump($array);