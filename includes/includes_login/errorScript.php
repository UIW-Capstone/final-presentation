<?php 

  //initialize variables as null
  $username = $pswd = $usernameErr = $pswdErr = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if(empty($_POST["username"])){
      $usernameErr = "Username is required";
    }else{
      $username = test_input($_POST["username"]);
      // check if name only contains letters no whitespace
      if (!preg_match("/^[0-9]*$/",$username)) {
          $usernameErr = "* only Numbers no white space allowed";
      }
    }
    
    if(empty($_POST["pswd"])){
      $pswdErr = "Password is required";
    }else{
      $pswd = test_input($_POST["pswd"]);
      if (!empty($pswd) && !preg_match("/^[-a-zA-Z0-9^.&*!%]*$/",$pswd)) {
          $pswdErr = "* Only a-z, A-Z, 0-9, and ^.&*!% characters allowed";
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