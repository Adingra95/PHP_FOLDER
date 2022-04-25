<?php
echo"<h1><br>isset() method in  Php</h>";
$x;
$y;
function takesTwo($a, $b)
{
	$x=$a;
	$y;
	if (isset($x)) {

		echo "<br>x is set";
	}
	else {
		echo"<br>x is not set";
	}
	if (isset($y)) {
		echo"<br>y is set";
		// code...
	}
	else{
		echo "<br>y is not set";
	}

}
echo "First function call:";
takesTwo(1,2);
?>