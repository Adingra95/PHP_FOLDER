<?php 
$num = range(1,12);

var_dump($num);
echo"<br>";
$row=array_chunk($num, 5);
echo"<br>";
var_dump($row);
 ?>