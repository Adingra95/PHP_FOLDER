<?php
$uid=$_GET['t2'];
echo "The details are ".$uid;
if (strlen($uid)==10) {
	if (substr($uid,0,1)=='F') {

		echo"<h1>".$uid."It's acceptable";
		echo "<br> Welcome";
		// code...
	}
     else  {
     
     	echo"<br><h1>".$uid."The uid prefix has to be F";
     }
     }
elseif (strlen($uid)==0) {
	if (substr($uid,0,1)=='S') {
		echo "<h1>".$uid."It's acceptable UID";
		echo "<br>Welcome student";
		
	}
	else{
		echo "<br><h1>".$uid."The uid prefix has to be S";
		
	}
}
elseif (strlen($uid)==10) {
	if (substr($uid,0,1)=='p') {
		echo "<br><h1>".$uid."its acceptable";
		echo"<br>Welcome parents";
		// code...
	}
	else{
		echo"<br><h1>".$uid."The uid prefix has to be P";
	}
	// code...
}


else{
	echo"<h1>Welcome";
}
?>