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
$qry="Create table Sales_entries(P_Number INT, C_Desc TEXT,C_solution varchar(20),C_Status varchar(10))";
if($con->query($qry)==TRUE)
{
    echo "success";
}
else{
    echo"Issue: ".$qry."<br>".$con->error;
}

$qry="Create table staff_details(S_Number INT, C_Desc TEXT,C_solution varchar(20),C_Status varchar(10))";
if($con->query($qry)==TRUE)
{
    echo "success";
}
else{
    echo"Issue: ".$qry."<br>".$con->error;
}
$con->close();
?>
