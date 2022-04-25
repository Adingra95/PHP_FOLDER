<?php
$student= function($school, $section)
{
	return( "$school, $section");
};
echo $student("ABC","MNO")."<br>";
echo $student("XYT","PQR")."<br>";
?>