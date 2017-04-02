<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 04.02.17
 * Time: 12:35
 */
$array = range (1, 20);
var_dump (count($array));
$array1 = [];
foreach($array as $key => $value){
    echo "Key: $key", "Value: $value", "<br/>";
    $array1[] = mt_rand(1,100);
}
var_dump($array1);
