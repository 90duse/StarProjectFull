


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

          <!-- <div class="ps-lg-1">
            <div class="d-flex align-items-center justify-content-between">
              <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
              <a href="https://www.bootstrapdash.com/product/star-admin-pro/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
            </div>
          </div> -->
          <!-- <div class="d-flex align-items-center justify-content-between">
            <a href="https://www.bootstrapdash.com/product/star-admin-pro/"><i class="mdi mdi-home me-3 text-white"></i></a>
            <button id="bannerClose" class="btn border-0 p-0">
              <i class="mdi mdi-close text-white me-0"></i>
            </button>
          </div> -->

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
                    
                            echo 'it is working', $id;
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
                              //variable assignment
                              @$ID = $row['op_id'];
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

                        // Variable Assigment

                    //@$ID = $_GET['opid'];
                    @$Register_Date = $_GET['opregisterdate'];
                    @$op_Fullname = $_GET['opname'];
                    @$op_Height= $_GET['opheight'];
                    @$op_Age = $_GET['opage'];
                    @$op_Weight = $_GET['opweight'];
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

                        
                         @$sql = " UPDATE `op_table` SET `op_id`= '',`op_register_date`= '$Register_Date',`op_fullname`= '$op_Fullname',`op_image`= '',`op_height`='$op_Height',
                         `op_age`='$op_Age',`op_weight`='$op_Weight',`op_mothers_name`='$op_ParentName',`op_dayof_birth`='$op_BirthDate',`op_placeof_birth`='$op_PlaceOfBirth',`op_address`='$op_Address',
                         `op_tellephone`='$op_Phone',`op_job`='$op_Job',`op_marriage_status`='$op_MarriageStatus',`op_medical_status`='$op_MedicalStatus',`op_reason`='$op_Reason',`op_personal_belongs`='$op_PersonalBelongs',
                         `op_cell_no`='$op_CellNo',`op_officer`='$op_Officer',`op_notes`='$op_Note' WHERE `op_id` = '$id'";

                         if(mysqli_query($con, $sql)){
                        //   echo @$successMessage;
                         }
                         
                         

                        else{
                          echo mysqli_error($con);
                          // echo 'not working';
                        }



                        ?>
                  <form class="forms-sample" method="get" enctype ="multipart/form-data">

                  <div class="container">
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="number" class="form-control" id="#" name="opid" placeholder="Person ID" value = "<?php echo $ID; ?>">
                        </div>
                        <div class="col-lg-6">
                              <div class="row mt-4">
                                  <div class="col-6"> 
                                      <label for="exampleInputUsername1" class=" text text-secondary">Registerd Date</label>
                                  </div>
                                    <div class="col">
                                    <input type="date" class="form-control" id="#" name="opregisterdate" placeholder="date" value="<?php echo @$Register_Date;?>" Required>
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
                          <input type="text" class="form-control" id="#" name="opname" placeholder="FULLNAME" value="<?php echo @$Fullname;?>" Required>
                        </div>
                        
                      </div>

                      <div class="row">
                      <div class="col-lg-6">
                          <div class="row">
                            <div class="col-lg-4">
                              <label for="exampleInputUsername1"></label>
                              <input type="number" class="form-control" id="#" name="opheight" placeholder="Height" value="<?php echo @$Height;?>" Required>
                            </div>
                            <div class="col-lg-4">
                              <label for="exampleInputUsername1"></label>
                              <input type="number" class="form-control" id="#" name="opage" placeholder="Age"value="<?php echo @$Age;?>" Required>
                            </div>
                            <div class="col-lg-4">
                              <label for="exampleInputUsername1"></label>
                              <input type="number" class="form-control" id="#" name="opweight" placeholder="weight" value="<?php echo @$Weight;?>" Required>
                            </div>
                         </div> 
                        </div>
                        <div class="col-lg-6">
                        <div class="col">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="opmothername" placeholder="Mother's Name" value="<?php echo @$ParentName;?>"Required>
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
                                    <input type="date" class="form-control" id="#" name="opdayofbirth" placeholder="date"value="<?php echo @$BirthDate;?>" Required>
                                    </div>
                              </div> 
                          </div>
                          <div class="col-lg-6">
                            <label for="exampleInputUsername1"></label>
                            <input type="text" class="form-control" id="#" name="opplaceofbirth" placeholder="Place of Birth" value="<?php echo @$PlaceOfBirth;?>"Required>
                          </div>
                        
                      </div>
                      
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="opaddress" placeholder="Address"value="<?php echo @$Address;?>" Required>
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="tel" class="form-control" id="#" name="opphone" placeholder="Tellephone" value="<?php echo @$Phone;?>" Required>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="opjob" placeholder="Job" value="<?php echo @$Job;?>"Required>
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="tel" class="form-control" id="#" name="opreason" placeholder="Reason for the Arrest" value="<?php echo @$Reason;?>" Required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <div class="row mt-4">
                            <div class="col-4">
                            <label for="inputmarriagestatus" class=" text text-secondary">Marriage status</label>
                            </div>
                            <div class="col">
                            <input type="text"  class="form-control" id="#" name="opmarriagestatus" value="<?php echo @$MarriageStatus;?>" Required>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="opmedicalstatus" placeholder="MEDICAL STATUS" value="<?php echo @$MedicalStatus;?>" Required>
                        </div>
                      </div>


                      <div class="row">
                      <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="opcellno" placeholder="Cell Number" value="<?php echo @$CellNo;?>" Required>
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="oppersonalbelongs" placeholder="Personal Belongs" value="<?php echo @$PersonalBelongs;?>" Required>
                        </div>
                      </div>
                    
                      <div class="row">
                      <div class="col-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="opofficer" placeholder="Officer On Charge" value="<?php echo @$Officer;?>">
                        </div>
                       
                        <div class="col">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="opnotes" placeholder="Notes" value="<?php echo @$Note;?>">
                        </div>
                      </div>
                      <div class="button">
                        <button type="submit" class="btn btn-primary m-2" name="opbtnsubmit">Submit</button>
                        <a href="viewCrime.php"  class="btn btn-danger">BACK</a>
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
</body>

</html>

