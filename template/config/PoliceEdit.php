<?php  include 'session.php'; ?>

<!DOCTYPE html><html lang="en">

<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <title>POLICE MANAGEMENT SYSTEM </title>
 <!-- plugins:css -->
 <link rel="stylesheet" href="../vendors/feather/feather.css">
 <link rel="stylesheet" href="../vendors/mdi/css/materialdesignicons.min.css">
 <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
 <link rel="stylesheet" href="../vendors/typicons/typicons.css">
 <link rel="stylesheet" href="../vendors/simple-line-icons/css/simple-line-icons.css">
 <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
 <!-- endinject -->
 <!-- Plugin css for this page -->
 <link rel="stylesheet" href="../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
 <link rel="stylesheet" href="../js/select.dataTables.min.css">
 <!-- End plugin css for this page -->
 <!-- inject:css -->
 <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
 <!-- endinject -->
 <link rel="shortcut icon" href="../images/favicon.png" />
</head>
<body class="">


  
     <div class="main-panel">
       <div class="content-wrapper">
         <div class="row">
           <div class="col-sm-12">
             <div class="card">
               <div class="card-body">
                 <h4 class="card-title text-center">Police Record</h4>
                 <?php   
                   include '../config.php';
                   
                    
                   if(isset($_GET['id'])){
                    $id = $_GET['id']; 
            
                        // variable declaration
                        $Register_Date = ''; 
                        $Fullname = $Height= $Age = $Weight = $Gender =
                        $BirthDate = $PlaceOfBirth = $Address = $Phone = $Email = 
                        $ParentName = $Education = $MarriageStatus = $MedicalStatus = 
                        $TrainingSpot = $Rank = $Note = "";
                        $row = '';

                        $sql = "SELECT * FROM policeregistration_table where p_ID ='$id'";
                        $result = mysqli_query($con, $sql);
                         if(mysqli_num_rows($result) > 0 ){
                          while ($row = mysqli_fetch_assoc($result))
                          {

                            $id = $row['p_ID'];
                            $Register_Date = $row['p_registration_date'];
                            $Fullname = $row ['p_fullname'];
                            $Height = $row ['p_height'];
                            $Age =  $row['p_Age'];
                            $Weight = $row ['p_weight'];
                            $Gender = $row['p_gender'];
                            $BirthDate = $row['p_dateOf_Birth'];
                            $PlaceOfBirth = $row['p_placeOf_Birth'];
                            $Address = $row['p_address'];
                            $Phone = $row ['p_phone'];
                            $Email = $row ['p_email'];
                            $ParentName = $row['p_mothers_name'];
                            $Education = $row['p_education'];
                            $TrainingSpot = $row['p_trained_spot'];
                            $MarriageStatus = $row['p_marriage_status'];
                            $MedicalStatus = $row['p_medical_status'];
                            $Rank = $row ['p_rank'];
                            $Note = $row['p_note'];

                          }
                         

                     } 
                     else{
                        echo mysqli_error($con);
                     } 

                    }
                     
                  if($_SERVER["REQUEST_METHOD"] == "POST"){
                   if(isset($_POST['btnpoliceRecord'])){

                    @$RegisterDate = $PoliceFullname = $PoliceHeight= $PoliceAge = $PoliceWeight = $PoliceGender =                    $PoliceBirthDate = $PolicePlaceOfBirth = $PoliceAddress = $PolicePhone = $PoliceEmail = 
                    $PoliceParentName = $PoliceEducation = $PoliceMarriageStatus = $PoliceMedicalStatus = 
                    $PoliceTrainingSpot = $PoliceRank = $PoliceNote = "";

                     //echo 'working';
                     $id = $_POST['pid'];
                     @$RegisterDate = $_POST['pregisterdate'];
                     @$PoliceFullname = $_POST['pfullname'];
                     @$PoliceHeight= $_POST['pheight'];
                     @$PoliceAge = $_POST['page'];
                     @$PoliceWeight = $_POST['pweight'];
                     $PoliceGender = $_POST['pgender'];
                     @$PoliceBirthDate = $_POST['pdateofbirth'];
                     @$PolicePlaceOfBirth = $_POST['pplaceofbirth'];
                     @$PoliceAddress = $_POST['paddress'];
                     @$PolicePhone = $_POST['ptelephone'];
                     @$PoliceEmail = $_POST['pemail'];
                     @$PoliceParentName = $_POST['pmothername'];
                     @$PoliceEducation = $_POST['peducationlevel'];
                     @$PoliceMarriageStatus = $_POST['pmarriagestatus'];
                     @$PoliceMedicalStatus = $_POST['pmedicalstatus'];
                     @$PoliceTrainingSpot = $_POST['ptrainedspot'];
                     @$PoliceRank = $_POST['prank'];
                     @$PoliceNote = $_POST['pnote'];
                     
                 
                   $sql = "UPDATE `policeregistration_table` SET `p_ID` = '$id', `p_registration_date` = '$RegisterDate', `p_fullname` = '$PoliceFullname', `p_height` = '$PoliceHeight', 
                    `p_Age` = '$PoliceAge', `p_weight` = '$PoliceWeight', `p_gender` ='$PoliceGender',
                    `p_dateOf_Birth` = '$PoliceBirthDate', `p_placeOf_Birth` = '$PolicePlaceOfBirth', `p_address` = '$PoliceAddress', `p_phone` = '$PolicePhone', `p_email` = '$PoliceEmail', 
                    `p_mothers_name` = '$PoliceParentName', `p_education` = '$PoliceEducation', `p_trained_spot` = '$PoliceTrainingSpot', `p_marriage_status` = '$PoliceMarriageStatus', `p_medical_status` = '$PoliceMedicalStatus', `p_rank` = '$PoliceRank', 
                    `p_note` = '$PoliceNote' WHERE `p_ID` = '$id'";

                   if(mysqli_query($con, $sql)){
                    $_SESSION['status'] = 'Congrates! You Added New Data ';
                    $_SESSION['status_code'] = 'success';
                     //header('location: viewPoliceRecord.php;');
                    
                   } else {
                     echo mysqli_error($con);
                   }
                }
            }

                   ?>
                 <form class="forms-sample" method='POST'>
                 <div class="container">
                     <div class="row">
                       <div class="col-lg-6">
                       <label for="exampleInputUsername1"></label>
                       <input type="text" class="form-control" id="#" name='pid' placeholder="POLICE ID" value="<?php echo $id; ?>">
                       </div>
                       <div class="col-lg-6">
                             <div class="row mt-4">
                                 <div class="col-6"> 
                                     <label for="exampleInputUsername1" class=" text text-secondary">Register Date</label>
                                 </div>
                                   <div class="col">
                                   <input type="date" class="form-control" id="#" name='pregisterdate' placeholder="date" Required value="<?php echo @$Register_Date; ?>" >
                                   </div>
                             </div> 
                         </div>
                     </div>
                     <div class="row">
                       <div class="col-lg-6">
                         <label for="exampleInputUsername1"></label>
                         <input type="text" class="form-control" id="#" name='pfullname' placeholder="FULLNAME" value="<?php echo @$Fullname; ?>" >
                       </div>
                       <div class="col-lg-6">
                         <div class="row">
                           <div class="col-lg-3">
                             <label for="exampleInputUsername1"></label>
                             <input type="number" class="form-control" id="#" name='pheight' placeholder="Height" value="<?php echo @$Height; ?>" >
                           </div>
                           <div class="col-lg-3">
                             <label for="exampleInputUsername1"></label>
                             <input type="number" class="form-control" id="#" name='page' placeholder="Age" value="<?php echo @$Age; ?>" >
                           </div>
                           <div class="col-lg-3">
                             <label for="exampleInputUsername1"></label>
                             <input type="number" class="form-control" id="#" name='pweigth' placeholder="weight" value="<?php echo @$Weight; ?>" >
                           </div>
                           <div class="col-lg-3">
                             <label for="exampleInputUsername1"></label>
                             <input type="text" class="form-control" id="#" name='pgender' placeholder="gender" value="<?php echo @$Gender; ?>" >
                           </div>
                        </div> 
                       </div>
                     </div>
                     <div class="row">
                         <div class="col-lg-6">
                             <div class="row mt-4">
                                 <div class="col-6"> 
                                     <label for="exampleInputUsername1" class=" text text-secondary">Day Of Birth</label>
                                 </div>
                                   <div class="col">
                                   <input type="date" class="form-control" id="#" name='pdateofbirth' placeholder="date" value="<?php echo @$BirthDate; ?>" >
                                   </div>
                             </div> 
                         </div>
                         <div class="col-lg-6">
                           <label for="exampleInputUsername1"></label>
                           <input type="text" class="form-control" id="#" name='pplaceofbirth'placeholder="Place of Birth" value="<?php echo @$PlaceOfBirth; ?>" >
                         </div>
                       
                     </div>
                     
                     <div class="row">
                       <div class="col-lg-6">
                       <label for="exampleInputUsername1"></label>
                       <input type="text" class="form-control" id="#" name='paddress' placeholder="Address" value="<?php echo @$Address; ?>" >
                       </div>
                       <div class="col-lg-6">
                       <label for="exampleInputUsername1"></label>
                       <input type="tel" class="form-control" id="#" name='ptelephone' placeholder="Telephone" value="<?php echo @$Phone; ?>" >
                       </div>
                     </div>
                     <div class="row">
                       <div class="col-lg-6">
                       <label for="exampleInputUsername1"></label>
                       <input type="Email" class="form-control" id="#" name='pemail' placeholder="Email" value="<?php echo @$Email; ?>" >
                       </div>
                       <div class="col-lg-6">
                       <label for="exampleInputUsername1"></label>
                       <input type="text" class="form-control" id="#" name='pmothername'placeholder="Mother's Name" value="<?php echo @$ParentName; ?>" >
                       </div>
                     </div>
                     <div class="row">
                       <div class="col-lg-6">
                       <label for="exampleInputUsername1"></label>
                       <input type="text" class="form-control" id="#" name="peducationlevel" placeholder="Education Level" value="<?php echo @$Education; ?>" >
                       </div>
                       <div class="col-lg-6">
                       <label for="exampleInputUsername1"></label>
                       <input type="tel" class="form-control" id="#" name="ptrainedspot" placeholder="Trained Spot" value="<?php echo @$TrainingSpot; ?>" >
                       </div>
                     </div>
                     <div class="row">
                       <div class="col-6">
                         <div class="row mt-4">
                           <div class="col-4">
                           <label for="inputmarriagestatus" class=" text text-secondary">Marriage status</label>
                           </div>
                           <div class="col">
                           <input type="tel" class="form-control" id="exampleInputPassword1" name='pmarriagestatus'placeholder="Marriage Status" value="<?php echo @$MarriageStatus; ?>" >
                           </div>
                         </div>
                       </div>
                       <div class="col-lg-6">
                       <label for="exampleInputUsername1"></label>
                       <input type="text" class="form-control" id="#" name='pmedicalstatus' placeholder="MEDICAL STATUS" value="<?php echo @$MedicalStatus; ?>" >
                       </div>
                     </div>


                     <div class="row">
                       <div class="col-lg-6">
                       <label for="exampleInputUsername1"></label>
                       <input type="text" class="form-control" id="#" name='prank' placeholder="Police Rank" value="<?php echo @$Rank; ?>" >
                       </div>
                       <div class="col-lg-6">
                       <label for="exampleInputUsername1"></label>
                       <input type="text" class="form-control" id="#" name="pnote" placeholder="NOTES" value="<?php echo @$Note; ?>" >
                       </div>
                     </div>
                     
                 </div>
                     <button type="submit" class="btn btn-success mt-2" name= 'btnpoliceRecord'>Update</button>
                     <a href="viewPoliceRecord.php"  class="btn btn-danger">BACK</a>
                 </form>
               </div>
             </div>
           </div>
         </div>
       </div>
       <!-- content-wrapper ends -->
      
     </div>
     <!-- main-panel ends -->
 

  <!-- plugins:js -->
  <script src="../vendors/js/vendor.bundle.base.js"></script>
 <!-- endinject -->
 <!-- Plugin js for this page -->
 <script src="../vendors/chart.js/Chart.min.js"></script>
 <script src="../vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
 <script src="../vendors/progressbar.js/progressbar.min.js"></script>

 <!-- End plugin js for this page -->
 <!-- inject:js -->
 <script src="../js/off-canvas.js"></script>
 <script src="../js/hoverable-collapse.js"></script>
 <script src="../js/template.js"></script>
 <script src="../js/settings.js"></script>
 <script src="../js/todolist.js"></script>
 <!-- endinject -->
 <!-- Custom js for this page-->
 <script src="../js/jquery.cookie.js" type="text/javascript"></script>
 <script src="../js/dashboard.js"></script>
 <script src="../js/Chart.roundedBarCharts.js"></script>
 <!-- End custom js for this page-->

 <!-- sweet Alert  -->
 <script src="../js/sweetalert.min.js"></script>
  <!-- <script def src="validation.js"></script> -->

  <?php   if (isset($_SESSION['status'])){

  }  ?> 

  <script>
    swal({
    title: "<?php  echo $_SESSION['status']; ?>",
  //text: "You clicked the button!",
    icon: "<?php  echo $_SESSION['status_code']; ?>",
    button: "OK!",
});
  <?php unset($_SESSION['status']); ?>
  </script>
</body>

</html>

