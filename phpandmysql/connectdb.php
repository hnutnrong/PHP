<?php
    $dbcon = mysqli_connect('localhost','root','','ecomdb') or die ('ไม่สามารถติดต่อฐานข้อมูล mySQL ได้'. mysqli_connect_error());
    //or die เป็นคำสั่งโชว์ error ว่าถ้า connect ไม่ได้เป็นเพราะอะไร
    // echo "ติดต่อฐานข้อมูลได้แล้ว";  //ทดสอบว่า connect ฐานข้อมูลได้
    mysqli_set_charset($dbcon,'utf8');