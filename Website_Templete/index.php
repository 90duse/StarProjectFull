<?php include 'config.php'; 

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data ;
   }
  
 // variable declatrion
 $fullname = $phone = $incident_type = $incident_date = $incident_info = "" ;
 $successMessage = 'New Record is being saved Successfully';
 $errorMessage = 'Can not be empty';
 $nameErr = $phoneError = $infoError = $typeError = $dateError = '';

        if($_SERVER["REQUEST_METHOD"] == "POST")
        { 
            $fullname =$_POST['fullname'];
            $phone = $_POST['phone'];
            $incident_type = $_POST['incidenttype'];
            $incident_date = $_POST['incidentdate'];
            $incident_info = $_POST['incidentinfo'];
            // Insertion query
            $sql =" INSERT INTO `Online_Incident_reporting` (`id`, `fullname`, `phone`, `Incident_type`, `Incident_date`, `Incident_info`) 
            VALUES ('', '$fullname', '$phone', '$incident_type', '$incident_date', '$incident_info')";
            if(mysqli_query($con, $sql)){
               
                echo '<div class="alert alert-primary" role="alert">
               Your Data is being Send Successfully
              </div>';
              echo '<script type="text/javascript/">
              window.onload =  function () alert("sometext");
              
              </script>';

            } else {
                echo myqli_error($con);
            }
       } 
       
  

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>POLICE WEBSITE</title>
        <link rel="icon" type="image/x-icon" href="assets/img/policeLogo.svg.png" />
        <!-- Bootstrap icons-->
        <link  href="css/bootstrap-icons.css" rel="stylesheet" />
      
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="../template/css/vertical-layout-light/style.css">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light  shadow-sm" id="mainNav">
            <div class="container px-5">
                <a class="navbar-brand fw-bold" href="#page-top">Police</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#features">Contact</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#download">About</a></li>
                    </ul>
                    <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                        <span class="d-flex align-items-center">
                            <i class="bi-chat-text-fill me-2"></i>
                            <span class="small">Report an Incident</span>
                        </span>
                    </button>
                </div>
            </div>
        </nav>
        <!-- Mashead header-->
        <header class="masthead">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <!-- Mashead text and app badges-->
                        <div class="mb-5 mb-lg-0 text-center text-lg-start">
                            <h1 class="display-1 lh-1 mb-3">Police-ku Waa Saaxiibka Dadweynaha.</h1>
                            <p class="lead fw-normal text-muted mb-5"> Wac 999 si aad u hesho caawimo sidoo kale waxa aad webiste kan noogu soo gudbin karta dhammaan dhacdooyinka u baahan in police ku soo faragashto</p>
                            <div class="d-flex flex-column flex-lg-row align-items-center">
                               <button class="btn btn-outline-success"  data-bs-toggle="modal" data-bs-target="#feedbackModal">File a Report</button>
                                <!-- <a href="#!"><img class="app-badge" src="assets/img/policeLogo.svg.png" alt="..." /></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    <img src="assets/img/policeLogo.svg.png" width="500" alt="image" class="mx-auto">
                    </div>
                </div>
            </div>
        </header>
      

        
      
     
        <!-- Footer-->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Developed by Abaarso Tech University Student with Bootstrap admin template</a></span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All rights reserved.</span>
          </div>
        </footer>
       
        <!-- Reporting Modal-->
        <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-primary-to-secondary p-4">
                        <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Report an Incident</h5>
                        <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body border-0 p-4">
                        <form id="contactForm" name="myform" onsubmit="return validateForm()" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" name="fullname" data-sb-validations="required" />
                                <label for="name">Full name</label>
                                <!-- <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div> -->
                                <span class="error">* <?php echo @$nameErr;?></span>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="phone" placeholder="(123) 456-7890" name="phone" data-sb-validations="required" />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                                  <!-- Incident type input-->
                             <div class="form-floating mb-3">
                                <input class="form-control" id="type" type="text" name="incidenttype"placeholder="Enter Type of Incident" data-sb-validations="required" />
                                <label for="type">Incident Type</label>
                                <div class="invalid-feedback" data-sb-feedback="type:required">ma madhnaan karto khaanadan.</div>
                             </div>
                                  <!-- Incident Date input-->
                                  <div class="form-floating mb-3">
                                <input class="form-control" id="date" type="date" placeholder="#"name="incidentdate" data-sb-validations="required" />
                                <label for="date">Incident Date</label>
                                <div class="invalid-feedback" data-sb-feedback="date:required">ma madhnaan karto khaanadan.</div>
                             </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" name="incidentinfo"placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Incident Information</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <!-- <div class="d-grid"><button class="btn btn-success rounded-pill btn-lg " id="submitButton" name="btnsend" type="submit">Submit</button></div> -->
                             <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary rounded-pill btn-lg " name="btnsend" id="submitButton" type="submit">Submit</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    <!-- Bootstrap core JS-->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="js/sb-forms-0.4.1.js"></script>

    <script def src="validation.js"></script>

    
</body>
</html>
