<?php 
echo "<h3>Krsort";
$num= array("First"=>"One", "Second"=>"Two","Third"=>"Three","Fouth"=>"four","Fift"=>"five" );
krsort($num);
var_dump($num);
?>