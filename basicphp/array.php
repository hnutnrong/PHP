<?php
    ///Numeric arrays
    $age = array(10,20,30,40);
    echo $age[1];
    echo "<hr>";

    //Associative arrays
    $student = array('John'=>30,'Mary'=>20);
    echo "$student[John]<br>";
    echo $student['Mary'];
    echo "<hr>";


    $studenttest = array('height' => 150,'weight'=>40);

    echo "student height $studenttest[height]<br>";
    echo "student weight $studenttest[weight]";