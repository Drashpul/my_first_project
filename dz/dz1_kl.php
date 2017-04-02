<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 14.03.17
 * Time: 21:20
 */
// ---  Второй вариант
function ff($age)
{
    $messages = [
        'Вам еще рано работать',
        'Вам еще рабатать и  работать',
        'Вам пора на пенсию!',
        'Я удивлен '
    ];
    echo "---------------- <br>";
echo " Вам = $age лет  <br>";
echo $messages [$age < 18 ? 0 : ($age < 60 ? 1 : ($age < 80 ? 2 : 3))],'<br>';
}
$age = mt_rand(0,100);
ff($age);
$age = mt_rand(0,100);
ff($age);
$age = mt_rand(0,100);
ff($age);
$age = mt_rand(0,100);
ff($age);
