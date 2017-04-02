<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 04.02.17
 * Time: 12:45
 */
var_dump (count($array));
function array_rand1() {
    $array1 = [];
        foreach(range(1, 20) as $key => $value){
            $is_array = mt_rand(0,1);
            echo "Key: $key", "Value: $value", "<br/>";
}

    $array1[] = mt_rand(1,100);
}
var_dump($array1);
