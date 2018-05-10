<?php     
  //initialize variables as null
$fname = $lname = $idnum = $sel_major = $sel_conct = $sel_grdlvl = $comment = ""; 
$fnameErr = $lnameErr = $idnumErr = $sel_majorErr = $sel_conctErr = $sel_grdlvlErr = $commentErr = ""; 
  //gets form input & as long as there is content in the input
  //the variable is sent to be cleaned
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
    if(empty($_POST["fname"])){
        $fnameErr = "* First Name is required";
    }else{
        $fname = test_input($_POST["fname"]);
        // check if name only contains letters no whitespace
        if (!preg_match("/^[a-zA-Z]*$/",$fname)) {
            $fnameErr = "* only Letters no white space allowed";
        }
    }
    
    if(empty($_POST["lname"])){
        $lnameErr = "* Last Name is required";
    }else{
        $lname = test_input($_POST["lname"]);
        // check if name only contains letters no whitespace
        if (!preg_match("/^[a-zA-Z]*$/",$lname)) {
            $lnameErr = "* only Letters no white space allowed";
        }
    }
   
    if(empty($_POST["idnum"])){
      $idnumErr = "* ID is required";
    }else{
      $idnum = test_input($_POST["idnum"]);
      // check if name only contains numbers no whitespace
      if (!preg_match("/^[0-9]*$/",$idnum)) {
          $idnumErr = "* only Numbers no white space allowed";
      }
    }
    
    if(empty($_POST["sel_major"])){
        $sel_majorErr = "* Field required";
    }else{
        $sel_major = test_input($_POST["sel_major"]);
        // check if name only contains numbers no whitespace
    }
    
   if(empty($_POST["sel_conct"])){
        $sel_conctErr = "* Field required";
    }else{
        $sel_conct = test_input($_POST["sel_conct"]);
        // check if name only contains numbers no whitespace
    }
    
    if(empty($_POST["sel_grdlvl"])){
        $sel_grdlvlErr = "* Field required";
    }else{
        $sel_grdlvl = test_input($_POST["sel_grdlvl"]);
        // check if name only contains numbers no whitespace
    } 
    
    if(empty($_POST["comment"])){
        $comment = "";
    }else{
        $comment = test_input($_POST["comment"]);
        // check if name only contains letters no whitespace !!!!NOT WORKING!!!!!!!!!!!!!!!
        if (!empty($comment) && !preg_match("/^[-a-zA-Z0-9,.\s]*$/",$comment)) {
           $commentErr = "* Only alphanumeric characters and numbers allowed"; 
        }
    }
    
  }
  
  //cleaning function
  function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }
  ?>