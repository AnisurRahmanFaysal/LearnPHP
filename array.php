<?php

$food = ["Orange","Banana","Apple","Grapes"];

/*$food = [
  "fruits" => ["Orange","Banana","Apple"],
  "Vegitable" => ["Carrot","Collard","Pea"]

];*/

$len = count($food);
//echo sizeof($food,1);

for ($i=0; $i < $len ; $i++) {
  echo $food[$i] . "<br>";
}

echo "<pre>";
print_r(array_count_values($food));
echo "</pre>";

 ?>
