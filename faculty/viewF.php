<?php 
    require('inCreateU_fac/createPDO_fac.php');
    $id = isset($_GET['id'])? $_GET['id'] : "";
    $see = $conn->prepare("SELECT * FROM proj_files where id = ?");
    $see->bindParam(1, $id);
    $see->execute();
    $row = $see->fetch();
    header('Content-Type:'.$row['type']);
    echo $row['file'];
?>