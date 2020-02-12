<?php
require 'connectdb.php';

$pro_id = $_GET['pro_id'];
$qpro = "SELECT * FROM product WHERE pro_id='$pro_id'";
$respro = mysqli_query($dbcon, $qpro);
$rowpro = mysqli_fetch_array($respro, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลสินค้า</title>

         <style>
            label{
                    display: block;
                }
        </style>
</head>
<body>
<h2>แก้ไขข้อมูลสินค้า</h2>
<form action = "product_update.php" method="post" enctype="multipart/form-data" id="forml">

<fieldset>
<legend>แก้ไขข้อมูลสินค้า</legend>
            <label>ชื่อสินค้า: </label>
            <input name= "pro_name" type="text" id="pro_name" size="40" value="<?php echo $rowpro['pro_name']; ?>">

            <br><br>

            <label>ราคา: </label>
            <input name= "pro_price" type="text" id="pro_price" size="20" value="<?php echo $rowpro['pro_price']; ?>">

            <br><br>

            <label>วันที่เพิ่มสินค้า: </label>
            <input name= "pro_dateadd" type="date" id="pro_dateadd" value="<?php echo $rowpro['pro_dateadd']; ?>">

            <br><br>

            <label>สถานะสินค้า: </label>
            <label>
            <input type="radio" name="pro_status" value="0" id="pro_status_0" <?php if ($rowpro['pro_status'] == '0') {
    echo "checked";
}
?>>
            ใช้ชื้อขายได้</label>

            <label>
            <input type="radio" name="pro_status" value="1" id="pro_status_1" <?php if ($rowpro['pro_status'] == '1') {
    echo "checked";
}
?>>
            อยู่ระหว่างปรับปรุง</label>

            <br>

            <label>ประเภทสินค้า: </label>
            <?php
$q = "SELECT * FROM  producttype";
$result = mysqli_query($dbcon, $q);
?>

                <select name="pt_id" id="pt_id">
                    <option value="">--เลือกประเภทสินค้า--</option>

                    <?php
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    if ($row[0] == $rowpro['pt_id']) {
        echo "<option value='$row[0]' selected>$row[1]</option>";
    }else{
        echo "<option value='$row[0]'>$row[1]</option>";
    }
    //$row[0] คือให้เริ่มตั้งแต่ row ไหน
    //$row[1] คือให้แสดงข้อมูลที่อยู่ใน row นั้น
}
?>
                                <!-- MYSQLINUM อ้างเป็น index ของ array โดยเริ่มจาก$row[0] ตั้งแต่ row แรก -->
                </select>
            <br><br>
            <input type="hidden" name="pro_id" value="<?php echo $rowpro['pro_id']; ?>">
            <input type="submit" name="submit" id="submit" value="แก้ไขข้อมูล">
</fieldset>
</form>


</body>
</html>