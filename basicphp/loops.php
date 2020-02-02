<?php

    //while loop
    $i = 1;
    while($i <= 10){
        echo "$i. Hello World<br>";
        
        $i++;
    }
    echo "<hr>";

    //do-while loop
    $j = 1;
    do{
        echo "$j. Hello World<br>";
        $j++;
    }while($j <= 10);

    echo"<hr>";
    //for loop
    for($z=1 ; $z<=10 ; $z++){
        echo "$z Hello World<br>";
    }

    echo"<hr>";

    //foreach loop
    $a = array(10,20,30,40,50);
    foreach($a as $v){
        echo $v.' ';
    }