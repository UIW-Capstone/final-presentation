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
    <link rel="stylesheet" href="../../bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  custom style sheet -->
    <link rel="stylesheet" href="../../css/new.css">
    
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../../bootstrap-3.3.7/js/bootstrap.min.js"></script>
 
 	<link rel="icon" href="../img/uiw.png" type="image/gif">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<!-- -------------------------- Carousel header Images ------------------------------ -->

	<?php require('includesFac/CONCTheader_Fac.php') ?>

<!-- ------------------------- Stationary NAV bar under images ------------------------->

	<?php require('includesFac/CONCTnav_Fac.php') ?>

 <!-- -------------------Container (CIS/ CSEC program Section)----------------------- -->
<div class="container">
  <div class="row">
	<div class="col-sm-4 left-box">
        <div class="thumbnail">
            <img src="../../img/champion.jpg" alt="John Champion" class="image">
            <div class="middle">
               <div class=" text"><a href="mailto:champion@uiwtx.edu" target="_top">email</a></div>
            </div>
          <p class="text-center"><strong>John Champion</strong></p>
          <p class="text-center">Networking specialist</p>
        </div>
      </div>
    <div class="col-sm-8 right-box">
      <h3 style="text-align:center; padding-top:30px;">Networking</h3>
      <div>
      	<h4>Faculty</h4>
      	<p class="right-p">Champion, John - Professional musician (went on tour), then TV journalism (KSAT/KBB/WAI Ch4), then Time-Warner (installed Roadrunner), BusinessWire (Project Lead in encrypted news delivery), and Fort Sam Houston (Project Manager). MS in CIS and BA in Broadcast Journalism. Plays guitar, writes songs, expert photographer. Part-time UIW CIS Faculty member from 2008-2011 and full time since 2012.</p>
      </div>
    </div>
  </div>
  <br>
  <section>
  	<div class="col-sm-4">
      <h5><b>Networking Required Courses</b></h5>
  	  		<p><b>1000 Level</b>
  	  		<br> 1301 Computer Information Systems</p>
	  		<p><b>2000 Level</b>
	  		<br> 2328 Hardware and Systems Software
	  		<br> 2330 Programming I
      		<br> 2335 Network+
      		<br> 2340 Windows Operating Systems
      		<br> 2350 UNIX/Linux Operating Systems (pre: 2340)
      		<br> 2368 Website Development I (pre: 2328)</p>
  	</div>
  	<div class="col-sm-4">
  	  <p><b>3000 Level</b>
      		<br> 3319 Internship in CIS
			<br> 3325 Linux Networking
			<br> 3340 Client-Server Networking
			<br> 3362 Systems Analysis and Design
			<br> 3367 Networks and Telecommunications (pre: 2335)</p>
			<p><b>4000 Level</b>
			<br> 4190 Seminar in CIS
			<br> 4310 Management of Technology
			<br> 4340 Computer Systems Security
			<br> 4355 Cloud Computing
			<br> 4370 Computer Network Security
			<br> 4390 CIS Capstone</p>
  	</div>
  </section>
</div>

<!-- -----------------------------------Footer--------------------------------------- -->

	<?php require('includesFac/CONCfooter_Fac.php') ?>

<!-- --------------------------------Sticky Nav---------------------------------- -->
<script>
$(document).ready(function(){
    /* affix the navbar after scroll below header */
    $(".navbar").affix({offset: {top: $("header").outerHeight(true)} });
});
</script>

</body>
</html>