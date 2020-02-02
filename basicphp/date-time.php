<?php
    date_default_timezone_set("Asia/Bangkok"); 
    $datenow = time();
    echo date("d/m/y H:i:s",$datenow);

    echo "<hr>";
    echo print_r(getDate());

    $datenow2=getDate();
    echo "<br>";
    echo $datenow2['year'];

    echo "<hr>";

    $yesterday = strtotime("yesterday");
    $tomorrow = strtotime("tomorrow");
    
    
    echo date("d-m-y",$yesterday);
    echo "<br>";
    echo date("d-m-y",$tomorrow);
    echo "<br>";

    //เช็ควันที่ว่ามีอยู่จริงหรือไม่
        if(checkdate(02,29,2020)){  //checkdateจะใช้เรียงจาก M,D,Y
            echo "date valid";
        }else{
            echo "date invalid";
        }

    echo "<hr>";


        $datetime1 = new  DateTime('2020-02-22');
        $datetime2 = new  DateTime('2020-02-29');
        $interval = $datetime1 -> diff($datetime2);
        echo $interval->format('%a');