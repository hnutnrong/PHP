<?php

    require 'connectdb.php';

    $q="SELECT * FROM product INNER JOIN producttype ON product.pt_id = producttype.pt_id ORDER BY product.pro_id";

    $result = mysqli_query($dbcon,$q);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงรายการสินค้า</title>
    <style>
            table,th,td{
                border: 1px solid black;
                border-collapse: collapse;
            }
    </style>
</head>
<body>

            <h2>รายการสินค้า</h2>
            <table style="width:900px">
            <tr>
                <th>รหัสสินค้า</th>
                <th>ชื่อสินค้า</th>
                <th>ราคา</th>
                <th>วันที่เพิ่ม</th>
                <th>หมวดสินค้า</th>
               
            </tr>
        <?php
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                //วน loop แสดงข้อมูลออกมาทั้งหมด
        ?>
            <tr>
                <td><?php echo $row['pro_id']; ?></td>
                <td><?php echo $row['pro_name']; ?></td>
                <td><?php echo $row['pro_price']; ?></td>
                <td><?php echo $row['pro_dateadd']; ?></td>
                <td><?php echo $row['pt_name']; ?></td>
            </tr>
        <?php
                }
                mysqli_free_result($result);
                mysqli_close($dbcon);
        ?>
</body>
</html>