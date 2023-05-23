<?php 
 include '../config.php';
    

    if(isset($_GET['id'])){
        $id = $_GET['id']; 

        //echo 'it is working', $id;
        $row ='';
      

        $sql = "SELECT * FROM crimerecord_table where cr_id ='$id'";
        $result = mysqli_query($con, $sql);
         if(mysqli_num_rows($result) > 0){
          while ( $row = mysqli_fetch_assoc($result)){

            $id = $row['cr_id'];
             $crimeRegisterDate = $row['cr_registerDate'];
             $crimeType = $row['cr_type'];
             $crimePlace= $row['cr_place'];
            $crimeVictam = $row['cr_victam'];
            $crimeCriminal = $row['cr_criminal'];
            $crimeOfficer = $row['cr_officer'];
            $crimeWitness = $row['cr_witness'];
            $crimeEvidence = $row['cr_evindence'];
            $crimeItems = $row['cr_items'];
            $crimeStatus = $row['cr_status'];
            $crimeNote = $row['cr_note'];

          }


           } 
         
           else {
            echo mysqli_error($con);
           }
                                          
         
    
    } 
    if(isset($_GET['btncrimeupdate'])){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            echo 'We got your ID:', $id;
        }
        
       
      //$id = ''; 
      $officer =''; 
      $RegisterDate='';
      $caseId = '';
      $witness ='';
      $evidence ='';
      $criminal ='';
      $note = '';
      $items = '';
      $type = '';
      $status ='';
      $place ='';
      $victam ='';



      $caseId = $_GET['crimeid'];
      $items =  $_GET['crimeitems'];
      $witness =  $_GET['crimewitness'];
      $evidence = $_GET['crimeevidence'];
      $criminal =  $_GET['crimecriminal'];
      $status =  $_GET['crimestatus'];
      $note =  $_GET['crimenote'];
      $type =  $_GET['crimetype'];
      $place  =  $_GET['crimeplace'];
      $victam =  $_GET['crimevictam'];
      $RegisterDate = $_GET['crimeregisterdate'];
      $officer = $_GET['crimeofficer'];
        
       
             
             $sql = "UPDATE crimerecord_table SET `cr_id` = ' ', `cr_registerDate` = '$RegisterDate', `cr_type` = '$type', `cr_place` = '$place', `cr_victam` = '$victam', `cr_criminal` = '$criminal ',`cr_officer` = '$officer', 
              `cr_witness` = '$witness', `cr_evindence` = '$evidence', `cr_items` = '$items',`cr_status` = '$status', `cr_note` = '$note'  WHERE `cr_id` = 0";
           //$sql =  "UPDATE crimerecord_table SET   `cr_witness` = '$witness' WHERE `cr_id` = 57";
          if (mysqli_query($con, $sql))
              {
                echo 'Data Updated Successfully';
              }
 
              else 
              {
                //echo $errorMessage;
                echo mysqli_error($con);
              }
     }
    
    else {
       // echo mysqli_error($con);

    }




      
      
  
    
    
    





?>