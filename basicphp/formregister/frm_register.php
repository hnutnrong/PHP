<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
        <link href="style.css" rel="stylesheet">
</head>
<body>
<div>
<h1>ลงทะเบียน</h1>

    <form action="register.php" method="POST">
    <label for ="username">Username: </label>
    <input type ="text" name ="username" require autofocus>

    <label for ="password">Password: </label>
    <input type ="text" name ="password" require autofocus>

    <label for ="email">E-mail: </label>
    <input type ="email" name ="email" placeholder="example@gmail.com">
    <br><br>

    
    <input type="submit" value="ลงทะเบียน">

    <a href="index.php" >กลับหน้าหลัก</a>
</div>
</body>
</html>