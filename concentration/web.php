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
 
 	<link rel="icon" href="../img/uiw.png" type="image/gif">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<!-- -------------------------- Carousel header Images ------------------------------ -->

	<?php require('includes/CONCTheader.php') ?>

<!-- ------------------------- Stationary NAV bar under images ------------------------->

	<?php require('includes/CONCTnav.php') ?>

 <!-- -------------------Container (CIS/ CSEC program Section)----------------------- -->
<div class="container">
  <div class="row">
	<div class="col-sm-4 left-box">
        <div class="thumbnail">
            <img src="../img/deb.png" alt="Deborah Youngblood" class="image">
            <div class="middle">
               <div class=" text"><a href="mailto:dyoungbl@uiwtx.edu" target="_top">email</a></div>
            </div>
          <p class="text-center"><strong>Deborah Youngblood</strong></p>
          <p class="text-center">Web Development Specialist</p>
        </div>
      </div>
    <div class="col-sm-8 right-box">
      <h3 style="text-align:center; padding-top:30px;">Web Development</h3>
      <div>
      	<h4>Faculty</h4>
      	<p class="right-p">Youngblood, Deb - Freelance website designer/developer and U.S. Navy veteran. M.S. in Telecommunications Systems Management, MDiv from Austin Presbyterian Theological 
      	Seminary, BA in Business Administration (Accounting). Married to Phil for over 26 years. Loves to travel, hang with the pups and make things. Life Goal: to live, work 
      	and play every day on the Internet. Part time UIW CIS Faculty member since 2010.</p>
      </div>
    </div>
  </div>
  <br>
  <section>
    <div class="col-sm-4">
      <h5><b>Web Development Required Courses</b></h5>
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
      		<br> 3310 Database Systems Management 
      		<br> 3319 Internship in CIS
			<br> 3362 Systems Analysis and Design
			<br> 3365 Development II
			<br> 3367 Networks and Telecommunications (pre: 2335)</p>
			<p><b>4000 Level</b>
			<br> 4190 Seminar in CIS
			<br> 4310 Management of Technology
			<br> 4340 Windows Systems Security
			<br> 4375 Dynamic Websites 
			<br> 4390 CIS Capstone</p>
    </div>
  </section>
</div>

<!-- -----------------------------------Footer--------------------------------------- -->

	<?php require('includes/CONCTfooter.php') ?>

<!-- --------------------------------Sticky Nav---------------------------------- -->
<script>
$(document).ready(function(){
    /* affix the navbar after scroll below header */
    $(".navbar").affix({offset: {top: $("header").outerHeight(true)} });
});
</script> <!-- ----------------------------------------------------------------- -->

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>