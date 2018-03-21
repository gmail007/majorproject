<?php
include_once("connection.php");

$fetchdata=new DB_con();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/content.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            function myFunction() {
            var checkBox = document.getElementById("myCheck");
            var text = document.getElementById("b1");
             if (checkBox.checked == true){
              text.style.display = "block";
              } 
              else {
              text.style.display = "none";
                   }
               }
        </script>
        <script>
             $(document).ready(function(){
             	$(".compose").hide();
             	$(".inbox").show();
             	$(".sent").hide();
             	$(".draft").hide();
             	$(".trash").hide();
             	
             
             $("#compose").click(function(){
             $(".compose").show();
             $(".inbox").hide();
             $(".draft").hide();
             $(".trash").hide();
             $(".sent").hide();
            });
             
             $("#inbox").click(function(){
             $(".inbox").show();
             $(".compose").hide();
             $(".sent").hide();
             $(".draft").hide();
             $(".trash").hide();
             });

             $("#sent").click(function(){
             $(".sent").show();
             $(".compose").hide();
             $(".inbox").hide();
             $(".draft").hide();
             $(".trash").hide();
             });

             $("#draft").click(function(){
             $(".draft").show();
             $(".compose").hide();
             $(".sent").hide();
             $(".inbox").hide();
             $(".trash").hide();
             });

             $("#trash").click(function(){
             $(".trash").show();
             $(".compose").hide();
             $(".sent").hide();
             $(".draft").hide();
             $(".inbox").hide();
             });
});
</script>
</head>
<body>
	<header><h1>Hesta.<span>Com</span></h1></header>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<nav>
						<button id="compose">Compose</button>
		    			<button id="inbox">Inbox</button>
						<button id="sent">Sent</button>
						<button id="draft">Draft</button>
						<button id="trash">Trash</button>
					</nav>
				</div>
				<div class="col-md-9">
					<div class="row">
						<div class="col-md-12">
							<section class="compose">
								<form class="com_form" name="insert" action="" method="post">
								<table>
								  <tr>
									<td><input type="email" name="from" placeholder="From" required="required"></td>
									</tr>
									<tr>
									<td><input type="email" name="to" placeholder="To" required="required"></td>
									</tr>
									<tr>
									<td><input type="text" name="subject" placeholder="Subject"></td>
									</tr>
									<tr>
									<td><textarea cols="80" rows="10" name="message" id="message" placeholder="Message"></textarea></td>
									</tr>
									<tr>
									<td><input type="file" name="attachment" id="attachment" value="attachment"></td>
									</tr>
									<tr>
									<td><input type="submit" name="submit" value="Send" class="send">
									<input type="submit" name="submit" value="Save in Draft" class="save-draft"></td>
									</tr>
								</table>
								</form>
								 <?php
								if(isset($_POST['submit']))
                                  {
                                $from=$_POST['from'];
                                $to=$_POST['to'];
                                $subject=$_POST['subject'];
                                $message=$_POST['message'];
                                $attachment=$_POST['attachment'];
                                $sql=$fetchdata->insert($from,$to,$subject,$message,$attachment);
                                if($sql)
                                 {
                                echo "<script>alert('Email has been sent');</script>";
                                 }
                                else
                                 {
                                echo "<script>alert('email can not be sent.. Network error');</script>";
                                }
                                }
                                ?>
							</section>
							<section class="inbox">
								 <table width="100%"  border="0">
                                     <?php
                                         $sql=$fetchdata->fetchdata();
                                         while($row=mysqli_fetch_array($sql))
                                         {
                                    ?>
                                    
                                    <tr>
                                        <button id="b1" style="display:none">Delete</button>
                                        <td><input type="checkbox" id="myCheck"  onclick="myFunction()"></td>
                                        <th> 
                                         <a href="#"><?php echo $row['sender_id'];?></a></th>
                                        <th><a href=""><?php echo $row['subject'];?></a></th>
                                        <td><a href=""><?php echo $row['message'];?></a></td>
                                        <td><a href=""><?php echo $row['time'];?></a></td>
                                        </tr>
                                    <?php } ?>
                                   </table>
                                   </section>
							       <section class="sent"><table width="100%"  border="0">
                                     <?php
                                         $sql=$fetchdata->fetchdata_sent();
                                         while($row=mysqli_fetch_array($sql))
                                         {
                                    ?>
                                    
                                    <tr>
                                        <button id="b1" style="display:none">Delete</button>
                                        <th> <input type="checkbox" id="myCheck"  onclick="myFunction()">
                                        <a href="#"><?php echo $row['reciver'];?></a></th>
                                        <th><a href=""><?php echo $row['subject'];?></a></th>
                                        <td><a href=""><?php echo $row['message'];?></a></td>
                                        <td><a href=""><?php echo $row['time'];?></a></td>
                                        </tr>
                                    <?php } ?>
                                   </table>
                                   </section>
							<section class="draft"><pre>jhewf ehjwgfbkjehvf 
							jhelglvhrgri
							ebfljehbvhbvbhej
							drjbvhjbjbhbvhvbvluhv
							dejbevlhbvelhbvhhbvdehuvejhmu</pre></section>
							<section class="trash"><pre>
							jhewf ehjwgfbkjehvf 
							jhelglvhrgri
							ebfljehbvhbvbhej
							drjbvhjbjbhbvhvbvluhv
							dejbevlhbvelhbvhhbvdehuvejhmu
							ijdoijdoijdoijqdoijqs 
							']


							lkdmjdlk



							lkmdjnjk</pre></section>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer></footer>
	
</body>
</html>