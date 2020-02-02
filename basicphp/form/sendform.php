<?php
    echo $_POST['myname'][0];
    echo "<hr>";
    echo $_POST['myname'][1];
    echo "<hr>";

    foreach ($_POST['edu'] as $edu){
        echo $edu;
    }
//เวลาเรียกดูสามารถทำได้ 2 แบบ แต่ถ้ามันเยอะก็สามารถใช้ 
//foreach มาช่วยได้


