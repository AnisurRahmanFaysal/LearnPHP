<?php

$n = (int)readline("Enter a number :");

for ($i=2; $i < $n; $i++) { 
    if ($n%$i == 0 || $n == 0 || $n == 1) {
        echo "$n is not Prime Number!";
        break;
    }
    else {
        echo "$n is Prime Number!";
        break;
    }
}

?>