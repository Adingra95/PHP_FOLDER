<?php 
echo "<h2>";
$people=array("Tom", "Dick", "Harriet", "Brenda", "Jo");
var_dump($people);

echo"slice() <br>";
$extracted=array_slice($people,1,3);
var_dump($extracted);
 ?>