

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

  
    <!-- partial:partials/_navbar.html -->
   <?php  include "../partials/navbar.php";?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <?php  include "../partials/settings-panel.php";?>
     
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
     <?php   include "../partials/sidebar.php";?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">Add New User</h4>
                  <?php    
                    //session_start();
                      include '../config.php';
                     
                       $successMessage = "<div class='alert alert-success' role='alert'>
                      Successfully Recorded Your Data 
                     </div>";
                       $ErrMessage = "<div class='alert alert-danger' role='alert'>
                       All Fields must be filled 
                     </div>";
                     $userName = $userEmail = $userPassword = $userRole = $createdDate = " " ;
                
                       
                           if(isset($_POST['btnAddUsers'])){ 
                      
                            $userEmail = $_POST['useremail'];
                            $userPassword = $_POST['userpassword'];
                            $userRole = $_POST['selectUserRole'];
                            $createdDate = $_POST['createdDate'];
                            $userName = $_POST['username'];
                            $gobolka = $_POST['selectgobol'];
                            $city = $_POST['selectcity'];
                            $department = $_POST['qaybta'];

                            $userImage = $_FILES['profileimage']['name'];
                            $userImagesize = $_FILES['profileimage']['size'];
                            $tmp_name = $_FILES['profileimage']['tmp_name'];
                            $imageLocation = "../images/"; 

                            if(move_uploaded_file($tmp_name, $imageLocation.$userImage)){

                            $sql =  "INSERT INTO `Panel_users_table` (`user_ID`, `user_Name`, `user_Email`, `user_Password`, `region`, `City`, `department`,`user_Type`, `created_Date`,`user_profile`) 
                            VALUES (' ', '$userName', '$userEmail', '$userPassword', '$gobolka', '$city', '$department', '$userRole', '$createdDate', '$userImage')";
                            
                            if (mysqli_query($con, $sql))
                            {
                                echo $successMessage;
                            //  $_SESSION['status'] = 'Congrates! You Added New User ' ;
                            //  $_SESSION['status_code'] = 'success';
                             
                            }
   
                            else 
                            {
                              echo mysqli_error($con);
                            }
                           
                        

                          }
                        }
                          
                    ?>
                  <form   id = "form" name="myForm "class="forms-sample"  method="POST" action = "#" enctype="multipart/form-data">
                    <div class="container">
                    <div class="row" >
                        <div class="col-lg-6">
                            <div class="row "  hidden="true">
                            <div class="col-4" > 
                                <label for="userID" class=" text text-secondary">ID</label>
                            </div>
                            <div class="col">
                            <input type="number" class="form-control" id="#" name="userID" placeholder="Your ID" >
                            </div>
                         </div>
                        </div>
                        
                      </div>
                      
                      <div class="row mb-3">
                        <div class="col-lg-6">
                            <div class="row">
                            <div class="col-4" > 
                                <label for="username" class=" text text-secondary">Magaca Saldhiga</label>
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" id="#" name="username" placeholder="User Name" >
                            </div>
                         </div>
                        </div>
                      </div>
                        <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                            <div class="col-4" > 
                                <label for="useremail" class=" text text-secondary">User Email</label>
                            </div>
                            <div class="col">
                            <input type="email" class="form-control" id="#" name="useremail" placeholder="Enter Your Email" >
                            </div>
                         </div>
                        </div>
                        
                      </div>
                      <div class="row">
                      <div class="col-lg-6">
                        <div class="row mt-4">
                                  <div class="col-4"> 
                                      <label for="userpassword" class=" text text-secondary">Password</label>
                                  </div>
                                    <div class="col">
                                    <input type="password" class="form-control" id="#" name="userpassword" placeholder="password"  >
                                    </div>
                              </div> 
                        </div>
                      </div>
                      <div class="row">
                         <div class="col-lg-6">
                            <div class="row mt-4">
                                  <div class="col-4"> 
                                      <label for="createdDate" class=" text text-secondary">Gobolka</label>
                                  </div>
                                  <div class="col">
                                    
                                    <select name="selectgobol" id="selectgobol" class="form-control" onchange="choose(this.id,'selectcity')">
                                    <option value="">Dooro Gobol</option>
                                      <option value="Maroodijeex">Maroodijeex</option>
                                      <option value="Togdheer">Togdheer</option>
                                      <!-- <option value="Sanaag">Sanaag</option>
                                      <option value="Awdal">Awdal</option>
                                      <option value="Saaxil">Saaxil</option> -->
                                    </select>
                                  </div> 
                              </div> 
                        </div>
                        </div>
                        <div class="row">
                         <div class="col-lg-6">
                            <div class="row mt-4">
                                  <div class="col-4"> 
                                      <label for="selectcity" class=" text text-secondary">Magaalada</label>
                                  </div>
                                  <div class="col">
                                  
                                    <select name="selectcity" id="selectcity" class="form-control"> </select>
                                    
                                   
                                  </div> 
                              </div> 
                        </div>
                        </div>
                        <div class="row">
                         <div class="col-lg-6">
                            <div class="row mt-4">
                                  <div class="col-4"> 
                                      <label for="selectcity" class=" text text-secondary">Qaybta</label>
                                  </div>
                                  <div class="col">
                                  
                                    <select name="qaybta" id="#" class="form-control"> 
                                      <option value="">-- Dooro Qaybta --</option>
                                      <option value="Qaybta Bari">Qaybta Bari</option>
                                      <option value="Qaybta Galbeed">Qaybta Galbeed</option>
                                    </select>
                                    
                                   
                                  </div> 
                              </div> 
                        </div>
                        </div>
                        <div class="row">
                         <div class="col-lg-6">
                            <div class="row mt-4">
                                  <div class="col-4"> 
                                      <label for="createdDate" class=" text text-secondary">User Role</label>
                                  </div>
                                  <div class="col">
                                    <select name="selectUserRole" id="#" class="form-control">
                                      <option value="Admin">Admin</option>
                                      <option value="User">User</option>
                                    </select>
                                  </div> 
                              </div> 
                        </div>
                        </div>
                        <div class="row mt-3">
                        <div class="col-lg-6">
                            <div class="row">
                            <div class="col-4" > 
                                <label for="profileimage" class=" text text-secondary">Upload Profile Photo</label>
                            </div>
                            <div class="col">
                            <input type="file" class="form-control" id="#" name="profileimage" placeholder="Profile Phote" >
                            </div>
                         </div>
                        </div>
                      </div>
                       
                      <div class="row">
                      <div class="col-lg-6">
                        <div class="row mt-4">
                                  <div class="col-4"> 
                                      <label for="createdDate" class=" text text-secondary">Created Date</label>
                                  </div>
                                    <div class="col">
                                    <input type="Date" class="form-control" id="#" name="createdDate" placeholder=""  >
                                    </div>
                              </div> 
                        </div>
                      </div>
                     
                      
                     
                        <div class="button">
                          <button type="submit"  class="btn btn-primary  m-2" name="btnAddUsers" value = "submit" >Submit</button>
                          <!-- <button class="btn btn-light">Cancel</button> -->
                          <a href="viewUsersRecord.php" class="btn btn-light">View Users</a>
                        </div>
                    </div>
                   
                  </form>
                </div>
              </div>

            

             
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer -->
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

<script>
function choose(s1,s2){
  var s1 = document.getElementById(s1);
  var s2 = document.getElementById(s2);

  s2.innerHTML = '';
  if(s1.value == 'Maroodijeex'){
    var optionArray = ['Hargeisa|hargeisa', 'Dacarbudhuq|dacarbudhuq','Dacarbudhuq|dacarbudhuq','Dacarbudhuq|dacarbudhuq'];
  } 
  else if (s1.value == 'Togdheer'){
    var optionArray = ['Burco|burco', 'Oog|oog', 'Caynaba|caynaba', 'Buuhoodle|buuhoodle'];
  }
  for(var option in optionArray){
   

    var pair = optionArray[option].split("|");
				var newoption = document.createElement("option");

        newoption.value = pair[0];
				newoption.innerHTML=pair[1];
				s2.options.add(newoption);
  }

}

</script>


</body>

</html>

