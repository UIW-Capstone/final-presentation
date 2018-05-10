<?php     
  //initialize variables as null
$firstname = $lastname = $username = $pswd = $account = $firstnameErr = $lastnameErr = $usernameErr = 
$pswdErr = $accountErr  = "";
  //gets form input & as long as there is content in the input
  //the variable is sent to be cleaned
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
    if(empty($_POST["firstname"])){
        $firstnameErr = "* First Name is required";
    }else{
        $firstname = test_input($_POST["firstname"]);
        // check if name only contains letters no whitespace
        if (!preg_match("/^[a-zA-Z]*$/",$firstname)) {
            $firstnameErr = "* only Letters no white space allowed";
        }
    }
    
    if(empty($_POST["lastname"])){
        $lastnameErr = "* Last Name is required";
    }else{
        $lastname = test_input($_POST["lastname"]);
        // check if name only contains letters no whitespace
        if (!preg_match("/^[a-zA-Z]*$/",$lastname)) {
            $lastnameErr = "* only Letters no white space allowed";
        }
    }
   
    if(empty($_POST["username"])){
      $usernameErr = "* Username is required";
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
    }
  
    if(empty($_POST["account"])) {
        $accountErr = "* Select account type";
    } else {
        $account = test_input($_POST["account"]);
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