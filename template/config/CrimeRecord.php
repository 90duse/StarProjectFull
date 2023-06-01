

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
                  <h4 class="card-title text-center">Crime Record</h4>
                  <?php    
                    //session_start();
                      include '../config.php';
                    
                      
                      // $errorMessage = 'Error';
                       $successMessage = "<div class='alert alert-success' role='alert'>
                      Successfully Recorded Your Data 
                     </div>";
                       $ErrMessage = "<div class='alert alert-danger' role='alert'>
                       All Fields must be filled 
                     </div>";
                      $CASEID = $crimeRegisterDate = $crimeType =  $crimePlace=  $crimeVictam = 
                      $crimeCriminal =  $crimeOfficer = $crimeWitness = $crimeEvidence = $crimeItems = 
                      $crimeStatus =  $crimeNote = '';
                      
                       function test_input($data){
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data ;
                       }
                  

                        if($_SERVER["REQUEST_METHOD"] == "POST"){

                          if(empty($_POST['crimetype']) && empty($_POST['crimeplace']) && empty($_POST['crimevictam'])
                          && empty($_POST['crimecriminal']) && empty($_POST['crimeofficer']) && empty($_POST['crimewitness'])
                          && empty($_POST['crimeevidence']) && empty($_POST['crimeitems']) && empty($_POST['crimestatus'])
                          && empty($_POST['crimenote']) && empty($_POST['crimeregisterdate']) && empty($_POST['crimeid'])) 
                          {
                            //exit(); 
                            $_SESSION['status'] = 'They canot be empty ';
                            $_SESSION['status_code'] = 'error';
                        
                          } else {
                            
                       
                           if(isset($_POST['btncrime'])){
                          
                            //echo 'working'; 
                            if(empty($_POST['crimetype'])){
                               echo $ErrMessage ;
                            } else {
                              @$crimeType = test_input($_POST['crimetype']);
                              if(!preg_match("/^['a-zA-Z']*$/", $crimeType)){
                                $_SESSION['status'] = 'Crime Type - Only letters and white spcae is allowed' ;
                                $_SESSION['status_code'] = 'error';
                                echo 'Only letters and white space is allowed';
   
                                 } 
                            }
                              @$CASEID = test_input($_POST['crimeid']);
                              @$crimeRegisterDate = test_input($_POST['crimeregisterdate']);
                              
                              // if(!preg_match("/^['a-zA-Z']*$/", $crimeType)){
                              //    $_SESSION['status'] = 'Crimetype!! Only letters and white spcae is allowed' ;
                              //    $_SESSION['status_code'] = 'error';
                              //    //echo 'Only letters and white space is allowed';
                              //     } 
                              @$crimePlace= test_input($_POST['crimeplace']);
                            

                              @$crimeVictam = test_input($_POST['crimevictam']);
                              if(!preg_match("/^['a-zA-Z']*$/", $crimeVictam)){
                                $_SESSION['status'] = 'Crime Type - Only letters and white spcae is allowed' ;
                                $_SESSION['status_code'] = 'error';
                                echo 'Only letters and white space is allowed';
   
                                 } 
                              @$crimeCriminal = test_input($_POST['crimecriminal']);
                              if(!preg_match("/^['a-zA-Z']*$/", $crimeCriminal)){
                                $_SESSION['status'] = 'Crime Type - Only letters and white spcae is allowed' ;
                                $_SESSION['status_code'] = 'error';
                                echo 'Only letters and white space is allowed';
   
                                 } 
                              @$crimeOfficer = test_input($_POST['crimeofficer']);
                              if(!preg_match("/^['a-zA-Z']*$/", $crimeOfficer)){
                                $_SESSION['status'] = 'Crime Type - Only letters and white spcae is allowed' ;
                                $_SESSION['status_code'] = 'error';
                                echo 'Only letters and white space is allowed';
   
                                 } 
                              @$crimeWitness = test_input($_POST['crimewitness']);
                              if(!preg_match("/^['a-zA-Z']*$/", $crimeWitness)){
                                $_SESSION['status'] = 'Crime Type - Only letters and white spcae is allowed' ;
                                $_SESSION['status_code'] = 'error';
                                echo 'Only letters and white space is allowed';
   
                                 } 
                              @$crimeEvidence = test_input($_POST['crimeevidence']);

                              @$crimeItems = test_input($_POST['crimeitems']);
                              @$crimeStatus = test_input($_POST['crimestatus']);
                              @$crimeNote = test_input($_POST['crimenote']);

                              

                            
                        
                       

                            
                          $sql = "INSERT INTO `CrimeRecord_Table` (`cr_id`,`cr_registerDate`, `cr_type`, `cr_place`, `cr_victam`, `cr_criminal`, `cr_officer`, `cr_witness`, `cr_evindence`, `cr_items`, `cr_status`, `cr_note`) 
                          VALUES ('', '$crimeRegisterDate', '$crimeType', '$crimePlace', '$crimeVictam', '$crimeCriminal', '$crimeOfficer', '$crimeWitness ', '$crimeEvidence', '$crimeItems', '$crimeStatus', '$crimeNote')";
                        
                            if (mysqli_query($con, $sql))
                            {
                             $_SESSION['status'] = 'Congrates! You Added New Data ' ;
                             $_SESSION['status_code'] = 'success';
                             
                            }
   
                            else 
                            {
                              $_SESSION['status'] = 'All fields must be filled' ;
                              $_SESSION['status_code'] = 'error';
                              //echo $errorMessage;
                              echo mysqli_error($con);
                            }

                          }
                          
                        } 
                      }
                    ?>
                  <form   id = "form" name="myForm "class="forms-sample"  method="POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> "  onsubmit="return validateForm()" >
                    <div class="container">
                      <?php  //if (isset($_SESSION['status'])){
                        // echo $_SESSION['status'];
                        // session_destroy();
                      //}
                            ?>
                        <div class="row">
                        <div class="col-lg-6">
                        <div class="row mt-4">
                                  <div class="col-6"> 
                                      <label for="exampleInputUsername1" class=" text text-secondary">Case ID</label>
                                  </div>
                                    <div class="col">
                                    <input type="number" class="form-control" id="#" name="crimeid" placeholder="Case ID" >
                                    </div>
                              </div> 
                        </div>
                        <div class="col-lg-6">
                        <div class="row mt-4">
                                  <div class="col-6"> 
                                    <?php if(isset($_POST['crimeregisterdate']) && empty($_POST['crimeregisterdate'])){
                                       $_SESSION['status'] = 'All fields must be filled' ;
                                       $_SESSION['status_code'] = 'error';
                                    }?>
                                      <label for="exampleInputUsername1" class=" text text-secondary">Register Date</label>
                                  </div>
                                    <div class="col">
                                    <input type="date" class="form-control" id="crimeRegisterDate" name="crimeregisterdate" placeholder="date"  >
                                    </div>
                              </div> 
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6 " >
                        <?php   
                            if(!preg_match("/^['a-zA-Z']*$/", $crimeType)){
                             $_SESSION['status'] = 'Only letters and white spcae is allowed' ;
                             $_SESSION['status_code'] = 'error';
                             echo 'Only letters and white space is allowed';

                              } 
                                
                              ?>
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="crimeType" name="crimetype" placeholder="Crime type" value="" >
                        <div class="error"></div>
                        </div>
                        <div class="col-lg-6">
                          <?php   if(!preg_match("/^['a-zA-Z']*$/", $crimePlace)){
                                $_SESSION['status'] = 'Crime Place - Only letters and white spcae is allowed' ;
                                $_SESSION['status_code'] = 'error';
                                echo 'Only letters and white space is allowed';
   
                                 } 
                          
                          ?>
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="crimePlace" name="crimeplace" placeholder="Place" >
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                        <?php   if(!preg_match("/^['a-zA-Z']*$/", $crimeVictam)){
                                $_SESSION['status'] = 'Crime Victam- Only letters and white spcae is allowed' ;
                                $_SESSION['status_code'] = 'error';
                                echo 'Only letters and white space is allowed';
   
                                 } 
                          
                          ?>
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="crimeVictam" name="crimevictam" placeholder="Victam/Victams" >
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="crimeCriminal" name="crimecriminal" placeholder="Criminal" >
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="crimeOfficer" name="crimeofficer" placeholder="Officer on Charge">
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="crimeWitness" name="crimewitness" placeholder="WITNESSES">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="crimeEvidence" name="crimeevidence" placeholder="EVIDENCE" >
                        </div>
                        <div class="col-lg-6">
                        <label for="#"></label>
                        <input type="text" class="form-control" id="crimeItem" name="crimeitems" placeholder="ITEMS IN THE SCENE">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="#"></label>
                        <input type="text" class="form-control" id="crimeStatus" name="crimestatus" placeholder="STATUS" >
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="textarea" class="form-control" id="crimeNote" name="crimenote" placeholder="NOTES" >
                        </div>
                      </div>
                        <div class="button">
                          <button type="submit"  class="btn btn-primary  m-2" name="btncrime" value = "submit" >Submit</button>
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

  <!-- sweet alert -->
  <script src="../js/sweetalert.min.js"></script>
  <script def src="validation.js"></script>

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

