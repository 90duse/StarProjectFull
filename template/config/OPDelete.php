<?php
include 'session.php';
include '../config.php';


if(isset($_GET['id'])){
    $id = $_GET['id']; 
     $prisonersql = "DELETE FROM `op_table` WHERE op_id =$id";
     $result = mysqli_query($con, $prisonersql);
     if($result){
        echo 'working';
     } else{
        echo mysqli_error($con);
     }
      
    }
      header('location: viewOP.php');
      exit();
     


    
?>

