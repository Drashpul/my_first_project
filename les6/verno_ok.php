<form>
    Катет 1: <input value="<?= $_GET['kat1'] ?>" name="kat1" type="text">
    Катет 2: <input value="<?= $_GET['kat2'] ?>" name="kat2" type="text">
    <input type="submit" value="Подсчитать" >
</form>

<?php

//ini_set('display_errors', 1);

//var_dump((float)$_GET['kat1']);

function get_message($i, $key){
    $messages = [
        "Элемент: $key не должен быть пустым",
        "Элемент: $key должен быть числом",
        "Элемент: $key должен быть положительным"
    ];
    return $messages[$i];
}

function validator($params){
    $errors = [];
    foreach($params as $param){
        $value = $_GET[$param];
        $fail = (!empty($value) ? (is_numeric($value) ?
            ($value > 0 ? false : get_message(2, $param)):
            get_message(1, $param)) :
            get_message(0, $param)
        );
//        (...) ? true : ((...) ? true : (......));
        if($fail) $errors[] = $fail;
    }
    return ['result' => !count($errors), 'messages' => $errors];
}

$fields = ['kat1', 'kat2'];

$a = $_GET['kat1'];
$b = $_GET['kat2'];

$result = validator($fields);

if($result['result']){
    echo sqrt($a*$a + $b*$b);
}else{
    foreach($result['messages'] as $message){
        echo $message, '<br/>';
    }
}

//echo get_message(1, 'tttttttt');
