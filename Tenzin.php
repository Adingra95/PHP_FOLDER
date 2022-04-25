<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Booking</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
</style>

</head>
<body> 
<nav style="height:100px" class="navbar navbar-expand-sm bg-dark navbar-dark">
<a style="font-size:30px; margin-right:20px" class="navbar-brand" href="#">CLASSBOOKING</a>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a style="margin-right:20px" class="nav-link" href="#">Features</a>   </li>
    <li class="nav-item">
      <a style="margin-right:20px" class="nav-link" href="#">Pricing</a>   </li>
      <li class="nav-item">
      <a style="margin-right:380px" class="nav-link" href="#">About Classbooking</a>   </li>
      <button style="margin-right:30px" class="btn btn-outline-info">EN</button>
  <button style="margin-right:30px" class="btn btn-outline-info">Help</button>
  <button style="margin-right:30px" class="btn btn-primary">Sign In</button>
  <button class="btn btn-primary">Create Account</button>
</ul>
</nav>
<img src="img/pic.jpg" width="100%" height="700px">

<div style="margin-top:-600px; z-index:1; position:relative" class="booking_form container">
  <h2 style="font-family:'Varela Round',sans-serif">BOOK A ROOM</h2>
  <p>Please fill in this form to book a class.</p> 

  
  <form action="about.php" method="POST">



  <div style="width:35%" class="form-group">

      <label>Name:</label>
          <input type="text" name="name" class="form-control">
  </div>
  <div style="width:35%" class="form-group">
      <label>Email:</label>
          <input type="email" name="email" class="form-control">
   </div>
    



    <div style="width:35%" class="form-group">

    <label for="">Choose Room No.</label>

    <select name="room" class="form-control">
      <option value=""><---Room--></option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
</select>
  </div>

  
<div style="width:35%" class="form-group">
    <label for="">Time</label>
    <select name="time" class="form-control">
      <option value=""><---Time--></option>
      <option value="8:00am-4:00pm">8:00am-4:00pm</option>
      <option value="8:30am-4:30pm">8:30am-4:30pm</option>
      <option value="9:00am-5:00pm">9:00am-5:00pm</option>
      <option value="9:30am-5:30pm">9:30am-5:30pm</option>
      <option value="10:00am-6:00pm">10:00am-6:00pm</option>
</select>
  </div>

  <div style="width:35%" class="form-group">
    <label>Phone:</label>
                <input type="text" name="number" class="form-control">
            </div>
        <div class="form-group">
    <button style="width:10%" type="submit" class="btn btn-primary">Submit</button>
</div>
</form>

</form>
</div>

</div>

<div style="height:135px; padding-top:30px; margin-top:12px; color:#fff; background-color:#212a2f" class="footer">
 <div class="text-center"> &copy;  2021, Classbooking®️ is a registered trade mark of Logo Group PLC.<br><br> <a style="color:#fff" href="Privacy.html">Privacy &nbsp;</a> <a style="color:#fff" href="terms.html">Terms of Services &nbsp;</a>  <a style="color:#fff" href="security.html">Security</a></div> 
</div>

</body> 
</html>