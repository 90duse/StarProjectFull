


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
                        $successMessage = 'New Record is being saved Successfully';
                        if(isset($_GET['id'])){
                          $id = $_GET['id'];
                        
                      

                        $sql = "SELECT * FROM `prisonerrecord` where pri_id ='$id'";
                        $result = mysqli_query($con, $sql);
                         if(mysqli_num_rows($result) > 0){
                          while ( $row = mysqli_fetch_assoc($result)){

                            // declare variables to read form the data base
                            @$ID = $row['pri_id'];
                            @$RegisterDate = $row['pri_registerdate'];
                            @$pri_Fullname = $row['pri_fullname'];
                            @$pri_Height= $row['pri_height'];
                            @$pri_Age = $row['pri_age'];
                            @$pri_Weight = $row['pri_weight'];
                            @$pri_BirthDate = $row['pri_dateof_birth'];
                            @$pri_PlaceOfBirth = $row['pri_placeof_birth'];
                            @$pri_Address = $row['pri_address'];
                            @$pri_Phone = $row['pri_tellephone'];
                            @$pri_Email = $row['pri_email'];
                            @$pri_ParentName = $row['pri_mothers_name'];
                            @$pri_Education = $row['pri_education'];
                            @$pri_CrimeType = $row['pri_crimeType'];
                            @$pri_MarriageStatus = $row['pri_marriage'];
                            @$pri_SentencePeriod = $row['pri_sentenceperiod'];
                            @$pri_MedicalStatus = $row['pri_medicalStatus'];
                            @$pri_PersonalBelongs = $row['pri_personalBelongs'];
                            @$pri_ReleaseDate = $row['pri_releaseDay'];
                            @$pri_JudiciaryTrial =$row['pri_trial'];
                            @$pri_Lawyer = $row['pri_lawyer'];
                            @$pri_CellNo = $row['pri_cellNo'];
                            @$pri_Behavier=$row['pri_behavier'];
                            @$pri_Note = $row['pri_note'];
                           // @$pri_image = $row['pri_image'];
                            
                            // @$pri_Image = $_FILES['prisonerimage']['name'];
                            // $tmp_name = $_FILES['prisonerimage']['tmp_name'];
                            // $imageLocation = "../images/"; 

                          
                          }
                        }

                        }    

                      
                          //echo 'working';
                          @$ID = $_GET['prisonerid'];
                          @$Register_Date = $_GET['prisonerregisterdate'];
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
                          // @$prisonerImage = $_FILES['prisonerimage']['name'];
                          // $tmp_name = $_FILES['prisonerimage']['tmp_name'];
                          // $imageLocation = "../images/"; 

                          // if(move_uploaded_file($tmp_name, $imageLocation.$prisonerImage)){
                          //   echo "Your image is saved "; 
                          // } else{
                          //   echo mysqli_error($con);
                          // }

                       
                        
                         $sql = " UPDATE `prisonerrecord` SET `pri_id` = '', `pri_registerdate` = '$Register_Date', `pri_photo` = '', `pri_fullname` = '$prisonerFullname', `pri_height` = '$prisonerHeight', `pri_age` = '$prisonerAge',
                          `pri_weight` = '$prisonerWeight', `pri_dateof_birth` = '$prisonerBirthDate', `pri_placeof_birth` = '$prisonerPlaceOfBirth', `pri_address` = '$prisonerAddress', `pri_tellephone` = '$prisonerPhone', 
                          `pri_mothers_name` = '$prisonerParentName', `pri_education` = '$prisonerEducation', `pri_crimeType` = '$prisonerCrimeType', `pri_marriage` = '$prisonerMarriageStatus', `pri_medicalStatus` = '$prisonerMedicalStatus',
                           `pri_sentenceperiod` = '$prisonerSentencePeriod', `pri_prersonalBelongs` = '$prisonerPersonalBelongs', `pri_releaseDay` = '$prisonerReleaseDate', `pri_trail` = '$prisonerJudiciaryTrial', `pri_lawyer` = '$prisonerLawyer',
                            `pri_cellNo` = '$prisonerCellNo', `pri_behavier` = '$prisonerBehavier', `pri_notes` = '$prisonerNote' WHERE `pri_id` = '$id'";
                         if(mysqli_query($con, $sql)){
                          echo $successMessage ;
                         }

                        else{
                          echo mysqli_error($con);
                          // echo 'not working';
                        }



                        ?>
                  <form class="forms-sample" method="GET" enctype ="multipart/form-data">

                  <div class="container">
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="number" class="form-control" id="#" name="prisonerid" placeholder="Prosinor ID" value="<?php echo @$ID;?>">
                        </div>
                        <div class="col-lg-6">
                              <div class="row mt-4">
                                  <div class="col-6"> 
                                      <label for="exampleInputUsername1" class=" text text-secondary">Registerd Date</label>
                                  </div>
                                    <div class="col">
                                    <input type="date" class="form-control" id="#" name="prisonerregisterdate" placeholder="date"  value="<?php echo @$RegisterDate ;?>">
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
                          <input type="text" class="form-control" id="#" name="prisonername" placeholder="FULLNAME" value="<?php echo @$pri_Fullname;?>">
                        </div>
                        
                      </div>

                      <div class="row">
                      <div class="col-lg-6">
                          <div class="row">
                            <div class="col-lg-4">
                              <label for="exampleInputUsername1"></label>
                              <input type="number" class="form-control" id="#" name="prisonerheight" placeholder="Height" value="<?php echo @$pri_Height ;?>" >
                            </div>
                            <div class="col-lg-4">
                              <label for="exampleInputUsername1"></label>
                              <input type="number" class="form-control" id="#" name="prisonerage" placeholder="Age" value="<?php echo @$pri_Age;?>" >
                            </div>
                            <div class="col-lg-4">
                              <label for="exampleInputUsername1"></label>
                              <input type="number" class="form-control" id="#" name="prisonerweight" placeholder="weight" value="<?php echo @$pri_Weight;?>" >
                            </div>
                         </div> 
                        </div>
                        <div class="col-lg-6">
                        <div class="col">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="prisonermothername" placeholder="Mother's Name" value="<?php echo @$pri_ParentName;?>">
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
                                    <input type="date" class="form-control" id="dayofbirth" name="prisonerdayofbirth" placeholder="date" value="<?php echo @$pri_BirthDate;?>" >
                                    </div>
                              </div> 
                          </div>
                          <div class="col-lg-6">
                            <label for="exampleInputUsername1"></label>
                            <input type="text" class="form-control" id="#" name="prisonerplaceofbirth" placeholder="Place of Birth" value="<?php echo @$pri_PlaceOfBirth;?>">
                          </div>
                        
                      </div>
                      
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="prisoneraddress" placeholder="Address" value="<?php echo @$pri_Address;?>" >
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="tel" class="form-control" id="#" name="prisonertellephone" placeholder="Tellephone" value="<?php echo @$pri_Phone;?>">
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="prisonereducationlevel" placeholder="Education Level" value="<?php echo @$pri_Education;?>" >
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="tel" class="form-control" id="#" name="prisonercrimetype" placeholder="Crime Type" value="<?php echo @$pri_CrimeType;?>" >
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <div class="row mt-4">
                            <div class="col-4">
                            <label for="inputmarriagestatus" class=" text text-secondary">Marriage status</label>
                            </div>
                            <div class="col">
                            <input type="text"  class="form-control" id="#" name="prisonermarriagestatus" value="<?php echo @$pri_MarriageStatus ;?>" >
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="prisonermedicalstatus" placeholder="MEDICAL STATUS" value="<?php echo @$pri_MedicalStatus;?>" >
                        </div>
                      </div>


                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="prisonersentenceperiod" placeholder="Sentence Period" value="<?php echo @$pri_SentencePeriod;?>">
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="prisonerpersonalbelongs" placeholder="Personal Belongs" value="<?php echo @$pri_PersonalBelongs ;?>">
                        </div>
                      </div>
                      <div class="row">
                       <div class="col-lg-6">
                              <div class="row mt-4">
                                  <div class="col-6"> 
                                      <label for="exampleInputUsername1" class=" text text-secondary">Release Time</label>
                                  </div>
                                    <div class="col">
                                    <input type="date" class="form-control" id="#" name="prisonerreleasedate" placeholder="date" value="<?php echo @$pri_ReleaseDate;?>" >
                                    </div>
                              </div> 
                          </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="prisonerjudiciarytrial" placeholder="judiciary Trial" value="<?php echo @$pri_JudiciaryTrial;?>">
                        </div>
                      </div> 
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="prisonerlawyer" placeholder="Lawyer" value="<?php echo @$pri_Lawyer;?>" >
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="prisonercellnumber" placeholder="Cell Number" value="<?php echo @$pri_CellNo;?>" >
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="prisonerbehavier" placeholder="Behavier" value="<?php echo @$pri_Behavier;?>" >
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="prisonernotes" placeholder="Notes" value="<?php echo @$pri_Note;?>">
                        </div>
                      </div>
                      <div class="button">
                        <button type="submit" class="btn btn-primary m-2" name="btnprisoner">Submit</button>
                        <a href="viewPrisonerRecord.php"  class="btn btn-danger">BACK</a>
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

