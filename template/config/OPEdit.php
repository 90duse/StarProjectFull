
<?php include 'session.php'; ?>

<!DOCTYPE html>
 <html lang="en">
  
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
                  <h4 class="card-title text-center">OP</h4>
                      <?php    
                        include '../config.php';
                     
                          if(isset($_GET['id'])){
                            $id = $_GET['id']; 
                    
                            //echo 'it is working', $id;
                            $row ='';
                            $sql = "SELECT * FROM op_table where op_id ='$id'";
                            $result = mysqli_query($con, $sql);
                             if(mysqli_num_rows($result) > 0){
                              while ( $row = mysqli_fetch_assoc($result)){
                               
                              // Variable Declaration 
                           $ID = '';
                           $_Register_Date = '';
                           $Fullname = '';
                           $_Height= '';
                           $_Age = '';
                           $_Weight = '';
                           $_BirthDate = '';
                           $_PlaceOfBirth = '';
                           $_Address = '';
                           $_Phone = '';
                           $_ParentName = '';
                           $_Job = '';
                           $_Reason = '';
                           $_MarriageStatus = '';
                           $_MedicalStatus = '';
                           $_PersonalBelongs = '';
                           $_Officer ='';
                           $_CellNo = '';
                           $_Note =  '';
                           $_Photo ='';
                              //variable assignment database value
                              @$ID = $row['op_id'];
                              $opno = $row['opNo'];
                              @$Register_Date = $row['op_register_date'];
                              @$Fullname = $row['op_fullname'];
                              @$Height= $row['op_height'];
                              @$Age = $row['op_age'];
                              @$Weight = $row['op_weight'];
                              @$BirthDate = $row['op_dayof_birth'];
                              @$PlaceOfBirth = $row['op_placeof_birth'];
                              @$Address = $row['op_address'];
                              @$Phone = $row['op_tellephone'];
                              @$ParentName = $row['op_mothers_name'];
                              @$Job = $row['op_job'];
                              @$Reason = $row['op_reason'];
                              @$MarriageStatus = $row['op_marriage_status'];
                              @$MedicalStatus = $row['op_medical_status'];
                              @$PersonalBelongs = $row['op_personal_belongs'];
                              @$Officer =$row['op_officer'];
                              @$CellNo = $row['op_cell_no'];
                              @$Note =  $row['op_notes'];
                              //@$Photo =$_GET['op_image'];


                              }
                            } else {
                                echo mysqli_error($con);
                            }
                        }
                         

                         if(isset($_GET['opbtnsubmit'])){


                         
                        // Variable Declaration 
                        $ID = '';
                        $Register_Date = '';
                        $op_Fullname = '';
                        $op_Height= '';
                        $op_Age = '';
                        $op_Weight = '';
                        $op_BirthDate = '';
                        $op_PlaceOfBirth = '';
                        $op_Address = '';
                        $op_Phone = '';
                        $op_ParentName = '';
                        $op_Job = '';
                        $op_Reason = '';
                        $op_MarriageStatus = '';
                        $op_MedicalStatus = '';
                        $op_PersonalBelongs = '';
                        $op_Officer ='';
                        $op_CellNo = '';
                        $op_Note =  '';
                        $op_Photo ='';
                        $successMessage = 'New Record is being saved Successfully';

                        // Variable Assigment textbox  value

                    $ID = $_GET['opid'];
                    $op_number = $_GET['opnumber'];
                    @$Register_Date = $_GET['opregisterdate'];
                    @$op_Fullname = $_GET['opname'];
                    @$op_Height= $_GET['opheight'];
                    @$op_Age = $_GET['opage'];
                    @$op_Weight = $_GET['opweight'];
                    $op_gender = $_GET['opgender'];
                    @$op_BirthDate = $_GET['opdayofbirth'];
                    @$op_PlaceOfBirth = $_GET['opplaceofbirth'];
                    @$op_Address = $_GET['opaddress'];
                    @$op_Phone = $_GET['opphone'];
                    @$op_ParentName = $_GET['opmothername'];
                    @$op_Job = $_GET['opjob'];
                    @$op_Reason = $_GET['opreason'];
                    @$op_MarriageStatus = $_GET['opmarriagestatus'];
                    @$op_MedicalStatus = $_GET['opmedicalstatus'];
                    @$op_PersonalBelongs = $_GET['oppersonalbelongs'];
                    @$op_Officer = $_GET['opofficer'];
                    @$op_CellNo = $_GET['opcellno'];
                    @$op_Note =  $_GET['opnote'];
                    //$op_Photo = $_FILE['opimage'];
                    // $tmp_name = $_FILES['opimage']['tmp_name'];
                    // $imageLocation = "../images/"; 

                    // if(move_uploaded_file($tmp_name, $imageLocation.$prisonerImage)){
                    //   echo "Your image is saved "; 
                    // } else{
                    //   echo mysqli_error($con);
                    // }
                    $successMessage = "<div class='alert alert-success' role='alert'>
                    Successfully Recorded Your Data 
                   </div>"; 
                        
                         @$sql = " UPDATE `op_table` SET `op_id` = '', `opNo` = '$op_number',`op_register_date`= '$Register_Date',`op_fullname`= '$op_Fullname',`op_image`= '',`op_height`='$op_Height',
                         `op_age`='$op_Age',`op_weight`='$op_Weight', `op_gender`='$op_gender',`op_mothers_name`='$op_ParentName',`op_dayof_birth`='$op_BirthDate',`op_placeof_birth`='$op_PlaceOfBirth',`op_address`='$op_Address',
                         `op_tellephone`='$op_Phone',`op_job`='$op_Job',`op_marriage_status`='$op_MarriageStatus',`op_medical_status`='$op_MedicalStatus',`op_reason`='$op_Reason',`op_personal_belongs`='$op_PersonalBelongs',
                         `op_cell_no`='$op_CellNo',`op_officer`='$op_Officer',`op_notes`='$op_Note' WHERE `op_id` = '$id'";

                          
                         if(mysqli_query($con, $sql)){
                        //   echo @$successMessage;
                                $_SESSION['status'] = 'Congrates! You Added New Data ' ;
                                $_SESSION['status_code'] = 'success';
                               echo $successMessage;
                               // header('location:viewOP.php');
                               // die();
                                
                         } 
                         
                         

                        else{
                          echo mysqli_error($con);
                          // echo 'not working';
                        }

                      }

                        ?>
                        
                <form class="forms-sample" method="get" enctype ="multipart/form-data">
                  <div class="container">
                      
                    <div class="card">
                         <div class="card-body">
                          <div class="row">
                              <div class="col-lg-6" hidden="true">
                              <label for="exampleInputUsername1"></label>
                              <input type="number" class="form-control" id="#" name="opid" placeholder="Person ID" value = "<?php echo $ID; ?>">
                              </div>
                              <div class="col-lg-6">
                         
                              <label for="exampleInputUsername1"></label>
                              <input type="text"  class="form-control" id="#" name="opnumber" placeholder="OPNO" value = "<?php echo $opno; ?>">
                              </div>
                              <div class="col-lg-6">
                                <div class="row mt-4">
                                  <div class="col-6"> 
                                      <label for="exampleInputUsername1" class=" text text-secondary">Registerd Date</label>
                                    </div>
                                  <div class="col">
                                    <input type="date" class="form-control" id="#" name="opregisterdate" placeholder="date" value="<?php echo @$Register_Date;?>" >
                                    </div>
                                  </div> 
                              </div>
                           </div>

                          <div class="row">
                              <div class="col-lg-6">
                              <label for="exampleInputUsername1"></label>
                              <input type="file" class="form-control " id="#" name="opimage" placeholder="Image" value="<?php echo @$Photo;?>">
                              </div>
                              <div class="col-lg-6">
                                <label for="exampleInputUsername1"></label>
                                <input type="text" class="form-control" id="#" name="opname" placeholder="FULLNAME" value="<?php echo @$Fullname;?>" >
                              </div>
                           </div>
                           <div class="row">
                       <div class="col-lg-6">
                          <div class="row">
                            <div class="col-lg-3">
                              <label for="exampleInputUsername1"></label>
                              <input type="number" class="form-control" id="#" name="opheight" placeholder="Height" value="<?php echo @$Height;?>" >
                            </div>
                            <div class="col-lg-3">
                              <label for="exampleInputUsername1"></label>
                              <input type="number" class="form-control" id="#" name="opage" placeholder="Age"value="<?php echo @$Age;?>" >
                            </div>
                            <div class="col-lg-3">
                              <label for="exampleInputUsername1"></label>
                              <input type="number" class="form-control" id="#" name="opweight" placeholder="weight" value="<?php echo @$Weight;?>" >
                            </div>
                            <div class="col-lg-3">
                              <label for="exampleInputUsername1"></label>
                              <input type="text" class="form-control" id="#" name="opgender" placeholder="Gender" >
                            </div>
                         </div> 
                        </div>
                          <div class="col-lg-6">
                            <label for="exampleInputUsername1"></label>
                            <input type="text" class="form-control" id="#" name="opjob" placeholder="Job" value="<?php echo @$Job;?>">
                            </div>
                        </div>
                              <div class="row">
                                <div class="col-lg-6">
                                    <div class="row mt-4">
                                        <div class="col-6"> 
                                            <label for="exampleInputUsername1" class=" text text-secondary">Day Of Birth</label>
                                        </div>
                                          <div class="col">
                                          <input type="date" class="form-control" id="#" name="opdayofbirth" placeholder="date"value="<?php echo @$BirthDate;?>" >
                                          </div>
                                    </div> 
                                </div>
                                <div class="col-lg-6">
                                  <label for="exampleInputUsername1"></label>
                                  <input type="text" class="form-control" id="#" name="opplaceofbirth" placeholder="Place of Birth" value="<?php echo @$PlaceOfBirth;?>">
                                </div>
                              
                            </div>
                              <div class="row">
                               
                              </div>
                              <div class="row">
                              <div class="col-6">
                                <div class="row mt-4">
                                  <div class="col-4">
                                  <label for="inputmarriagestatus" class=" text text-secondary">Marriage status</label>
                                  </div>
                                  <div class="col">
                                  <input type="text"  class="form-control" id="#" name="opmarriagestatus" value="<?php echo @$MarriageStatus;?>" >
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-6">
                              <label for="exampleInputUsername1"></label>
                              <input type="text" class="form-control" id="#" name="opmedicalstatus" placeholder="MEDICAL STATUS" value="<?php echo @$MedicalStatus;?>" >
                              </div>
                            </div>
                       </div>
                    </div>



                     <div class="card mt-2 p-4">
                       <div class="car-body">
                        <div class="row">
                          <div class="col-lg-6">
                          <label for="exampleInputUsername1"></label>
                          <input type="text" class="form-control" id="#" name="opaddress" placeholder="Address"value="<?php echo @$Address;?>" >
                          </div>
                          <div class="col-lg-6">
                          <label for="exampleInputUsername1"></label>
                          <input type="tel" class="form-control" id="#" name="opphone" placeholder="Tellephone" value="<?php echo @$Phone;?>" >
                          </div>
                        </div>
                         <div class="row">
                         <div class="col-lg-6">
                          <div class="col">
                          <label for="exampleInputUsername1"></label>
                          <input type="text" class="form-control" id="#" name="opmothername" placeholder="Mother's Name" value="<?php echo @$ParentName;?>">
                          </div>
                         </div>
                         </div>

                       </div>
                     </div>

                      
                     <div class="card mt-2">
                      <div class="card-body">
                         <div class="row">
                      <h3>Detail Information</h3>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="tel" class="form-control" id="#" name="opreason" placeholder="Reason for the Arrest" value="<?php echo @$Reason;?>" >
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="opofficer" placeholder="Officer On Charge" value="<?php echo @$Officer;?>">
                        </div>
                      </div>
                      <div class="row">
                       <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="opcellno" placeholder="Cell Number" value="<?php echo @$CellNo;?>" >
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="oppersonalbelongs" placeholder="Personal Belongs" value="<?php echo @$PersonalBelongs;?>" >
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="opnote" placeholder="Notes" value="<?php echo @$Note;?>">
                        </div>
                      </div>
                      <!-- <div class="row">
                        <div class="col">
                        <label for="moretext"></label>
                        <textarea class=" mt-2 border"  name="opnote" id="" cols="120" rows="10" placeholder="Additional Info about the arrest"></textarea>
                        </div>
                      </div> -->
                    </div>
                  </div>
                      
                      
                     
                      
                     
                      


                      
                   
                       
                      
                     
                      <div class="button">
                        <button type="submit" class="btn btn-primary m-2" name="opbtnsubmit">Submit</button>
                        <a href="viewOP.php"  class="btn btn-danger">BACK</a>
                      </div>
                  </div>
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

  <!-- sweet alert -->
  <script src="../js/sweetalert.min.js"></script>

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

