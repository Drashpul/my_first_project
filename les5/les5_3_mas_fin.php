<?php

function array_rand1()
{
    $array = [];
    var_dump($array);

    foreach (range(1, 10) as $key => $value) {
        $is_array = !mt_rand(0, 20);
        echo "Key: $key", "Value: $value", "<br/>";
        $array[] = $is_array ? array_rand1() : mt_rand(1, 100);
    }
    return $array;
}

function array_max($array)
{
    $max = NULL;
    foreach ($array as $value) {
        if (is_array($value)) $value = array_max($value);
        if($value > $max) $max = $value;
    }
    return $max;
}

$tmp_array = array_rand1();
echo ' ', print_r($tmp_array), ''; echo "<br>", "Max: ", array_max($tmp_array);

