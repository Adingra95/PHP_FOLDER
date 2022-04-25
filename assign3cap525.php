<?php
/*Create a web page using PHP to input details for a scholarship exam.*/
?>
<html>
<head>
<title>Scholaship Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<style>
    body{
        margin:auto;
        padding: auto;
    }
.error {color: #FF0000;}

.container-fluid{
    height: 700px;
    margin:20%;
    margin-top: 50px;
    border: 2px dashed #ddd;
    border-radius: 25px;
    background: #AED6F1; 
}
 
.container-fluid {
    width: 50%;
    padding: 100px 100px;
    margin:20%;
 
    /* .... */
}
</style>
</head>
<body>  

<?php
/*Here I'm declared the variable I'm going to user in that programme
Variable represent data I'm gonna collect from users */
$nameErr = $lastnameErr = $contactErr = $emailErr = $genderErr = $marksErr = "";
$name = $lastname = $contact = $email = $gender = $comment = $marks = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

    if (empty($_POST["name"])) {
        $nameErr = "First Name is required";
      } else {
        $name = test_input($_POST["name"]);
      }

  if (empty($_POST["lastname"])) {
    $lastnameErr = "Last Name is required";
  } else {
    $lastname = test_input($_POST["lastname"]);
  }
  
  if (empty($_POST["contact"])) {
    $contactErr= "contact is required";
  } else {
    $contact = test_input($_POST["contact"]);
  }

  if (empty($_POST["email"])) 
  {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["marks"])) 
  {
    $marksErr = "marks is required";
  } 
  else {
    $marks = test_input($_POST["marks"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
/* this function are used to collect input from users */
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<?php /* This are used to collect data from users and if there is some that where 
data are missing php tag with that variable display with * that are missing */?>
<div class="container-fluid">
<h2>Enter Student data for scholarship</h2>
<p><span class="error">* required field</span></p>
<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  
First Name: <input type="text" name="name" placeholder="First Name">
  <span class="error">* 
<?php echo $nameErr;?></span>
  <br><br>

  Last Name: <input type="text" name="lastname" placeholder="Last Name">
  <span class="error">* 
<?php echo $lastnameErr;?></span>
  <br><br>

  Contact: <input type="number" name="contact" placeholder="Contact">
  <span class="error">* 
<?php echo $contactErr;?></span>
  <br><br>

  E-mail: <input type="text" name="email" placeholder="Student E-mail">
  <span class="error">* 
<?php echo $emailErr;?></span>
  <br><br>

  Student Marks : <input type="number" name="marks" placeholder="Student Marks After exam">
  <span class="error">*
  <?php echo $marksErr;?></span>
  <br><br>
Comment: <textarea name="comment" rows="1" cols="20"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
<?php
echo "<h3>Data entered are:</h3>";
?>
<?php
/*That part are use to display the data entered by user after clicking submit button on the screen*/
echo "<h5>First Name: ".$name;
echo"<br>";
echo "<h5>Last Name: ".$lastname;
echo "<br>";
echo "<h5>Contact: ".$contact;
echo "<br>";
echo "<h5>E-mail: ".$email;
echo "<br>";
echo "<h5>Marks: ". $marks;
echo "<br>";
echo "<h5>Comment: ".$comment;
echo "<br>";
echo "<h5>Gender:".$gender;
?>
</div>

</body>
</html>