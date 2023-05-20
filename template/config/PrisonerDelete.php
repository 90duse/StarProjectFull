<?php

include '../config.php';


if(isset($_GET['id'])){
    $id = $_GET['id']; 
     $prisonersql = "DELETE FROM `prisonerrecord` WHERE pri_id =$id";
     $result = mysqli_query($con, $prisonersql);
     if($result){
        echo 'working';
     } else{
        echo mysqli_error($con);
     }
      
    }
      header('location: viewPrisonerRecord.php');
      exit();
     


    
?>

