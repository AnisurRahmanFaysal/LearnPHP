<?php

//for ($i=0; $i < 5; $i++) { 
    //$array[$i] = (int)readline("Enter ///$i index array values :");
//}

//var_dump($array);
//echo(max($array[0],$array[1],$array//[2],$array[3],$array[4],))." is max value ///in this array\n";

//foreach ($array as $key => $value) {
  //  echo "$key => $value \n";
//}

//sort($array);

//foreach ($array as $value) {
  //  echo $value."\n";
   
//}



$fruit = ['a' => "orange",'b' => "banana",'c' => "grapes"];

$fruits = ['d' => "lemon",'e' => "mango"];

$mergeArray = array_merge($fruit,$fruits);

echo "<pre>";
print_r($mergeArray);
echo "</pre>";
 ?>
