<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 29.01.17
 * Time: 11:02
 */

$a='Васяяяяяяяяяя'; $b = 'Петя';

echo "a= $a, b= $b<br>";
echo gettype($a),'-------', gettype($b);
echo "<br>";
echo 'Русские символы занимают 2 символьных ячейки:<br>';
echo "<br>";
var_dump($a,$b);
echo "<br>";

echo 'Алгоритм обмена значений 2-х строковых переменных без дополнительной переменной<br>';
$a=$a ^ $b;
echo "a= $a, b= $b<br>";
var_dump($a,$b);
$b=$a ^ $b;
echo "a= $a, b= $b<br>";
var_dump($a,$b);
$a=$a ^ $b;
echo "a= $a, b= $b<br>";
var_dump($a,$b);

echo "<br>";
echo '222222';
?>


