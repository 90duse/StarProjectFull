<?php
include 'session.php';
include '../config.php';


if(isset($_GET['id'])){
    $id = $_GET['id']; 
     $PoliceAssetsql = "DELETE FROM assetregistration_table WHERE id =$id";
     $result = mysqli_query($con, $PoliceAssetsql);
     if($result){
        echo 'Your Data is Being Deleted Successfully';
     } else{
        echo mysqli_error($con);
     }
      
    }
      header('location: viewPoliceAsset.php');
      exit();
 


    
?>

