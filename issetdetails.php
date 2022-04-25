<?php
function details($name,$aadhar,$contact,$addr,$citi=null,$salary=0,$employer="")
{
	echo $name;
	echo"<br>Aadhar No:".$aadhar;
	echo"<br>Contact: ".$contact;
	echo "<br>Address: ".$addr;
	if (isset($citi)) {
		echo "<br> Citizen:".$citi;
		echo"<br>Citizen is set";
		// code...
	}
}
?>