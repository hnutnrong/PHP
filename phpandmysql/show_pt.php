<?php
    require 'connectdb.php';

    $q = "SELECT * from producttype";

    $result = mysqli_query($dbcon,$q);

    if($result){

        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ //ทำการดึงข้อมูลทั้งหมดออกมาโดยใช้ loop และ MYSQLI_ASSOC
                    echo "รหัสหมวดสินค้า" . " " . $row['pt_id']."<br>";
                    echo "รายละเอียดสินค้า" . " " . $row['pt_name']."<br>";
                    echo "<hr>";
                } 
                mysqli_free_result($result); //เวลาที่เราดึงข้อมูลอาจเป็นข้อมูลที่มีขนาดใหญ่

    }else{
        echo "ไม่สามารถแสดงข้อมูลได้ เกิดข้อผิดพลาด";
    }

                mysqli_close($dbcon); //ปิดการเชื่อมต่อ