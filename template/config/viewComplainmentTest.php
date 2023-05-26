 
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
  <link rel="stylesheet" href="../vendors/datatables.net-bs4/">
  <link rel="stylesheet" href="../js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
  <!-- <link rel="stylesheet" href=" https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css"> -->
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="../js/datatables.min.js">
  <link rel="stylesheet" href="../js/pdfmake.min.js">

 
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

<div class="container">
    <div class="row">
        <div class="conatainer">
            <div class="row">
                <div class="col">
                <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                             
                            </tr>
                            <tr>
                                        <?php 
                                         include '../config.php';

                                          $result = mysqli_query($con, "SELECT * FROM complainmentregistration_table" );
                                          

                                           while ($row = mysqli_fetch_assoc($result)){
                                            $id = $row['co_id'];
                                          
                                         
                                          
                                  
                                          ?>
                                          <td>
                                        
                                          <?php 
                                            echo $id;
                                            //echo $row['cr_id'];
                                          ?>
                                        
                                        </td>
                                        <td>
                                        
                                          <?php 
                                            echo $row['co_registrationDate'];
                                          ?>
                                        
                                        </td>
                                        <td>
                                        
                                          <?php 
                                            echo @$row['co_fullname'];
                                          ?>
                                        
                                        </td>
                                        <td>
                                        
                                          <?php 
                                            echo @$row['co_rank'];
                                          ?>
                                        
                                        </td>
                                        <td>
                                        
                                          <?php 
                                            echo @$row['co_subject'];
                                          ?>
                                        
                                        </td>
                                        <td>
                                        
                                          <?php 
                                            echo @$row['co_againstWhom'];
                                          ?>
                                        
                                        </td>
                                        <td>
                                        
                                          <?php 
                                            echo @$row['co_complainment'];
                                          ?>
                                        
                                        </td>
                                        
                                        
                                        <td>
                                          <a href="complainEdit.php?id=<?php echo $id; ?>"  class="btn btn-success">EDIT</a>
                                        </td>
                                        <td>
                                          <a href="complainDelete.php?id=<?php echo $id; ?>"  class="btn btn-danger">DELETE</a>
                                        </td>

                                       
                                      </tr>
                                      <?php  

                                        }
                                      
                                        ?>
          
            
               
           
           
                            </tfoot>
                        </table>
                    

                </div>
            </div>
        </div>
    </div>
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

  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../js/jquery.cookie.js" type="text/javascript"></script>
  <script src="../js/dashboard.js"></script>
  <script src="../js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->

  <!-- data table js links -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
 <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

 <script src="script.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  
  <script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable({
        "fnCreatedRow": function(nRow, aData, iDataIndex) {
          $(nRow).attr('id', aData[0]);
        },
        'serverSide': 'true',
        'processing': 'true',
        'paging': 'true',
        'order': [],
        'ajax': {
          'url': 'viewComplainment.php',
          'type': 'GET',
        },
        "aoColumnDefs": [{
            "bSortable": false,
            "aTargets": [5]
          },

        ]
      });
    });
</body>

</html>



<div class="container mt-5">
    <div class="row">
          <div class="table-responsive">
            <form action="">
                 <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011-04-25</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                        <?php 
                                         include '../config.php';

                                          $result = mysqli_query($con, "SELECT * FROM complainmentregistration_table" );
                                          

                                           while ($row = mysqli_fetch_assoc($result)){
                                            $id = $row['co_id'];
                                          
                                         
                                          
                                  
                                          ?>
                                          <td>
                                        
                                          <?php 
                                            echo $id;
                                            //echo $row['cr_id'];
                                          ?>
                                        
                                        </td>
                                        <td>
                                        
                                          <?php 
                                            echo $row['co_registrationDate'];
                                          ?>
                                        
                                        </td>
                                        <td>
                                        
                                          <?php 
                                            echo @$row['co_fullname'];
                                          ?>
                                        
                                        </td>
                                        <td>
                                        
                                          <?php 
                                            echo @$row['co_rank'];
                                          ?>
                                        
                                        </td>
                                        <td>
                                        
                                          <?php 
                                            echo @$row['co_subject'];
                                          ?>
                                        
                                        </td>
                                        <td>
                                        
                                          <?php 
                                            echo @$row['co_againstWhom'];
                                          ?>
                                        
                                        </td>
                                        <td>
                                        
                                          <?php 
                                            echo @$row['co_complainment'];
                                          ?>
                                        
                                        </td>
                                        
                                        
                                        <td>
                                          <a href="complainEdit.php?id=<?php echo $id; ?>"  class="btn btn-success">EDIT</a>
                                        </td>
                                        <td>
                                          <a href="complainDelete.php?id=<?php echo $id; ?>"  class="btn btn-danger">DELETE</a>
                                        </td>

                                       
                                      </tr>
                                      <?php  

                                        }
                                      
                                        ?>
          
            
               
           
           
                            </tfoot>
                        </table>
                    </form>
                </div>
            </div>
</div> 