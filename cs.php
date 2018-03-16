<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">  
        
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 <link rel="stylesheet" type="text/css" href="css/cs.css">
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


	<title>signup</title>

</head>

      
    </style>  
<body>
 <div class="container">  
        <div class="row"> 
            <div class="col-md-4 ">
                <div class="login-panel panel panel-success">  
                    <div class="panel-heading">  
                        <h3 class="panel-title">Signup</h3>  
                    </div>  
                    <div class="panel-body">  
                        <form name="form" method="post" action="cs.php" onsubmit="return validateForm()">  
                            <fieldset>  
                                 <div class="form-group">  
           Password:<input class="form-control" placeholder="Password"  id="psw" name="psw" type="password" value=""  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>



                                </div>  

                                <div class="form-group">  
                                   Confirm Password:<input class="form-control"   id="confirm" name="psw1"       placeholder="Retype Password" type="password" 

                                   value=""  title="Must fill same password" required>  
                                </div>

                                <input class="btn btn-lg btn-bg-info btn-block" type="submit" onclick="confirm123()" value="Submit" name="Submit" > 






</fieldset> 
 </form>
 </div>
 </div>
 </div>
   

   <div class="col-md-8 col-md-offset-">
<div id="message">
  <h5>Password must contain the following:</h5>
  <p id="letter" class="invalid">A lowercase letter</p>
  <p id="capital" class="invalid">A capital (uppercase) letter</p>
  <p id="number" class="invalid">A number</p>
  <p id="length" class="invalid">Minimum 8 characters</p>
  <p id ="sc" class="invalid"> A Special Charecter</p>
</div>
</div>




 </div>
 </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
var myInput = document.getElementById("psw");
var confirm = document.getElementById("psw1");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");
var sc=document.getElementById("sc");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

   var speciall= /[!@#$%^&*]/g;
    if(myInput.value.match(speciall))
   {
      sc.classList.remove("invalid");
       sc.classList.add("valid");
     } else {
    sc.classList.remove("valid");
     sc.classList.add("invalid");
  }



  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}


function confirm123(){
	var conf = $('psw').val();
	var pass = $('psw1').val();
	if(pass == conf && myInput.value.length >= 8 )


	{
		alert('password matched and password is strong and submit password successfully');
	}

   else
   	{ alert('password is empty');
	}
}



</script>



</body>
</html>