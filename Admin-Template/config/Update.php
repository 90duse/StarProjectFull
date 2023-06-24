

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

<div class="">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">Crime Record</h4>
                  <?php    
                    //  include '../config.php';
                    //   $crimeRegisterDate = '';
                    //   $crimeType = '';
                    //   $crimePlace= '';
                    //   $crimeVictam = '';
                    //   $crimeCriminal = '';
                    //   $crimeOfficer = '';
                    //   $crimeWitness = '';
                    //   $crimeEvidence = '';
                    //   $crimeItems = '';
                    //   $crimeStatus = '';
                    //   $crimeNote = '';

                    //   $errorMessage = ''; 
                    //   $successMessage = '';


                    //   if($_SERVER['REQUEST_METHOD'] == 'POST'){
                        
                    //     if(isset($_POST['btncrime'])){
                    //         //echo 'working';
                    //           //@$CASEID = $_GET['crimeid'];
                    //           @$crimeRegisterDate = $_GET['crimeregisterdate'];
                    //           @$crimeType = $_GET['crimetype'];
                    //           @$crimePlace= $_GET['crimeplace'];
                    //           @$crimeVictam = $_GET['crimevictam'];
                    //           @$crimeCriminal = $_GET['crimecriminal'];
                    //           @$crimeOfficer = $_GET['crimeofficer'];
                    //           @$crimeWitness = $_GET['crimewitness'];
                    //           @$crimeEvidence = $_GET['crimeevidence'];
                    //           @$crimeItems = $_GET['crimeitems'];
                    //           @$crimeStatus = $_GET['crimestatus'];
                    //           @$crimeNote = $_GET['crimenote'];
                              
    
                    //       }

                      //}
                      
                      //do {
                            // if (empty($crimeRegisterDate) || empty($crimeType) || empty($crimeVictam) || empty($crimeCriminal)|| empty($crimeOfficer)
                            // || empty($crimeWitness) || empty($crimeEvidence) || empty($crimeItems) || empty($crimeStatus) || empty($crimeNote)){
                            //     $errorMessage = 'All fields must be fullfil';
                            //     break; 
                            //} 
                    //         //add Insert code 
                    //         $sql = "INSERT INTO `CrimeRecord_Table` (`cr_id`,`cr_registerDate`, `cr_type`, `cr_place`, `cr_victam`, `cr_criminal`, `cr_officer`, `cr_witness`, `cr_evindence`, `cr_items`, `cr_status`, `cr_note`) 
                    //         VALUES ('', '@$crimeRegisterDate', '$crimeType', '$crimePlace', '$crimeVictam', '$crimeCriminal', '$crimeOfficer', '$crimeWitness ', '$crimeEvidence', '$crimeItems', '$crimeStatus', '$crimeNote')";
                                
                    //             if (mysqli_query($con, $sql)){
                    //              $successMessage = 'Welldone';
                    //             break;
                    //             }    
                    //    } 
                    //    while (false); 
                     

                      



                    

                    ?>
                  <form class="forms-sample" method="POST">
                    <div class="container">
                    
                           ?>
                      <div class="row">
                        <div class="col-lg-6">
                        <div class="row mt-4">
                                  <div class="col-6"> 
                                      <label for="exampleInputUsername1" class=" text text-secondary">Case ID</label>
                                  </div>
                                    <div class="col">
                                    <input type="number" class="form-control" id="#" name="crimeid" placeholder="Case ID" value="<?php echo $CASEID;?>" >
                                    </div>
                              </div> 
                        </div>
                        <div class="col-lg-6">
                        <div class="row mt-4">
                                  <div class="col-6"> 
                                      <label for="exampleInputUsername1" class=" text text-secondary">Register Date</label>
                                  </div>
                                    <div class="col">
                                    <input type="date" class="form-control" id="#" name="crimeregisterdate" placeholder="date" value="<?php echo $crimeRegisterDate;?>" >
                                    </div>
                              </div> 
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="crimetype" placeholder="Crime type" value="<?php echo $crimeType; ?>">
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="crimeplace" placeholder="Place" value="<?php echo $crimePlace; ?>">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="crimevictam" placeholder="Victam/Victams" value="<?php echo $crimeVictam;?>">
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="crimecriminal" placeholder="Criminal" value="<?php echo $crimeCriminal;?>">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="crimeofficer" placeholder="Officer on Charge" value="<?php echo $crimeOfficer;?>">
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="crimewitness" placeholder="WITNESSES" value="<?php echo $crimeWitness;?>">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="crimeevidence" placeholder="EVIDENCE" value="<?php echo $crimeEvidence;?>" >
                        </div>
                        <div class="col-lg-6">
                        <label for="#"></label>
                        <input type="text" class="form-control" id="#" name="crimeitems" placeholder="ITEMS IN THE SCENE" value="<?php echo $crimeItems;?>">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="#"></label>
                        <input type="text" class="form-control" id="#" name="crimestatus" placeholder="STATUS" value="<?php echo $crimeStatus;?>">
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="textarea" class="form-control" id="#" name="crimenote" placeholder="NOTES" value="<?php echo $crimeNote;?>">
                        </div>
                      </div>
                        <div class="button">
                          <button type="submit" class="btn btn-primary  m-2" name="btncrime">Submit</button>
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

