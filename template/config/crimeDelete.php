<?php

include '../config.php';


if(isset($_GET['id'])){
    $id = $_GET['id']; 
     $sql = "DELETE FROM crimerecord_table WHERE cr_id =$id";
     $result = mysqli_query($con, $sql);
     if($result){
      // $_SESSION['status'] = 'Congrates! You Added New Data ' ;
      // $_SESSION['status_code'] = 'success';
      
        
     } else{
        echo mysqli_error($con);
     }
      
    }
      header('location: viewCrime.php');
      exit();
  


    
?>
<!-- sweet alert script -->
