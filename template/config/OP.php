


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

  <div class="container-scroller ">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
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
        </div>
      </div>
    </div>
    <!-- partial:partials/_navbar.html -->
   <?php  include "../partials/navbar.php";?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <?php  include "../partials/settings-panel.php";?>
     
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
     <?php   include "../partials/sidebar.php";?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">OP</h4>
                      <?php    
                        include '../config.php';
                      

                        
                        // if(isset($_POST['btnprisoner'])){
                        //   $fileName = $_FILES['prisonerimage']['name'];
                        //   $filetmpName = $_FILES['prisonerimage']['tmp_name'];
                        //   $fileSize = $_FILES['prisonerimage']['size'];
                        //   $fileError = $_FILES['prisonerimage']['error'];
                        //   $fileType= $_FILES['prisonerimage']['type'];
                          // $fileExt = explode('.', $fileName);
                          // $fileActualExt = strtolower(end($fileExt));
                          // $allowed =  array('jpg','jpeg','png');
                          // if(in_array($fileActualExt, $allowed)){
                          //   if($fileError === 0){
                          //     if($fileSize < 1000000){
                          //       $fileNewName = uniqid('.', true) . "." . $fileActualExt;
                          //       $fileDestination = '../images/' .$fileNewName; 
                          //       move_uploaded_file($filetmpName, $fileDestination);
                          //     } else {
                          //       echo "Your file is too big";
                          //     }

                          //   } else {

                          //     echo "There is an Error!";

                          //   }

                          // } else {
                          //   echo 'You can not upload this type of files';
                          // }
                          //}
                          if(isset($_POST['opbtnsubmit'])){
                              echo 'working';

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

                              // Variable Assigment

                          $ID = $_POST['opid'];
                          $Register_Date = $_POST['opregisterdate'];
                          $op_Fullname = $_POST['opname'];
                          $op_Height= $_POST['opheight'];
                          $op_Age = $_POST['opage'];
                          $op_Weight = $_POST['opweight'];
                          $op_BirthDate = $_POST['opdayofbirth'];
                          $op_PlaceOfBirth = $_POST['opplaceofbirth'];
                          $op_Address = $_POST['opaddress'];
                          $op_Phone = $_POST['opphone'];
                          $op_ParentName = $_POST['opmothername'];
                          $op_Job = $_POST['opjob'];
                          $op_Reason = $_POST['opreason'];
                          $op_MarriageStatus = $_POST['opmarriagestatus'];
                          $op_MedicalStatus = $_POST['opmedicalstatus'];
                          $op_PersonalBelongs = $_POST['oppersonalbelongs'];
                          $op_Officer = $_POST['opofficer'];
                          $op_CellNo = $_POST['opcellno'];
                          $op_Note =  $_POST['opnote'];
                          //$op_Photo = $_FILE['opimage'];
                          // $tmp_name = $_FILES['opimage']['tmp_name'];
                          // $imageLocation = "../images/"; 

                          // if(move_uploaded_file($tmp_name, $imageLocation.$prisonerImage)){
                          //   echo "Your image is saved "; 
                          // } else{
                          //   echo mysqli_error($con);
                          // }



                        }
                        
                         $sql = "INSERT INTO `op_table` (`op_id`, `op_register_date`, `op_fullname`, `op_image`, `op_height`, `op_age`, 
                         `op_weight`, `op_mothers_name`, `op_dayof_birth`,`op_placeof_birth`, `op_address`, `op_tellephone`, 
                         `op_job`, `op_marriage_status`, `op_medical_status`, `op_reason`, `op_personal_belongs`, `op_cell_no`, `op_officer`, `op_notes`) 
                         VALUES ('', '$Register_Date', '$op_Fullname', '', '$op_Height', '$op_Age', '$op_Weight', '$op_ParentName', '$op_BirthDate', 
                         '$op_PlaceOfBirth', '$op_Address', '$op_Phone','$op_Job', '$op_MarriageStatus', '$op_MedicalStatus', '$op_Reason', '$op_PersonalBelongs', '$op_CellNo', '$op_Officer', '$op_Note')";
                         if(mysqli_query($con, $sql)){
                          echo 'New Record is being saved Successfully';
                         }
                         
                         

                        else{
                          echo mysqli_error($con);
                          // echo 'not working';
                        }



                        ?>
                  <form class="forms-sample" method="POST" enctype ="multipart/form-data">

                  <div class="container">
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="number" class="form-control" id="#" name="opid" placeholder="Person ID">
                        </div>
                        <div class="col-lg-6">
                              <div class="row mt-4">
                                  <div class="col-6"> 
                                      <label for="exampleInputUsername1" class=" text text-secondary">Registerd Date</label>
                                  </div>
                                    <div class="col">
                                    <input type="date" class="form-control" id="#" name="opregisterdate" placeholder="date" Required>
                                    </div>
                              </div> 
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="file" class="form-control " id="#" name="opimage" placeholder="Image">
                        </div>
                        <div class="col-lg-6">
                          <label for="exampleInputUsername1"></label>
                          <input type="text" class="form-control" id="#" name="opname" placeholder="FULLNAME" Required>
                        </div>
                        
                      </div>

                      <div class="row">
                      <div class="col-lg-6">
                          <div class="row">
                            <div class="col-lg-4">
                              <label for="exampleInputUsername1"></label>
                              <input type="number" class="form-control" id="#" name="opheight" placeholder="Height" Required>
                            </div>
                            <div class="col-lg-4">
                              <label for="exampleInputUsername1"></label>
                              <input type="number" class="form-control" id="#" name="opage" placeholder="Age" Required>
                            </div>
                            <div class="col-lg-4">
                              <label for="exampleInputUsername1"></label>
                              <input type="number" class="form-control" id="#" name="opweight" placeholder="weight" Required>
                            </div>
                         </div> 
                        </div>
                        <div class="col-lg-6">
                        <div class="col">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="opmothername" placeholder="Mother's Name" Required>
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
                                    <input type="date" class="form-control" id="#" name="opdayofbirth" placeholder="date" Required>
                                    </div>
                              </div> 
                          </div>
                          <div class="col-lg-6">
                            <label for="exampleInputUsername1"></label>
                            <input type="text" class="form-control" id="#" name="opplaceofbirth" placeholder="Place of Birth" Required>
                          </div>
                        
                      </div>
                      
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="opaddress" placeholder="Address" Required>
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="tel" class="form-control" id="#" name="opphone" placeholder="Tellephone" Required>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="opjob" placeholder="Job" Required>
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="tel" class="form-control" id="#" name="opreason" placeholder="Reason for the Arrest" Required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <div class="row mt-4">
                            <div class="col-4">
                            <label for="inputmarriagestatus" class=" text text-secondary">Marriage status</label>
                            </div>
                            <div class="col">
                            <input type="text"  class="form-control" id="#" name="opmarriagestatus" Required>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="opmedicalstatus" placeholder="MEDICAL STATUS" Required>
                        </div>
                      </div>


                      <div class="row">
                      <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="opcellno" placeholder="Cell Number" Required>
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="oppersonalbelongs" placeholder="Personal Belongs" Required>
                        </div>
                      </div>
                    
                      <div class="row">
                      <div class="col-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="opofficer" placeholder="Officer On Charge">
                        </div>
                       
                        <div class="col">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="opnotes" placeholder="Notes">
                        </div>
                      </div>
                      <div class="button">
                        <button type="submit" class="btn btn-primary m-2" name="opbtnsubmit">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                      </div>
                  </div>
                   
                  </form>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

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

