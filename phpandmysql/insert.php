<?php
    require 'connectdb.php';

    
    $pt_name = 'YeezyBoost350';


    $query = "INSERT INTO producttype (pt_id,pt_name) VALUES ('5','$pt_name')";

    $result = mysqli_query($dbcon,$query);

    if($result){
        echo "เพิ่มข้อมูลเรียบร้อยแล้ว";
    }else{
        echo "เกิดข้อผิดพลาด" . mysqli_error($dbcon);
    }