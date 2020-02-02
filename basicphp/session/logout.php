<?php
    session_start();

    unset($_SESSION['user']); ///ลบเฉพาะ session ที่เราเลือก

    session_destroy(); ///ลบ session ทั้งหมดให้หายไป
    