<?php

$array1 = [
  ['a'=>"red"],
  ['b'=> "green","pink"]

];

$array2 = [
  ['a'=>"yellow"],
  ['b'=> "black"]
];

$newArray = array_replace_recursive($array1, $array2);

echo "<pre>";
Print_r($newArray);
echo "</pre>";
 ?>
