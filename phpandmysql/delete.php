<?php

        require 'connectdb.php';

        $pro_id=3;

        $q= "DELETE FROM product WHERE pro_id='$pro_id'";
        $result=mysqli_query($dbcon,$q);

        if($result){
            echo "ลบข้อมูลแล้ว";
        }else{
            echo "เกิดข้อผิดพลาด" . mysqli_errno($dbcon);
        } 
        mysqli_close($dbcon);
