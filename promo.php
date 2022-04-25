<?php
	function Dimension()
	{
		static $s=100;
		return $s;
	
	}
		echo"<br>Dimension-1= ".Dimension();
		echo"<br>Dimension-2= 20";
		echo"<br>Dimension-3= 35";
	
	echo"<hr>";
	$var=240;
	function calcul()
	{
     
		static $c=31420;
		return $c;
		
		
	}
	
		echo"<br>Calculate = ".calcul();
		echo"<br>Calculate = ".$var;
	
?>