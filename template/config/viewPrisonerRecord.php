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
               <table class="table table-striped " id="mytable">
                <h2>Manage Prisoner Data</h2>
                  <thead class="#">
                    <tr >
                      <th><strong class =" text text-dark">ID</strong></th>
                      <th><strong class =" text text-dark">Image</strong></th>
                      <th class="text-dark">RegisterDate</th>
                      <th><strong class =" text text-dark">Region</strong></th>
                      <th><strong class =" text text-dark">City</strong></th>
                      <th><strong class =" text text-dark">Qaybta</strong></th>
                      <th><strong class =" text text-dark">Station</strong></th>
                      <th class="text-dark">Fullname</th>
                      <th class="text-dark">Height</th>
                      <th class="text-dark">Age</th>
                      <th class="text-dark">Weight</th>
                      <th class="text-dark">Gender</th>
                      <th class="text-dark">DB</th>
                      <th class="text-dark">PB</th>
                      <th class="text-dark">Address</th>
                      <th class="text-dark">Phone</th>
                      <th class="text-dark">Mother</th>
                      <th class="text-dark">Education</th>
                      <th class="text-dark">crimeType</th>
                      <th class="text-dark">Marriage</th>
                      <th class="text-dark">Medicul</th>
                      <th class="text-dark">SentenceTime</th>
                      <th class="text-dark">Belongs</th>
                      <th class="text-dark">ReleaseDate</th>
                      <th class="text-dark">Trail</th>
                      <th class="text-dark">Lawyer</th>
                      <th class="text-dark">CellNo</th>
                      <th class="text-dark">Note</th>
                      <th class="text-dark">Note</th>
                      <th class="text-dark">EDIT</th>
                      <th class="text-dark">DELETE</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php 
                       
                        $_SESSION['station'];
                        $res = mysqli_query($con, "SELECT * FROM  prisonerrecord" );
                        while ($row = mysqli_fetch_assoc($res)){
                         $_SESSION['station'] = $row['station'];
                         
                        }  $sal = $_SESSION['station'];
                           echo $sal;
                           $result = mysqli_query($con, "SELECT pri_id, pri_photo, pri_registerdate,region, city, qaybta, station, pri_fullname,pri_height,pri_age,
                           pri_weight, pri_gender, pri_dateof_birth, pri_placeof_birth, pri_address, pri_tellephone,
                           pri_mothers_name,pri_crimeType, pri_marriage, pri_medicalStatus, pri_sentenceperiod,
                           pri_prersonalBelongs, pri_releaseDay,pri_lawyer,pri_cellNo, pri_notes,prisonerID FROM prisonerrecord WHERE station = '$sal'" ); 
                          //$result = mysqli_query($con, "SELECT * FROM prisonerrecord " );
                          while ($row = mysqli_fetch_assoc($result)){
                          $prisonerID = $row['pri_id'];
                        ?>
                        <td><?php echo  $prisonerID;?></td>
                        <td><?php echo $row['pri_photo'];?></td>
                        <td><?php echo $row['pri_registerdate'];?></td>
                        <td><?php echo $row['region'];?></td>
                        <td><?php echo $row['city'];?></td>
                        <td><?php echo $row['qaybta'];?></td>
                        <td><?php echo $row['station'];?></td>
                        <td><?php echo @$row['pri_fullname'];?></td>
                        <td><?php echo @$row['pri_height'];?></td>
                        <td><?php echo @$row['pri_age'];?></td>
                        <td><?php echo @$row['pri_weight'];?></td>
                        <td><?php echo @$row['pri_gender'];?></td>
                        <td><?php echo @$row['pri_dateof_birth'];?></td>
                        <td><?php echo @$row['pri_placeof_birth'];?></td>
                        <td><?php echo  @$row['pri_address'];?></td>
                        <td><?php echo @$row['pri_tellephone'];?></td>
                        <td><?php echo @$row['pri_mothers_name']; ?></td>
                        <td><?php echo @$row['pri_education'];?></td>
                        <td><?php echo @$row['pri_crimeType'];?></td>
                        <td><?php echo @$row['pri_marriage'];?></td>
                        <td><?php echo @$row['pri_medicalStatus']; ?></td>
                        <td><?php echo @$row['pri_sentenceperiod'];?></td>
                        <td><?php echo @$row['pri_prersonalBelongs'];?></td>
                        <td><?php echo @$row['pri_releaseDay'];?></td>
                        <td><?php echo @$row['pri_trail'];?></td>
                        <td><?php echo @$row['pri_lawyer'];?></td>
                        <td><?php echo @$row['pri_cellNo'];?></td>
                        <td><?php echo @$row['pri_notes']; ?></td>
                        <td><?php echo @$row['prisonerID']; ?></td>
                        <td><a href="PrisonerEdit.php?id=<?php echo $prisonerID; ?>"><img src="../images/pencil-icon.svg"  alt="edit"></a></td>
                        <td><a href="PrisonerDelete.php?id=<?php echo $prisonerID; ?>"><img src="../images/delete-icon.svg"  alt="delete"></a></td>
                       
                    </tr>
                    <?php  }  ?>
                  </tbody>
                  <tfoot>

                  </tfoot>
                </table>          
              </form>
          </div> <!-- content-wrapper ends -->

       <!-- footer start -->

       <!-- footer end -->
      </div> <!-- main-panel ends -->
    </div> <!-- page-body-wrapper ends -->
  </div><!-- container-scroller -->

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

