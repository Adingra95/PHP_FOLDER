<?php 
echo"Checking Identical or not<br>";
$arr1=array("std1"=>"Me", "std2"=>"We");
$arr2=array("std2"=>"We","std1"=>"Me") ;
if ($arr1===$arr2) 
	echo "Identical";
else
	echo"Not Identical";
?>