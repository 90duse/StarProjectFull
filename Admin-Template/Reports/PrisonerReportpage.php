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
                        <h2>Generate Prisoner Report</h2>
                    </div>
                    <hr>
              </div>
              <div class="row">
                 <div class="col-lg-3">
                      <div class="row mt-4">
                            <div class="col-4"> 
                                <label for="#" class=" text text-secondary">Gobolka</label>
                            </div>
                            <div class="col">
                            
                            <select name="gobolka" id="selectregion" class="form-control" >
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
                                        <label for="selectcity" class=" text text-secondary">Magaalada</label>
                                    </div>
                                    <div class="col">
                                      <select name="selectcity" id="selectcity" class="form-control"onchange="choose(this.id,'selectstation')">
                                      <option value="Hargeisa">Hargeisa</option>
                                      <option value="Burco">Burco</option>
                                      <option value="Berbera">Berbera</option>
                                      <option value="Ceerigaabo">Ceerigaabo</option>
                                     </select>
                                    </div> 
                                </div> 
                            </div>
                            <!-- <div class="col-lg-3">
                           <div class="row mt-4">
                            <div class="col-4"> 
                                <label for="" class=" text text-secondary">Qaybta</label>
                            </div> -->
                            <!-- <div class="col">
                            
                            <select name="selectdepartment" id="department" class="form-control" onchange="dooroqaybta(this.id,'selecstation')">
                            <option value="" class="text text-center"> -- Dooro Qaybta--</option>
                                <option value="qaybta Bari">Qaybta Bari</option>
                                <option value="Qaybta Galbeed">Qaybta Galbeed</option>
                               
                               
                            </select>
                                    </div> 
                                </div> 
                            </div> -->
                            <div class="col-lg-3">
                              <div class="row mt-4">
                                <div class="col-4"> 
                                  <label for="" class=" text text-secondary">Saldhiga</label>
                                </div>
                                <div class="col">
                                  
                                <select name="selectstation" id="selectstation" class="form-control"> </select>
                           
                                </div> 
                              </div> 
                            </div>
                            <div class="col-lg-3 mt-4">
                               <input type="text" name="raadi" class="form-control" placeholder="Search Here">
                          </div>
                            <div class="col-lg-3">
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
              include '../config.php';
           
              if(isset($_POST['btnsearch'])){
                 $searchinput = $_POST['btnsearch'];

                 $city = $station = $searchinput = $raadi = $department = $gobolka =" " ;
                 $gobolka = $_POST['gobolka'];
                $city = $_POST['selectcity'];
                $station = $_POST['selectstation'];
               // $department = $_POST['selectdepartment'];
                $raadi = $_POST['raadi'];
          
               
          
                $query = "SELECT * FROM `prisonerrecord` WHERE `region` like '$gobolka' or `city` like '$city' or `station` like '$station' or `qaybta` like '$department'
                or `pri_crimeType` like '$raadi' or `pri_fullname` like '$raadi' or `pri_gender` like '$raadi' or `pri_age` like '$raadi'
                or `pri_sentenceperiod` like '$raadi'";
                $query_run = mysqli_query($con, $query);
                if($query_run){
                  if(empty($gobolka) && empty($city) && empty($raadi) && empty($department)){
                    echo '<div class="alert alert-danger" role="alert">
                    ooops! You don not choose anything to search
                   </div>';
                  
                  } else{
                  if(mysqli_num_rows($query_run) > 0){
                    echo '  
                    <thead class="#">
                    <h2 class="text text-center">POLICE ADMIN</h2>
              
                    <tr>
                    <th class="text text-dark">ID</th>
                    <th class="text text-dark">RegisterDate</th>
                    <th class="text text-dark">Region</th>
                    <th class="text text-dark">City</th>
                    <th class="text text-dark">Station</th>
                    <th class="text text-dark">Qaybta</th>
                    <th class="text text-dark">Crime Type</th>
                    <th class="text text-dark">Fullname</th>
                    <th class="text text-dark">Gender</th>
                    <th class="text text-dark">Age</th>
                    <th class="text text-dark">Sentence Time</th>
                  
                   
                      
                     

                  
                      
                      
                      
                      
                      
                    </tr>
                    
    
                  </thead> <hr>' ;
                   while( $row = mysqli_fetch_assoc($query_run)){

                    echo '<tbody>
                    <tr>
                    <td>'.$row['pri_id'].'</td>
                    <td>'.$row['pri_registerdate'].'</td>
                    <td>'.$row['region'].'</td>
                    <td>'.$row['city'].'</td>
                    <td>'.$row['station'].'</td>
                    <td>'.$row['qaybta'].'</td>
                    <td>'.$row['pri_crimeType'].'</td>
                    <td>'.$row['pri_fullname'].'</td>
                    <td>'.$row['pri_gender'].'</td>
                    <td>'.$row['pri_age'].'</td>
                    <td>'.$row['pri_sentenceperiod'].'</td>
                 >
                    

                      
                      
                     
                      
                    </tr>
              
                  </tbody>';
                    
               
                   }
                   
                  }
                   else{
                    echo '<h4>Sorry No Data is found</h4>';
                   }
                } }
                else{
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
    if(s1.value == 'Hargeisa'){
        var optionArray = ['Daloodho|daloodho', 'New Hargeisa|new hargeisa', '26kaJune|26kajune'];
    } 
    else if (s1.value == 'Burco'){
        var optionArray = ['Saldhiga Dhexe|saldhiga dhexe', 'Palasa|palasa'];
    }  else if (s1.value == 'Ceerigaabo'){
        var optionArray = ['Daallo|daallo', 'Shacabka|shacabka'];
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
<!-- Nested Select Function -->
<script>
    function dooroqaybta(b1,b2){
    var b1 = document.getElementById(b1);
    var b2 = document.getElementById(b2);

    b2.innerHTML = '';
    if(b1.value == 'Qaybta Bari'){
        var optionArray = ['Daloodho|daloodho', 'New Hargeisa|new hargeisa', 'Koodbuur|koodbuur'];
    } 
    else if (b1.value == 'Qaybta Galbeed'){
        var optionArray = ['26June|26june', 'Jigjigayar|jigjigayar'];
    }
    for(var option in optionArray){
    

        var pair = optionArray[option].split("|");
                    var newoption = document.createElement("option");

            newoption.value = pair[0];
                    newoption.innerHTML=pair[1];
                    b2.options.add(newoption);
    }

    }

</script>
</body>


</html>

