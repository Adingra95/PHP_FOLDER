<?php
$arr1=array("Pen"=>"Write", "Book"=>"Read");

$arr2=array_flip($arr1);

echo "Before Flip <br>";
var_dump($arr1);
echo "<br>";

echo"After flip <br>";
var_dump($arr2); 
 ?>