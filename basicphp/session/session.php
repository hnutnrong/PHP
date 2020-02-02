<?php
    session_start();    //ต้องใส่ไว้บรทัดแรกสุดเสมอ

    $_SESSION['user'] = "Nutnarong";
    $_SESSION['age'] = "21";

    echo $_SESSION['user'];

    echo "<hr>";

    echo "<a href='welcome.php'>Link</a>";