<?php
    require 'connectdb.php';

    
    $pt_name = 'กระเป๋า';


    $query = "INSERT INTO producttype (pt_id,pt_name) VALUES ('','$pt_name')";

    $result = mysqli_query($dbcon,$query);

    if($result){
        echo "เพิ่มข้อมูลเรียบร้อยแล้ว";
    }else{
        echo "เกิดข้อผิดพลาด" . mysqli_errno($dbcon);
    }