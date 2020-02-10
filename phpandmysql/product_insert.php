<?php

    require 'connectdb.php';

    // if(empty($_POST['pro_name'])){  ทำให้มีเงื่อนไขและปลอดภัยยิ่งขึ้น
    //     echo "กรุณากรอกข้อมูลสินค้า";
    //     exit();
    // }else{
    //     $pro_name = mysqli_real_escape_string($dbcon,$_POST['pro_name']);
    // }


    $pro_name = $_POST['pro_name'];
    $pro_price = $_POST['pro_price'];
    $pro_dateadd = $_POST['pro_dateadd'];
    $pro_status = $_POST['pro_status'];
    $pt_id = $_POST['pt_id'];

    $q = "INSERT INTO product (pro_name,pro_price,pro_dateadd,pro_status,pt_id) VALUES ('$pro_name','$pro_price','$pro_dateadd','$pro_status','$pt_id')";

    $result = mysqli_query($dbcon,$q);

    if($result){
        echo "เพิ่มข้อมูลเรียบร้อย";
    }else{
        echo "เกิดข้อผิดพลาด" . mysqli_errno($dbcon);
    }

    mysqli_close($dbcon);