<form>
    катет1 <input  name="kat1"<?= > type="text">
    катет2 <input  name="kat2" type="text">
    <input  value="Подcчитать" type="submit">
<!--    // для вывода кнопки (Value - текст кнопки)-->
</form>

<?php

ini_set('display_errors', 1);
var_dump((float) $_GET['kat1']);
function get_message($i, $key){
    $messages =    [
        "Элемент: $key не должен быть пустым",
      "Элемент: $key  должен быть числом",
      "Элемент: $key  должен быть положительным",
   ];
   return $messages[$i];
}

function validator($params){
    $errors = [];
    foreach($params as $param){
        $value = $_GET[$param];
        $fail = (!empty($value) ? (is_numeric($value) ?
            ($value > 0 ? false : get_message(2, $param)) :
            get_message(1, $param)) :
            get_message(0, $param)
        );
        if ($fail) $errors[] = $fail;
    }
    return [ 'result' => !count ($errors), 'messages' => $errors];

}
//    echo get_message(1, 'tttttt');
$fields = ['kat1', 'kat2'];
    echo 'pre';// otkrit teg
print_r(validator($fields));
echo '/pre'; // zakrit teg
