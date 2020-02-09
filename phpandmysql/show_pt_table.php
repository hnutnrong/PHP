<?php
        require 'connectdb.php';
        $q = "SELECT * from producttype";
        $result = mysqli_query($dbcon,$q);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงข้อมูลสินค้า</title>

        <style>
            table,th,td{
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>

</head>
<body>
        <table style ="width:500px">
            <tr>
                <th>รหัส</th>
                <th>รายละเอียดหมวดสินค้า</th>
            </tr>

            <?php
            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            
            ?>
            <tr>
                <td><?php echo $row['pt_id']; ?></td>
                <td><?php echo $row['pt_name']; ?></td>
            </tr>

            <?php
                    }
            
                    mysqli_free_result($result);
                    mysqli_close($dbcon);
            ?>


        </table>
     
</body>
</html>