<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/head.css"><link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
<style>
* {
    box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.div1 {
  position: relative;
    float: left;
    width: 100%;
    padding: 10px;
    height: 600px; /* Should be removed. Only for demonstration */
    background-color:#4782a3;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
.container123
{
  margin: 0;
  padding: 0;
}
.space
{
  margin: 0;
  padding: 0;
}
   .hesta 
   {
       font-size: 88px;
       text-align: center;
   }
       .hestaText
       {
           font-size: 35px;
           text-align: center;
           color:#ffffff;
       }
       .img-circle-logo
       {
         height: 200px;
         width: 200px;
         border-radius: 50%;
         overflow: hidden;
         background-color: #fff;
         margin: auto;
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%,-50%);
       }
        .img-circle-logo img
        {
       width: 100%;
      margin: 0 auto;
      padding:40px;
        background-image: no-repeat;
        }
        
        .text1
        {
            
            position: absolute;
            
            transform: translate(-50,-50);
            top:72%;
            left: 20%;


        }
          .text1 h2
          {
              font-size: 45px;
              font-family: 'Tangerine', serif;
          }

          .text1 p
          {
              color:  #f4f6f7;
              font-size: 23px;
              text-align: center;
              font-family: 'Tangerine', serif;
          }
              .headText
            {
                margin-top:10%;
                


            }
              

          .headText p
          {
              color: #f4f6f7;
              font-size: 36px;
              text-align: center;
              font-family: 'Tangerine', serif;  
          }
            
</style>
</head>
<body>
<header>
        <div class="container">
        <div class="row">
             <div class="col-md-6 col-sm-6 col-xs-6 space">
               <div class="logo">
                  <img src="images/logo2.png" class="img-responsive">

               </div>
        </div>

      <div class="col-md-6 col-sm-6 col-xs-6 space">
        <div class="signinbx">
        <a href="#" id="signinbtn" class="btn btn-info">Sign Up</a>
        </div>
      </div>

    </div>
</div>
</header>
<section class="content-page">
<div class="container-fluid">
<div class="row">
<div class="col-md-6 space">
   <div class="div1" style="">

     <div class="headText">
           <p >How to Build a Great Work Relationships One Message at a Time</p>
     </div>
  <!--   <h2 class="hesta"><span style="color:#ffffff"> Welcome to Hesta</span>mail.com</h2> -->
       <div class="img-circle-logo">
         <img src="images/logo (12).png">
  </div>
     <div class="text1"  >
    <h2 ><span style="color: #ffffff">Welcome</span> <span style="color:#2b3033">Hesta</span><span style="color:#1f6996">mail</span></h2>
       <p>We'll be in touch</p>
    </div>

  </div>
  </div>
  <div class="col-md-6 space">
      <div class="div1" style="background-color:#bbb;">
                  
  </div>
</div>
</div>
</div>
</section>

</body>
</html>
