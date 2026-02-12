<?php
//access modifier: public, private
class Test03{
    public $nmuA = 1000;
    private $numB = 2000;
    protected $numC = 300;

    public function showHi(){
        echo "Hi...<br>";
    }

    private function showHello(){
        echo "Hello...<br>";
    }

    function showHey(){
        echo "Hey...<br>";
    }

    //------------------
    public function metA(){
        echo "numA: " . $this->infoA . "<br>";
        echo "numB: " . $this->infoB . "<br>";
        $this->showHi();
        $this->showHello();
        $this->showHey();
    }
}

$ob3 = new Test03();
$ob1->numA = 111;


$ob1->showHi();
// $ob1->showHello(); error เพราะเป็น private
$ob1->showHey();
$ob1->metA();