<?php
//constructor ทำงานทุกครั้งที่สร้าง object
//destructor ทำงานทุกครั้งที่ลบ object
class Test02{
    public $infoA;

    public function showInfoA(){
        echo "Info A มีค่าเป็น: " . $this->infoA . "<br>";
    }

    //สร้าง constructor
    public function __construct($infoA){
        $this->infoA = $infoA;
        echo "สร้าง object แล้ว<br>";
    }

    //สร้าง destructor
    public function __destruct(){
        echo "ลบ object แล้ว<br>";
    }
}

$ob1 = new Test02(100);
$ob2 = new Test02(200);

$ob1->showInfoA();
$ob2->showInfoA();