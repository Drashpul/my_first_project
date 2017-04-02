<?php
//var_dump($_GET, $_POST);
var_dump($_GET);
echo ".<br>.";
$_a = $_GET['kat1'];
$_b = $_GET['kat2'];

//$_a = 3;
//$_b = 4;

if (is_numeric($_a) && is_numeric($_b) && $_a > 0 && $_b > 0) {
    $_c = sqrt($_a * $_a + $_b * $_b);
    echo ".<br>.";
    echo "Гипонетуза=  $_c!<br />";
    echo 'катеты ' . $_a . ' и ' . $_b;
} else {
    echo " ВВЕДЕНЫ НЕКОРРЕКТНЫЕ ДАННЫЕ";

}



