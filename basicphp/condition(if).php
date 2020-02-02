<?php
    //คำสั่งif
    $number1 = 10;
    $number2 = 10;

    if($number1 == $number2){
        echo "true";
    }else{
        echo "false";
    }
    echo "<hr>";


    //คำสั่งswitch

        $number = 4;
            switch ($number){
                case 1: echo "case 1";  break;
                case 2: echo "case 2";  break;  
                case 3: echo "case 3";  break;
            default : echo "no case";
            }