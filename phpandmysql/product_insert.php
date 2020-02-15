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
    
    ///upload image
    $ext = pathinfo(basename($_FILES['pro_image']['name']),PATHINFO_EXTENSION);
    $new_image_name = 'img_' . uniqid() . "." . $ext; //ชื่อไฟล์ใหม่
    $image_path = "Users/MyDevelops/PHP/phpandmysql/images/";
    $upload_path = $image_path . $new_image_name;

    //uploading
    $success = move_uploaded_file($_FILES['pro_image']['tmp_name'],$upload_path);
        if($success==FALSE){
            echo "ไม่สามารถ upload รูปภาพได้";
            exit();
        }

     $pro_image = $new_image_name;


    $q = "INSERT INTO product (pro_name,pro_price,pro_dateadd,pro_status,pt_id,pro_image) VALUES ('$pro_name','$pro_price','$pro_dateadd','$pro_status','$pt_id','$pro_image')";

    $result = mysqli_query($dbcon,$q);

    if($result){
        echo "เพิ่มข้อมูลเรียบร้อย";
    }else{
        echo "เกิดข้อผิดพลาด" . mysqli_errno($dbcon);
    }

    mysqli_close($dbcon);