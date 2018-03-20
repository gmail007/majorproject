<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
	$(document).ready(function() 
		{
		 $(".account").click(function()
		  { 
		  	var X=$(this).attr('id'); 
		  	if(X==1) 
		  		{ 
		  			$(".submenu").hide();
		  			 $(this).attr('id', '0'); 
		  			} 
		  			else
		  			 { 
		  			 	$(".submenu").show(); 
		  			 	$(this).attr('id', '1');
		  			 	 } 
		  			 	}); 
		 $(".submenu").mouseup(function() 
		 	{ 
		 		return false 
		 	});
		 	 $(".account").mouseup(function()
		 	  { return false });
		 	   $(document).mouseup(function() 
		 	   	{ $(".submenu").hide(); 
		 	   	$(".account").attr('id', '');
		 	   	 });
		 	   	  });




</script>
</head>
<body>
<header>
	<div class="container" style="">
		<div class="row">
            <div class="col-md-4 col-sm-4" style="" >
			<div class="logo">
			<img src="images/logo.png">
				</div>
			</div>
		
			<div class="col-md-4 col-sm-4" style="">
			<div class="search">
			<div class="form-group has-feedback">
    <input type="text" class="form-control" id="inputSuccess2"/ placeholder="search..">
    <span class="glyphicon glyphicon-search form-control-feedback"></span>
</div>



        </div>
        </div>
        <div class="col-md-4 col-sm-4" style="">
			<div class="imgicon" >
		<div class="dropdown1"> 
		<a href="#" class="account" > 

		<img src="images/dummy.png" class="profile-circle"/> 
		</a> 
		<div class="submenu" style="display: none; ">
		 <ul class="root">  <li > <a href="#" >Profile</a> </li> <li > <a href="#">Chang password</a> </li> <li> <a href="#">Sign Out</a> </li> </ul>
		  </div> 
		  </div>
			</div>
			</div>
			</div>
			</div>
			</header>
		