<?php
echo "-----------1 й урок по ООП-----------</p>";
Class A
{
    public $a = 5555; // св-ва текущего класса
    public $b = 4444; // ---- // ----
    public $lesson1;
    public $sum;
//    public $lesson2;
    function __construct($a, $b)
    {
        $this->lesson1 = $a+2;
        $this->lesson2 = $b+6;
    } // // $a ;b  обязат параметры

    public function result() {
        return $this->a + $this->b;
    }
    static function stat_result($a, $b) {
            $sum = $a+$b;
            return $sum;
            $sum = new self();
                }
}

//var_dump($sum); echo '</p>' ;

//var_dump(new A); echo '</p>' ;
//var_dump(new A (1, 2)); echo '</p>' ;
//var_dump(new A(3, 5)); echo '</p>' ;
//echo '=============</p>' ;
$res1 = new A(1, 2);
$res2 = new A(3, 5);
var_dump($res1-> result()); echo '</p></p>' ;
echo '=============</p>' ;
//A::stat_result(55,33);
//print $sum;
//var_dump($res1); echo '</p></p>' ;
//var_dump($res2); echo '</p></p>' ;
//echo '=============</p>' ;

//$res1 = new A();
//$res2 = new A();
//var_dump($res1, $res2); echo '</p>' ;

//$res2->lesson1 = 123;
//$res1->a =7777;
//$res2->lesson2 = 123;
//var_dump($res1->a, $res2->b);
//var_dump($res1 == $res2); echo '</p>' ;
//var_dump($res1 === $res2); echo '</p>' ;
//var_dump($res1, $res2); echo '</p>' ;
//var_dump($res1->lesson1 =3333, $res2);
print "ПРИВЕТ ПРИВЕТ";