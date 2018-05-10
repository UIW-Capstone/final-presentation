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
<body id="myPage">

<!-- ---------------------------- Carousel header Images ------------------------------------ -->

	<?php require('includes/headerHOME.php') ?>
	<!--  require_once($_SERVER['DOCUMENT_ROOT'] . 'directory/directory/file'); -->

<!-- ----------------------- Stationary NAV bar under images ------------------------------>
	
	<?php require('includes/nav.php') ?>

 <!-- -----------------------Container (CIS/ CSEC program Section)--------------------------- -->
  <div class="container">
    <h3 class="text-center">WHAT ARE STUDENT PORTFOLIOS?</h3>
  	  <p>The faculty from the School of Media Design welcomes you to the Student Portfolio website, designed by students from the CIS Capstone course!</p>
	  <p>The goal of this website is for students to be able to share their work, projects and knowledge in a basic portfolio style. Students can upload documents and pictures in a resume like format that can help the faculty find possible internships. The students can also optimize the full potential of the website by keeping track of the classes they have taken under each specific concentration. For incoming, new students, who have not yet decided which concentration they wish to take, there is a summary of each concentration and the faculty member that is in charge of said concentration.</p>
	  <p>If there are any questions regarding any of the concentrations or the overall program, please contact your advisor or any of the programs faculty.</p>
  </div>
  <!-- parralax image section -->
  <div class="prlximg1">
    <div class="cap">
      <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">REALMS OF LEARNING</span>
    </div>
  </div>
  <div class="ind-grd"> 
    <div class="container">
      <h3 class="text-center">SCHOOL OF MEDIA AND DESIGN </h3> 
        <p>UIW's School of Media and Design (SMD) dynamically integrates, cutting-edge academic programs including 3D Animation and Game Design, Communication Arts, Computer Information Systems, Cyber Security, Fashion Management, Graphic Design, Interior Design, and Design Media and Technology Studies.</p>
  	    <p>SMD serves the needs of students by providing a firm foundation in theory and application utilizing innovative, state-of-the-art software and computer technology. In harmony with UIW's Mission, SMD seeks not only to develop the necessary knowledge and skills to become effective professionals in students' selected careers, but to help cultivate them in becoming concerned and enlightened citizens, rooted in the core values of education, truth, faith, service and innovation.</p>
    </div>
  </div>
<!----------------------------------- Footer --------------------------------------->

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