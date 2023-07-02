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
                  <h4 class="card-title text-center">Prison Record</h4>
                      <?php    
                        include '../config.php';

                        // variable declaration
                        $ID = $RegisterDate = $prisonerFullname =  $prisonerHeight= $prisonerAge =  $prisonerWeight = 
                        $prisonerBirthDate = $prisonerPlaceOfBirth = $prisonerAddress = $prisonerPhone = $prisonerEmail = 
                        $prisonerParentName = $prisonerEducation =  $prisonerCrimeType = $prisonerMarriageStatus =  $prisonerSentencePeriod = 
                        $prisonerMedicalStatus = $prisonerPersonalBelongs = $prisonerReleaseDate = $prisonerJudiciaryTrial = $prisonerLawyer = 
                        $prisonerCellNo = $prisonerBehavier= $prisonerNote = $prisonerPhoto = $prisonerGender ='';
                       

                        if($_SERVER["REQUEST_METHOD"] == "POST"){

                          if(empty($_POST['prisonerregisterdate']) && empty($_POST['prisonerfullname']) && empty($_POST['prisonerheight'])
                          && empty($_POST['prisonerage']) && empty($_POST['prisonerweight']) && empty($_POST['prisonerdateofbirth'])
                          && empty($_POST['prisonerplaceofbirth']) && empty($_POST['prisoneraddress']) && empty($_POST['prisonertellephone'])
                          && empty($_POST['prisoneremail']) && empty($_POST['prisonermothername']) && empty($_POST['prisonerid'])
                          && empty($_POST['prisonereducationlevel']) && empty($_POST['prisonermarriagestatus']) && empty($_POST['prisonermedicalstatus']) 
                          && empty($_POST['prisonercrimetype']) && empty($_POST['prisonersentenceperiod']) && empty($_POST['prisonernote'])
                          && empty($_POST['prisonerpersonalbelongs']) && empty($_POST['prisonerreleasedate']) && empty($_POST['prisonerjudiciarytrial'])
                          && empty($_POST['prisonerlawyer']) && empty($_POST['prisonercellnumber']) && empty($_POST['prisonergender']) && empty($_POST['prisonerbehaiver'])) 
                          {
                             
                            $_SESSION['status'] = 'They canot be empty ';
                            $_SESSION['status_code'] = 'error';
                        
                          } 
                        else {

                          if(isset($_POST['btnprisoner']))
                          {

                            //variable Assignments

                            @$ID = $_POST['prisonerid'];
                            @$RegisterDate = $_POST['prisonerregisterdate'];
                            @$prisonerFullname = $_POST['prisonerfullname'];
                            @$prisonerHeight= $_POST['prisonerheight'];
                            @$prisonerAge = $_POST['prisonerage'];
                            @$prisonerWeight = $_POST['prisonerweight'];
                            $prisonerGender  = $_POST['prisonergender'];
                            @$prisonerBirthDate = $_POST['prisonerdateofbirth'];
                            @$prisonerPlaceOfBirth = $_POST['prisonerplaceofbirth'];
                            @$prisonerAddress = $_POST['prisoneraddress'];
                            @$prisonerPhone = $_POST['prisonertellephone'];
                            @$prisonerEmail = $_POST['prisoneremail'];
                            @$prisonerParentName = $_POST['prisonermothername'];
                            @$prisonerEducation = $_POST['prisonereducationlevel'];
                            @$prisonerCrimeType = $_POST['prisonercrimetype'];
                            @$prisonerMarriageStatus = $_POST['prisonermarriagestatus'];
                            @$prisonerSentencePeriod = $_POST['prisonersentenceperiod'];
                            @$prisonerMedicalStatus = $_POST['prisonermedicalstatus'];
                            @$prisonerPersonalBelongs = $_POST['prisonerpersonalbelongs'];
                            @$prisonerReleaseDate = $_POST['prisonerreleasedate'];
                            @$prisonerJudiciaryTrial =$_POST['prsionerjudiciarytrial'];
                            @$prisonerLawyer = $_POST['prisonerlawyer'];
                            @$prisonerCellNo = $_POST['prisonercellnumber'];
                            @$prisonerBehavier=$_POST['prisonerbehavier'];
                            @$prisonerNote = $_POST['prisonernote'];
                            $prisonerImage = $_FILES['prisonerimage']['name'];
                            $tmp_name = $_FILES['prisonerimage']['tmp_name'];
                            $imageLocation = "../images/"; 

                            if(move_uploaded_file($tmp_name, $imageLocation.$prisonerImage)){
                              echo "Your image is saved "; 
                            } else{
                              echo mysqli_error($con);
                            }

                          } 
                         $sql = "INSERT INTO `PrisonerRecord` (`pri_id`, `pri_registerdate`, `pri_photo`, `pri_fullname`, `pri_height`, `pri_age`, 
                         `pri_weight`,`pri_gender`, `pri_dateof_birth`, `pri_placeof_birth`, `pri_address`, `pri_tellephone`, `pri_mothers_name`,
                          `pri_education`, `pri_crimeType`, `pri_marriage`, `pri_medicalStatus`, `pri_sentenceperiod`, `pri_prersonalBelongs`, 
                          `pri_releaseDay`, `pri_trail`, `pri_lawyer`, `pri_cellNo`, `pri_behavier`, `pri_notes`) 
                         VALUES ('', '$RegisterDate', ' ', '$prisonerFullname', '$prisonerHeight', '$prisonerAge', '$prisonerWeight', '$prisonerGender',
                          '$prisonerBirthDate', '$prisonerPlaceOfBirth', '$prisonerAddress', '$prisonerPhone', 
                         '$prisonerParentName', '$prisonerEducation', '$prisonerCrimeType', '$prisonerMarriageStatus',
                          '$prisonerMedicalStatus', '$prisonerSentencePeriod', '$prisonerPersonalBelongs', 
                         '$prisonerReleaseDate', '$prisonerJudiciaryTrial', '$prisonerLawyer', '$prisonerCellNo', '$prisonerBehavier', '$prisonerNote')";

                         if(mysqli_query($con, $sql))
                         {
                          $_SESSION['status'] = 'Your Data is saved Successfully ';
                          $_SESSION['status_code'] = 'success';
                         }

                        else{
                          echo mysqli_error($con);
                          // echo 'not working';
                            }

                     }
                    }

                        ?>
                  <form class="forms-sample" method="POST" enctype ="multipart/form-data">

                  <div class="container">
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="number" class="form-control" id="#" name="prisonerid" placeholder="Prosinor ID">
                        </div>
                        <div class="col-lg-6">
                              <div class="row mt-4">
                                  <div class="col-6"> 
                                      <label for="exampleInputUsername1" class=" text text-secondary">Registerd Date</label>
                                  </div>
                                    <div class="col">
                                    <input type="date" class="form-control" id="#" name="prisonerregisterdate" placeholder="date" >
                                    </div>
                              </div> 
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="file" class="form-control " id="#" name="prisonerimage" placeholder="Prisoner Image">
                        </div>
                        <div class="col-lg-6">
                          <label for="exampleInputUsername1"></label>
                          <input type="text" class="form-control" id="#" name="prisonername" placeholder="FULLNAME" >
                        </div>
                        
                      </div>

                      <div class="row">
                      <div class="col-lg-6">
                          <div class="row">
                            <div class="col-lg-3">
                              <label for="exampleInputUsername1"></label>
                              <input type="number" class="form-control" id="#" name="prisonerheight" placeholder="Height" >
                            </div>
                            <div class="col-lg-3">
                              <label for="exampleInputUsername1"></label>
                              <input type="number" class="form-control" id="#" name="prisonerage" placeholder="Age" >
                            </div>
                            <div class="col-lg-3">
                              <label for="exampleInputUsername1"></label>
                              <input type="number" class="form-control" id="#" name="prisonerweight" placeholder="weight" >
                            </div>
                            <div class="col-lg-3">
                              <label for="exampleInputUsername1"></label>
                              <input type="text" class="form-control" id="#" name="prisonergender" placeholder="gender" >
                            </div>
                         </div> 
                        </div>
                        <div class="col-lg-6">
                        <div class="col">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="prisonermothername" placeholder="Mother's Name" >
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
                                    <input type="date" class="form-control" id="dayofbirth" name="prisonerdayofbirth" placeholder="date" >
                                    </div>
                              </div> 
                          </div>
                          <div class="col-lg-6">
                            <label for="exampleInputUsername1"></label>
                            <input type="text" class="form-control" id="#" name="prisonerplaceofbirth" placeholder="Place of Birth" >
                          </div>
                        
                      </div>
                      
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="prisoneraddress" placeholder="Address" >
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="tel" class="form-control" id="#" name="prisonertellephone" placeholder="Tellephone" >
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="prisonereducationlevel" placeholder="Education Level" >
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="tel" class="form-control" id="#" name="prisonercrimetype" placeholder="Crime Type" >
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <div class="row mt-4">
                            <div class="col-4">
                            <label for="inputmarriagestatus" class=" text text-secondary">Marriage status</label>
                            </div>
                            <div class="col">
                            <input type="text"  class="form-control" id="#" name="prisonermarriagestatus" >
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="prisonermedicalstatus" placeholder="MEDICAL STATUS" >
                        </div>
                      </div>


                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="prisonersentenceperiod" placeholder="Sentence Period" >
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="prisonerpersonalbelongs" placeholder="Personal Belongs" >
                        </div>
                      </div>
                      <div class="row">
                       <div class="col-lg-6">
                              <div class="row mt-4">
                                  <div class="col-6"> 
                                      <label for="exampleInputUsername1" class=" text text-secondary">Release Time</label>
                                  </div>
                                    <div class="col">
                                    <input type="date" class="form-control" id="#" name="prisonerreleasedate" placeholder="date" >
                                    </div>
                              </div> 
                          </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="prisonerjudiciarytrial" placeholder="judiciary Trial">
                        </div>
                      </div> 
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="prisonerlawyer" placeholder="Lawyer" >
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="prisonercellnumber" placeholder="Cell Number" >
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="prisonerbehavier" placeholder="Behavier" >
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="prisonernotes" placeholder="Notes">
                        </div>
                      </div>
                      <div class="button">
                        <button type="submit" class="btn btn-primary m-2" name="btnprisoner">Submit</button>
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

