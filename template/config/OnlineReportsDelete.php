<?php
include 'session.php';
include '../config.php';


if(isset($_GET['id'])){
    $id = $_GET['id']; 
     $prisonersql = "DELETE FROM `online_incident_reporting` WHERE id =$id";
     $result = mysqli_query($con, $prisonersql);
     if($result){
        echo 'working';
     } else{
        echo mysqli_error($con);
     }
      
    }
      header('location: viewOnlineReports.php');
      exit();
     


    
?>

