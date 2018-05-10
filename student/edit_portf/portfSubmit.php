<?php 
    //ini_set('mysql.connect_timeout',300); TRY THESE!!!!!!!!!!!!!!!!
    //ini_set('default_socket_timeout',300);
    
//if the submit btn is pressed, and there are no $variableErrors then proceed -->
if (isset($_POST['submit'])) 
{
    //checks for errors before submitting ** still need to add other form fields
    if (!empty($fnameErr) || !empty($lnameErr) || !empty($idnumErr) || !empty($commentErr)) 
    {
       echo "wrong111!";
       echo $fnameErr;
       echo $lnameErr;
       echo $idnumErr;
       echo $commentErr;
       
    } else {  //!!** need to write an if user id & name exist then >> header prtfl pg = No multiple or overwritten entries
        
        if(getimagesize($_FILES['image']['tmp_name'])== FALSE)
        {
            echo "please select an image";
            
        } else {
            $image = addslashes($_FILES['image']['tmp_name']);
            $name = addslashes($_FILES['image']['name']);
            $image = file_get_contents($image);
            $image = base64_encode($image);
            echo "image is good!";
        }
        
        //sets up sql insert
        $sql ="INSERT INTO portfolio (fname, lname, idnum, sel_major, sel_conct, sel_grdlvl, comment, imgName, imgFile) VALUES ('$fname', '$lname', '$idnum', '$sel_major', '$sel_conct', '$sel_grdlvl', '$comment', '$name', '$image')";
        //connect to DB
        require('portfPDO.php');
        echo $pdoMsg2;
        //executes the sql insert and provides feedback to user
        try{
            // use exec() because no results are returned
            $conn->exec($sql);
            $msg2 = "<br>Data submitted";
            echo $msg2;
        }
        
        //if an error occurs in try, this will display an error message
        catch(PDOException $e){
            echo "<br>" . $e->getMessage(); //echo $sql . "<br>" . $e->getMessage(); >> to see $sql (what user entered)
            $msg2 = "<br>Make sure username is #'s (student ID)<br>";
            echo $msg2;
        }
        $conn = null;
   
    }
}
?>