<?php

    require 'connectdb.php';

    $pro_id  = $_GET['pro_id'];
    $q = "DELETE FROM product WHERE pro_id='$pro_id'";

    $result = mysqli_query($dbcon, $q);

    if($result){
        header("Location: show_product.php");
    }else{
        echo "เกิดข้อผิดพลาดในการลบข้อมูล" . mysqli_error($dbcon);
    }

    mysqli_close($dbcon);