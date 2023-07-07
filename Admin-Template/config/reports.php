<?php include 'session.php'; 
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
                <h2>Generate a Report</h2>
              </div>
              <hr>
            </div> 
            <?php 
             if(isset($_GET['btnsubmit'])){
               $selectvalue = $_GET['select'];
               if(!$selectvalue == 'police'){
                echo 'error';
               } else {
                header('location: reportpage.php');
               }
            
              }
            ?>
          
          <form action="" method="GET">
            <div class="container">
              <div class="card card-body">
                <div class="row">
                 
                    <div class="col-4">
                        <div class="data">
                        <select name="Select" id="#" class="form-control">
                            <option value="#">Choose</option>
                            <option value="police">Police</option>
                            <option value="prisoner">Prisoner</option>
                        </select>
                        </div>
                     </div>
                    <div class="col-4">
                       <button type="submit" name="btnsubmit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
          </form>
        
             
          </div>

          
            

          <div class="container fluid">
            
            <table class="table select-table " id="#">
            <?php
              include '../config.php';
              $userid = $username = $searchinput = " " ;
              if(isset($_GET['btnsearch'])){
                @$searchinput = $_GET['search'];
                // $searchID = $_GET['btnsearch'];
          
                
          
                $query = "SELECT * FROM `panel_users_table` WHERE `user_ID` like '%$searchinput%' or `user_Email`like '%$searchinput%' or `user_Name`like '%$searchinput%' or 
                `user_Type` like '%$searchinput%' or `created_Date` like '%$searchinput%'";
                $query_run = mysqli_query($con, $query);
                if($query_run){
                  if(mysqli_num_rows($query_run) > 0){
                    echo '  
                    <thead class="#">
              
                    <tr>
                      <td>ID</td>
                      <td>Email</td>
                      <td>Email</td>
                      <td>ID</td>
                      <td>Email</td>
                      <td>Email</td>
                      <td>Email</td>
                      
                      
                      
                      
                    </tr>
                    
    
                  </thead> <hr>' ;
                   while( $row = mysqli_fetch_assoc($query_run)){

                    echo '<tbody>
                    <tr>
                      <td>'.$row['user_ID'].'</td>
                      <td>'.$row['user_Name'].'</td>
                      <td>'.$row['user_Email'].'</td>
                      <td>'.$row['user_Type'].'</td>
                      <td>'.$row['user_Password'].'</td>
                      <td>'.$row['created_Date'].'</td>
                      <td>'.$row['user_profile'].'</td>
                      
                     
                      
                    </tr>
              
                  </tbody>';
                    
               
                   }
                   
                  }
                   else{
                    echo '<h4>Sorry No Data is found</h4>';
                   }
                } else{
                  echo myqli_error($con);
                }
                  
              }
             ?>
               
            </table>
           
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
    <!-- Data table plugins -->

  <script src="../DataTables/jQuery-3.6.0/jquery-3.5.1.js"></script>
  <script src="../DataTables/DataTables-1.13.4/js/jquery.dataTables.min.js"></script>
  <script  src="../DataTables/DataTables-1.13.4/js/dataTables.bootstrap5.min.js"></script>
  <!-- <script src="print_function.js" type="text/javascript"></script> -->

  <script> 
$(document).ready(function () {
    $('#mytable').DataTable({
     
      
    });
});
</script>

<script type="text/javascript">
	function PrintPage() {
		window.print();
	}
</script>
</body>


</html>

