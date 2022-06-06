<?php

$emp = [
  [1,"Faysal","Manager",500000],
  [2,"Nishat","Frontend",500000],
  [3,"Arimunnaher","Backend",800000],
  [4,"Shoshi","Tester",200000],
];

echo "<table border='2px' cellpadding='3px' cellspacing='0'>

  <tr>
    <th>Emp ID</th>
    <th>Name</th>
    <th>Designation</th>
    <th>Salary</th>
  </tr>";

foreach ($emp as list($id,$name,$designtion,$salary)) {
  echo "<tr> <td>$id</td> <td>$name</td> <td>$designtion</td> <td>$salary </td> </tr>";
}
echo "</table>";

 ?>
