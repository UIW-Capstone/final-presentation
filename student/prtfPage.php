<?php 
//login Session
session_start();
//cannot route to this page if Session is not set
if(!isset($_SESSION["student"]))
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
 
 	<link rel="icon" href="img/uiw.png" type="image/gif">
</head>
<body id="portf-page">

<!-- ------------------------------------- Carousel header Images ----------------------------------------------- -->

	<?php require('includesStud/headerStdt.php') ?>

<!-- ------------------ Stationary NAV bar under images ---------------------->
	<?php require('includesStud/navStdt.php') ?>

 <!-- -------------------------------------Container (CIS/ CSEC program Section)--------------------------------------- -->
<div class="ind-grd"> 
    <div class="container">
    	<div  class="text-center">
      		<h3>Your Portfolio</h3>
      		<?php  echo "<h3>".$_SESSION["student"]."</h3>"; ?>
      	</div>
        <?php 	
            //connect to DB
            require('edit_portf/portfPDO.php');
            //executes the sql insert and provides feedback to user
            try{
            //Checks if users id# (idnum) exists in the Database based of $_SESSION (student id#)
                $stmt = $conn->prepare("SELECT * FROM portfolio WHERE idnum = '".$_SESSION['student']."'"); 
                $stmt->execute();
                $check = $stmt->fetch();
            //If users id# is not in DB then edit your profile to make a page
                if (!$check["idnum"] == $_SESSION["student"])
                {
                    echo "Update your profile";
                    echo "<a href='edit_portf.php' class='btn btn-primary pull-right' role='button' aria-pressed='true' style='background:red'>Edit Portfolio</a>";
            //displays users portfolio page
                } else {
                    $select = $conn->prepare("SELECT * FROM portfolio WHERE idnum = '".$_SESSION['student']."'"); //ORDER BY id DESC LIMIT
                    $select->execute();
     
                    while($row = $select->fetch(PDO::FETCH_ASSOC)) {
                        echo '<a href="edit_portf.php" class="btn btn-primary" role="button" style="background:red; margin-bottom:10px;">Edit Portfolio</a>';
                        echo '<div>'; //style="border:1px #C4C4C4 solid; background-color:white;"
                        echo '<h4 style="background: linear-gradient(to right, #F2F2F2, #e60000, #F2F2F2">'.ucwords($row['fname']).' '.ucwords($row['lname']).'</h4>';
                            echo '<div class="row" style="color:black">';
                              echo '<div class="col-sm-5">';
                                echo '<img class="center-img" width="80%" max-height="250" src="data:image;base64,'.$row['imgFile'].'">'; //etc...
                              echo '</div>';
                              echo '<div class="col-sm-7 lead" style="padding-right:15px;">';
                                echo '<p>Major - '.strtoupper($row['sel_major']).'<br>Concentration - '.ucwords($row['sel_conct']).'<br>Grade level - '.ucwords($row['sel_grdlvl']).'</p>';
                                echo '<p>Skill set:<br> '.$row['comment'].'</p>';
                                
                                require('includesStud/projectUpload.php');
                                
                              echo '</div>';
                            echo '</div>'; 
                        echo '</div>';
                    }
                }  
            }
                
            //if an error occurs in try, this will display an error message
            catch(PDOException $e){
                echo "<br>" . $e->getMessage(); //echo $sql . "<br>" . $e->getMessage(); >> to see $sql (what user entered)
                $msg2 = "<br>Make sure username is #'s (student ID)<br>";
                echo $msg2;
            }
            $conn = null;
        ?>
    </div>
</div>
<!-- --------------------------------Footer------------------------------------------ -->
	
	<?php require('includesStud/footerStdt.php') ?>
	
<!-- --------------------------------Sticky Nav---------------------------------- -->
<script>
$(document).ready(function(){
    /* affix the navbar after scroll below header */
    $(".navbar").affix({offset: {top: $("header").outerHeight(true)} });
});
</script> <!-- ----------------------------------------------------------------- -->


</body>
</html>