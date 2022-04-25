<?php
//Printing Keys and values
$person= array('name' => "Fred",'age'=>35,'wife'=>"Wiliam" ); 
$keys=array_keys($person);
$values= array_values($person);

var_dump($keys);
var_dump($values);
?>