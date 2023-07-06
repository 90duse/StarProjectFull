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
  <!-- <link  rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css"> -->
  <!-- <link  rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css"> -->
  <!-- <link  rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css"> -->
 
</head>
<body class="">

   
         
   <div class="btn mt-2">
     <a href="optable.php" class="btn btn-danger">Go Back</a>
    </div>
<div class="container-fluid ">
  <div class="container-fluid">
    <div class="row">
         <form action="#" method="GET">
                    <table class="table select-table"  id="mytable">
                          
                          <thead>
                            <tr >
                            
                              <th><strong class =" text text-dark">ID</strong></th>
                              <th>OpNo</th>
                              <th class="text-dark">RegisterDate</th>
                              <th class="text-dark">Fullname</th>
                              <th><strong class =" text text-dark">Image</strong></th>
                              <th class="text-dark">Height</th>
                              <th class="text-dark">Age</th>
                              <th class="text-dark">Weight</th>
                              <th class="text-dark">Gender</th>
                              <th class="text-dark">DB</th>
                              <th class="text-dark">PB</th>
                              <th class="text-dark">Address</th>
                              <th class="text-dark">Phone</th>
                              <th class="text-dark">Mother</th>
                              <th class="text-dark">Job</th>
                              <th class="text-dark">Reason</th>
                              <th class="text-dark">Marriage</th>
                              <th class="text-dark">Medicul</th>
                              <th class="text-dark">Belongs</th>
                              <th class="text-dark">CellNo</th>
                              <th class="text-dark">Officer</th>
                              <th class="text-dark">Note</th>
                              <th class="text-dark">ACTION</th>
                              <th class="text-dark">ACTION</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <?php 
                                include '../config.php';
                                $result = mysqli_query($con, "SELECT * FROM op_table " );
                                  while ($row = mysqli_fetch_assoc($result)){
                                  $opID = $row['op_id'];
                                ?>
                                <td><?php echo $opID; ?></td>
                                <td><?php echo $row['opNo']; ?></td>
                                <td><?php echo $row['op_register_date']; ?></td>
                                <td><?php echo @$row['op_fullname']; ?></td>
                                <td><?php echo $row['op_image']; ?></td>
                                <td><?php echo @$row['op_height']; ?></td>
                                <td><?php echo @$row['op_age']; ?></td>
                                <td><?php echo @$row['op_weight']; ?></td>
                                <td><?php echo @$row['op_gender']; ?></td>
                                <td><?php echo @$row['op_dateof_birth']; ?></td>
                                <td><?php echo @$row['op_placeof_birth'];?></td>
                                <td><?php echo @$row['op_mothers_name'];  ?></td>
                                <td><?php echo  @$row['op_address']; ?></td>
                                <td><?php echo @$row['op_tellephone']; ?></td>
                                <td><?php echo @$row['op_job'];  ?></td>
                                <td><?php echo @$row['op_reason'];  ?></td>
                                <td><?php echo @$row['op_marriage_status'];  ?></td>
                                <td><?php echo @$row['op_medical_status'];  ?></td> 
                                <td><?php echo @$row['op_personal_belongs'];   ?></td>
                                <td><?php echo @$row['op_cell_no'];   ?></td>
                                <td><?php echo @$row['op_officer'];  ?></td>
                                <td> <details>
                                  <summary>See More</summary>
                                  <?php echo @$row['op_notes'];   ?>
                                </details> </td>
                                
                                <td> <a href="OPEdit.php?id=<?php echo $opID; ?>"> <img src="../images/pencil-icon.svg"  alt="edit"></a></td>
                                <td> <a href="OPDelete.php?id=<?php echo $opID; ?>" ><img src="../images/delete-icon.svg" alt="delete"></a></td>
                               
                            </tr>
                           <?php } ?>
                        </tbody>
                        <tfoot>

                        </tfoot>
                    </table>
                  </form>
  </div>
</div>
     
      

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

