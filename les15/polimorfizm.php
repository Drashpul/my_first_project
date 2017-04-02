<?php

trait MyTrait {
    public function setA($a){
        $this->a = $a;
        return $this;
        }
    public function setB($b){
            $this->b = $b;
            return $this;
            }

            public function getA($a){
                 return $this->a;
            }
            public function getB($b){
                  return $this->b;
            }

}



abstract class AbstractClass{
    public $a;
    public $b;
    function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    abstract  protected function result();
    abstract  function setA($a);
    abstract  function setB($b);
    abstract  function getA();
    abstract  function getB();

        public function getResult(){
        return $this->result();
    }
}

class ChildClass extends AbstractClass {
    use MyTrait;
    protected function result()
   {
       return $this->getA() + $this->getB();
   }
}

class ChildSecondClass extends AbstractClass{
    use MyTrait;
    protected function result()
    {
        return $this->a - $this->b;
    }

}

//$error_object = new AbstractClass(1, 2);
$first_class = new ChildClass(10, 20);
$second_class = new ChildSecondClass(15, 8);
var_dump($first_class->getResult(),$second_class->getResult());

