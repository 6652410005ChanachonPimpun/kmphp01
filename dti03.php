<?php
    //function
    //no parameter no return
    function showHello(){
        echo "<h1 style=\"color: red;\">Hello World</h1> ";
    }

    showHello(); //call function show
    showHello();

    //have parameter no return
    function showHao($fname, $lname){
        echo "opopopopopo" . $fname . " " . $lname;
        echo "<br/>";
    }

    showHao("abcdefg", "hijklmn");
    showHao("qrstuv", "wxyz");

    //no parameter has return
    function showReturn(){
        echo "PooP";
        return "Hello World";
    }

    echo showReturn();
    $data = showReturn();
    echo "<br/>" . $data . "tid";

    //have parameter has return
    function sum($num1, $num2){
        $sum = $num1 + $num2;
        return $sum;
    }

    echo "<br/>100 + 200 = " . sum(100, 200);

    //arrow function เขียนอยู่ในรูปแบบ expresstion function
    //arrow function ชอง php เป็น auto return
    $TT = fn() => "Hello wowowowow";
    echo "<br/>" . $TT();

    $KK = fn($nickname) => "PI" . $nickname;

    echo $KK("Kong");