<?php
$_mas = [];
$_mas = [1, 87, 24, 45, 22, 12, 100, 3, 79, 54, 93, 61, 37, 82, 62, 59, 35, 67, 11, 13];
$kol = count($_mas);

//echo $_mas[];
echo "' в масиве ', $kol, ' элементов</br>'";
$_maxelem = $array[0];
$_k = 0;
echo $_mas[0];

vibor ($_maxelem, $_k);

function vibor ($_elem, $_n)
{
    if ($_n < $kol && $_elem <= $_mas[+$_n]) {
        $_maxelem = $_mas[$_n];
        echo $_n;
        echo $_mas[$_k];
        vibor ($_maxelem, $_k);

    }
    elseif ($_max < $_mas[+$_k]) {
        echo 'Максимальный Элемент =', $_max;
        echo ' СТОП';
    }
}