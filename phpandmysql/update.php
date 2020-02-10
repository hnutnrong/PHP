<?php

        require 'connectdb.php';

        $pro_id=4;
        $pro_price = "9000";
        $pro_name="Off-white Hoodie size:XL";

        $q = "UPDATE product SET pro_price='$pro_price',pro_name='$pro_name' WHERE pro_id='$pro_id'";
        $result =mysqli_query($dbcon,$q);

        if($result){
            echo "แก้ไขข้อมูลเรียบร้อย";
        }else{
            echo "เกิดข้อผิดพลาด" . mysqli_errno($dbcon);
        }

        mysqli_close($dbcon);
        

        