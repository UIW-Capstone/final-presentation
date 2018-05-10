<?php
//login Session
session_start();
//cannot route to this page if Session is not set
if(isset($_SESSION["student"]))
{
    echo '<h3 class="center">'.$_SESSION["student"].' Complete your porfolio page. </h3>';
}
else
{
    header("location:../login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
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
<body>
  <div class="ind-grd">
    <div style="margin-bottom:-25px">
	<h4 class="center">Update your portfolio here</h4>

	<?php require('edit_portf/portfError.php')?>
	<?php require('edit_portf/formBox.php')?>
  
    </div>
  </div>

<!-- footer -->
	<?php require('includesStud/footerStdt.php')?>
	
</body>
</html>