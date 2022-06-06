<?php

$marks = [
  "Faysal" => [
    "Os" => 50,
    "Os Lab" => 40,
    "Toc" => 45,
  ],

  "Nishat" => [
    "Os" => 70,
    "Os Lab" => 80,
    "Toc" => 950,
  ],

  "Arrimunnaher" => [
    "Os" => 98,
    "Os Lab" => 89,
    "Toc" => 82,
  ],

  "Shoshi" => [
    "Os" => 90,
    "Os Lab" => 80,
    "Toc" => 70,
  ],

];
echo "<table border='2px' cellpadding='5px' cellspacing='0'>

<tr>
  <th>Student Name</th>
  <th>Os</th>
  <th>Os Lab</th>
  <th>Toc</th>";
foreach ($marks as $key => $value) {
  echo "<tr>
    <td>$key</td>";
  foreach ($value as $value2) {
    echo "<td> $value2 </td> ";
  }
  echo "<tr>";
}


 ?>
