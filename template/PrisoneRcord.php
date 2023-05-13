


 <!DOCTYPE html>
 <html lang="en">
  
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>POLICE MANAGEMENT SYSTEM </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
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
   <?php  include "/partials/navbar.php";?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <?php  include "partials/settings-panel.php";?>
     
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
     <?php   include "partials/sidebar.php";?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">Prison Record</h4>
                      <?php    
                        include 'config.php';
                        
                        if(isset($_GET['btnprisoner'])){
                          //echo 'working';
                          @$ID = $_GET['prisonerid'];
                          @$RegisterDate = $_GET['prisonerregisterdate'];
                          @$prisonerFullname = $_GET['prisonerfullname'];
                          @$prisonerHeight= $_GET['prisonerheight'];
                          @$prisonerAge = $_GET['prisonerage'];
                          @$prisonerWeight = $_GET['prisonerweight'];
                          @$prisonerBirthDate = $_GET['prisonerdateofbirth'];
                          @$prisonerPlaceOfBirth = $_GET['prisonerplaceofbirth'];
                          @$prisonerAddress = $_GET['prisoneraddress'];
                          @$prisonerPhone = $_GET['prisonertellephone'];
                          @$prisonerEmail = $_GET['prisoneremail'];
                          @$prisonerParentName = $_GET['prisonermothername'];
                          @$prisonerEducation = $_GET['prisonereducationlevel'];
                          @$prisonerCrimeType = $_GET['prisonercrimetype'];
                          @$prisonerMarriageStatus = $_GET['prisonermarriagestatus'];
                          @$prisonerSentencePeriod = $_GET['prisonersentenceperiod'];
                          @$prisonerMedicalStatus = $_GET['prisonermedicalstatus'];
                          @$prisonerPersonalBelongs = $_GET['prisonerpersonalbelongs'];
                          @$prisonerReleaseDate = $_GET['prisonerreleasedate'];
                          @$prisonerJudiciaryTrial =$_GET['prsionerjudiciarytrial'];
                          @$prisonerLawyer = $_GET['prisonerlawyer'];
                          @$prisonerCellNo = $_GET['prisonercellnumber'];
                          @$prisonerBehavier=$_GET['prisonerbehavier'];
                          @$prisonerNote = $_GET['prisonernote'];
                        } 
                         $sql = "INSERT INTO `PrisonerRecord` (`id`, `pri_registerdate`, `pri_fullname`, `pri_height`, `pri_age`, `pri_weight`, `pri_dateof_birth`, `pri_placeof_birth`, `pri_address`, `pri_tellephone`, `pri_mothers_name`, `pri_education`, `pri_crimeType`, `pri_marriage`, `pri_medicalStatus`, `pri_sentenceperiod`, `pri_prersonalBelongs`, `pri_releaseDay`, `pri_trail`, `pri_lawyer`, `pri_cellNo`, `pri_behavier`, `pri_notes`) 
                         VALUES ('', '$RegisterDate', '$prisonerFullname', '$prisonerHeight', '$prisonerAge', '$prisonerWeight', '$prisonerBirthDate', '$prisonerPlaceOfBirth', '$prisonerAddress', '$prisonerPhone', '$prisonerParentName', '$prisonerEducation', '$prisonerCrimeType', '$prisonerMarriageStatus', '$prisonerMedicalStatus', '$prisonerSentencePeriod', '$prisonerPersonalBelongs', '$prisonerReleaseDate', '$prisonerJudiciaryTrial', '$prisonerLawyer', '$prisonerCellNo', '$prisonerBehavier', '$prisonerNote')";
                         if(mysqli_query($con, $sql)){
                          echo 'New Record is being saved Successfully';
                         }

                        else{
                          //echo mysqli_error($con);
                          echo 'not working';
                        }



                        ?>
                  <form class="forms-sample" method="GET">

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
                                    <input type="date" class="form-control" id="#" name="prisonerregisterdate" placeholder="date" Required>
                                    </div>
                              </div> 
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <label for="exampleInputUsername1"></label>
                          <input type="text" class="form-control" id="#" name="prisonername" placeholder="FULLNAME" Required>
                        </div>
                        <div class="col-lg-6">
                          <div class="row">
                            <div class="col-lg-4">
                              <label for="exampleInputUsername1"></label>
                              <input type="number" class="form-control" id="#" name="prisonerheight" placeholder="Height" Required>
                            </div>
                            <div class="col-lg-4">
                              <label for="exampleInputUsername1"></label>
                              <input type="number" class="form-control" id="#" name="prisonerage" placeholder="Age" Required>
                            </div>
                            <div class="col-lg-4">
                              <label for="exampleInputUsername1"></label>
                              <input type="number" class="form-control" id="#" name="prisonerweight" placeholder="weight" Required>>
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
                                    <input type="date" class="form-control" id="dayofbirth" name="prisonerdayofbirth" placeholder="date" Required>
                                    </div>
                              </div> 
                          </div>
                          <div class="col-lg-6">
                            <label for="exampleInputUsername1"></label>
                            <input type="text" class="form-control" id="#" name="prisonerplaceofbirth" placeholder="Place of Birth" Required>
                          </div>
                        
                      </div>
                      
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="prisoneraddress" placeholder="Address" Required>
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="tel" class="form-control" id="#" name="prisonertellephone" placeholder="Tellephone" Required>
                        </div>
                      </div>
                      <div class="row">
                       
                        <div class="col">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="prisonermothername" placeholder="Mother's Name" Required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="prisonereducationlevel" placeholder="Education Level" Required>
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="tel" class="form-control" id="#" name="prisonercrimetype" placeholder="Crime Type" Required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <div class="row mt-4">
                            <div class="col-4">
                            <label for="inputmarriagestatus" class=" text text-secondary">Marriage status</label>
                            </div>
                            <div class="col">
                            <input type="text"  class="form-control" id="#" name="prisonermarriagestatus" Required>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="prisonermedicalstatus" placeholder="MEDICAL STATUS" Required>
                        </div>
                      </div>


                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="prisonersentenceperiod" placeholder="Sentence Period" Required>
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="prisonerpersonalbelongs" placeholder="Personal Belongs" Required>
                        </div>
                      </div>
                      <div class="row">
                       <div class="col-lg-6">
                              <div class="row mt-4">
                                  <div class="col-6"> 
                                      <label for="exampleInputUsername1" class=" text text-secondary">Release Time</label>
                                  </div>
                                    <div class="col">
                                    <input type="date" class="form-control" id="#" name="prisonerreleasedate" placeholder="date" Required>
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
                        <input type="text" class="form-control" id="#" name="prisonerlawyer" placeholder="Lawyer" Required>
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="prisonercellnumber" placeholder="Cell Number" Required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="prisonerbehavier" placeholder="Behavier" Required>
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
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

