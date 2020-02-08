<?php

    $pass="1234";


 try{
    if($pass == "123456"){
        echo "Login OK";
    }else{
        throw new Exception('รหัสผ่านไม่ถูกต้อง'); 
    }
 }   catch(Exception $e){
    echo 'เกิดข้อผิดพลาด' . $e->getMessage() . "<br>"; 
    echo 'บรรทัดที่'. $e->getLine();
}