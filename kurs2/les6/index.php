<?php
/** LESSON 6 - ФОРМЫ и ОБРАБОТКИ ФОРМ
 * Created by PhpStorm.
 * User: user
 * Date: 11.03.17
 * Time: 20:48
 */
echo '<br/><br/>';
?>

<form action="/kurs2/les6/form6.php" method="POST">
    <span>Сколько будет 2*2?</span><br/>
    <label><input type="radio" name="q1" value="1" />2</label><br/>
    <label><input type="radio" name="q1" value="2" />4</label><br/>
    <label><input type="radio" name="q1" value="3" />6</label><br/>
    <br/><br/>

    <span>Сколько будет 11*11?</span><br/>
    <label><input type="radio" name="q1" value="1" />121</label><br/>
    <label><input type="radio" name="q1" value="2" />111</label><br/>
    <label><input type="radio" name="q1" value="3" />666</label><br/>
    <br/><br/>

    <span>Сколько будет 7*7?</span><br/>
    <label><input type="radio" name="q3" value="1" />45</label><br/>
    <label><input type="radio" name="q3" value="2" />77</label><br/>
    <label><input type="radio" name="q3" value="3" />49</label><br/>
    <br/><br/>

    <input type="submit" value="Отправить" />
</form>
















