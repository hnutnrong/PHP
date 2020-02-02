<?php

    session_start();

    echo $_SESSION['user'];
    echo "<hr>";
    echo $_SESSION['age'];
    echo "<br>";

    echo "<a href='logout.php'>Logout</a>";