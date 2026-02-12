<?php
//abstract class ไมาสามารถสร้าง object ได้
abstract class Sau01{
    public function modA(){ echo "modA...<br>"; };

    abstract public function modB();
    abstract public function modC():string;
}
//interface class ไมาสามารถสร้าง object ได้
interface Sau02{
    public function modA();    
    public function modB():int;    
}
//------
