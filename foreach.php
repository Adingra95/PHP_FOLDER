<?php 
$book= array();
$book['PHP']= array('title'=>'PHP Programming', 'Author'=>"Author",'price'=>400, 'pages'=>200);
$book['JAVA']= array('title'=>'JAVA Programming', 'Author'=>"Author",'price'=>500, 'pages'=>300); 
$book['HTML']= array('title'=>'HTML Programming', 'Author'=>"Author",'price'=>600, 'pages'=>400);
foreach ($book as $key => $value) {
	echo "<p><h1>".$key . "<br></h1>";
	foreach ($value as $k => $v) {
		echo"<h3>" .$k ." = " .$v ."<br>"; 
		// code...
	}
	// code...
}
?>