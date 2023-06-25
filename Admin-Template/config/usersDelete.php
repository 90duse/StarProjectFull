<?php

include '../config.php';


if(isset($_GET['id'])){
    $id = $_GET['id']; 
     $sql = "DELETE FROM panel_users_table WHERE user_ID =$id";
     $result = mysqli_query($con, $sql);
     if($result){
    //   $_SESSION['status'] = 'Congrates! You Added New Data ' ;
    //   $_SESSION['status_code'] = 'success';
      header('location: viewUsersRecord.php');
      exit();
        
     } else{
        echo mysqli_error($con);
     }
      
    }
      
  


    
?>

