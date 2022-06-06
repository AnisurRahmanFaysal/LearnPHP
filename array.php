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
echo "<table border='1px' cellpadding='5px' cellspacing='0'>";

echo "<tr>
      <th>Emp ID.</th>
      <th>Name</th>
      <th>Degination</th>
      <th>Salary</th>
    </tr>";

foreach ($emp as $value) {
  echo "<tr>";
  foreach ($value as $value1) {
    echo "<td> $value1 </td>";
  }
  echo "</tr>";
}
echo "</table>";

echo "<pre>";
print_r($emp);
echo "</pre>";

 ?>
