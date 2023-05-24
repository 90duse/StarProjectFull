
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
          <!-- <div class="ps-lg-1">
            <div class="d-flex align-items-center justify-content-between">
              <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
              <a href="https://www.bootstrapdash.com/product/star-admin-pro/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
            </div>
          </div> -->
          <!-- <div class="d-flex align-items-center justify-content-between">
            <a href="https://www.bootstrapdash.com/product/star-admin-pro/"><i class="mdi mdi-home me-3 text-white"></i></a>
            <button id="bannerClose" class="btn border-0 p-0">
              <i class="mdi mdi-close text-white me-0"></i>
            </button>
          </div> -->
        </div>
      </div>
    </div>
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
                    $register_date = '';
                    $itemName = '';
                    $itemHight = '';
                    $itemColor = '';
                    $itemWeight = '';
                    $itemQuantity ='';
                    $itemCatogery = '';
                    $storeNumber ='';
                    $guardingName ='';
                    $guardingID ='';
                    $itemCondition ='';
                    $itemNote = '';
                    $deliveryName = '';

                      if(isset($_GET["btnsubmit"])){

                     

                      //echo "working";
                      //$assetID = $_GET['assetid'];
                      @$register_date = $_GET['assetdate'];
                      @$itemName = $_GET['itemname'];
                      @$itemHight = $_GET['itemheight'];
                      @$itemColor = $_GET['itemcolor'];
                      @$itemWeight = $_GET['itemweight'];
                      @$itemQuantity = $_GET['itemquantity'];
                      @$itemCatogery = $_GET['itemcategory'];
                      @$storeNumber = $_GET['storenumber'];
                      @$guardingName = $_GET['guardingname'];
                      @$guardingID = $_GET['guardingid'];
                      @$itemCondition =$_GET['itemcondition'];
                      @$itemNote = $_GET['itemnote'];
                      @$deliveryName = $_GET['deliveryname'];

                      $sql = "INSERT INTO `assetregistration_table` (`id`, `item_Register_Date`, `Item_Name`, `item_Hight`, `item_Color`, `item_Weight`, `item_Quantity`, `item_Catogery`, `Store_Number`, `Guarding_Name`, `Guarding_Police_ID`, `item_Condition`, `item_Note`, `item_Delivery`)
                      VALUES ('', '$register_date', '$itemName', '$itemHight', '$itemColor', '$itemWeight', '$itemQuantity', '$itemCatogery', '$storeNumber', '$guardingName', '$guardingID', '$itemCondition', '$itemNote', '$deliveryName')";
                    // $sql = "INSERT INTO AssetRegistration_table (id, item_Register_Date, item_Name, item_Hight, item_Color, item_Weight, item_Quantity, item_Catogery, Store_Number, Guarding_Name, Guarding_Police_ID, item_Condition, item_Note, item_Delivery)
                       // VALUES (' ', '$register_date', '$itemName', '$itemHight', '$itemColor', '$itemWeight', '$itemQuantity', '$itemCatogery', '$storeNumber', '$guardingName', '$guardingID', '$itemCondition', '$itemNote', '$deliveryName')";

                          if (mysqli_query($con, $sql)) {
                               //echo "New record created successfully";
                               echo $successMessage ;
                         } else {
                               echo mysqli_error($con);
                         }   
                      } 
                     
                     
                    ?>
                 
                  <form class="forms-sample" action="#" method ="GET" >
                  <div class="container">
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="number" class="form-control" id="#" name="assetid" placeholder="Item ID">
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
                          <input type="text" class="form-control" id="#" name="itemname" placeholder="Item Name" >
                        </div>
                        <div class="col-lg-6">
                          <div class="row">
                            <div class="col-lg-4">
                              <label for="exampleInputUsername1"></label>
                              <input type="number" class="form-control" id="#" name="itemheight" placeholder=" Item Hight" >
                            </div>
                            <div class="col-lg-4">
                              <label for="exampleInputUsername1"></label>
                              <input type="text" class="form-control" id="#" name="itemcolor" placeholder="Color" >
                            </div>
                            <div class="col-lg-4">
                              <label for="exampleInputUsername1"></label>
                              <input type="number" class="form-control" id="#" name="itemweight" placeholder=" Item weight" >
                            </div>
                         </div> 
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
                       
                        <div class="col">
                        <label for="exampleInputUsername1"></label>
                        <input type="number" class="form-control" id="#" name="guardingid" placeholder="Guarding Police ID" >
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="itemcondition" placeholder="Item Condition" >
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="itemnote" placeholder="Note" >
                        </div>
                      </div>
                      <div class="row">
                        <div class="col ">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="deliveryname"placeholder="Delivery Name" >
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
</body>

</html>

