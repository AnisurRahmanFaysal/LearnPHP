<?php

$fruit = ["orange","banana","apple"];

$color = ['a' => "red", 1 => "green"];

$newArray = array_replace($fruit, $color);

echo "<pre>";
Print_r($newArray);
echo "</pre>";
 ?>
