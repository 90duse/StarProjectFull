<?php //include 'config/session.php'; 
   
           
    
    
  
    
    ?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>POLICE MANAGEMENT SYSTEM</title>
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
<body>

    <!-- partial:partials/_navbar.php -->
    <?php  include "../partials/navbar.php";?>
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.php -->
      <?php   include "../partials/sidebar.php";?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <!-- over view section start here -->
          <form action="" method="POST">
        <div class="card">
        <div class="card-body">
           <div class="container">
              <div class="row">
                    <div class="col">
                        <h2>Generate a Case Report</h2>
                    </div>
                    <hr>
              </div>
              <div class="row">
                 <div class="col-lg-3">
                      <div class="row mt-4">
                            <div class="col-4"> 
                                <label for="" class=" text text-secondary">Gobolka</label>
                            </div>
                            <div class="col">
                            
                            <select name="gobolka" id="selectcity" class="form-control" onchange="choose(this.id,'selectstation')">
                            <option value="" class="text text-center"> -- Dooro Gobolka --</option>
                                <option value="Maroodijeex">Maroodijeex</option>
                                <option value="Togdheer">Togdheer</option>
                               
                            </select>
                                    </div> 
                                </div> 
                            </div>
                            <div class="col-lg-3">
                                <div class="row mt-4 ">
                                    <div class="col-4"> 
                                        <label for="city" class=" text text-secondary">Magaalada</label>
                                    </div>
                                    <div class="col">
                                      <select name="selectcity" id="selectstation" class="form-control"> </select>
                                    </div> 
                                </div> 
                            </div>
                            <div class="col-lg-3">
                           <div class="row mt-4">
                            <div class="col-4"> 
                                <label for="" class=" text text-secondary">Qaybta</label>
                            </div>
                            <div class="col">
                            
                            <select name="selectdepartment" id="" class="form-control" >
                            <option value="" class="text text-center"> -- Dooro Qaybta--</option>
                                <option value="Qaybta Bari">Qaybta Bari</option>
                                <option value="Qaybta Galbeed">Qaybta Galbeed</option>
                                <!-- <option value="Asset">Asset</option> -->
                               
                            </select>
                                    </div> 
                                </div> 
                            </div>
                            <div class="col-lg-3 mt-4">
                          
                           
                               <input type="search" name="raadi" class="form-control" placeholder="Search Here">
                      
                           
                          </div>

                            <div class="col-lg-3 mx-auto">
                                <div class="row mt-4 mx-auto">
                                    <button type="search" name="btnsearch" class="btn btn-primary"> Generate</button>
                                </div> 
                            </div>
                      </div> 
                  </div>
                </div>
              </div>
            </form> 
          
        
             
          </div>

          
            

          <div class="container fluid">
            
            <table class="table select-table " id="mytable">
            <?php
              include '../config.php';
              $userid = $username = $searchinput = " " ;
              if(isset($_GET['btnsearch'])){
                @$searchinput = $_GET['search'];
                // $searchID = $_GET['btnsearch'];
                $gobolka = $_POST['gobolka'];
                $city = $_POST['city'];
                $department = $_POST['selectdepartment']
                $raadi = $_POST['raadi'];
          
          
                $query = "SELECT * FROM `crimerecord_table` WHERE `region` like '$gobolka' or `city`like '$city' or `qaybta`like '$department' or 
               `gender` like '$raadi' or cr 
                like '%$searchinput%'";
                 
                $query_run = mysqli_query($con, $query);
                if($query_run){
                  if(mysqli_num_rows($query_run) > 0){
                    echo '  
                    <thead class="#">
                    <h2 class="text text-center">POLICE ADMIN</h2>
              
                    <tr>
                      <td>ID</td>
                      <td>Victam</td>
                      <td>Criminal</td>
                      <td>RegisterDate</td>
                      <td>Status</td>
                      <td>Ofiicer</td>
                      <td>Witness</td>
                      <td>CrimeType</td>
                    
                     

                  
                      
                      
                      
                      
                      
                    </tr>
                    
    
                  </thead> <hr>' ;
                   while( $row = mysqli_fetch_assoc($query_run)){

                    echo '<tbody>
                    <tr>
                      <td>'.$row['cr_id'].'</td>
                      <td>'.$row['cr_victam'].'</td>
                      <td>'.$row['cr_criminal'].'</td>
                      <td>'.$row['cr_registerDate'].'</td>
                      <td>'.$row['cr_status'].'</td>
                      <td>'.$row['cr_officer'].'</td>
                      <td>'.$row['cr_witness'].'</td>
                      <td>'.$row['cr_type'].'</td>
                     

                      
                      
                     
                      
                    </tr>
              
                  </tbody>';
                    
               
                   }
                   
                  }
                   else{
                    echo '<h4>Sorry No Data is found</h4>';
                   }
                } else{
                  echo myqli_error($con);
                }
                  
              }
             ?>
               
            </table>
           
          </div>

     
          <!-- over view section end here -->
        <!-- content-wrapper ends -->
     
       <!-- footer starts -->
        <footer class="mt-5">
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

<script type="text/javascript">
	function PrintPage() {
		window.print();
	}
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

