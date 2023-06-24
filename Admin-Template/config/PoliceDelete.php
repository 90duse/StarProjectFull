<?php 
include '../config.php';
include  '/functions.php';

// $successMessage =  "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
// <strong>Holy guacamole!</strong> You should check in on some of those fields below.
// <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
// </div>";

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