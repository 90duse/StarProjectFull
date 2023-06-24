<?php 
                  include '../config.php';
                  //include 'viewComplainment.php';

                  if (isset($_GET['searchsubmit'])){
                    echo 'Searching';
                    $search = $_GET['searchsubmit'];
                    $sql = "SELECT * FROM complainmentregistration_table WHERE cr_id LIKE '%$search%' OR co_registrationDate LIKE '%$search%' OR co_fullname LIKE '%$search%' 
                    OR  co_rank LIKE '%$search%' OR co_subject LIKE '%$search%' OR co_againstWhom LIKE '%$search%' co_complainment LIKE '%$search%' " ;
                    $Natiijo = mysqli_query($con, $sql);
                    //$queryResult = myqsli_num_rows($Natiijo);
                    
                       if ($Natiijo > 0){
                        while ($row = mysqli_fetch_array($Natiijo)){

                            echo " <h2>"$row['co_id']"</h2> ";
                          //$id = $row['co_id'];
                          
                          

                       }


                     
                    
                  }
                  
                }
                  ?>
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

<form action="" method="GET">
   <div class="search">
      <input type="search" name="search">
       <button name="searchsubmit" type="submit" class="btn btn-outline-primary">Search</button>
   </div>

   <input type="text" name="kushub">

</form>


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