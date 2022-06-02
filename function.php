<?php

function display($number){

  if ($number<5) {
    echo"$number<br>";// code...
    display($number + 1);
  }

}

display(1);
 ?>
