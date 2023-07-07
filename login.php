<?php    
session_start();
include './Admin-Template/config.php'; 

if(isset($_POST["btnlogin"])){

$UsernameorEmail = $_POST["UsernameorEmail"];
$userPassword = $_POST["Password"];


 $sql = "SELECT * FROM panel_users_table WHERE  user_Email = '$UsernameorEmail' AND user_Password = '$userPassword' ";
 $result = mysqli_query($con, $sql);
 $userRole = mysqli_fetch_array($result); 
 if(mysqli_num_rows($result) > 0 && $userRole['user_Type'] == "Admin"){
 
 
  $_SESSION['valid'] = true;
  $_SESSION['timeout'] = time();
  $_SESSION['username'] = $UsernameorEmail;
  header("location: Admin-Template/config/index.php");


 } else if(mysqli_num_rows($result) > 0 && $userRole['user_Type'] == "User"){
  $_SESSION['valid'] = true;
  $_SESSION['timeout'] = time();
  $_SESSION['username'] = $UsernameorEmail;
  
  header("location: ./template/config/index.php");

 }
else{
  $_SESSION['status'] = 'Email or Password Is Invalid';
  header("location: login.php");

   }


 }





  // if($userRole['user_Type'] == 'Admin'){
  //    header("location: Admin-Template/config/index.php");

// } else if{
//    echo mysqli_error($con);

//  }
  //  else if($userRole['user_Type'] == 'user'){
  // header("location: template/config/index.php");
  //   }  












 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>POLICE MANAGEMENT SYSTEM</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="./Admin-Template/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="./Admin-Template/images/favicon.png" />
</head>

<body class="bg bg-primary">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
        <div class="col-lg-7">
           <div class="">
            <img src="Admin-Template/images/auth/policeLogo.svg.png" alt="image" class="m-5" 
             width="500" >
           </div> 

        </div>

          <div class="col-lg-4 ">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo ">
                <img src="./Admin-Template/images/POLICEL.png " width = "100" height ="100" alt="logo">
              </div>
              <h4>Hello! OFFICER, let's get started</h4>
              <h6 class="fw-light">Sign in to continue.</h6>
              <form  method="post"  autocomplete="on" class="pt-3">
              <div class="row">
                      <div class="col">
                        <div class="row mt-4">
                                  <div class="form-group">
                                    <select name="selectUserRole" id="#" class="form-control form-control-lg">
                                      <option value="Choose">Choose Account Type</option>
                                      <option value="Admin">Admin</option>
                                      <option value="User">User</option>
                                    </select>
                                  </div> 
                              </div> 
                        </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputEmail1"  name="UsernameorEmail" placeholder="Username or Email">
                </div>

                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="Password"  id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="btnlogin"> SIGN IN </button> 
                </div>
               
                
                <!-- <div class="text-center mt-4 fw-light">
                  Don't have an account? <a href="./config/registration.php" class="text-primary">Register</a>
                </div> -->
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
  
 
</body>

</html>
