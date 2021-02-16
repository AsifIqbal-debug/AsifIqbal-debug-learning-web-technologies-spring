<?php

    $arr= [10,'Mango',true];
    $findingElement=10;

    foreach($arr as $val)
    {
        if($val==$findingElement)
        {
            echo"$findingElement is present in the array.\n";
        }
    }

?>