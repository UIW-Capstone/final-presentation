<?php 
//login Session
session_start();
//cannot route to this page if Session is not set
if(!isset($_SESSION["faculty"]))
{
    header("location:../login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Student Portfolio</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  custom style sheet -->
    <link rel="stylesheet" href="../css/new.css">
    
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../bootstrap-3.3.7/js/bootstrap.min.js"></script>
 
</head>
<body>
<div id="id01" class="modalform">
    <div id="form-box">
     
        <?php require('inCreateU_fac/create_errFac.php')?> 
    	<?php require('inCreateU_fac/create_bxFac.php') ?> 
    
    </div>
</div>
<!-- ------------------------------------- Carousel header Images ----------------------------------------------- -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
      	<!-- First carousel image -->
        <img src="../img/jBclock.png" alt="Joyce Building" width="1200" height="700">
        <div class="carousel-caption">
          <h3>School of Media and Design</h3>
        </div>      
      </div>
    </div>
</div>
<!-- ----------------------------Nav Bar------------------------------------------- -->
<nav class="navbar navbar-default navbar-mainNav" data-spy="affix" data-offset-top="580"> <!--data-spy = JS for sticky Nav bar-->
  <div class="container-fluid">
  	<!-- ------------------- Mobile Navbar ------------------- -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <!-- ------------------- Desktop Nav bar ------------------ -->
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      	<li><a href="#">HOME</a></li>
        <li><a href="#">CIS</a></li>
      	<li><a href="#">CSEC</a></li>
      	<li><a href="#">PORTFOLIO'S</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
  	</div>
  </div>
</nav>

</body>
</html>