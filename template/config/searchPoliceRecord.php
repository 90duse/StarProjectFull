<?php 
  include 'session.php';
  include '../config.php';

 
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
    <!-- data table plugins -->
  <link rel="stylesheet" href="../css/dataTables.bootstrap5.min.css">
  <link href="../DataTables/DataTables-1.13.4/css/datatables.bootstrap5.min.css" rel="stylesheet"/>
  <link href="../DataTables/DataTables-1.13.4/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="../DataTables/Buttons-2.3.6/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="../DataTables/DataTables-1.13.4/css/jquery.dataTables.min.css">
 
</head>
<body class="">

  
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
            <form action="" method="POST">
           <div class="card">   
            <div class="card-body">
            <p class="text text-center">POLICE SEARCH</p>
          <div class="row">
          <div class="container mb-3">
              <div class="row">
                <div class="col-3 ">
                  <div class=" ">
                    <!-- <a href="../reports/print_police_record.php" class="btn btn-outline-primary">Print Report</a> -->
                    <img src="../images/auth/policeLogo.svg.png" width="30%" alt="">
                    <span>HQ DATABASE</span>
                  </div>
                  
                </div>
                <div class="col-3 offset-3 ">
                  <div class="card ">
                  <input type="text" class="form-control" name="search" placeholder="Search by ID, Email or Role" >
                  </div>
                </div>
                <div class="col-3">
                  <div class="card ">
                     <button type="search" name="raadi" class="btn btn-outline-success"> Search</button>
                     
                  </div>
                </div>
              </div>
            </div>
            </div> 
            </div> 
            </form>   

            <div class="container fluid">
            
            <table class="table select-table " id="mytable">
            <?php
              include '../config.php';
            $raadi = "";
              if(isset($_POST['raadi'])){
                 $raadi = $_POST['search'];
                
               
          
                $query = "SELECT * FROM `policeregistration_table` WHERE `p_ID` = '$raadi' or `p_fullname` = '$raadi' or `p_trained_spot` = '$raadi' OR 
                `p_rank` = '$raadi' OR `p_address` = '$raadi'";
                $query_run = mysqli_query($con, $query);
                if($query_run){
                 
                  if(mysqli_num_rows($query_run) > 0){
                    echo '  
                    <thead class="#">
                    
              
                    <tr>
                    <th class="text text-dark">ID</th>
                    <th class="text text-dark">ID</th>
                    <th class="text text-dark">RegisterDate</th>
                    <th class="text text-dark">City</th>
                    <th class="text text-dark">Station</th>
                    <th class="text text-dark">Qaybta</th>
                    <th class="text text-dark">Fullname</th>
                    <th class="text text-dark">Height</th>
                    <th class="text text-dark">Age</th>
                    <th class="text text-dark">Weight</th>
                    <th class="text text-dark">Gender</th>
                    <th class="text text-dark">DB</th>
                    <th class="text text-dark">PB</th>
                    <th class="text text-dark">Address</th>
                    <th class="text text-dark">Phone</th>
                    <th class="text text-dark">Email</th>
                    <th class="text text-dark">Mother</th>
                    <th class="text text-dark">Education</th>
                    <th class="text text-dark">Trained</th>
                    <th class="text text-dark">Marriage</th>
                    <th class="text text-dark">Medicul</th>
                    <th class="text text-dark">Rank</th>
                    <th class="text text-dark">Note</th>
                   
                      
                     

                  
                      
                      
                      
                      
                      
                    </tr>
                    
    
                  </thead> <hr>' ;
                   while( $row = mysqli_fetch_assoc($query_run)){

                    echo '<tbody>
                    <tr>
                    <td>'.$row['p_ID'].'</td>
                    <td>'.$row['policeID'].'</td>
                    <td>'.$row['p_registration_date'].'</td>
                    <td>'.$row['city'].'</td>
                    <td>'.$row['station'].'</td>
                    <td>'.$row['qaybta'].'</td>
                    <td>'.$row['p_fullname'].'</td>
                    <td>'.$row['p_height'].'</td>
                    <td>'.$row['p_Age'].'</td>
                    <td>'.$row['p_weight'].'</td>
                    <td>'.$row['p_gender'].'</td>
                    <td>'.$row['p_dateOf_Birth'].'</td>
                    <td>'.$row['p_placeOf_Birth'].'</td>
                    <td>'.$row['p_address'].'</td>
                    <td>'.$row['p_phone'].'</td>
                    <td>'.$row['p_email'].'</td>
                    <td>'.$row['p_mothers_name'].'</td>
                    <td>'.$row['p_education'] .'</td>
                    <td>'.$row['p_trained_spot'].'</td>
                    <td>'.$row['p_marriage_status'].'</td>
                    <td>'.$row['p_medical_status'].'</td>
                    <td>'.$row['p_rank'].'</td>
                    <td>'.$row['p_note'].'</td>
                    

                      
                      
                     
                      
                    </tr>
              
                  </tbody>';
                    
               
                   }
                   
                  }
                   else{
                    echo '<h4>Sorry No Data is found</h4>';
                   }
                } 
                else{
                  echo myqli_error($con);
                }
                  
              }
             ?>
               
            </table>
           
         


           
          </div>
        <!-- content-wrapper ends -->

        <!-- footer start -->

        <!-- footer end -->
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
    <!-- Data table plugins -->

  <script src="../DataTables/jQuery-3.6.0/jquery-3.5.1.js"></script>
  <script src="../DataTables/DataTables-1.13.4/js/jquery.dataTables.min.js"></script>
  <script  src="../DataTables/DataTables-1.13.4/js/dataTables.bootstrap5.min.js"></script>
  <script  src="../DataTables/Buttons-2.3.6/js/dataTables.buttons.min.js"></script>
  <script  src="../DataTables/JSZip-2.5.0/jszip.min.js"></script>
  <script  src="../DataTables/pdfmake-0.2.7/pdfmake.min.js"></script>
  <script  src="../DataTables/pdfmake-0.2.7/vfs_fonts.js"></script>
  <script src="../js/buttons.html5.min.js"></script>
  <script src="../js/buttons.print.min.js"></script> 



<script> 
$(document).ready(function () {
    $('#mytable').DataTable({
      scrollX: true,
      dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
});
</script>
</body>

</html>

