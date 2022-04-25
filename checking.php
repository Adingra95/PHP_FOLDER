<?php
echo"Checking equality";
$arr1 = array("Apple","Mango");
$arr2 = array("Banana", "Mango");
$arr3 = array(0=>"Mango", 1=>"Banana");
if ($arr1==$arr2) 
echo"<br>Equal";
else
echo"<br>Not Equal";

if($arr1==$arr3)
echo"<br>Equal";
else
echo"<br>Not Equal";


 ?>