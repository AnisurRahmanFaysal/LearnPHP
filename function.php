<?php

function testing(&$string){
  $string .=" And something extra.";
}

$str = "This is a string";
testing($str);
echo $str;

 ?>
