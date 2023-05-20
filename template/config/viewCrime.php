
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
            <!-- partial:partials/_sidebar.html -->
          <?php   include "../partials/sidebar.php";?>
            <!-- partial -->

     
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">Crime View</h4>
                  <form action="#" method="GET">
                  <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">Pending Requests</h4>
                                   <p class="card-subtitle card-subtitle-dash">You have 50+ new requests</p>
                                  </div>
                                  <div>
                                    <a href="CrimeRecord.php"><button class="btn btn-primary btn-lg text-white mb-0 me-0" type="submit">Add new member</button></a>
                                  </div>
                                </div>
                                <div class="table-responsive  mt-1">
                                  <table class="table select-table">
                                    <thead>
                                      <tr>
                                        <!-- <th>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                              <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </th> -->
                                        <th>CrimeID</th>
                                        <th>Register Date</th>
                                        <th>Crime Type</th>
                                        <th>Crime Place</th>
                                        <th>Victam</th>
                                        <th>Criminal</th>
                                        <th>Officer</th>
                                        <th>Witness</th>
                                        <th>EVIDENCE</th>
                                        <th>CRIME ITEMS</th>
                                        <th>Crime Status</th>
                                        <th>NOTES</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <?php 
                                         include '../config.php';

                                          $result = mysqli_query($con, "SELECT * FROM crimerecord_table" );
                                          

                                           while ($row = mysqli_fetch_assoc($result)){
                                            $id = $row['cr_id'];
                                          
                                         
                                          
                                  
                                          ?>
                                          <td>
                                        <p>
                                          <?php 
                                            echo $id;
                                            //echo $row['cr_id'];
                                          ?>
                                        </p>
                                        </td>
                                        <td>
                                        <p>
                                          <?php 
                                            echo $row['cr_registerDate'];
                                          ?>
                                        </p>
                                        </td>
                                        <td>
                                        <p>
                                          <?php 
                                            echo @$row['cr_type'];
                                          ?>
                                        </p>
                                        </td>
                                        <td>
                                        <p>
                                          <?php 
                                            echo @$row['cr_place'];
                                          ?>
                                        </p>
                                        </td>
                                        <td>
                                        <p>
                                          <?php 
                                            echo @$row['cr_victam'];
                                          ?>
                                        </p>
                                        </td>
                                        <td>
                                        <p>
                                          <?php 
                                            echo @$row['cr_criminal'];
                                          ?>
                                        </p>
                                        </td>
                                        <td>
                                        <p>
                                          <?php 
                                            echo @$row['cr_officer'];
                                          ?>
                                        </p>
                                        </td>
                                        <td>
                                        <p>
                                          <?php 
                                            echo @$row['cr_witness'];
                                          ?>
                                        </p>
                                        </td>
                                        <td>
                                        <p>
                                          <?php 
                                            echo  @$row['cr_evidence'];
                                          ?>
                                        </p>
                                        </td>
                                        <td>
                                        <p>
                                          <?php 
                                            echo @$row['cr_items'];
                                          ?>
                                        </p>
                                        </td>
                                        <td>
                                        <p>
                                          <?php 
                                            echo @$row['cr_status'];
                                          ?>
                                        </p>
                                        </td>
                                        <td>
                                        <p>
                                          <?php 
                                            echo @$row['cr_note']; 
                                          ?>
                                        </p>
                                        </td>
                                        <td>
                                          <a href="Update.php"  class="btn btn-success">EDIT</a>
                                        </td>
                                        <td>
                                          <a href="Delete.php?id=<?php echo $id; ?>"  class="btn btn-danger">DELETE</a>
                                        </td>

                                       
                                      </tr>
                                      <?php  

                                        }
                                      
                                        ?>
                                      
                                       
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        </form>
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

