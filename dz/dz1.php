<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 01.02.17
 * Time: 15:13
 */

    function ff ($abc){
        echo "---------------- <br>";
        echo " Вам = $abc лет  <br>";
        if ($abc < 18){
       echo "Вам еще рано работать";
        } elseif ($abc < 60){
           echo "Вам еще рабатать и  работать";
        } elseif ($abc < 80) {
            echo "Вам пора на пенсию";
        } else {
            echo "Я удивлен ";
        }
        echo " <br>";
    }
$abc = mt_rand (0, 100);
        ff ($abc);
$abc = mt_rand (0, 100);
        ff ($abc);
$abc = mt_rand (0, 100);
        ff ($abc);
$abc = mt_rand (0, 100);
        ff ($abc);
$abc = mt_rand (0, 100);
        ff ($abc);