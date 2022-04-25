<?php
echo"<h1><br>Global variable in php</h1>";
$a=3;
function funct()
{
	 global $a;
	 $a +=2;
}
funct();
echo"<h1>".$a;
?>