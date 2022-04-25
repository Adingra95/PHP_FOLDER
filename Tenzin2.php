<?php
$servername ="localhost";
$username="root";
$password="";
$dbname="mydatabase";


$con= mysqli_connect($servername, $username,$password,$dbname);
if($con) {
    echo "Connection Succcessful";
}
else {

    echo "Connection Failed";
}
mysqli_select_db($con,'roomed');

$name = $_POST['name'];
$email = $_POST['email'];
$room = $_POST['room'];
$time = $_POST['time'];
$number = $_POST['number'];

$query="INSERT INTO user (name, email, room, time, number)VALUES('$name', '$email', '$room', '$time', '$number')";

mysqli_query($con, $query);
header('location:Tenzin.php');


?>