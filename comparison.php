<?php

 $per = 55;

 if($per >= 80 && $per <= 100){
   echo "You are in marrit";
 }
elseif ($per >= 70 && $per < 80) {
  echo "You are in secound position";
}
elseif ($per >= 60 && $per < 70) {
  echo "You are in third position";
}
elseif ($per >= 50 && $per < 60) {
  echo "Your are in four position";
}
elseif ($per >= 40 && $per < 50) {
  echo "You are in five position";
}
elseif ($per >= 30 && $per < 40) {
  echo "You are in six position";
}
elseif ($per >= 0 && $per < 30) {
  echo "You are fail";
}


 ?>
