<?php
    session_start();

    if(!isset($_SESSION['login_id'])){
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        echo "ยินดีต้อนรับคุณ" . $_SESSION['login_id'];
    ?>
    <hr>
    <a href ="logout.php">ออกจากระบบ</a>

</body>
</html>