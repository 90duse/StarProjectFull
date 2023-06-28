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

  <div class="container-scroller ">

    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
    
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
     <div class="main-panel"> 
         <div class="content-wrapper">
            <div class="container bg-success p-3 text-center " >
                <h4>OP</h4>
           
          
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <!-- <a  href="OP.php" class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" role="tab" aria-controls="overview" aria-selected="true">Add New</a> -->
                    <a href="OP.php" class="nav-link" class="nav-link active" > Add New</a>
                    </li>
                    <li class="nav-item">
                      <a href="viewOP.php" class="nav-link" aria-selected="true" >View OP</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#demographics" role="tab" aria-selected="false"></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab" href="#more" role="tab" aria-selected="false">More</a>
                    </li>
                  </ul>
                  <div>
                    <div class="btn-wrapper">
                      <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a>
                      <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                      <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
                    </div>
                 </div>
               </div>
             </div>
           </div>
          </div>
          </div>

    

    
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                      <?php    
                        include '../config.php';
                          if($_SERVER["REQUEST_METHOD"] == "POST"){
                            if(empty($_POST['opregisterdate']) && empty($_POST['opname']) && empty($_POST['opheight'])
                            && empty($_POST['opage']) && empty($_POST['opweight']) && empty($_POST['opdayofbirth'])
                            && empty($_POST['opplaceofbirth']) && empty($_POST['opaddress']) && empty($_POST['opphone'])
                            && empty($_POST['opmothername']) && empty($_POST['opjob']) && empty($_POST['opreason'])
                            && empty($_POST['opmarriagestatus']) && empty($_POST['opmedicalstatus']) && empty($_POST['oppersonalbelongs'])
                            && empty($_POST['opofficer']) && empty($_POST['opcellno']) && empty($_POST['opnote'])) 
                            { 

                            $_SESSION['status'] = 'They canot be empty ';
                            $_SESSION['status_code'] = 'error';
                            } 
                             else {
                           if(isset($_POST['opbtnsubmit'])){
                              //echo 'working';

                          //Variable Declaration 
                              $ID = $Register_Date = $op_Fullname = $op_Height= $op_Age = 
                              $op_Weight = $op_BirthDate = $op_PlaceOfBirth =$op_Address = 
                              $op_Phone = $op_ParentName = $op_Job =  $op_Reason =  $op_MarriageStatus = 
                              $op_MedicalStatus = $op_PersonalBelongs =  $op_Officer =  $op_CellNo =  $op_Note =  $op_Gender = '';
                        
                              $op_Photo ='';

                              $successMessage = 'New Record is being saved Successfully';

                              // Variable Assigment

                          @$ID = $_POST['opid'];
                          @$Register_Date = $_POST['opregisterdate'];
                          @$op_Fullname = $_POST['opname'];
                          @$op_Height= $_POST['opheight'];
                          @$op_Age = $_POST['opage'];
                          @$op_Weight = $_POST['opweight'];
                          @$op_BirthDate = $_POST['opdayofbirth'];
                          @$op_PlaceOfBirth = $_POST['opplaceofbirth'];
                          @$op_Address = $_POST['opaddress'];
                          @$op_Phone = $_POST['opphone'];
                          @$op_ParentName = $_POST['opmothername'];
                          @$op_Job = $_POST['opjob'];
                          @$op_Reason = $_POST['opreason'];
                          @$op_MarriageStatus = $_POST['opmarriagestatus'];
                          @$op_MedicalStatus = $_POST['opmedicalstatus'];
                          @$op_PersonalBelongs = $_POST['oppersonalbelongs'];
                          @$op_Officer = $_POST['opofficer'];
                          @$op_CellNo = $_POST['opcellno'];
                          @$op_Note =  $_POST['opnote'];
                          $op_Gender = $_POST['opgender'];
                          //$op_Photo = $_FILE['opimage'];
                          // $tmp_name = $_FILES['opimage']['tmp_name'];
                          // $imageLocation = "../images/"; 

                          // if(move_uploaded_file($tmp_name, $imageLocation.$prisonerImage)){
                          //   echo "Your image is saved "; 
                          // } else{
                          //   echo mysqli_error($con);
                          // }

                        }
                         @$sql = "INSERT INTO `op_table` (`op_id`, `op_register_date`, `op_fullname`, `op_image`, `op_height`, `op_age`, 
                         `op_weight`, `op_gender`, `op_mothers_name`, `op_dayof_birth`,`op_placeof_birth`, `op_address`, `op_tellephone`, 
                         `op_job`, `op_marriage_status`, `op_medical_status`, `op_reason`, `op_personal_belongs`, `op_cell_no`, `op_officer`, `op_notes`) 
                         VALUES ('', '$Register_Date', '$op_Fullname', '', '$op_Height', '$op_Age', '$op_Weight', '$op_Gender', '$op_ParentName', '$op_BirthDate', 
                         '$op_PlaceOfBirth', '$op_Address', '$op_Phone','$op_Job', '$op_MarriageStatus', '$op_MedicalStatus', '$op_Reason', '$op_PersonalBelongs', '$op_CellNo', '$op_Officer', '$op_Note')";
                         
                         if(mysqli_query($con, $sql)){
                          $_SESSION['status'] = 'Your Data is Saved Succcessfully ';
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
                 
                    

                     <div class="card">
                      <div class="card-body">
                      <div class="row">
                         <h3>Personal Information</h3>
                        <div class="col-lg-6">
                         
                        <label for="exampleInputUsername1"></label>
                        <input type="number"  class="form-control" id="#" name="opid" placeholder="Person ID">
                        </div>
                        <div class="col-lg-6">
                              <div class="row mt-4">
                                  <div class="col-6"> 
                                      <label for="exampleInputUsername1" class=" text text-secondary">Registerd Date</label>
                                  </div>
                                    <div class="col">
                                    <input type="date" class="form-control" id="#" name="opregisterdate" placeholder="date" >
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
                          <input type="text" class="form-control" id="#" name="opname" placeholder="FULLNAME" >
                        </div>
                        
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="row">
                            <div class="col-lg-3">
                              <label for="exampleInputUsername1"></label>
                              <input type="number" class="form-control" id="#" name="opheight" placeholder="Height" >
                            </div>
                            <div class="col-lg-3">
                              <label for="exampleInputUsername1"></label>
                              <input type="number" class="form-control" id="#" name="opage" placeholder="Age" >
                            </div>
                            <div class="col-lg-3">
                              <label for="exampleInputUsername1"></label>
                              <input type="number" class="form-control" id="#" name="opweight" placeholder="weight" >
                            </div>
                            <div class="col-lg-3">
                              <label for="exampleInputUsername1"></label>
                              <input type="text" class="form-control" id="#" name="opgender" placeholder="Gender" >
                            </div>
                         </div> 
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="opjob" placeholder="Job" >
                        </div>
                      </div>
                      <div class="row">
                          <div class="col-lg-6">
                              <div class="row mt-4">
                                  <div class="col-6"> 
                                      <label for="exampleInputUsername1" class=" text text-secondary">Day Of Birth</label>
                                  </div>
                                    <div class="col">
                                    <input type="date" class="form-control" id="#" name="opdayofbirth" placeholder="date" >
                                    </div>
                              </div> 
                          </div>
                          <div class="col-lg-6">
                            <label for="exampleInputUsername1"></label>
                            <input type="text" class="form-control" id="#" name="opplaceofbirth" placeholder="Place of Birth" >
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
                            <input type="text"  class="form-control" id="#" name="opmarriagestatus" >
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="opmedicalstatus" placeholder="MEDICAL STATUS" >
                        </div>
                      </div>
                      
                      </div>
                     </div>
                      
                     <div class="card mt-2 p-4">
                       <div class="car-body">
                        <div class="row">
                        <h3>Contact</h3>
                        <div class="col-lg-6">
                          <label for="exampleInputUsername1"></label>
                          <input type="text" class="form-control" id="#" name="opaddress" placeholder="Address" >
                        </div>
                        <div class="col-lg-6">
                          <label for="exampleInputUsername1"></label>
                          <input type="tel" class="form-control" id="#" name="opphone" placeholder="Tellephone" >
                        </div>
                      </div>
                      <div class="row">
                      <div class="col-lg-6">
                        <div class="col">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="opmothername" placeholder="Mother's Name" >
                        </div>
                        </div>
                      </div>
                      
                      </div>
                     </div>
                    
                     <div class="card mt-2">
                      <div class="card-body">
                        <div class="row">
                         <h3>  Detail Information</h3>
                          <div class="col-lg-6 col-sm-12">
                          <label for="exampleInputUsername1"></label>
                          <input type="tel" class="form-control" id="#" name="opreason" placeholder="Reason for the Arrest" >
                          </div>
                          <div class="col-lg-6 col-sm-12">
                            <label for="exampleInputUsername1"></label>
                            <input type="text" class="form-control" id="#" name="opofficer" placeholder="Officer On Charge">
                         </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6 col-sm-12">
                            <label for="exampleInputUsername1"></label>
                            <input type="text" class="form-control" id="#" name="opcellno" placeholder="Cell No" >
                            </div>
                            <div class="col-lg-6 col-sm-12">
                            <label for="exampleInputUsername1"></label>
                            <input type="text" class="form-control" id="#" name="oppersonalbelongs" placeholder="Personal Belongs" >
                          </div>
                      </div>
                      <div class="row">
                        <div class="col">
                        <label for="moretext"></label>
                        <textarea class=" mt-2 border"  name="opnote" id="" cols="120" rows="10" placeholder="Additional Info about the arrest"></textarea>
                        </div>
                       
                      </div>



                      </div>
                     </div>

                      <div class="button">
                        <button type="submit" class="btn btn-primary m-2" name="opbtnsubmit">Submit</button>
                        <a href="optable.php" class="btn btn-secondary">go back</a>
                      </div>
                  </form>
                </div>
              </div>           
        </div>
        
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
        <?php  include "../partials/footer.php";?>
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

