<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div>
    <form action="login.php" method="POST">
        <label for ="username">Username: </label>
        <input type="text" name="username" required autofocus>

        <label for="password">Password: </label>
        <input type="passwod" name="passward" required>
        <br>

        <input type="submit" value="Log in">
     </form>
     <br>
     <a href ="frm_register.php">Register</a>
    </div>
</body>
</html>