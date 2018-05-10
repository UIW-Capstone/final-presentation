<?php 
    
    if (isset($_POST['submit'])) {
        //creates hash pswd for Database
        $hashpswd = password_hash($pswd, PASSWORD_DEFAULT);
    }

//handles submit where there is no name input
IF (!$firstname){
    $msg2 = "<br><br>Username is UIW student ID";
    echo $msg2;
} else {
    
    //sets up sql insert
    $sql ="INSERT INTO credentials (firstname, lastname, username, password, account) VALUES ('$firstname', '$lastname', '$username', '$hashpswd', '$account')";
    //connect to db
    require('createUpdo_conn.php');
    echo $pdoMsg2;
    //executes the sql insert and provides feedback to user
    try{
        // use exec() because no results are returned
        $conn->exec($sql);
        $msg2 = "<br>User successfully created!!";
        echo $msg2;
    }
    
    //if an error occurs in try, this will display an error message
    catch(PDOException $e){
        echo "<br>" . $e->getMessage(); //echo $sql . "<br>" . $e->getMessage(); >> to see $sql (what user entered)
        $msg2 = "<br><br>Make sure username is #'s (student ID)<br>";
        echo $msg2;
    }
    $conn = null;
}
?>