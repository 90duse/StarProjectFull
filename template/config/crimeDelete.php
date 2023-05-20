<?php

include '../config.php';


if(isset($_GET['id'])){
    $id = $_GET['id']; 
     $sql = "DELETE FROM crimerecord_table WHERE cr_id =$id";
     $result = mysqli_query($con, $sql);
     if($result){
        echo 'working';
     } else{
        echo mysqli_error($con);
     }
      
    }
      header('location: viewCrime.php');
      exit();
     $con->close();


    
?>
<!-- Police record delete code -->
