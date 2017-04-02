<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 01.02.17
 * Time: 21:17
 */
//var_dump($_GET, $_POST);
//var_dump($_GET);
$name = $_GET['name'];
$city = $_GET['city'];
echo " <br> ";

echo "Здравствуйте, $name!<br />";
echo 'Вы любите ' .$city;

