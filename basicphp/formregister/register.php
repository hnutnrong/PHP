<?php
    require '../config/connectdb.php';

    $login_username = $_POST['username'];
    $login_password = $_POST['password'];
    $login_email = $_POST['email'];

    //เข้ารหัส รหัสผ่าน

    //$salt = 'mfklsamfkmsdklflmasdkf';  //มันก็จะเอา password ที่ใส่เข้ามามาเข้ารหัสรวมกับตัวนี้
    //$hash_login_password= hash_hmac('eiei555',$login_password,$salt);

    $query = "INSERT INTO member (username,password,email,phone) VALUE('$login_email','$login_password','$login_email','1234567890')";

    $result = mysqli_query($conn,$query);

    if($result) {
        header("Location: index.php");
    }else{
        echo "เกิดข้อผิดพลาด" . mysqli_error($conn);
    }

    mysqli_close($conn);