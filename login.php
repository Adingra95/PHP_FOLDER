<?php

// If the values are posted, insert them into the database.
if (isset($_GET['username']) && isset($_GET['password'])){
    $username = $_GET['username'];

    $email = $_GET['email'];

    $password = $_GET['password'];

    $cpassword = $_GET['confirmpassword'];

    $slquery = "SELECT 1 FROM register WHERE email = '$email'";

    if(mysql_num_rows($selectresult)>0)
    {
        die('email already exists');
    }

    $query = "INSERT INTO `register` (username, password,confirmpassword, email) VALUES ('$username', '$password', '$cpassword', '$email')";
    $result = mysql_query($query);
    if($result){
        $msg = "User Created Successfully.";
    }
   }
?>