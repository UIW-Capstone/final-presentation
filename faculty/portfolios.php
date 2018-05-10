<?php 
//login Session
session_start();
//cannot route to this page if Session is not set
if(!isset($_SESSION["faculty"]))
{
    header("location:../login.php");
} else {
    
    require('inCreateU_fac/createPDO_fac.php');

    $net="";
    $cyb="";
    $web="";
    $prog="";
    $emrg="";
    $und="";
    
    $select = $conn->prepare("SELECT * FROM portfolio"); 
    $select->execute();
    while($row = $select->fetch(PDO::FETCH_ASSOC)) {
        if($row['sel_conct'] == 'cyber security'){
            $cyb .= '<div class="col-sm-3 col-md-2 text-center">';
            //passes $row['idnum'] from DB to the next page so we can seperate each student Portfolio view
            $cyb .= '<a href="viewStdt.php?idnum='.$row['idnum'].'">';
            $cyb .= '<div style="border-radius:10px;border:1px solid #ccc;margin-bottom:20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 2px 20px 0 rgba(0, 0, 0, 0.19);">'.$row['idnum'].'<img id="mini-portf" class="img-rounded center-img" src="data:image;base64,'.$row['imgFile'].'">'.$row['fname'].'<br>'.$row['lname'];
            $cyb .= '</div>';
            $cyb .= '</a></div>';
        } if($row['sel_conct'] == 'networking'){
            $net .= '<div class="col-sm-3 col-md-2 text-center">';
            $net .= '<a href="viewStdt.php?idnum='.$row['idnum'].'">';
            $net .= '<div style="border-radius:10px;border:1px solid #ccc;margin-bottom:20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 2px 20px 0 rgba(0, 0, 0, 0.19);">'.$row['idnum'].'<img id="mini-portf" class="img-rounded center-img" src="data:image;base64,'.$row['imgFile'].'">'.$row['fname'].'<br>'.$row['lname'];
            $net .= '</div>';
            $net .= '</a></div>';
        } if($row['sel_conct'] == 'web development'){
            $web .= '<div class="col-sm-3 col-md-2 text-center">';
            $web .= '<a href="viewStdt.php?idnum='.$row['idnum'].'">';
            $web .= '<div style="border-radius:10px;border:1px solid #ccc;margin-bottom:20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 2px 20px 0 rgba(0, 0, 0, 0.19);">'.$row['idnum'].'<img id="mini-portf" class="img-rounded center-img" src="data:image;base64,'.$row['imgFile'].'">'.$row['fname'].'<br>'.$row['lname'];
            $web .= '</div>';
            $web .= '</a></div>';
        } if($row['sel_conct'] == 'programming'){
            $prog .= '<div class="col-sm-3 col-md-2 text-center">';
            $prog .= '<a href="viewStdt.php?idnum='.$row['idnum'].'">';
            $prog .= '<div style="border-radius:10px;border:1px solid #ccc;margin-bottom:20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 2px 20px 0 rgba(0, 0, 0, 0.19);">'.$row['idnum'].'<img id="mini-portf" class="img-rounded center-img" src="data:image;base64,'.$row['imgFile'].'">'.$row['fname'].'<br>'.$row['lname'];
            $prog .= '</div>';
            $prog .= '</a></div>';
        } if($row['sel_conct'] == 'emerging tech'){
            $emrg .= '<div class="col-sm-3 col-md-2 text-center">';
            $emrg .= '<a href="viewStdt.php?idnum='.$row['idnum'].'">';
            $emrg .= '<div style="border-radius:10px;border:1px solid #ccc;margin-bottom:20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 2px 20px 0 rgba(0, 0, 0, 0.19);">'.$row['idnum'].'<img id="mini-portf" class="img-rounded center-img" src="data:image;base64,'.$row['imgFile'].'">'.$row['fname'].'<br>'.$row['lname'];
            $emrg .= '</div>';
            $emrg .= '</a></div>';
        } if($row['sel_conct'] == 'undecided') {
            $und .= '<div class="col-sm-3 col-md-2 text-center">';
            $und .= '<a href="viewStdt.php?idnum='.$row['idnum'].'">';
            $und .= '<div style="border-radius:10px;border:1px solid #ccc;margin-bottom:20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 2px 20px 0 rgba(0, 0, 0, 0.19);">'.$row['idnum'].'<img id="mini-portf" class="img-rounded center-img" src="data:image;base64,'.$row['imgFile'].'">'.$row['fname'].'<br>'.$row['lname'];
            $und .= '</div>';
            $und .= '</a></div>';
        } 
    }
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
<body id="all-students">

<!-- ------------------------------------- Carousel header Images ----------------------------------------------- -->
	<?php require('includesFac/headerFac.php') ?>

<!-- ------------------ Stationary NAV bar under images ---------------------->
	<?php require('includesFac/navFac.php') ?>

 <!-- -------------------------------------Container (CIS/ CSEC program Section)--------------------------------------- -->
  <div class="ind-grd"> 
    <div class="container">
    <h3 class="text-center">Student Portfolios by Concentration</h3>
      <div class="panel-group" id="accordion">
      	<div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title text-center">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">WEB DESIGN</a>
            </h3>
          </div>
          <div id="collapse4" class="panel-collapse collapse in">
            <div class="panel-body"><?php echo $web; ?></div>
          </div>
        </div>
      	<div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title text-center">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">CYBER SECURITY</a>
            </h3>
          </div>
          <div id="collapse1" class="panel-collapse collapse">
            <div class="panel-body"> <?php echo $cyb; ?> </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title text-center">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">NETWORKING</a>
            </h3>
          </div>
          <div id="collapse2" class="panel-collapse collapse">
            <div class="panel-body"> <?php echo $net; ?> </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title text-center">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">PROGRAMMING</a>
            </h3>
          </div>
          <div id="collapse3" class="panel-collapse collapse">
            <div class="panel-body"> <?php echo $prog; ?> </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title text-center">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">EMERGING TECH</a>
            </h3>
          </div>
          <div id="collapse5" class="panel-collapse collapse">
            <div class="panel-body"><?php echo $emrg; ?></div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title text-center">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">UNDECIDED</a>
            </h3>
          </div>
          <div id="collapse6" class="panel-collapse collapse">
            <div class="panel-body"></div>
          </div>
        </div>
      </div> <!-- class panel-group -->
    </div> <!-- closes container -->
  </div> <!-- closes ind-grd -->
<!-- --------------------------------Footer------------------------------------------ -->
	
	<?php require('includesFac/footerFac.php') ?>
	
<!-- --------------------------------Sticky Nav---------------------------------- -->
  <script>
  $(document).ready(function(){
    /* affix the navbar after scroll below header */
    $(".navbar").affix({offset: {top: $("header").outerHeight(true)} });
  });
  </script> 

</body>
</html>