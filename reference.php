<?php
echo "<h1>Pass by reference in php</h1>";
$a=3;
function double($value)
{
	$value=$value + 10;
	echo"<h1> Inside the function:".$value;
}
	echo"<h3> Out of the function(before call):".$a;
	double($a);
	echo"<h3>Out of the function(after call):".$a;
?>