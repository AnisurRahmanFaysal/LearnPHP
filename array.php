<?php

$emp = [
  [1,"Khan","Manager",50000],
  [2,"Faysal","Frontend Developer",300000],
  [3,"Shoshi","Backend Developer",250000],
];

for ($row=0; $row < 3; $row++) {
  for ($cal=0; $cal < 3; $cal++) {
    echo $emp[$row][$cal]. " ";
  }
  echo "<br>";
}

echo "<pre>";
print_r($emp);
echo "</pre>";

 ?>
