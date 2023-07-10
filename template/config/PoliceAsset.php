<?php include 'session.php'; ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> </title>
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
                  <h4 class="card-title">Police Asset</h4>
                  <?php  
                    include '../config.php'; 

                    // Varaible declartion
                    $successMessage = 'Congrate! Your Data has being Saved Successfully';
                    $register_date = $itemName =  $station = $itemColor = $department = $itemQuantity = 
                    $itemCatogery =  $storeNumber = $guardingName =  $gobolka =  $city = $itemNote = '';
                   
                      if($_SERVER["REQUEST_METHOD"] == "POST")
                      {

                          if(empty($_POST['assetdate']) && empty($_POST['itemname']) && empty($_POST['gobolka'])
                              && empty($_POST['itemcolor']) && empty($_POST['qaybta']) && empty($_POST['itemquantity'])
                              && empty($_POST['itemcategory']) && empty($_POST['storenumber']) && empty($_POST['city']) 
                              && empty($_POST['guardingname']) && empty($_POST['station']) && empty($_POST['itemnote']) )
                              
                              { 
                                //exit(); 
                                $_SESSION['status'] = 'All fields Must be Filled, They canot be empty ';
                                $_SESSION['status_code'] = 'error';
                              } 
                          else {

                          if(isset($_POST["btnsubmit"]))
                          {
                          //echo "working";
                          //$asset_id = $_POST['assetid'];
                          $item_id = $_POST['itemID'];
                          $gobolka = $_POST['gobolka'];
                          $city = $_POST['city'];
                          $department = $_POST['qaybta'];
                          $station = $_POST['station'];
                          @$register_date = $_POST['assetdate'];
                          @$itemName = $_POST['itemname'];
                          @$itemColor = $_POST['itemcolor'];
                          @$itemQuantity = $_POST['itemquantity'];
                          @$itemCatogery = $_POST['itemcategory'];
                          @$storeNumber = $_POST['storenumber'];
                          @$guardingName = $_POST['guardingname'];
                          @$itemNote = $_POST['itemnote'];
                        
                          }
                          // inserting query 
                      $sql = "INSERT INTO `assetregistration_table` (`id`,`item_id`, `item_Register_Date`, `city`, `Qaybta`, `Station`, `Item_Name`, `item_Color`, `item_Quantity`, `item_Catogery`, `Store_Number`, `Guarding_Name`, `item_Note`)
                      VALUES ('','$item_id', '$register_date', '$city', '$department', '$station', '$itemName',  '$itemColor',  '$itemQuantity', '$itemCatogery', '$storeNumber', '$guardingName', '$itemNote')";
                   
                          if (mysqli_query($con, $sql)) 
                          {
                               //echo "New record created successfully";
                               //echo $successMessage ;
                               $_SESSION['status'] = 'Congrates! You Added New Data ' ;
                               $_SESSION['status_code'] = 'success';
                          } 
                          else {
                               echo mysqli_error($con);
                              }   
                     
                    }
                  }
                    ?>
                 
                  <form class="forms-sample" action="#" method ="POST" >
                  <div class="container">
                      <div class="row">
                         <div class="col-lg-6" >
                          <label for="exampleInputUsername1"></label>
                          <input type="number" class="form-control" id="#" name="itemID" placeholder="Item ID">
                        </div>
                        <div class="col-lg-6" >
                          <label for="exampleInputUsername1" hidden="true"></label>
                          <input type="number" class="form-control" id="#" name="assetid" placeholder="ID">
                        </div>
                        <div class="col-lg-6">
                              <div class="row mt-4">
                                  <div class="col-6"> 
                                      <label for="exampleInputUsername1" class=" text text-secondary ">Date</label>
                                  </div>
                                    <div class="col">
                                    <input type="date" class="form-control" id="#" name="assetdate" placeholder="date" >
                                    </div>
                              </div> 
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="gobolka" placeholder="Gobolka">
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="city" placeholder="City">
                        </div>
                        <div class="col-lg-6" >
                        <label for=""></label>
                        <input type="text" class="form-control" id="#" name="qaybta" placeholder="Qaybta">
                        </div>
                        <div class="col-lg-6">
                              <div class="row mt-4">
                                  <div class="col-6"> 
                                      <label for="" class=" text text-secondary ">Station</label>
                                  </div>
                                    <div class="col">
                                    <input type="text" class="form-control" id="#" name="station" placeholder="Station" >
                                    </div>
                              </div> 
                          </div>
                      </div>

                      <div class="row">
                        <div class="col-lg-6">
                          <label for="exampleInputUsername1"></label>
                          <input type="text" class="form-control" id="#" name="itemname" placeholder="Item Name" >
                        </div>
                        <div class="col-lg-6">
                          
                              <label for="exampleInputUsername1"></label>
                              <input type="text" class="form-control" id="#" name="itemcolor" placeholder="Color" >
                            
                         
                        </div>
                      </div>
                      <div class="row">
                          <div class="col-lg-6">
                            <label for="exampleInputUsername1"></label>
                            <input type="text" class="form-control" id="#" name="itemquantity" placeholder="Quantity" >
                          </div>
                          <div class="col-6">
                          <div class="row mt-4">
                            <div class="col-4">
                            <label for="inputmarriagestatus" class=" text text-secondary">Category</label>
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" id="#" name="itemcategory" placeholder="Catogery" >
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="number" class="form-control" id="#" name="storenumber" placeholder="Store Number" >
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="guardingname" placeholder="Guarding Name" >
                        </div>
                      </div>
                    
                      <div class="row">
                        
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="itemnote" placeholder="Note" >
                        </div>
                      </div>
                     
                      <button type="submit" id="#" name="btnsubmit" class="btn btn-primary mt-2 ">Submit</button>
                    <button class="btn btn-light" id="btnassetcancel">Cancel</button>
                  </div>
                    
                    
                  </form>
                
              </div>

            

             
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
     
        <footer class="footer">
        <?php  include "../partials/footer.php";?>
        </footer>
        
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

