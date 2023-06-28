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
                  <h4 class="card-title text-center">Police Record</h4>
                  <?php   
                    include '../config.php';
                      @$RegisterDate = "";
                      @$PoliceFullname = "";
                      @$PoliceHeight= "";
                      @$PoliceAge = "";
                      @$PoliceWeight = "";
                      @$PoliceBirthDate = "";
                      @$PolicePlaceOfBirth = "";
                      @$PoliceAddress = "";
                      @$PolicePhone = "";
                      @$PoliceEmail = "";
                      @$PoliceParentName = "";
                      @$PoliceEducation = "";
                      @$PoliceMarriageStatus = "";
                      @$PoliceMedicalStatus = "";
                      @$PoliceTrainingSpot = "";
                      @$PoliceRank = "";
                      @$PoliceNote = "";
                      
                      if($_SERVER["REQUEST_METHOD"] == "POST"){

                        if(empty($_POST['pregisterdate']) && empty($_POST['pfullname']) && empty($_POST['pheight'])
                        && empty($_POST['page']) && empty($_POST['pweight']) && empty($_POST['pdateofbirth'])
                        && empty($_POST['pplaceofbirth']) && empty($_POST['paddress']) && empty($_POST['ptelephone'])
                        && empty($_POST['pemail']) && empty($_POST['pmothername']) && empty($_POST['pid'])
                        && empty($_POST['peducationlevel']) && empty($_POST['pmarriagestatus']) && empty($_POST['pmedicalstatus']) 
                        && empty($_POST['ptrainedspot']) && empty($_POST['prank']) && empty($_POST['pnote'])) 
                        {
                          //exit(); 
                          $_SESSION['status'] = 'They canot be empty ';
                          $_SESSION['status_code'] = 'error';
                      
                        } else {

                     
                    if(isset($_POST['btnpoliceRecord'])){
                      //echo 'working';
                      //$ID = $_POST['pid'];
                      @$RegisterDate = $_POST['pregisterdate'];
                      @$PoliceFullname = $_POST['pfullname'];
                      @$PoliceHeight= $_POST['pheight'];
                      @$PoliceAge = $_POST['page'];
                      @$PoliceWeight = $_POST['pweight'];
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
                      
                    }
                 
                    $sql = "INSERT INTO `PoliceRegistration_table` (`p_ID`, `p_registration_date`, `p_fullname`, `p_height`, `p_Age`, `p_weight`, `p_dateOf_Birth`, `p_placeOf_Birth`, `p_address`, `p_phone`, `p_email`, `p_mothers_name`, `p_education`, `p_trained_spot`, `p_marriage_status`, `p_medical_status`, `p_rank`, `p_note`)
                    VALUES (' ', '$RegisterDate', '$PoliceFullname', '$PoliceHeight', '$PoliceAge', '$PoliceWeight', '$PoliceBirthDate', '$PolicePlaceOfBirth', '$PoliceAddress', '$PolicePhone', '$PoliceEmail', '$PoliceParentName', '$PoliceEducation', '$PoliceTrainingSpot', '$PoliceMarriageStatus', '$PoliceMedicalStatus', '$PoliceRank', '$PoliceNote ')";
                 
                    if(mysqli_query($con, $sql)){
                          $_SESSION['status'] = 'Your Data is Saved Succcessfully ';
                          $_SESSION['status_code'] = 'success';
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
                        <input type="text" class="form-control" id="#" name='pid' placeholder="POLICE ID">
                        </div>
                        <div class="col-lg-6">
                              <div class="row mt-4">
                                  <div class="col-6"> 
                                      <label for="exampleInputUsername1" class=" text text-secondary">Register Date</label>
                                  </div>
                                    <div class="col">
                                    <input type="date" class="form-control" id="#" name='pregisterdate' placeholder="date">
                                    </div>
                              </div> 
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <label for="exampleInputUsername1"></label>
                          <input type="text" class="form-control" id="#" name='pfullname' placeholder="FULLNAME">
                        </div>
                        <div class="col-lg-6">
                          <div class="row">
                            <div class="col-lg-4">
                              <label for="exampleInputUsername1"></label>
                              <input type="number" class="form-control" id="#" name='pheight' placeholder="Height">
                            </div>
                            <div class="col-lg-4">
                              <label for="exampleInputUsername1"></label>
                              <input type="number" class="form-control" id="#" name='page' placeholder="Age">
                            </div>
                            <div class="col-lg-4">
                              <label for="exampleInputUsername1"></label>
                              <input type="number" class="form-control" id="#" name='pweigth' placeholder="weight">
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
                                    <input type="date" class="form-control" id="#" name='pdateofbirth' placeholder="date">
                                    </div>
                              </div> 
                          </div>
                          <div class="col-lg-6">
                            <label for="exampleInputUsername1"></label>
                            <input type="text" class="form-control" id="#" name='pplaceofbirth'placeholder="Place of Birth">
                          </div>
                        
                      </div>
                      
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name='paddress' placeholder="Address">
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="tel" class="form-control" id="#" name='ptelephone' placeholder="Telephone">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="Email" class="form-control" id="#" name='pemail' placeholder="Email">
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name='pmothername'placeholder="Mother's Name">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="peducationlevel" placeholder="Education Level">
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="tel" class="form-control" id="#" name="ptrainedspot" placeholder="Trained Spot">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <div class="row mt-4">
                            <div class="col-4">
                            <label for="inputmarriagestatus" class=" text text-secondary">Marriage status</label>
                            </div>
                            <div class="col">
                            <input type="tel" class="form-control" id="exampleInputPassword1" name='pmarriagestatus'placeholder="Trained Spot">
                            <!-- <select id="inputmarriagestatus" class="form-control">
                            <option selected>Choose</option>
                            <option value="Married">Married</option>
                            <option value="Single">Single</option>
                            <option value="Separated">Saperated</option>
                            <option value="Divorce">Divorce</option>
                          </select> -->
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name='pmedicalstatus' placeholder="MEDICAL STATUS">
                        </div>
                      </div>


                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name='prank' placeholder="Police Rank">
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="pnote" placeholder="NOTES">
                        </div>
                      </div>
                      
                  </div>
                      <button type="submit" class="btn btn-primary mt-2" name= 'btnpoliceRecord'>Submit</button>
                      <button class="btn btn-light">Cancel</button>
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

