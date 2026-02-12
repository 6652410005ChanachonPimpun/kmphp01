<?php
//PHP OOP (Class and opject)
class Test01{
    //data-attribute=property-filed member เกี่ยวกับเก็บข้อมล
    public $dataA;
    public $dataB = "Hello...<br>";
    //method-function member เกี่ยวกับการทํางาน
    public function showWow(){
        echo "Wow...<br>";
    }

    public function showPOO(){
        echo "POO...<br>";
    }
}

//สร้าง object จาก class
$ob1 = new Test01();
$ob2 = new Test01();

//การใช้งาน data ของ object
$ob1->dataA = "Hello...<br>";
echo $ob2->dataB;

//การใช้งาน method ของ object
$ob1->showWow();
$ob2->showPOO();