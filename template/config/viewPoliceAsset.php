<?php include 'session.php'; ?>
<!DOCTYPE html>
 <html lang="en">
 <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Saldhiga Daloodho </title>
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
          <div class="row">
              <form action="#" method="POST">
                <table class="table select-table " id="mytable">
                                
                  <thead>
                    <tr >
                      <th><strong class =" text text-dark">No</strong></th>
                      <th><strong class =" text text-dark">Item_ID</strong></th>
                      <th class="text-dark">RegisterDate</th>
                      <th class="text-dark">Region</th>
                      <th class="text-dark">City</th>
                      <th class="text-dark">Qaybta</th>
                      <th class="text-dark">station</th>
                      <th class="text-dark">Name</th>
                      <th class="text-dark">Color</th>
                      <th class="text-dark">Quantity</th>
                      <th class="text-dark">Catogery</th>
                      <th class="text-dark">Store_Number</th>
                      <th class="text-dark">Gaurdian_Name</th>
                      <th class="text-dark">Note</th>
                      <th class="text-dark">Edit</th>
                      <th class="text-dark">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php 
                        include '../config.php';
                        $result = mysqli_query($con, "SELECT * FROM assetregistration_table " );
                          while ($row = mysqli_fetch_assoc($result)){
                          $itemID = $row['id'];
                        ?>
                        <td><?php echo $itemID; ?></td>
                        <td><?php echo $row['item_id']; ?></td>
                        <td><?php echo $row['item_Register_Date']; ?></td>
                        <td><?php echo @$row['region']; ?></td>
                        <td><?php echo @$row['city']; ?></td>
                        <td><?php echo @$row['Qaybta']; ?></td>
                        <td><?php echo @$row['Station']; ?></td>
                        <td><?php echo @$row['Item_Name']; ?></td>
                        <td><?php echo @$row['item_Color']; ?></td>
                        <td><?php echo @$row['item_Quantity']; ?></td>
                        <td><?php echo @$row['item_Catogery']; ?></td>
                        <td><?php echo  @$row['Store_Number']; ?></td>
                        <td><?php echo @$row['Guarding_Name']; ?></td>
                        <td><?php echo @$row['item_Note'];  ?></td>
                        <td><a href="PoliceAssetEdit.php?id=<?php echo $itemID; ?>"><img src="../images/pencil-icon.svg"  alt="edit"></a></td>
                        <td><a href="PoliceAssetDelete.php?id=<?php echo $itemID; ?>"><img src="../images/delete-icon.svg"  alt="edit"></a></td>
                      </tr>
                    <?php  } ?>
                  </tbody>
                  <tfoot>

                  </tfoot>
                </table>
              </form>
          </div>
        

       <!-- Footer Start -->

       <!-- Footer end -->
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

