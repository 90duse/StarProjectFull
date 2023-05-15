<?php

include '../config.php';


if(isset($_GET['cr_id'])){
    $ID = $_GET['cr_id'];

    $sql =   "DELETE FROM crimerecord_table WHERE id= $ID";
    $result = mysqli_query($con, $sql);
     if($result){
        echo 'workin';
     } else{
        echo mysqli_error($con);
     }
      
    }
      //header('location: viewCrime.php');
      //exit;
     //$con->close();

?>