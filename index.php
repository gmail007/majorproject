<?php
error_reporting(E_ALL);
ini_set('display_errors',1);



?>

<!doctype html>
<html>
<head>
    <title>Hesta Mail-the mail service for all</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
   <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <section id="sign_section">
        <div class="container">

            <div class="signup">
                <h2>Sign Up here for Hesta mail</h2>
                <form class="form-horizontal" method="post" id="myform" action="insert.php">
                    <div class="form-group">
                        <label class="control-label col-md-2">First name</label>
                        <div class="col-md-2">
                        <input type="text" name="first" id="first" class="form-control" placeholder="Enter first name">

                        </div>
                        <div class="col-md-2">
                            <input type="text" name="last" id="last" class="form-control" placeholder="Enter last name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2">Username</label>
                        <div class="col-md-4">
                        <input type="text" name="username" id="username" class="form-control" placeholder="Enter username">
                        </div>
                        <div id="list">
                            <h3>available usernames</h3>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2">password</label>
                        <div class="col-md-4">
                        <input type="password" name="password" id="pas" class="form-control" placeholder="Enter password">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2">Confirm password</label>
                        <div class="col-md-4">
                        <input type="password" id="cpas" name="confirm" class="form-control" placeholder="confirm password">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2">Gender</label>
                        <div class="col-md-4">
                        male <input type="radio" value="male" id="male" name="gender">
                        Female <input type="radio" id="female" name="gender">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2">Date of birth</label>
                        <div class="col-md-4">
                        <input type="date" class="form-control" id="dob" name="dat" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2">Phone no.</label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">+91 </button>

                                </div>
                            <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter phone number" >

                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2">Location</label>
                        <div class="col-md-4">
                            <select name="location" id="location" class="form-control">
                                <option>select country</option>
                                <option value="india">India</option>
                                <option value="srilanka">srilanka</option>
                                <option value="pakistan">Pakistan</option>
                                <option value="bhutan">Bhutan</option>
                                <option value="bangladesh">Bangladesh</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-offset-3">
                        <button type="button" id="sub" class="btn btn-success" name="submit">Next step</button>
                        </div>
                    </div>
                </form>
                <div id="result"></div>
            </div>
        </div>
    </section>

<script>
    $(document).ready(function () {
        $('form').submit(function (e) {
           e.preventDefault();
        });

        $('#sub').click(function(){
                var first = $('#first').val();
                var last =$('#last').val();
                var username = $('#username').val();
                var password = $('#pas').val();
                var confirm = $('#cpas').val();
                var gender = $('#male').val();
                var dat = $('#dob').val();
                var phone = $('#phone').val();
                var location = $('#location').val();


           $.ajax({
               type: "POST",
               url: "insert.php",
               data: "first="+first+"&last="+last+"&username="+username+"&password="+password+"&gender="+gender+"&dob="+dat+"&phone="+phone+"&location="+location,
               success: function (data) {
                   alert('success');
               }


           });
        });
    });
</script>
</body>
</html>