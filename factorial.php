<?php

$num = (int)readline("Enter a Number: ");
$counter = 1;

if ($num > 0) {
    for ($i=$num; $i > 0; $i--) { 
        $counter = $counter * $i;
    }
    echo "Factorial of $num is =".$counter;
    
}
?>