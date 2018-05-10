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
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<!-- ------------------------------------- Carousel header Images ----------------------------------------------- -->

	<?php require('includesFac/headerFac.php') ?>

<!-- ------------------ Stationary NAV bar under images ---------------------->
	<?php require('includesFac/navFac.php') ?>

<!-- -------------------------------------Container (CIS/ CSEC program Section)--------------------------------------- -->
    <div class="container">
      <h3 class="text-center">Bachelor of Science in Computer Information Systems</h3>
      <div>
      	<p>The CIS program at UIW offers Bachelor of Science degrees in both Computer Information Systems (CIS) and Cyber Security Systems (CSEC). The theoretical knowledge and experiential 
      	skills covered in both degree plans provide students a foundation for multiple career paths in these technical fields.
    	The CIS and CSEC majors share foundation and advanced courses in computer hardware, networks, telecommunications, operating systems, programming, website development, database systems, systems analysis, 
    	and management of technology and IT personnel. Career development courses include: Seminar, Internship, and Capstone or Practicum where students demonstrate expertise in a specific field by working 
    	for an outside organization.</p>
    	<p>The CIS course curriculum incorporates the best guidance from professional organizations and regional businesses. This enable our curriculum to reflect current and leading edge knowledge and skills. 
    	Our program continues to incorporat emerging technologies and practices of the global environment in which we live.</p>
      </div>
    </div>
<!-- ----------------parralax image section------------------------- -->
    <div class="prlximg2">
      <div class="cap">
        <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">CIS REQUIREMENTSS</span>
      </div>
    </div>
    
    <div class="ind-grd"> 
      <div class="container">
      <div class="row">
        <div class="col-sm-4">
            <p><b>120 Credit Hours (minimum)</b>
            <br>46 hours    university core course work
            <br>21 hours    basic CIS course work
            <br>12 hours    advanced CIS course work
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
      </div> <!-- closes row --> 
      	 <br>
         <p>In the CIS/CSEC program, students have the opportunity to decide what their field of study will be. There are currently five areas that are offered and taught in this program: Cyber Security, Networking, Programming, Web Design, and Emerging Technologies. Each of the students will study in their choice field while being exposed to the other learning fields. During their time in this program, each student will learn the basics of each concentration to get a grasp and better understanding for the overall program.</p>
      </div> <!-- closes container -->
    </div>

<!-- ---------------------------- Footer--------------------------------------- -->
<?php require('includesFac/footerFac.php') ?>

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