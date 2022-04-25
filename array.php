<?php
$calc=array(
   
   function($v1,$v2)
   {
   	echo"<h1>Sum Up: ".($v1+$v2);
   },
    
    function($v1,$v2)
   {
   	echo"<h1>Deduct It: ".($v1-$v2);
   },
    function($v1,$v2)
   {
   	echo"<h1>Div that: ".($v1/$v2);
   }
   
   
);

$choice = rand(0,2);
$calc[$choice](35,78);
?>