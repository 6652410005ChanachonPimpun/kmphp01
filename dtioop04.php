<?php
//Inheritance
class SauA{
    public $infoA = "SAU A";
    public function showInfoA(){
        echo $this->infoA . "....<br>";   
    }
}

class SauB extends SauA{
    public $infoB = "SAU B";
}
class SauC extends SauB{
    public function showInfoB(){
        echo "Hi....<br>";
    }
}

$ob1 = new SauA(); //จะมี member 2 ตัว
$ob2 = new SauB(); //จะมี member 3 ตัว
$ob3 = new SauC(); //จะมี member 4 ตัว

$ob3->showInfoA();