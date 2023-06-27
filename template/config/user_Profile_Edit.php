<?php 
  include 'session.php'; 
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
       <div class="container">
           <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item active" aria-current="page"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active "><a href="user_Profile.php">User</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                        </ol>
                    </nav>
                </div>
           </div>
         
            <div class="row ">
            <div class="col-lg-4 ">
              <form action="" method="POST">
                <?php  
                  if(isset($_GET['id'])){
                    $id = $_GET['id']; 
                    //echo 'Your id is:'.$id;

              //varibale declaration
                  $userEmail = $useremail = $username = $usercreated_date = $userpassword = $userType = "";
                  $successMessage = "<div class='alert alert-success' role='alert'>
                  Successfully Recorded Your Data 
                 </div>";
             // Select queary 
                $result = mysqli_query($con, "SELECT * FROM panel_users_table where user_ID ='$id'" );
                    while ($row = mysqli_fetch_assoc($result)){
                       $id = $row['user_ID'];
                       @$userType = $row['user_Type'];
                       @$useremail = $row['user_Email'];
                       @$username = $row['user_Name'];
                       @$userpassword = $row['user_Password'];
                       @$usercreated_date= $row['created_Date'];
                       //$userphoto = $row['user_profile'];
                         
                      
                      }
                    
                      // update queary
                  
                      if(isset($_POST['btnprofile'])){
                        //variable declaration
                        $id = $Role =$admin_name = $admin_password = $admin_photo = $admin_email = $admin_created_date = "";
                       //variable assignment
                        @$id = $POST['admin_ID'];
                       @$Role = $_POST['role'];
                       @$admin_email = $_POST['admin_email'];
                       @$admin_name = $_POST['admin_name'];
                       @$admin_password = $_POST['admin_password'];
                       @$admin_created_Date= $_POST['admin_created_date'];
                       //$admin_photo = $_POST['admin_profile'];
                         
                       $sql = "UPDATE `panel_users_table` SET `user_ID`= '', `user_Name` = '$admin_name', `user_Email` = '$admin_email', `user_Password` = '$admin_password', `user_Type` = '$Role',
                       `created_Date` = '$admin_created_Date', `user_profile`= '' WHERE `user_ID` = '$id'";
                      
                      if (mysqli_query($con, $sql)){
                        echo $successMessage;

                      } else{
                        echo mysqli_error($con);
                      }
                    } 
                  
                
                }

                ?>

                <div class="card">
                  <div class="card-body">
                    <table></table>
                    <img src="../images/auth/policeIcon.png" alt=""
                    class="img-thumbnail img-fluid img-border-3 mx-auto d-flex " style="width: 200px;">
                    
                    <input type="text" class="form-control text-center mt-1" name="role" value="<?php echo @$userType; ?>"></input>
                    <p class="text-muted mb-4 text-center">Hargeisa, Somaliland</p>
                    <div class="d-flex justify-content-center mb-2">
                    </div>
                   </div>
                  </div>
                </div>
                <div class="col p-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row" hidden="true">
                              <div class="col-sm-9">
                               <input type="number"  hidden="true" class="form-control text-muted mb-0" name="admin_ID" value="<?php echo @$id;?>">
                              </div>
                         </div>
                        
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">User Name</p>
                                </div>
                                <div class="col-sm-9">
                                <input type="text" class="form-control text-muted mb-0" name="admin_name" value="<?php echo @$username;?>">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">User Email</p>
                                </div>
                                <div class="col-sm-9">
                                <input type="email" class="form-control text-muted mb-0" name="admin_email" value="<?php echo @$useremail;?>">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">User Password</p>
                                </div>
                                <div class="col-sm-9">
                                <input type="password" class="form-control text-muted mb-0" name="admin_password" value="<?php echo @$userpassword;?>">
                            </div>
                        </div>
                        <hr>
                        <div class="row " hidden="true">
                                <div class="col-sm-3">
                                    <p class="mb-0">User Password</p>
                                </div>
                                <div class="col-sm-9">
                                <input type="file" class="form-control text-muted mb-0" name="admin_profile" >
                            </div>
                        </div>
                   
                        <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Created Date</p>
                                </div>
                                <div class="col-sm-9">
                                <input type="tel" class=" form-control text-muted mb-0" name="admin_created_date" value="<?php echo @$usercreated_date;?>">
                            </div>
                        </div>
                        <hr>
                        
                    </div>
                   
                    
                    <div class="card-footer">
                            <div class="d-grid gap-2 col-4 mx-auto">
                                <button type="submit" name="btnprofile" class="btn btn-outline-success ">Update</button>
                            </div>
                    </div>
                    </div>
                
                </div>
                
             </form>
            </div>
        <!-- row -->
       </div> 
       <!-- container -->
        
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

