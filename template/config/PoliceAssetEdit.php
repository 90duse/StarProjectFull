 <?php include 'session.php';  ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
  <!-- Required  meta tags -->
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
                  <h4 class="card-title">Police Asset</h4>
                  <?php  
                    include '../config.php'; 
                    if(isset($_GET['id'])){
                        $id = $_GET['id']; 
                
                      //variable declaring
                        $row =  $assetID =  $registerDate = $nameItem = $Height = $Color =  $Weight = 
                        $Quantity = $Catogery =  $Store = $Guarding = $GuardingNo = $Condition =  $Note = $Delivery = '';
                      
                     // selecting data from the database
                        $sql = "SELECT * FROM `assetregistration_table` where id ='$id'";
                        $result = mysqli_query($con, $sql);
                         if(mysqli_num_rows($result) > 0){
                          while ( $row = mysqli_fetch_assoc($result)){

                     // variable assignments   
                            $id = $row['id'];
                            $registerDate = $row['item_Register_Date'];
                            $nameItem =  $row['Item_Name'];
                            $Height =  $row['item_Hight'];
                            $Color =  $row['item_Color'];
                            $Weight =  $row['item_Weight'];
                            $Quantity =  $row['item_Quantity'];
                            $Catogery =  $row['item_Catogery'];
                            $Store = $row['Store_Number'];
                            $Guarding =  $row['Guarding_Name'];
                            $GuardingNo =  $row['Guarding_Police_ID'];
                            $Condition =  $row['item_Condition'];
                            $Note =  $row['item_Note'];
                            $Delivery =  $row['item_Delivery'];
                
                             }  
                           } 
                           else {
                            echo mysqli_error($con);
                           }
                    }  
                    
                    if($_SERVER["REQUEST_METHOD"] == "POST"){

                      if(isset($_POST['btnpoliceAssetUpdate'])){
           
                   // variable assigments       
                    $id = $register_Date = $itemName = $itemHight =  $itemColor =   $itemWeight =  $itemQuantity =
                    $itemCatogery =  $storeNumber =  $guardingName = $guardingID = $itemCondition =  $itemNote = $deliveryName ='';
                   // variable assignments
                     $id = $_POST['assetid'];
                    @$register_Date = $_POST['assetdate'];
                    @$itemName = $_POST['itemname'];
                    @$itemHight = $_POST['itemhight'];
                    @$itemColor = $_POST['itemcolor'];
                    @$itemWeight = $_POST['itemweight'];
                    @$itemQuantity = $_POST['itemquantity'];
                    @$itemCatogery = $_POST['itemcategory'];
                    @$storeNumber = $_POST['storenumber'];
                    @$guardingName = $_POST['guardingname'];
                    @$guardingID = $_POST['guardingid'];
                    @$itemCondition =$_POST['itemcondition'];
                    @$itemNote = $_POST['itemnote'];
                    @$deliveryName = $_POST['deliveryname'];
                    //updating code
                      $sql = "UPDATE `assetregistration_table` SET `id` = '$id', `item_Register_Date` = '$register_Date', `Item_Name` = '$itemName', 
                      `item_Hight` = '$itemHight', `item_Color` = '$itemColor', `item_Weight` = '$itemWeight', `item_Quantity` = '$itemQuantity', 
                      `item_Catogery` = '$itemCatogery', `Store_Number` = '$storeNumber', `Guarding_Name` = '$guardingName', `Guarding_Police_ID` = '$guardingID', 
                      `item_Condition` = '$itemCondition', `item_Note` = '$itemNote', `item_Delivery` = '$deliveryName' WHERE `id` = '$id'";
                     
                           if (mysqli_query($con, $sql)) {
                            $_SESSION['status'] = 'Congrates! You Added New Data ' ;
                            $_SESSION['status_code'] = 'success';
                          } else {
                                echo mysqli_error($con);
                          }

                        }
                      }
                    ?>
                 
                  <form class="forms-sample" action="#" method ="POST">
                  <div class="container">
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="number" class="form-control" id="assetID" name="assetid" placeholder="Item ID" value="<?php echo $id; ?>">
                        </div>
                        <div class="col-lg-6">
                              <div class="row mt-4">
                                  <div class="col-6"> 
                                      <label for="exampleInputUsername1" class=" text text-secondary ">Date</label>
                                  </div>
                                    <div class="col">
                                    <input type="date" class="form-control" id="assetDate" name="assetdate"placeholder="date" value="<?php echo $registerDate; ?>" >
                                    </div>
                              </div> 
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <label for="exampleInputUsername1"></label>
                          <input type="text" class="form-control" id="#" name="itemname" placeholder="Item Name" value="<?php echo @$nameItem; ?>" >
                        </div>
                        <div class="col-lg-6">
                          <div class="row">
                            <div class="col-lg-4">
                              <label for="exampleInputUsername1"></label>
                              <input type="number" class="form-control" id="#" name="itemhight" placeholder=" Item Hight" value="<?php echo $Height;?>" >
                            </div>
                            <div class="col-lg-4">
                              <label for="exampleInputUsername1"></label>
                              <input type="text" class="form-control" id="#" name="itemcolor" placeholder="Color" value="<?php echo @$Color; ?>" >
                            </div>
                            <div class="col-lg-4">
                              <label for="exampleInputUsername1"></label>
                              <input type="number" class="form-control" id="#" name="itemweight" placeholder=" Item weight" value="<?php echo @$Weight; ?>" >
                            </div>
                         </div> 
                        </div>
                      </div>
                      <div class="row">
                          <div class="col-lg-6">
                            <label for="exampleInputUsername1"></label>
                            <input type="text" class="form-control" id="#" name="itemquantity" placeholder="Quantity" value="<?php echo @$Quantity; ?>" >
                          </div>
                          <div class="col-6">
                          <div class="row mt-4">
                            <div class="col-4">
                            <label for="inputmarriagestatus" class=" text text-secondary">Category</label>
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" id="#" name="itemcategory" placeholder="Catogery" value="<?php echo @$Catogery; ?>" >
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="number" class="form-control" id="#" name="storenumber" placeholder="Store Number" value="<?php echo @$Store; ?>">
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="guardingname" placeholder="Guarding Name" value="<?php echo @$Guarding;?>" >
                        </div>
                      </div>
                      <div class="row">
                       
                        <div class="col">
                        <label for="exampleInputUsername1"></label>
                        <input type="number" class="form-control" id="#" name="guardingid" placeholder="Guarding Police ID" value="<?php echo @$GuardingNo;?>" >
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="itemcondition" placeholder="Item Condition" value="<?php echo @$Condition;?> ">
                        </div>
                        <div class="col-lg-6">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="itemnote" placeholder="Note" value="<?php echo @$Note;?>" >
                        </div>
                      </div>
                      <div class="row">
                        <div class="col ">
                        <label for="exampleInputUsername1"></label>
                        <input type="text" class="form-control" id="#" name="deliveryname"placeholder="Delivery Name" value="<?php echo @$Delivery; ?>" >
                        </div>
                      </div>
                      <button type="submit" id="#" name="btnpoliceAssetUpdate" class="btn btn-primary mt-2 ">Submit</button>
                    <a href="viewPoliceAsset.php"  class="btn btn-danger">BACK</a>
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
  <!-- <script def src="validation.js"></script> -->

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

