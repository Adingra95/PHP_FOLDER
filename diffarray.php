<?php 
$arr1=array("Pen","Pencil","Marker","Chalk");
$arr2=array("Pen","Marker","Pencil","Book"); 
$diff= array_diff($arr1, $arr2);
print_r($diff);
$diff= array_diff($arr2, $arr1);
echo"<br>";

print_r($diff);
?>