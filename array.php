<?php

//$food = ["Orange","Banana","Apple","Grapes"];

$food = [
  "fruits" => ["Orange","Banana","Apple"],
  "Vegitable" => ["Carrot","Collard","Pea"]

];

echo count($food['fruits'],1);
echo sizeof($food,1);

 ?>
