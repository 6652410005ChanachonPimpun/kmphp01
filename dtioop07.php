<?php
require_once("dtioop07.php");

//ใช้งาน abstract class
class Test01 extends Sau01{
    public function metB(){
        echo "Wow.....<br>";
    }
    public function metC():string{
        echo "Wow.....<br>";
        return "Hello";
    }
}

//ใช้งาน interface class
class Test02 implements Sau02{
    public function metB(){
        echo "Wow.....<br>";
    }
    public function metC():string{
        echo "Wow.....<br>";
        return "Hello";
    }
}

$ob1 = new Test01();
$ob2 = new Test02();

$ob1->metA();
