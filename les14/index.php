<?php

Class A
{
    public $a; // св-ва текущего класса
    public $b; // ---- // ----
    public $lesson1;
//    public $lesson2;
    function __construct($a, $b)
    {
        $this->lesson1 = $a;
        $this->lesson2 = $b;
    } // // $a ;b  обязат параметры

    public function result() {
                return $this->a + $this->b;
    }
}
var_dump(new A);
var_dump(new A (1, 2));
var_dump(new TestClass(3, 5));

//$res1 = new TestClass(1, 2);
//$res2 = new TestClass(3, 5);
$res2 = new TestClass();
$res2 = new TestClass();
$res1->lesson1 = 123;
$res2->lesson2 = 123;
//var_dump($res1->a, $res2->b);
var_dump($res1 == $res2);
var_dump($res1 === $res2);
var_dump($res1->lesson1, $res2);
