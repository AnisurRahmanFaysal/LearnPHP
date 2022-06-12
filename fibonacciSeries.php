<?php

    $number = (int)readline("Enter the number:");
    $n0 = 0;
    $n1 = 1;
    echo $n0."\n".$n1."\n";

    for ($i=2; $i < $number; $i++) { 
        $n = $n0 + $n1;
        echo "$n\n";

        $n0 = $n1;
        $n1 = $n;
    }
?>