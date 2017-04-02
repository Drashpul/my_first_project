<?php

//class TestClass()
//{
//    private $a;
//    private $b;
//    private $lesson1;
////    public $lesson2;
//
//    function setA($a=0, $b=0)
//    {
//        $this-> $a = $a;
//        $this-> $b = $b;
//    }
//    function setB($b){
//        $this-> b = $b;
//        return $this;
//    }
//    function __construct($a=0, $b=0)
//        {
//            $this-> $a = $a;
//            $this-> $b = $b;
//        } // // $a ;b  обязат параметры
//
//    public function result(){
//            return $this->a + $this->b;
//        }
//    public function getResult(){
//            return $this->result();
//        }
//    static function rstatic_result($a, $b) {
//            $sum =new self($a, $b);
//            return $sum->result();
//        }
//}
//
//
//$res2 = mew TestClass();
//$ =tmp_result =  $res2->setA(1);
//$ =tmp_result2 =  $tmp_result;
//$ =tmp_result2 -> setB(6);
//
//
//
//
//var_dump(new A);
//var_dump(new A (1, 2));
//var_dump(new TestClass(3, 5));
//
////$res1 = new TestClass(1, 2);
////$res2 = new TestClass(3, 5);
//$res2 = new TestClass();
//$res2 = new TestClass();
//$res1->lesson1 = 123;
//$res2->lesson2 = 123;
////var_dump($res1->a, $res2->b);
//var_dump($res1 == $res2);
//var_dump($res1 === $res2);
//var_dump($res1->lesson1, $res2);

// ===================== 2-й урок  =====================

class ParentClass{
    protected $a = 10;
    protected $b = 22;
//    public function getC(){
//        return $this->c;
//    }
//    public function getD(){
//        return $this->d;
//    }
    private function getSResult(){
        return $this->a +$this->b;
    }
}

class SomeClass extends ParentClass {
//        function setC(){
//            $this->c = c;
//            return $this;
//        }
//        function setD(){
//            $this->c = c;
//            return $this;
//        }
//        function getParentC(){
//                    return $this->c;
//        }
            function getResult(){
                 return $this->a - $this->b;
            }

}

$tmp = new SomeClass();
echo $tmp->getResult();
//echo $tmp->c;
