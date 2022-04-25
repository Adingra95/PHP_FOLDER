<?php 
$arr1=array(1,2,3);
$arr2=array(4,5,6);
$result=array_merge($arr1,$arr2);
print_r($result);
echo "<p>Elements in first Array".count($arr1);
echo "<br>Elements in second Array".count($arr2);
echo "<br>Elements in merged Array".count($result);
 ?>