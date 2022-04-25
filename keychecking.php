<?php
//Checking the existance of a Key
$person= array('name' => "Fred",'age'=>35,'wife'=>"Wiliam" );
if($person['age'])
{
	echo"true!\n";
}
else
 echo"This key does not exist";
if (array_key_exists('year', $person)) {
	echo"exists!\n";
}
else
echo"This key does not exist";

if(isset($person['year']))
{
	echo"exists\n";
}
else
echo"This key does not exist";
?> 