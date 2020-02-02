<?php

$str ="Hello world";
echo strlen($str); ///นับตัวอักษรว่ามีกี่ตัว

echo "<hr>";

echo strpos($str,"world"); ///หาตำแหน่งว่าคำอยู่ตำแหน่งไหน
echo "<hr>";


$str = "   username" ;
echo trim($str);  ///ไม่เอาช่องว่างเอาเฉพาะตัวอักษร
echo "<hr>";

$str2 = "<strong>PHP</strong>";
echo htmlspecialchars($str2); //โดยปกติจะไม่แสดง html ถ้าอยากให้แสดงใช้คำสั่งนี้
echo "<hr>";
echo  strip_tags($str2); //ตัด  html ออก

echo "<hr>";

$str3 = "hello,world php basic oop jquery csharp";
echo wordwrap($str3,10,"<br>"); //ขึ้นบรรทัดใหม่ทุกๆกี่ตัว

echo "<hr>";

$strnumber = "one-two-three-four";
$strnum = explode("-",$strnumber); //การตัดตัวหรือสัญลักษณ์ที่ไม่ต้องการออก
echo $strnum[0]." " .$strnum[1]." ".$strnum[2]." ".$strnum[3];

echo "<hr>";

$str = 'apple';
$strmd5 = md5($str); //การเข้ารหัสทำให้าเค้าไม่รู้ว่าเป็น apple
echo $strmd5;
    if($strmd5===md5($str)){ //เช็คว่ามันมีค่าเท่ากันหรือไม่
        echo "<br>OK" ;
    }else{
        echo "<br>Not OK";
    }
    
echo "<hr>";

$str4 = "Hello,world";
echo substr($str4,2,3) ;  ///(,2,2)เริ่มตัวที่ 2 เอาต่อจากตัวนั้นมาอีก 3ตัว

echo "<hr>";
echo rand(0,10);  //random ตัวเลข

echo "<hr>";


echo max(5,10,-30); ///หาค่ามากสุด
echo "<hr>";
echo min(1,-33,233); //หาค่าน้อยสุด
echo "<hr>";

$number = 1223;
echo number_format($number,3); //เอาเลขทศนิยมกี่จุด