<?php
    //array
    //index array
            //0  1  2  3  4
    $dataA = [1, 2, 3, 4, 5];
    $dataB = array(11, 22, 33, 44, 55);
    $dataC = array("a", "b", "c", "d", "e");

    echo $dataA[2] . "&nbsp;&nbsp;&nbsp;&nbsp;";
    echo $dataB[3] . " ";
    echo $dataC[4] . " ";

    //associative array
    $faculty = ["as"=>"Art sci", "cs"=>"Computer sci", "bs"=>"Business"];
    $subject = ["th"=>"Thai", "eng"=>"English", "math"=>"Math"];

    echo "<br/>" . $faculty["as"];
    echo "<br/>" . $faculty["bs"];
    echo "<br/>" . $subject["eng"];