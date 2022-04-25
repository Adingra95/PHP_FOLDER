<?php
$servername ="localhost";
$username="root";
$password="";
$dbname="applicat";

$con = new mysqli($servername, $username,$password,$dbname);

if($con->connect_error)
{
    die("There is some issue with this connection:" .$con->connect_error);
} 
$qry="Insert into Sales_entries(P_Number, C_Desc ,C_solution,C_Status) values (5,'Reporting','Postpone','Requested')";
if($con->query($qry)==TRUE)
{
    echo "success";
}
else{
    echo"Issue: ".$qry."<br>".$con->error;
}
$con->close();
?>