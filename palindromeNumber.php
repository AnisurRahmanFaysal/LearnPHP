<?php

$lowerNum = (int)readline("Enter start Number :");
$upperNum = (int)readline("Enter end Number :");

for ($num=$lowerNum; $num < $upperNum; $num++) { 
    $temp = $num;
    $reverseNum = 0;
    while ($temp!=0) {
        $r = $temp % 10;
        $reverseNum = $reverseNum * 10 + $r;
        $temp = $temp / 10;
    }
    if ($num == $reverseNum) {
        echo $num;
    }
}

?>