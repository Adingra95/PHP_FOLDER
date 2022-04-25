<?php
echo "<h3><br>Nested functions in PHP</h3>";
function outer($x)
{
	$val=$x;
	function inner()
	{
		echo"<br> From Inner method";
	}
	echo "<h3><br>From outer method";
}
outer(1290);
inner();
?>