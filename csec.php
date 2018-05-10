<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Student Portfolio</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  custom style sheet -->
    <link rel="stylesheet" href="css/new.css">
    
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
 
 	<link rel="icon" href="img/uiw.png" type="image/gif">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<!-- ------------------------------------- Carousel header Images ----------------------------------------------- -->

	<?php require('includes/headerHOME.php') ?>

<!-- ------------------ Stationary NAV bar under images ---------------------->
	<?php require('includes/nav.php') ?>

<!-- -------------------------------------Container (CIS/ CSEC program Section)--------------------------------------- -->
    <div id="band" class="container">
      <h3 class="text-center">Bachelor of Science in Cyber Security</h3>
      	<p>The Computer Information Systems program at UIW offers Bachelor of Science degrees in both Computer Information Systems (CIS) and Cyber Security Systems (CSEC). The theoretical knowledge and experiential 
      	skills covered in both degree plans provide students a foundation for multiple career paths in these technical fields.
    	The CIS and CSEC majors share foundation and advanced courses in computer hardware, networks, telecommunications, operating systems, programming, website development, database systems, systems analysis, 
    	and management of technology and IT personnel. Career development courses include: Seminar, Internship, and Capstone or Practicum where students demonstrate expertise in a specific field by working 
    	for an outside organization.</p>
    	<br>
    	<p>The CSEC course curriculum incorporates the best guidance from government agencies and the best features of nationally recognized security programs and security related degrees at universities and colleges
    	in San Antonio. We continue to upgrade the curriculum when called for to include new and emerging technologies and practices of the global environment in which we live. Students choosing the CSEC major must complete ECON 2301 Macroeconomics as their Behavioral Science course. MATH 2303 is required for CSEC.</p>
    </div>
    <!-- ----------------parralax image section------------------------- -->
      <div class="prlximg3">
        <div class="cap">
          <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">CSEC REQUIREMENTSS</span>
        </div>
      </div>
    
    <div class="ind-grd"> 
      <div class="container">
      <div class="row">
        <div class="col-sm-4">
            <p><b>120 Credit Hours (minimum)</b>
            <br>46 hours    university core course work
            <br>21 hours    basic CSEC course work
            <br>12 hours    advanced CSEC course work
            <br>7 hours    career development course work
            <br>19 hours    student selected electives</p>
        </div>
        <div class="col-sm-4">
          <h6><b>Core Classes Required</b></h6>
          	<p>15 hours student selected specialization courses
          	<br>
      	    <br><b>1000 Level</b>
      	    <br> 1301 Computer Information Systems</p>
      	</div>    
      	<div class="col-sm-4">
    	    <p><b>2000 Level</b>
    	    <br> 2328 Hardware and Systems Software
    	    <br> 2330 Programming I
            <br> 2335 Network+
            <br> 2340 Windows Operating Systems
            <br> 2350 UNIX/Linux Operating Systems 
            <br> 2368 Website Development I </p>
        </div>
      </div>
      	 <br>
      <p>CSEC students must complete sets of courses that focus on how to secure computer networks, how to design security into computer information systems, and how to secure organizational infrastructure and information.</p>
      </div>
    </div>

<!-- --------------------------------Footer------------------------------------------ -->
	
	<?php require('includes/footerHOME.php') ?>
	
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