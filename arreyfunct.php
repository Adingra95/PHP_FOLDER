<?php
/*$arr= array("Adr1"=>"Pers1" , "Adr2"=>"Pers2", "Adr3"=>"Pers3", "Adr4"=>"Pers4");
reset($arr);
$per=array('name',"fred", 'age',51, 'wife', "Wiliam");
$elem=$per[3];
echo $elem."<br>";
echo "current : .current"
*/
$input =array ("red","green","blue","yellow");
array_splice($input,2);
var_dump($input);
echo"<hr>";

$input =array ("red","green","blue","yellow");
array_splice($input,1,-1);
var_dump($input);
echo"<hr>";

$input =array ("red","green","blue","yellow");
array_splice($input,1,count($input),"orange");
var_dump($input);
echo"<hr>";

$input =array ("red","green","blue","yellow");
array_splice($input,-1,1, array("black", "maroon"));
var_dump($input);
echo"<hr>";
?>