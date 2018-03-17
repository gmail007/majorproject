<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/index.css" type="text/css">
</head>
<body>
<form onsubmit="return myPhone()" action="" method="post" id="">
Mobile Number<input type="text" name="mobile" id="mobile" value="">
<div id="message" style="color:red;"></div><br>
<input type="button" name="submit"  value="Submit" id="button">
</form>
<script type="text/javascript">
		$("#button").click(function(){

			var mob= $("#mobile").val();
			if (mob=="") {
				$("#message").val("* Phone Number Can not be Null");
				return false;
			}
			if (isNaN(mob)) {
				$("#message").val("* Only Integer value are allowed");
				return false;
			}
			if (!(mob.length==10)) {
				$("#message").val("* Must be 10 digit");
				return false;
			}
		});
	</script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
