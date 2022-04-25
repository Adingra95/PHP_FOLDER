<?php
function outer($a){
	function inner($b)
	{
		echo "Three, $b";
	}
	echo "$a, Two,";
}
outer("One");
inner("Four");
?>