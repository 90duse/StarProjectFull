<?php 
 include 'session.php'; 
 include '../config.php';

//  if(isset($_GET['id'])){
//     $id = $_GET['id']; 

//         $sql = "SELECT * FROM panel_users_table where user_ID ='$id'";
//         $result = mysqli_query($con, $sql);
//          if(mysqli_num_rows($result) > 0){
//           while ( $row = mysqli_fetch_assoc($result)){ 

//             $id = $emails = $passwords = $created_Date = " ";

//             $id= $row['user_ID'];
//             $emails = $row['user_Email'];
//             $passwords = $row['user_Password'];
//             $created_Date = $row['created_Date'];

//           }
//         } 
//         else {
//             echo mysqli_error($con);
//         }
//     }
   

    if(isset($_POST['btnprofile'])){ 
     
       
    

      }

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
<body class="">

  
    <!-- partial:partials/_navbar.php -->
   <?php  include "../partials/navbar.php";?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.php -->
      <?php  include "../partials/settings-panel.php";?>
     
      <!-- partial -->
      <!-- partial:partials/_sidebar.php -->
     <?php   include "../partials/sidebar.php";?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
         <!-- Profile code start here  -->
         <form action="#" method="POST">
        <div class="container py-5">
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
              <div class="col-4">
                <div class="card mb-4">
                  <div class="card-body text-center">
                    <img src="../images/auth/ava3.webp" alt=""
                    class="rounded-circle img-fluid img-border-3" style="width: 200px;">
                    <h5 class="my-3">Dabagalle</h5>
                    <input type="text" class="" name="role">ADMIN</input>
                    <p class="text-muted mb-4">Hargeisa, Somaliland</p>
                    <div class="d-flex justify-content-center mb-2">
                    </div>
                   </div>
                </div>
              </div>
             
          <div class="col p-3">
             <div class="card mb-4">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                    <p class="mb-0">Full Name</p>
                    </div>
                    <div class="col-sm-9">
                    <input type="text" class="text-muted mb-0" name="admin_name">
                  </div>
                  </div>
                 <hr>
                <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                <input type="email" class="text-muted mb-0" name="admin_email" value="<?php echo @$emails;?>">
                </div>
                </div>
                <hr>
                <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Phone</p>
                </div>
                <div class="col-sm-9">
                <input type="tel" class="text-muted mb-0" name="admin_phone">
                </div>
                </div>
                <hr>
                <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Created Date</p>
                </div>
                <div class="col-sm-9">
                <input type="tel" class="text-muted mb-0" name="admin_created_date">
                </div>
                </div>
                <hr>
                <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Address</p>
                </div>
                <div class="col-sm-9">
                <input type="text" class="text-muted mb-0" name="admin_address">
                </div>
                </div>
              </div>
             </div>
            </div>
           </div>
           <div class="d-grid gap-2 col-4 mx-auto">
           <button type="submit" name="btnprofile" class="btn btn-outline-primary btn-end">Save</button>
           </div>
          </div>
        </div>
        </form>
          <!-- profile code end here -->

                  

      
       
        <!-- footer  -->
        <footer>
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

  <!-- sweet alert -->
  <script src="../js/sweetalert.min.js"></script>
  <script def src="validation.js"></script>

  <?php   if (isset($_SESSION['status'])){

  }  ?> 

  <script>
    swal({
    title: "<?php  echo $_SESSION['status']; ?>",
  //text: "You clicked the button!",
    icon: "<?php  echo $_SESSION['status_code']; ?>",
    button: "OK!",
});
  <?php unset($_SESSION['status']); ?>
  </script>




</body>

</html>

