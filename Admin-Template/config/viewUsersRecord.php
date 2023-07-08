<?php 
  include 'session.php';
  include '../config.php';

  // setting the query start point value
  $start = 0 ;
  // setting the number of rows displaying in a page 
  $rows_per_page = 4 ;
  // get the total number of rows
  $result = mysqli_query($con, "SELECT * FROM panel_users_table" );
  $num_of_rows = mysqli_num_rows($result);
  //calculate number of pages
  $pages = ceil($num_of_rows / $rows_per_page);

  // if the user click of the pagination button we set new starting point
  if(isset($_GET['page-number'])){
    $page = $_GET['page-number']-1 ;
    $start = $page * $rows_per_page ;
  }

  $result = mysqli_query($con, "SELECT * FROM panel_users_table limit $start , $rows_per_page" );  


//   searching code 


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
          <div class="container mb-1">
              <div class="row">
                <div class="col-2 ">
                  <div class="card">
                    <a href="print_users_record.php" class="btn btn-outline-primary ">Print Report</a>
                  </div>
                </div>
                <!-- <div class="col-3 offset-5 ">
                  <div class="card ">
                  <input type="text" class="form-control" name="search" placeholder="Search by ID, Email or Role" >
                  </div>
                </div>
                <div class="col-2">
                  <div class="card ">
                     <button type="submit" name="btnsearch" class="btn btn-outline-success"> Search</button>
                  </div>
                </div> -->
              </div>
            </div>

            

            
            <form action="#" method="GET">
               <table class="table select-table mt-3 " id="mytable">
                
                  <thead class="text text-dark">
                    <tr >
                        <td>user_ID</td>
                        <td>User_Name</td>
                        <td>user_Email</td>
                        <td>user_Password</td>
                        <td>Region</td>
                        <td>City</td>
                        <td>Department</td>
                        <td>User_Role</td>
                        <td>created_Date</td>
                        <td>User_Image</td>
                        <td>Edit</td>
                        <td>Delete</td>
                       
                     
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php 
                        

                      
                        //$result = mysqli_query($con, "SELECT * FROM panel_users_table " );
                          while ($row = mysqli_fetch_assoc($result)){
                          $userID = $row['user_ID'];
                        ?>

                        <td><?php echo $userID?></td>
                        <td><?php echo $row['user_Name'];?></td>
                        <td><?php echo $row['user_Email'];?></td>
                        <td><?php echo $row['user_Password'];?></td>
                        <td><?php echo $row['region'];?></td>
                        <td><?php echo $row['City'];?></td>
                        <td><?php echo $row['department'];?></td>
                        <td><?php echo $row['user_Type'];?></td>
                        <td><?php echo $row['created_Date'];?></td>
                        <td> <img src="<?php echo "../images/".$row['user_profile'];?>" alt="image" width="100px"></td>
                        <td><a href="usersEdit.php?id=<?php echo $userID; ?>"  class="btn btn-success">EDIT</a></td>
                        <td><a href="usersDelete.php?id=<?php echo $userID; ?>"  class="btn btn-danger">DELETE</a></td>
                        
                       
                    </tr>
                    <?php  }  ?>
                  </tbody>
                  <tfoot>
                    

                  </tfoot>
                </table>          
            </form>

             
              <!-- Pagination code starts here -->
            <div class="container">
                <!-- Displaying page info text -->
              <div class=""> 
                    <?php 
                        if(!isset($_GET['page-number'])){
                            $page = 1 ;
                        } else {
                            $page = $_GET['page-number'];
                        }
                    ?> showing <?php echo $page; ?> of <?php echo $pages; ?> pages
               </div>

                <!-- Displaying the pagination buttons -->
                <div class="pagination">

                    <a href="?page-number=1" class="btn btn-outline-primary ">First</a>
                    <!-- Previous Button Code -->
                    <?php  
                        if(isset($_GET['page-number']) && $_GET['page-number'] > 1){
                        ?> 
                            <a href="?page-number=<?php echo $_GET['page-number'] - 1 ?>" class="btn btn-outline-primary">Previous</a>
                        <?php 
                        }else {
                        
                        ?>  <a class="btn btn-outline-primary">Previous</a>
                        <?php 
                        } 
                    ?>

                    <div class="">
                        <?php  for($counter = 1; $counter <= $pages; $counter++){

                        ?>  <a href="?page-number=<?php echo $counter; ?>"class="btn btn-outline-primary"><?php echo $counter; ?></a>
                        <?php } ?>
                        
                       
                       
                    </div>
                <!-- Next Button code  -->
                <?php  if(!isset($_GET['page-number'])){
                    
                    ?>  <a href="?page-number=2" class="btn btn-outline-primary">Next</a>

                <?php 
                    } 
                    else { 
                    if($_GET['page-number']>= $pages){
                    ?> <a class="btn btn-outline-primary">Next</a>
                    <?php 
                    } 
                    else{
                        ?>
                        <a href="?page-number=<?php  echo $_GET['page-number'] + 1;  ?>">Next</a>
                    <?php 
                    }
                } 
                ?>
                <a href="?page-number=<?php echo $pages; ?>" class="btn btn-outline-primary">Last</a>
              </div>
             
            </div>   <!-- Pagination code ends here -->
            

          </div> <!-- content-wrapper ends -->

       
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
  <!-- <script src="print_function.js" type="text/javascript"></script> -->

  <script> 
$(document).ready(function () {
    $('#mytable').DataTable({
     
      
    });
});
</script>




</body>

</html>

