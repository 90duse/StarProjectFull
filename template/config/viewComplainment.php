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

    <!-- data table plugins -->
  <link rel="stylesheet" href="../css/dataTables.bootstrap5.min.css">
  <link href="../DataTables/DataTables-1.13.4/css/datatables.bootstrap5.min.css" rel="stylesheet"/>
  <link href="../DataTables/DataTables-1.13.4/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="../DataTables/Buttons-2.3.6/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="../DataTables/DataTables-1.13.4/css/jquery.dataTables.min.css">
</head>
<body class="">

  <!-- <div class="container-scroller ">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
          
        </div>
      </div>
    </div> -->
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
             <!-- data table start-->
  <div class="container">
    <div class="row">
      <div class="col">
     
        <form action="" method="GET">
      <table id="mytable" class="table table-striped" style="width:100%">
        <thead>
            <tr>
            <th>PoliceID</th>
            <th>Register Date</th>
            <th>Fullname</th>
            <th>Rank</th>
            <th>Com_Subject</th>
            <th>Against Whome</th>
            <th>Complainment</th>
            <th>ACTION</th>
            <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php 
             include '../config.php';

            $result = mysqli_query($con, "SELECT * FROM complainmentregistration_table" );
             while ($row = mysqli_fetch_assoc($result)){
             $id = $row['co_id'];
                                          
                                         
                                          
                                  
            ?>
            <td> <?php echo $id; ?></td> 
            <td><?php  echo $row['co_registrationDate']; ?></td> 
            <td><?php echo @$row['co_fullname']; ?></td> 
            <td> <?php echo @$row['co_rank']; ?></td> 
            <td><?php  echo @$row['co_subject']; ?></td> 
            <td><?php  echo @$row['co_againstWhom'];?></td> 
            <td> <?php   echo @$row['co_complainment']; ?></td> 
            <td> <a href="complainEdit.php?id=<?php echo $id; ?>"  class="btn btn-success">EDIT</a></td> 
            <td> <a href="complainDelete.php?id=<?php echo $id; ?>"  class="btn btn-danger">DELETE</a></td> 
             </tr>
        
          <?php  } ?>      
          
          
               
        </tbody>
        <tfoot>
          
        </tfoot>
     </table>
    
     <form>
      </div>
    </div>
  </div>
  <!-- data table end -->
           
          </div>
        <!-- content-wrapper ends -->

       
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
  <!-- <script src="../js/todolist.js"></script> -->
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- <script src="../js/jquery.cookie.js" type="text/javascript"></script>
  <script src="../js/dashboard.js"></script>
  <script src="../js/Chart.roundedBarCharts.js"></script> -->
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


   