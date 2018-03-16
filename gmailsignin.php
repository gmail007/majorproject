<?php include('gmailserver.php'); ?>
<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
?>
<!DOCTYPE html>
<html>
<head>
  <title>GmailSignin</title>
  <link rel="stylesheet" href="cssFiles/bootstrap.css">
  <link rel="stylesheet" href="cssFiles/gmail.css">
</head>
<body>
<h1> Create your Google Account </h1>
<!-- <form action="/action_page.php" style="border:1px solid #ccc"> -->
<p>&nbsp</p>
<div class="container">
  <div class="row">
    <div class="col-md-6">
        <div class="text-left">
            <h3> One account is all you need </h3>
            <p>One free account gets you into everything Google.</p>
            <div class="logo-strip">

            </div>
            <h2> Take it all with you </h2>
            <p>Switch between devices, and pick up wherever you left off.</p>
            <div class="devices-icon">    </div>

        </div>
    </div>

<div class="col-md-6">
  <div class="gmailform">
    <form action="gmailsignin.php" method = "post">
           <?php include('errors.php'); ?>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <div class="name">
    <label for="firstname"><b>First Name</b></label> 
    <input type="text" placeholder="First" id= "firstName" pattern="[a-zA-Z]{5,}" name="first name" required>
    <label for="lastname"><b>Last Name</b></label>
    <input type="text" placeholder="Last" id= "lastName" pattern="[a-zA-Z]{5,}" name="last name" required>
    </div>

    <div class="form-group">
    <label for="email"><b>Choose your username</b></label>
    <input type="email" id= "email" pattern= "^[a-z0-9](\.?[a-z0-9]){5,}@g(oogle)?mail\.com$" name="email" required>
    </div>

    <div class="form-group">
    <label for="psw"><b>Password</b></label>
    <input type="password" id= "password" placeholder="Enter Password" name="psw" required>
    </div>

    <div class="form-group">
    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" id= "cpassword" placeholder="Repeat Password" name="psw-repeat" required>
    </div>

    <div class="form-group">
    <label for="DOB"><b>Date of Birth</b></label>
    <input id="date" id= "dob" type="date">
    </div>

    <div class="form-group">
    <label for="telNo">Phone number:</label>
    <input id="telNo" id="number" name="telNo" type="tel">
    </div>

    <div class="boxes">
    <input type="radio" name="sex" id="male">
    <label for="male">Male</label>
    <input type="radio" name="sex" id="female">
    <label for="female">Female</label>
    <input type="radio" name="sex" id="other">
    <label for="other">Other</label>
    </div>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="submit" name="sub" class="signupbtn">Sign Up</button>
    </div>
    </form>
  </div>
</div>1
  </div>
</div>


</body>
</html>
