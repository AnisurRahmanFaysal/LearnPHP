<?php

/*$emp = [
  [1,"Faysal","Manager",500000],
  [2,"Nishat","Frontend",500000],
  [3,"Arimunnaher","Backend",800000],
  [4,"Shoshi","Tester",200000],
];*/

$emp = [
  ["ID"=> 1,
  "Name"=>"Faysal",
  "Designation"=>"Manager",
  "Salary"=>500000],
  ["ID"=>2,
  "Name"=>"Nishat",
  "Designation"=>"Frontend",
  "Salary"=>500000],
  ["ID"=>3,
  "Name"=>"Arimunnaher",
  "Designation"=>"Backend",
  "Salary"=>800000],
  ["ID"=>4,
  "Name"=>"Shoshi",
  "Designation"=>"Tester",
  "Salary"=>200000],
];

echo "<table border='2px' cellpadding='3px' cellspacing='0'>

  <tr>
    <th>Emp ID</th>
    <th>Name</th>
    <th>Designation</th>
    <th>Salary</th>
  </tr>";

foreach ($emp as list("ID" => $id,"Name" => $name,"Designation" =>$designtion,"Salary" =>$salary)) {
  echo "<tr> <td>$id</td> <td>$name</td> <td>$designtion</td> <td>$salary </td> </tr>";
}
echo "</table>";

 ?>
