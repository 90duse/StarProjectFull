<?php    

include 'config.php'; 

if(isset($_POST["login"])){

$UsernameorEmail= $_POST["UsernameorEmail"];
$Password=$_POST["Password"];
$result=mysqli_query($con,"select * from registration where Username='$UsernameorEmail' or Email='$UsernameorEmail' ");
$row=mysqli_fetch_assoc($result);

 if(mysqli_num_rows($result) > 0){
      if( $Password == $row["Password"]   ){
        $_SESSION ["log"]=true;
        $_SESSION ["id"]=$row["iD"];
        header("location:config/index.php");
        
 
     }
     else{
       "<script> alert('Password wrong'); </script";
     }

}
else{
   "<script> alert('User not Registred '); </script";
}

}















 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>POLICE MANAGEMENT SYSTEM</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo ">
                <img src="images/POLICEL.png " width = "100" height ="100" alt="logo">
              </div>
              <h4>Hello! OFFICER, let's get started</h4>
              <h6 class="fw-light">Sign in to continue.</h6>
              <form      method="post"  autocomplete="on" class="pt-3">

                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputEmail1"  name="UsernameorEmail" placeholder="Username or Email">
                </div>

                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="Password"  id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="login"> SIGN IN </button> 
                </div>
               
                
                <div class="text-center mt-4 fw-light">
                  Don't have an account? <a href="./config/registration.php" class="text-primary">Register</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
