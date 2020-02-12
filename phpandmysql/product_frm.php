<?php
    require 'connectdb.php';
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สินค้า</title>

        <style>
                label{
                    display: block;
                }
        </style>

</head>
<body>
    <h2>ข้อมูลสินค้า</h2>
    <form action = "product_insert.php" method="post" enctype="multipart/form-data" id="forml"> 

<fieldset>
<legend>เพิ่มสินค้า</legend>
            <label>ชื่อสินค้า: </label>
            <input name= "pro_name" type="text" id="pro_name" size="40">
           
            <br><br>

            <label>ราคา: </label>
            <input name= "pro_price" type="text" id="pro_price" size="20">
          
            <br><br>

            <label>วันที่เพิ่มสินค้า: </label>
            <input name= "pro_dateadd" type="date" id="pro_dateadd">
            
            <br><br>

            <label>สถานะสินค้า: </label>
            <label>
            <input type="radio" name="pro_status" value="0" id="pro_status_0">
            ใช้ชื้อขายได้</label>

            <label>
            <input type="radio" name="pro_status" value="1" id="pro_status_1">
            อยู่ระหว่างปรับปรุง</label>

            <br>

            <label>ประเภทสินค้า: </label>
            <?php
                    $q="SELECT * FROM  producttype";
                    $result = mysqli_query($dbcon,$q);
            ?>
            
                <select name="pt_id" id="pt_id">
                    <option value="">--เลือกประเภทสินค้า--</option>
                    <?php
                            while($row = mysqli_fetch_array($result,MYSQLI_NUM)){
                               echo "<option value='$row[0]'>$row[1]</option>"; //$row[0] คือให้เริ่มตั้งแต่ row ไหน
                            }                                                   //$row[1] คือให้แสดงข้อมูลที่อยู่ใน row นั้น
                    ?>
                                //MYSQLINUM อ้างเป็น index ของ array โดยเริ่มจาก$row[0] ตั้งแต่ row แรก
                </select>
            <br><br>

            <input type="submit" name="submit" id="submit" value="เพิ่มข้อมูล">
</fieldset>
</form>
</body>
</html>