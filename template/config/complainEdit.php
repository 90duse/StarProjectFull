<?php  include 'session.php';

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

  <div class="container-scroller ">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
        
        </div>
      </div>
    </div>
    <!-- partial:partials/_navbar.html -->
   
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      
     
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
     
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">Crime Record</h4>
                  <?php    
                      include '../config.php';
                      if(isset($_GET['id'])){
                        @$id = $_GET['id']; 
                        $row ='';
                      
                     // select query 
                        $sql = "SELECT * FROM `complainmentregistration_table` where co_id ='$id'";
                        $result = mysqli_query($con, $sql);
                         if(mysqli_num_rows($result) > 0){
                          while ( $row = mysqli_fetch_assoc($result)){
                            //varibale declaration 
                            @$co_id = $co_registerDate = $co_fullname = $co_rank = 
                            $co_subject = $co_againistWhom = $co_complainment = '';
                            // variable assignmets
                            @$id = $row['co_id'];
                            @$co_registerDate = $row['co_registrationDate'];
                            @$co_fullname = $row['co_fullname'];
                            @$co_rank= $row['co_rank'];
                            @$co_subject = $row['co_subject'];
                            @$co_againistWhom = $row['co_againstWhom'];
                            @$co_complainment = $row['co_complainment'];
                            
                             }  
                            } 
                           else {
                            echo mysqli_error($con);
                           }
                       } 
                
                       if($_SERVER["REQUEST_METHOD"] == "POST"){

                        if(isset($_POST['btncomplainUpdate'])){
                         // varaible declaration
                        
                          $complainRegisterDate =  $complainRank =  $complainFullname =  $complainSubject =
                          $complainAgainstWhom =  $complainment = $complainID = '';
                    // variable assignment
                          @$complainID = $_POST['complainid'];
                          @$complainRegisterDate = $_POST['complainregisterdate'];
                          @$complainFullname = $_POST['complainfullname'];
                          @$complainRank= $_POST['complainrank'];
                          @$complainSubject = $_POST['complainsubject'];
                          @$complainAgainstWhom = $_POST['complainagainstwhom'];
                          @$complainment = $_POST['complainment'];
                        
                       // update query 
                             $sql = "UPDATE `complainmentregistration_table` SET `co_id` = '$complainID', `co_registrationDate` = '$complainRegisterDate', 
                             `co_fullname` = '$complainFullname', `co_rank` = '$complainRank', `co_subject` = '$complainSubject', `co_againstWhom` = '$complainAgainstWhom', 
                             `co_complainment` = '$complainment' WHERE `co_id` = '$id'";
                          if (mysqli_query($con, $sql)) {

                            $_SESSION['status'] = 'Congrates! You Added New Data ' ;
                            $_SESSION['status_code'] = 'success'; 
                          }
                          else { echo mysqli_error($con); 
                          }
                        }
                      }   
                      ?>
                 
                 <form class="forms-sample" method="POST">
                     <div class="container">
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="number" class="form-control" id="#" name="complainid" placeholder="Police ID" value="<?php echo @$id; ?>">
                        </div>
                        <div class="col-lg-6">
                              <div class="row mt-4">
                                  <div class="col-6"> 
                                      <label for="#" class=" text text-secondary">Date</label>
                                  </div>
                                    <div class="col">
                                    <input type="date" class="form-control" id="#" name="complainregisterdate" placeholder="date" value="<?php echo @$co_registerDate; ?>">
                                    </div>
                              </div> 
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <label for="#"></label>
                          <input type="text" class="form-control" id="#" name="complainfullname" placeholder="FULLNAME"  value="<?php echo @$co_fullname; ?>">
                        </div>
                        <div class="col-lg-6">
                            <label for="#"></label>
                            <input type="text" class="form-control" id="#" name="complainrank"placeholder="RANK" value="<?php echo @$co_rank; ?>">
                          </div>
                      </div>
                      
           
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="#"></label>
                        <input type="text" class="form-control" id="#" name="complainsubject" placeholder="Complainment Subject" value="<?php echo @$co_subject; ?>">
                        </div>
                        <div class="col-lg-6">
                        <label for="#"></label>
                        <input type="tel" class="form-control" id="#" name="complainagainstwhom" placeholder="Against whom to complain" value="<?php echo @$co_againistWhom; ?>">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                        <label for="#"></label>
                        <textarea class="form-control h-100" id="#" name="complainment" placeholder="Complainment" value="<?php echo @$co_complainment; ?>"></textarea>
                        </div>
                        
                      </div> 
                      
                        
                        
                      </div>
                          <div class="button mt-5">
                            <button type="submit" class="btn btn-primary" name="btncomplainUpdate">Submit</button>
                            <a href="viewComplainment.php"  class="btn btn-danger">BACK</a>
                          </div>
                     </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        
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

