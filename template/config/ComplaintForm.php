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
</head>
<body class="">

  <!-- <div class="container-scroller ">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
        
        </div>
      </div>
    </div> -->
    <!-- partial:partials/_navbar.php -->
   <?php  include "../partials/navbar.php"?>
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
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">Complaint form </h4>
                  <?php   
                        include '../config.php';

                            // varaible declaration

                          $complainID = $complainRegisterDate = $complainFullname =  $complainRank = 
                          $complainSubject =  $complainAgainstWhom =  $complainment = " ";
                          
                          if($_SERVER["REQUEST_METHOD"] == "POST"){

                            if(empty($_POST['complainID']) && empty($_POST['complairegisterdate']) && empty($_POST['complainfullname'])
                            && empty($_POST['complainrank']) && empty($_POST['complainsubject']) && empty($_POST['complainagainstwhom'])
                            && empty($_POST['complainsubject']) && empty($_POST['complainment']))
                            { 
                               //exit(); 
                               $_SESSION['status'] = 'All fields Must be Filled, They canot be empty ';
                               $_SESSION['status_code'] = 'error';
                            }
                           else {
                            if(isset($_POST['btncomplain'])){
                              //echo 'working';
                              @$complainID = $_POST['complainid'];
                              @$complainRegisterDate = $_POST['complainregisterdate'];
                              @$complainFullname = $_POST['complainfullname'];
                              @$complainRank= $_POST['complainrank'];
                              @$complainSubject = $_POST['complainsubject'];
                              @$complainAgainstWhom = $_POST['complainagainstwhom'];
                              @$complainment = $_POST['complainment'];
                              
                              
                            }

                         $sql = "INSERT INTO `complainmentRegistration_table` (`co_id`, `co_registrationDate`, `co_fullname`, `co_rank`, `co_subject`, `co_againstWhom`, `co_complainment`)
                          VALUES ('', '$complainRegisterDate', '$complainFullname', '$complainRank', '$complainSubject', '$complainAgainstWhom', '$complainment')";
                          if (mysqli_query($con, $sql)){

                            $_SESSION['status'] = 'Your Data is Saved Succcessfully ';
                            $_SESSION['status_code'] = 'success';
                          }
                        else {

                          echo mysqli_error($con);
                        }

                      }
                    }
                    ?>
               
                  <form class="forms-sample" method="POST">
                     <div class="container">
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="number" class="form-control" id="#" name="complainid" placeholder="Police ID">
                        </div>
                        <div class="col-lg-6">
                              <div class="row mt-4">
                                  <div class="col-6"> 
                                      <label for="#" class=" text text-secondary">Date</label>
                                  </div>
                                    <div class="col">
                                    <input type="date" class="form-control" id="#" name="complainregisterdate" placeholder="date">
                                    </div>
                              </div> 
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <label for="#"></label>
                          <input type="text" class="form-control" id="#" name="complainfullname" placeholder="FULLNAME">
                        </div>
                        <div class="col-lg-6">
                            <label for="#"></label>
                            <input type="text" class="form-control" id="#" name="complainrank"placeholder="RANK">
                          </div>
                      </div>
                      
           
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="#"></label>
                        <input type="text" class="form-control" id="#" name="complainsubject" placeholder="Complainment Subject">
                        </div>
                        <div class="col-lg-6">
                        <label for="#"></label>
                        <input type="tel" class="form-control" id="#" name="complainagainstwhom" placeholder="Against whom to complain">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                        <label for="#"></label>
                        <textarea type="text" class="form-control h-100" id="#" name="complainment" placeholder="Complainment"></textarea>
                        </div>
                        
                      </div> 
                      <div class="row">
                        <div class="col">
                        <div class="input-group mt-5">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                          <input type="text" class="form-control" aria-label="Text input with checkbox" name="complainsigniture" placeholder="I as Name I am sure this and I am ready to face the result">
                        </div>
                        </div>
                        
                      </div>
                          <div class="button mt-5">
                            <button type="submit" class="btn btn-primary" name="btncomplain">Submit</button>
                            <button class="btn btn-light">Cancel</button>
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
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
          </div>
        </footer>
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

