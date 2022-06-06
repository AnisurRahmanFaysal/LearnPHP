<?php

$fruit = ["orange","banana","apple"];
$veg = ["carrot","pea"];
$color = ["red","green"];

$newArray = array_replace($fruit, $veg, $color);

echo "<pre>";
Print_r($newArray);
echo "</pre>";
 ?>
