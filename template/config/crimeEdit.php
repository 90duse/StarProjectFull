

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
   
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      
     
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
     
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">Crime Record</h4>
                  <?php    
                      include '../config.php';

                      
                       $errorMessage = 'Error';
                      $successMessage = 'Successfully recorded';
                      $CASEID ='';
                      $crimeRegisterDate = '';
                      $crimeType = '';
                      $crimePlace= '';
                      $crimeVictam = '';
                      $crimeCriminal = '';
                      $crimeOfficer = '';
                      $crimeWitness = '';
                      $crimeEvidence = '';
                      $crimeItems = '';
                      $crimeStatus = '';
                      $crimeNote = '';

                      if(isset($_GET['id'])){
                        $id = $_GET['id']; 
                      
                       $result = mysqli_query($con, "SELECT * FROM crimerecord_table where cr_id ='$id'");
                                          
                      
                         while ($row = mysqli_fetch_assoc($result)){
                             
                        
                      
                              $ID = $row['cr_id'];
                              $crimeRegisterDate = $row['cr_registerDate'];
                              $crimeType = $row['cr_type'];
                              $crimePlace= $row['cr_place'];
                              $crimeVictam = $row['cr_victam'];
                              $crimeCriminal = $row['cr_criminal'];
                              $crimeOfficer = $row['cr_officer'];
                              $crimeWitness = $row['cr_witness'];
                              $crimeEvidence = $row['cr_evindence'];
                              $crimeItems = $row['cr_items'];
                              $crimeStatus = $row['cr_status'];
                              $crimeNote = $row['cr_note'];

                             
                        } 
                      
                        if (isset($_GET['btncrime'])){
                          $sql = ("UPDATE `crimerecord_table` SET `cr_id` = '$id', `cr_registerDate` = '$crimeRegisterDate', `cr_type` = '$crimeType', `cr_place` = '$crimePlace', `cr_victam` = '$crimeVictam', `cr_criminal` = '$crimeCriminal', 
                            `cr_officer` = '$crimeOfficer', `cr_witness` = '$crimeWitness', `cr_evindence` = '$crimeEvidence', `cr_items` = '$crimeItems', `cr_status` = '$crimeStatus', `cr_note` = '$crimeNote'  WHERE  `cr_id`='$id'");
                          
                          
                             if (mysqli_query($con, $sql))
                             {
                               echo $successMessage;
                             }
                          
                                else 
                                {
                                  //echo $errorMessage;
                                  echo mysqli_error($con);
                                }
                     
    
                              }
                            }
                          // header('location: viewCrime.php');
                          // exit();
                      

                      
                     
                            
                        
                          
                          
                          
          

                          
                        
                    ?>
                    <?php if(isset($_GET['btncrime'])){
                      echo $successMessage;
                    } else{
                      echo $errorMessage;
                    }
                     
                      
                      ?>
                  <form class="forms-sample" method="GET">
                    <div class="container">
                        <div class="row">
                        <div class="col-lg-6">
                        <div class="row mt-4">
                                  <div class="col-6"> 
                                      <label for="exampleInputUsername1" class=" text text-secondary">Case ID</label>
                                  </div>
                                    <div class="col">
                                    <input type="number" class="form-control" id="#" name="crimeid" placeholder="Case ID"  value="<?php echo $ID; ?>">
                                    </div>
                              </div> 
                        </div>
                        <div class="col-lg-6">
                        <div class="row mt-4">
                                  <div class="col-6"> 
                                      <label for="exampleInputUsername1" class=" text text-secondary">Register Date</label>
                                  </div>
                                    <div class="col">
                                    <input type="date" class="form-control" id="#" name="crimeregisterdate" placeholder="date"  value="<?php echo  $crimeRegisterDate; ?>">
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
                        <input type="text" class="form-control" id="#" name="crimeplace" placeholder="Place" value=" <?php echo $crimePlace; ?>" >
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="crimevictam" placeholder="Victam/Victams" value="<?php echo $crimeVictam; ?>" >
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="crimecriminal" placeholder="Criminal"  value ="<?php echo $crimeCriminal; ?>">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="crimeofficer" placeholder="Officer on Charge" value="<?php echo $crimeOfficer; ?>">
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="crimewitness" placeholder="WITNESSES" value="<?php echo $crimeWitness; ?>">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="crimeevidence" placeholder="EVIDENCE"  value="<?php echo $crimeEvidence; ?>">
                        </div>
                        <div class="col-lg-6">
                        <label for="#"></label>
                        <input type="text" class="form-control" id="#" name="crimeitems" placeholder="ITEMS IN THE SCENE" value="<?php echo $crimeItems; ?>">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="#"></label>
                        <input type="text" class="form-control" id="#" name="crimestatus" placeholder="STATUS"  value="<?php echo $crimeStatus;  ?>">
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="textarea" class="form-control" id="#" name="crimenote" placeholder="NOTES" value="<?php echo $crimeNote; ?>">
                        </div>
                      </div>
                     
                        <div class="button">
                          <button type="submit"  class="btn btn-primary  m-2" name="btncrime">Submit</button>
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

