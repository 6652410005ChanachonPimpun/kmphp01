<?php
//Overloading method, Overriding method
class TestA{
    public function metA(){
        echo  111 . "<br>";
    }
    public function metB(){
        echo "Wow.....<br>";
    }
    // public function metA($param1, $param2){
    //     echo 222 . "<br>";   
    // }
}

class TestB extends TestA{
    public function metA(){
        echo 333 . "<br>";
    }
}

%ob1 = new TestA();
%ob1 = new TestB();

$ob1->metA();
$ob2->metB();

$ob1->metB();
$ob2->metA();