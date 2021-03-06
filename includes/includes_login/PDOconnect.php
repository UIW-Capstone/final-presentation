<?php
//setup for PDO
$host = "localhost"; //******or use ip address
$user = "root"; 
$pass = ""; 
$db_name = "student"; 

//setup DSN      
$dsn = "mysql:host=$host;dbname=$db_name";

//executes connection
try {
    $conn = new PDO($dsn, $user, $pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
//catches any errors in above and displays error message
catch(PDOException $e)
{
    $pdoMsg = '<br><br><i class="fa fa-frown-o" style="font-size:24px;"></i>' . $e->getMessage() . '</p>';
    exit;
}
?>