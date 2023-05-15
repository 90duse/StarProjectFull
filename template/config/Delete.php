<?php

include '../config.php';


if(isset($_GET['ID'])){
    $ID = $_GET['ID']; 
    $result = mysqli_query($con, "DELETE FROM crimerecord_table WHERE  id=17");
     if($result){
        echo 'workin';
     } else{
        //echo mysqli_error($con);
     }
      
    }
      //header('location: viewCrime.php');
      //exit;
     //$con->close();

?>