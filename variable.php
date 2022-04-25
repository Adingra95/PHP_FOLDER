<?php
function add($x,$y)
{
	echo "<h2><br> In add():".($x+$y);
}
function subt($x,$y)
{
	echo "<h2><br> In subt():".($x-$y);
}
function multi($x,$y)
{
echo "<h2><br> In subt():".($x*$y);
}
$func='add';
$func(10,20);

$func='subt';
$func(30,40);

$func='multi';
$func(50,60);
?>