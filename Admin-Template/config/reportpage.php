<?php include 'session.php';  ?>

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
<body>

    <!-- partial:partials/_navbar.php -->
    <?php  include "../partials/navbar.php";?>
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.php -->
      <?php   include "../partials/sidebar.php";?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <!-- over view section start here -->
          <div class="container">
            <div class="row">
                  <div class="col">
                      <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                          <ol class="breadcrumb mb-0">
                              <li class="breadcrumb-item active" aria-current="page"><a href="index.php">Home</a></li>
                              <li class="breadcrumb-item"><a href="#">User</a></li>
                              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                          </ol>
                      </nav>
                  </div>
            </div>
            <div class="row">
              <div class="col">
                <h2>Publish a Report</h2>
              </div>
              <hr>
            </div> 
            <?php  include '../config.php';
              if(isset($_POST['btnsearch'])){
                $searchinput = $_POST['search'];

               // $query = "SELECT cr_id  from crimerecord_table ORDER BY cr_id";
              //   $queary = "SELECT `user_Name`, `user_Email`, `user_Type` FROM `panel_users_table` WHERE `user_ID` = '$searchinput'";
              //     $query_run = mysqli_query($con, $query);
              //     if($query_run){
              //       echo 'We found one';
              //     } else{
              //       echo myqli_error($con);
              //     }
              }
              
              ?>
             <form action="#" method="POST">
             
            <div class="row">
              <div class="col-6">
                 <div class="col-8">
                   <input class="form-control mr-sm-2" type="search" placeholder="Search by ID, Email or Role" aria-label="Search">
                 </div>
              </div>
              <div class="col-6">
                <button type="submit" name="btnsearch" class="btn btn-outline-success"> Search</button>
              </div>
            </div>
            </form>
          </div>

     
          <!-- over view section end here -->
        <!-- content-wrapper ends -->
     
       <!-- footer starts -->
        <footer class="mt-5">
        <?php  include "../partials/footer.php";?>
        </footer>
       <!-- footer end -->
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

