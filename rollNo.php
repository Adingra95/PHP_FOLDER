<?php
$i=0;
echo "<br> Students present:<br>";
while($i<20)
{
	$i++;
	if ($i==9|| $i==13||$i==16) {
		continue;
	}
	echo "<br>".$i;
}
?>