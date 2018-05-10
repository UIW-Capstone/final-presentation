<?php 

if(isset($_POST['submit'])) {
    $idnum = $_SESSION["student"];
    
    $name = addslashes($_FILES['myfile']['name']);
    $type = addslashes($_FILES['myfile']['type']);
    $data = file_get_contents($_FILES['myfile']['tmp_name']);
    //$data = base64_decode($data);
    //sets up sql insert
    $stmt = $conn->prepare("INSERT INTO proj_files (name, type, file, idnum) VALUES (?,?,?, '$idnum')");
    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $type);
    $stmt->bindParam(3, $data);
 
    //connect to DB
    require('edit_portf/portfPDO.php');
    //executes the sql insert and provides feedback to user
    try{
        // use exec() because no results are returned
        $stmt->execute();
        $msg2 = "<br>Data submitted";
        echo $msg2;
    }
    
    //if an error occurs in try, this will display an error message
    catch(PDOException $e){
        echo "<br>" . $e->getMessage(); //echo $sql . "<br>" . $e->getMessage(); >> to see $sql (what user entered)
        $msg2 = "<br>Error loading file...<br>";
        echo $msg2;
    }
    $conn = null;   
}
?>
<form id="upload" class="stdt_form pull-left" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>#upload" method="POST">
  <div class="form-group">
    <div class="custom-file">
        <label class="form-control-file" for="myfile">Upload Projects</label>
          <input type="file" class="custom-file-input" name="myfile" id="myfile">
    </div>
    <input type="submit" value="Upload" name="submit" id="submit" class="btn btn-default" style="margin:0 30px 0 0;">
  </div>
</form>
<ol>
<?php 
    require('edit_portf/portfPDO.php');
    $view = $conn->prepare("SELECT * FROM proj_files");
    $view->execute();
    while($row = $view->fetch()) {
        echo "<li><a target='_blank' href='view.php?id=".$row['id']."'>".$row['name']."</a><br>
        <iframe src='file:".$row['type'].";base64,".base64_encode($row['file'])."' style='width:200; z-index:10;'></iframe></li>";
    }
    $conn = null;
?>
</ol>