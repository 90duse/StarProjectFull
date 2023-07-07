<?php //include 'config/session.php'; 
   
           
    
    
  
    
    ?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>POLICE MANAGEMENT SYSTEM</title>
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
                  
            </div>
            <div class="row">
              <div class="col">
                <h2>Prisoners - Generate a Report</h2>
              </div>
              <hr>
            </div> 
            <form action="#" method="GET">
            <div class="container">
              <div class="row">
                <div class="col-6">
                  <div class="card ">
                  <input type="text" class="form-control-lg" name="search" placeholder="Search by ID, Email or Role" >
                  </div>
                </div>
                <div class="col-2">
                  <div class="card ">
                     <button type="submit" name="btnsearch" class="btn btn-outline-success"> Search</button>
                  </div>
                </div>
                
              </div>
            </div>
            </form>
        
             
          </div>

          
            

          <div class="container fluid">
            
            <table class="table select-table " id="mytable">
            <?php
              include '../config.php';
              $userid = $username = $searchinput = " " ;
              if(isset($_GET['btnsearch'])){
                @$searchinput = $_GET['search'];
                // $searchID = $_GET['btnsearch'];
          
          
                $query = "SELECT * FROM  `prisonerrecord` WHERE `pri_id` like '$searchinput' or `pri_fullname`like '$searchinput' or `pri_gender`like '$searchinput' or 
                `pri_registerdate` like '$searchinput' or `pri_crimeType` like '$searchinput' or `pri_medicalStatus` like '$searchinput' or `pri_sentenceperiod` like '$searchinput' 
                or `pri_behavier` like '$searchinput' or `pri_age` like '$searchinput' or `pri_cellNo` like '$searchinput'  ";
                $query_run = mysqli_query($con, $query);
                if($query_run){
                  if(mysqli_num_rows($query_run) > 0){
                    echo '  
                    <thead class="#">
                    <h2>POLICE ADMIN</h2>
              
                    <tr>
                      <td>ID</td>
                      <td>Name</td>
                      <td>Gender</td>
                      <td>RegisterDate</td>
                      <td>CrimeType</td>
                      <td>Health</td>
                      <td>Sentence</td>
                      <td>Behavier</td>
                      <td>Age</td>
                      <td>CellNo</td>
                     

                  
                      
                      
                      
                      
                      
                    </tr>
                    
    
                  </thead> <hr>' ;
                   while( $row = mysqli_fetch_assoc($query_run)){

                    echo '<tbody>
                    <tr>
                      <td>'.$row['pri_id'].'</td>
                      <td>'.$row['pri_fullname'].'</td>
                      <td>'.$row['pri_gender'].'</td>
                      <td>'.$row['pri_registerdate'].'</td>
                      <td>'.$row['pri_crimeType'].'</td>
                      <td>'.$row['pri_medicalStatus'].'</td>
                      <td>'.$row['pri_sentenceperiod'].'</td>
                      <td>'.$row['pri_behavier'].'</td>
                      <td>'.$row['pri_age'].'</td>
                      <td>'.$row['pri_cellNo'].'</td>

                      
                      
                     
                      
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
      
      dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
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

