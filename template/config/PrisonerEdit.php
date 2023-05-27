


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
                  <h4 class="card-title text-center">Prison Record</h4>
                      <?php    
                        include '../config.php';
                        $ID = '';
                        $RegisterDate = '';
                        $prisonerFullname = '';
                        $prisonerHeight= '';
                        $prisonerAge = '';
                        $prisonerWeight = '';
                        $prisonerBirthDate = '';
                        $prisonerPlaceOfBirth = '';
                        $prisonerAddress = '';
                        $prisonerPhone = '';
                        $prisonerEmail = '';
                        $prisonerParentName = '';
                        $prisonerEducation = '';
                        $prisonerCrimeType = '';
                        $prisonerMarriageStatus = '';
                        $prisonerSentencePeriod = '';
                        $prisonerMedicalStatus = '';
                        $prisonerPersonalBelongs = '';
                        $prisonerReleaseDate = '';
                        $prisonerJudiciaryTrial = '';
                        $prisonerLawyer = '';
                        $prisonerCellNo = '';
                        $prisonerBehavier= '';
                        $prisonerNote =  '';
                        $prisonerPhoto ='';
                        if(isset($_POST['id'])){
                          $id = $_GET['id'];
                        
                      

                        $sql = "SELECT * FROM `prisonerrecord` where pri_id ='$id'";
                        $result = mysqli_query($con, $sql);
                         if(mysqli_num_rows($result) > 0){
                          while ( $row = mysqli_fetch_assoc($result)){

                            // declare variables to read form the data base
                            @$RegisterDate = $_GET['pri_registerdate'];
                            @$pri_Fullname = $_GET['pri_fullname'];
                            @$pri_Height= $_GET['pri_height'];
                            @$pri_Age = $_GET['pri_age'];
                            @$pri_Weight = $_GET['pri_weight'];
                            @$pri_BirthDate = $_GET['pri_dateof_birth'];
                            @$pri_PlaceOfBirth = $_GET['pri_placeof_birth'];
                            @$pri_Address = $_GET['pri_address'];
                            @$pri_Phone = $_GET['pri_tellephone'];
                            @$pri_Email = $_GET['pri_email'];
                            @$pri_ParentName = $_GET['pri_mothers_name'];
                            @$pri_Education = $_GET['pri_education'];
                            @$pri_CrimeType = $_GET['pri_crimeType'];
                            @$pri_MarriageStatus = $_GET['pri_marriage'];
                            @$pri_SentencePeriod = $_GET['pri_sentenceperiod'];
                            @$pri_MedicalStatus = $_GET['pri_medicalStatus'];
                            @$pri_PersonalBelongs = $_GET['pri_personalBelongs'];
                            @$pri_ReleaseDate = $_GET['pri_releaseDay'];
                            @$pri_JudiciaryTrial =$_GET['pri_trial'];
                            @$pri_Lawyer = $_GET['pri_lawyer'];
                            @$pri_CellNo = $_GET['pri_cellNo'];
                            @$pri_Behavier=$_GET['pri_behavier'];
                            @$pri_Note = $_GET['pri_note'];
                            
                            @$pri_Image = $_FILES['prisonerimage']['name'];
                            $tmp_name = $_FILES['prisonerimage']['tmp_name'];
                            $imageLocation = "../images/"; 

                          
                          }
                        }

                        }    

                      
                          //echo 'working';
                          //@$ID = $_GET['prisonerid'];
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
                          @$prisonerImage = $_FILES['prisonerimage']['name'];
                          $tmp_name = $_FILES['prisonerimage']['tmp_name'];
                          $imageLocation = "../images/"; 

                          if(move_uploaded_file($tmp_name, $imageLocation.$prisonerImage)){
                            echo "Your image is saved "; 
                          } else{
                            echo mysqli_error($con);
                          }

                       
                        
                         $sql = "INSERT INTO `PrisonerRecord` (`id`, `pri_registerdate`, `pri_photo`, `pri_fullname`, `pri_height`, `pri_age`, `pri_weight`, `pri_dateof_birth`, `pri_placeof_birth`, `pri_address`, `pri_tellephone`, `pri_mothers_name`,
                          `pri_education`, `pri_crimeType`, `pri_marriage`, `pri_medicalStatus`, `pri_sentenceperiod`, `pri_prersonalBelongs`, `pri_releaseDay`, `pri_trail`, `pri_lawyer`, `pri_cellNo`, `pri_behavier`, `pri_notes`) 
                         VALUES ('', '$RegisterDate', '$prisonerImage', '$prisonerFullname', '$prisonerHeight', '$prisonerAge', '$prisonerWeight', '$prisonerBirthDate', '$prisonerPlaceOfBirth', '$prisonerAddress', '$prisonerPhone', 
                         '$prisonerParentName', '$prisonerEducation', '$prisonerCrimeType', '$prisonerMarriageStatus', '$prisonerMedicalStatus', '$prisonerSentencePeriod', '$prisonerPersonalBelongs', 
                         '$prisonerReleaseDate', '$prisonerJudiciaryTrial', '$prisonerLawyer', '$prisonerCellNo', '$prisonerBehavier', '$prisonerNote')";
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
                            <div class="col-lg-4">
                              <label for="exampleInputUsername1"></label>
                              <input type="number" class="form-control" id="#" name="prisonerheight" placeholder="Height" >
                            </div>
                            <div class="col-lg-4">
                              <label for="exampleInputUsername1"></label>
                              <input type="number" class="form-control" id="#" name="prisonerage" placeholder="Age" >
                            </div>
                            <div class="col-lg-4">
                              <label for="exampleInputUsername1"></label>
                              <input type="number" class="form-control" id="#" name="prisonerweight" placeholder="weight" >
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

