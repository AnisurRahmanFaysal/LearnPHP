<?php

$color = ["a"=>"red","b"=>"green","c"=>"blue",];
$color2 =["a"=>"red","b"=>"blue","c"=>"green",]

$new = array_intersect(array $color, array $color2);

echo "<pre>";
print_r($new);
echo"</pre>";

 ?>
