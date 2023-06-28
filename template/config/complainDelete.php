<?php
include 'session.php';
include '../config.php';


if(isset($_GET['id'])){
    $id = $_GET['id']; 
     $complainmentsql = "DELETE FROM `complainmentregistration_table` WHERE co_id =$id";
     $result = mysqli_query($con, $complainmentsql);
     if($result){
        echo 'working';
     } else{
        echo mysqli_error($con);
     }
      
    }
      header('location: viewComplainment.php');
      exit();
     


    
?>

