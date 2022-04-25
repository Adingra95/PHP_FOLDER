<?php 
echo"<h3>";
$scores=array(234,542,954,524);
$padded= array_pad($scores, 9, 3);
var_dump($scores);
echo"<br>";
var_dump($padded); ?>