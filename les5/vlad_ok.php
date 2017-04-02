<?php
$array = array();
for($i=0; $i<=20; $i++) {
    $array[$i] = mt_rand(1,100);
};
foreach ($array as $value ){
    echo $value." ";
};
echo "<br><br>";

$arr2 = array();
for($i=0; $i<20; $i++) {
    $arr2[$i] = rand(1,100);
};
echo "Внутренний массив имеет вид: ";
foreach ($arr2 as $value ){
    echo $value." ";
};
echo ".";
$array[2] = $arr2;
echo "<br><br>";
foreach ($array as $value ){
    echo $value." ";
};


function array_max($array)
{
    $max = $array[1];
    foreach ($array as $value) {
        if (is_array($value)) {
            $max = array_max($value);
        } elseif ($value > $max) {
            $max = $value;
        } else {
            $max;
        }
    }
    echo "<br>";
    return $max;
}
echo "Максимальный элемент массива $max".array_max($array);
?>