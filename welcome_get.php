 <?php
 $nameErr = $contactErr = $passwordErr= "";
$name =$contact = $password = "";
 ?>
Welcome <?php echo $_GET["name"]; ?><br>
Contact: <?php echo $_GET["contact"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>
<?php
if (empty($_GET["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_GET["name"]);
  }
    
  if (empty($_GET["contact"])) {
    $contactErr = "contact is required";
  }
   else {
    $contact = test_input($_GET["contact"]);
  }
  if (!preg_match("/^[length(10) &started (981) ]*$/",$contact)) {
      $contactErr = "Only number_format is allowed";
    }
  if (empty($_GET["password"])) {
    $passwordErr = "password must be 8 length";
  } 
  else {
    $password = test_input($_GET["password"]);
  }
  if (!preg_match("/^[length(8) ]*$/",$password)) {
      $passwordErr = "Only number_format is allowed";
    }
   function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 ?>
