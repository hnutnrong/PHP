<?php

    function showData(){
        echo "Hello world";

    }

    //Return function
    function showData2(){
        $hello = "Hello";
        $world = "World";
        return $hello.$world;
    }

    //การเรียกใช้ function
    //showData();

    //echo showData(2);
    //$a = showData(2);
    //echo $a.'<hr>' ;
    
    function Calculate($number1,$number2){
        $result = $number1+$number2;
        echo 'ผลลัพธ์ที่ได้คือ' .' '.  $result;
    }

    //Calculate(423,524);
    //echo Calculate(423,524);

    // $x=Calculate(123,123);
     //echo $x;

 

     function Calculate2($number1,$number2,$number3){
        $result = ($number1+$number2+$number3)/3;
        return $result;
    }

    //echo Calculate2(10,20,30);
    //หรือ
    //$a =Calculate2(10,20,30);
    //echo $a;

    // การใช้ return และ echo ในfunction 
     // ถ้าในfunctionเราใช้ echo เวลาแสดงผลก็พิมพ์แค่ชื่อ functionได้เลย
     // แต่ถ้าในfunction เราเป็น return 
     // เวลาแสดงผลเราต้องใส่ echo หรือตั้งตัวแปรใหม่มารับค่า

    $myname ="Nutnarong"; //global var

    function showName(){
            $myname= "Sarun";  //local var
            echo $myname;
    }

    echo $myname.'<br>'; //จะแสดงNutnarong เพราะมันไม่ได้เรียกใช้function
     showName();

     // การใช้ return และ echo ในfunction 
     // ถ้าในfunctionเราใช้ echo เวลาแสดงผลก็พิมพ์แค่ชื่อ functionได้เลย
     // แต่ถ้าในfunction เราเป็น return 
     // เวลาแสดงผลเราต้องใส่ echo หรือตั้งตัวแปรใหม่มารับค่า