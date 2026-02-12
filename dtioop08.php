<?php
//final ใช้กับ class หรือ method
//static ใช้กับ data หรือ method
//const ใช้หับ data

final class Person{
    //data, method member
}

class Animal{
    //data, method member
    public function run(){ echo "วิ่งเร็วโคตร<br>"; }

    final public function eat(){ echo "กินอาหารทั่วๆ ไป<br>"; }
}

//------------------------
class Dog extends Animal{  
    //Overiding method
    public function run(){ echo "วิ่งช้าจัง<br>"; }

    // final public function eat(){ echo "กินอาหารหวานได้อย่างเดียว<br>"; }
}

// class Student extends Person{ } //error