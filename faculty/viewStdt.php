<?php 
//login Session
session_start();
//cannot route to this page if Session is not set
if(!isset($_SESSION["faculty"]))
{
    header("location:../login.php");
}

$student = $_GET['idnum'];

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
 
 	<link rel="icon" href="img/uiw.png" type="image/gif">
</head>
<body id="portf-page">

<!-- ------------------------------------- Carousel header Images ----------------------------------------------- -->

	<?php require('includesFac/headerFac.php') ?>

<!-- ------------------ Stationary NAV bar under images ---------------------->
	<?php require('includesFac/navFac.php') ?>

 <!-- -------------------------------------Container (CIS/ CSEC program Section)--------------------------------------- -->
<div class="ind-grd"> 
    <div class="container">
    	<div  class="text-center">
      		<?php  echo "<h3>Student ".$student." Portfolio</h3>"; ?>
      	</div>
        <?php 	
            //connect to DB
            require('inCreateU_fac/createPDO_fac.php');
            //executes the sql insert and provides feedback to user
            try{
                $select = $conn->prepare("SELECT * FROM portfolio WHERE idnum = '".$student."'"); 
                $select->execute();
     
                while($row = $select->fetch(PDO::FETCH_ASSOC)) {                 
                    echo '<div>'; //style="border:1px #C4C4C4 solid; background-color:white;"
                    echo '<h4 style="background:linear-gradient(to right, #FFFFFF, #e60000, #FFFFFF">'.ucwords($row['fname']).' '.ucwords($row['lname']).'</h4>';
                        echo '<div class="row" style="color:black">';
                          echo '<div class="col-sm-5">';
                            echo '<img class="center-img" width="80%" max-height="250" src="data:image;base64,'.$row['imgFile'].'">'; //etc...
                          echo '</div>';
                          echo '<div class="col-sm-7 lead" style="padding-right:15px;">';
                            echo '<p>Major - '.strtoupper($row['sel_major']).'<br>Concentration - '.ucwords($row['sel_conct']).'<br>Grade level - '.ucwords($row['sel_grdlvl']).'</p>';
                            echo '<p>Skill set:<br> '.$row['comment'].'</p>';
                            
                            echo '<p>Projects:</p>';
                            require('inCreateU_fac/createPDO_fac.php');
                            $view = $conn->prepare("SELECT * FROM proj_files");
                            $view->execute();
                            while($row = $view->fetch()) {
                                echo '<li><a target="_blank" href="viewF.php?id='.$row['id'].'">'.$row['name'].'</a><br><iframe src="file:'.$row['type'].';base64,'.base64_encode($row['file']).'" style="width:200; z-index:10;"></iframe></li>';
                            }
                                
                          echo '</div>';
                        echo '</div>'; 
                    echo '</div>';
                }
            } 
                
            //if an error occurs in try, this will display an error message
            catch(PDOException $e){
                echo "<br>" . $e->getMessage(); 
            }
            $conn = null;
        ?> 
    </div>
</div>
<!-- --------------------------------Footer------------------------------------------ -->
	
	<?php require('includesFac/footerFac.php') ?>
	
<!-- --------------------------------Sticky Nav---------------------------------- -->
<script>
$(document).ready(function(){
    /* affix the navbar after scroll below header */
    $(".navbar").affix({offset: {top: $("header").outerHeight(true)} });
});
</script> <!-- ----------------------------------------------------------------- -->


</body>
</html>