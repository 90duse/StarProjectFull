<?php include '../config/session.php';
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
<body onload="print();">
   
  <div class="container">
    
        <div class="row">
            <div class="col">
                <h2>Daloodho Police Station </h2>
            </div>
        </div>
              
            <form action="#" method="POST">
               <table class="table select-table " id="#">
                
                  <thead class="bg-dark">
                    <tr >
                        
                           <th class="text text-dark">ID</th>
                          <th class="text text-dark">RegisterDate</th>
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
                          <!-- <th class="text text-dark">Edit</th>
                          <th class="text text-dark">Delete</th> -->
                       
                     
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php 
                        include '../config.php';

                      
                        $result = mysqli_query($con, "SELECT * FROM policeregistration_table" );
                             while($row = mysqli_fetch_assoc($result)){
                              $policeID = $row['p_ID'];
                            ?>
                            <td><?php echo  $policeID; ?></td>
                            <td><?php echo $row['p_registration_date']; ?></td>
                            <td><?php echo @$row['p_fullname']; ?></td>
                            <td><?php echo @$row['p_height']; ?></td>
                            <td><?php echo @$row['p_Age']; ?></td>
                            <td><?php echo @$row['p_weight']; ?></td>
                            <td><?php echo @$row['p_gender']; ?></td>
                            <td><?php echo @$row['p_dateOf_Birth']; ?></td>
                            <td><?php echo @$row['p_placeOf_Birth']; ?></td>
                            <td><?php echo  @$row['p_address']; ?></td>
                            <td><?php echo @$row['p_phone']; ?></td>
                            <td><?php echo @$row['p_email']; ?></td>
                            <td><?php echo @$row['p_mothers_name'];  ?></td>
                            <td><?php echo @$row['p_education'];  ?></td>
                            <td><?php echo @$row['p_trained_spot'];?></td>
                            <td><?php echo @$row['p_marriage_status']; ?></td>
                            <td><?php echo @$row['p_medical_status'];  ?></td>
                            <td><?php echo @$row['p_rank'];  ?></td>
                            <td><?php echo @$row['p_note']; ?></td>
                            <!-- <td><a href="PoliceEdit.php?id=<?php echo $policeID; ?>"  class="btn btn-success">EDIT</a></td> -->
                            <!-- <td><a href="PoliceDelete.php?ID=<?php echo $policeID; ?>"  class="btn btn-danger">DELETE</a></td> -->
                        
                       
                    </tr>
                    <?php  }  ?>
                  </tbody>
                  <tfoot>

                  </tfoot>
                </table>          
              </form>
        
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

  <script src="print_function.js" type="text/javascript"></script>
 



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

