<?php
// Start session
session_start();

if (!isset($_POST['submit'])) 
{
    echo ('<p>Please see your advisor if you need login credentials</p>');
    
} else {
    //connect to db
    require('PDOconnect.php');
    //executes the sql select (username) from DB and assigns to form ['username']
    $stmt = $conn->prepare("SELECT * FROM credentials WHERE username = ?");
    //$stmt gets executed (SELECT *) from the users username
    $stmt->execute([$_POST['username']]);
    $user = $stmt->fetch();
    //matches login credentials with hashed DB password
    if ($user && password_verify($_POST['pswd'], $user['password']))
    { 
        try{
            $stmt->execute();
            if ($user["account"] == 'student')
            {
                //if DB account is 'student' then route to Student View
                $_SESSION["student"] = $_POST["username"];
                header("location:student/prtfPage.php");
            } else {
                //if DB account is 'faculty' then route to Faculty View
                $_SESSION["faculty"] = $_POST["username"];
                header("location:faculty/indexFac.php");
            }
                
        }
        //if an error occurs in try, this will display an error message
        catch(PDOException $e){
            echo $stmt . "<br>" . $e->getMessage();
        }
    } else {
        $msg1 = "Incorrect credentials";
        echo $msg1;
    }
    $conn = null;
}
?>