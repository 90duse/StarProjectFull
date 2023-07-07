<?php 
include 'session.php';
include '../config.php';
include  '/functions.php';



    if(isset($_GET['ID'])){
     $id = $_GET['ID']; 
     $sqlpolice = "DELETE FROM policeregistration_table WHERE p_ID =$id";
     $policeresult = mysqli_query($con, $sqlpolice);
     if($policeresult){
    
    
     } else{
      echo mysqli_error($con);
    }
                                                
}  
 header("location: viewPoliceRecord.php");
//  echo function_alert();
exit();

                                               


?>