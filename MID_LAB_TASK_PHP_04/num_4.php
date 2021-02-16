<?php

    $number1=2;
    $number2=8;
    $number3=7;

    

    if($number1>$number2)
    {
        if($number1>$number3)
        {
            echo"Largest Number: $number1";
        }
        else
        {
            echo"Largest Number: $number3";
        }
    }
    else
    {
        if($number2>$number3)
        {
            echo"Largest Number: $number2";
        }
        else
        {
            echo"Largest Number: $number3";
        }
    }

?>