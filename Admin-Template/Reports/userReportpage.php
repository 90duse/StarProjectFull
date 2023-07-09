<?php 
 // include 'session.php';
  include '../config.php';



 ?>
<!DOCTYPE html>
 <html lang="en">
 <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>POLICE HQ </title>
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
     <!-- data table plugins -->
  <link rel="stylesheet" href="../css/dataTables.bootstrap5.min.css">
  <link href="../DataTables/DataTables-1.13.4/css/datatables.bootstrap5.min.css" rel="stylesheet"/>
  <!-- <link href="../DataTables/DataTables-1.13.4/css/bootstrap.min.css" rel="stylesheet"/> -->
  <link rel="stylesheet" href="../DataTables/Buttons-2.3.6/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="../DataTables/DataTables-1.13.4/css/jquery.dataTables.min.css">
 
</head>
<body >

          <!-- partial:partials/_navbar.html -->
         <?php  include "../partials/navbar.php";?>
          <!-- partial -->
          <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <?php  include "../partials/settings-panel.php";?>
            <!-- partial:partials/_sidebar.html -->
          <?php   include "../partials/sidebar.php";?>
            <!-- partial -->

     
      <div class="main-panel">
        <div class="content-wrapper">

     

     <form action="" method="POST">
        <div class="card">
        <div class="card-body">
           <div class="container">
              <div class="row">
                    <div class="col">
                        <h2>Generate Station Report</h2>
                    </div>
                    <hr>
              </div>
              <div class="row">
                 <div class="col-lg-4">
                      <div class="row mt-4">
                            <div class="col-4"> 
                                <label for="createdDate" class=" text text-secondary">Gobolka</label>
                            </div>
                            <div class="col">
                            
                            <select name="selectgobol" id="selectgobol" class="form-control" onchange="choose(this.id,'selectcity')">
                            <option value="" class="text text-center"> -- Dooro Gobol --</option>
                                <option value="Maroodijeex">Maroodijeex</option>
                                <option value="Togdheer">Togdheer</option>
                               
                            </select>
                            </div> 
                        </div> 
                    </div>
                    <div class="col-lg-4">
                        <div class="row mt-4 ">
                            <div class="col-4"> 
                                <label for="selectcity" class=" text text-secondary">Magaalada</label>
                            </div>
                            <div class="col">
                              <select name="selectcity" id="selectcity" class="form-control"> </select>
                            </div> 
                        </div> 
                    </div>
                    <div class="col-lg-4">
                        <div class="row mt-4">
                            <button type="search" name="btnsearch" class="btn btn-outline-primary"> Generate</button>
                        </div> 
                    </div>
              </div> 
           </div>
        </div>
       </div>
    </form>  
   

       <div class="container fluid">
            
            <table class="table select-table " id="mytable">
            <?php
             
             $gobolka = $city = $department = $searchinput = " " ;
              if(isset($_POST['btnsearch'])){
                $searchinput = $_POST['btnsearch'];

               

                $gobolka = $_POST['selectgobol'];
                @$city = $_POST['selectcity'];
                //$department = $_POST['qaybta'];
    
          
                $query = "SELECT * FROM `panel_users_table` WHERE `region` like '$gobolka' or `City` like '$city' ";
                // --  $query = "SELECT * FROM `panel_users_table` WHERE  `user_ID` like '$searchinput' or `user_Name` like '$searchinput' or 
                // -- `created_Date` like '$searchinput' or `department` like '$searchinput'";
                 
                $query_run = mysqli_query($con, $query);
                if($query_run){
                  if(empty($gobolka) && empty($city)){
                    echo 'Your Search is incomplete';
                  }
                  else{
                  if(mysqli_num_rows($query_run) > 0){
                    echo '  
                    <thead class="#">
                    
              
                    <tr>
                      <td>ID</td>
                      <td>Name</td>
                      <td>Region</td>
                      <td>City</td>
                      <td>Department</td>
                      <td>Created Date</td>
                      
                    </tr>
                    
    
                  </thead> <hr>' ;
                   while( $row = mysqli_fetch_assoc($query_run)){

                    echo '<tbody>
                    <tr>
                      <td>'.$row['user_ID'].'</td>
                      <td>'.$row['user_Name'].'</td>
                      <td>'.$row['region'].'</td>
                      <td>'.$row['City'].'</td>
                      <td>'.$row['department'].'</td>
                      <td>'.$row['created_Date'].'</td>
                      
                    </tr>
              
                  </tbody>';
                    
               
                   }
                   
                  }
                   else{
                    echo '<h4>Sorry No Data is found</h4>';
                   }
                }
              }
                 else{
                  echo myqli_error($con);
                }
                  
              }
            
             ?>
               
            </table>
           
          </div>

            

        

             
            
            

          </div> <!-- content-wrapper ends -->

       
      </div> <!-- main-panel ends -->
    </div> <!-- page-body-wrapper ends -->
  </div><!-- container-scroller -->

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

    <!-- Data table plugins -->
 <script src="../DataTables/jQuery-3.6.0/jquery-3.5.1.js"></script>
  <script src="../DataTables/DataTables-1.13.4/js/jquery.dataTables.min.js"></script>
  <script  src="../DataTables/DataTables-1.13.4/js/dataTables.bootstrap5.min.js"></script>
  <script  src="../DataTables/Buttons-2.3.6/js/dataTables.buttons.min.js"></script>
  <script  src="../DataTables/JSZip-2.5.0/jszip.min.js"></script>
  <script  src="../DataTables/pdfmake-0.2.7/pdfmake.min.js"></script>
  <script  src="../DataTables/pdfmake-0.2.7/vfs_fonts.js"></script>
  <script src="../js/buttons.html5.min.js"></script>
  <script src="../js/buttons.print.min.js"></script> 


  <script> 
$(document).ready(function () {
    $('#mytable').DataTable({
      
      dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
});
</script>
<!-- Nested Select Function -->
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

