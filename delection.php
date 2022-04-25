<?php
$arr1=array("Pen"=>"Write","Book"=>"Read");
unset($arr1["Pen"]);
var_dump($arr1);
echo "<br>";
$arr2=array("Pen","Write","Book","Read");
unset($arr2[1]);
var_dump($arr2);
 ?>