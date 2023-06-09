<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <!-- <li class="nav-item nav-category">UI Elements</li> -->

          <!-- <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">UI Elements</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">

                <li class="nav-item"> <a class="nav-link" href="../template/CrimeRecord.php">Crime Record</a>
                
               </li>
                <li class="nav-item"> <a class="nav-link" href="../template/PrisoneRcord.php">Prison Record </a></li>
                <li class="nav-item"> <a class="nav-link" href="../template/PoliceAsset.php">Police Asset</a></li>
                 <li class="nav-item"> <a class="nav-link" href="../template/PoliceRecord.php">Police Record</a></li>
                <li class="nav-item"> <a class="nav-link" href="../template/ComplaintForm.php">complaint form</a></li>
              </ul>
            </div>
          </li> -->
        
  
          <li class="nav-item nav-category">Forms</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-pen-plus"></i>
              <span class="menu-title">Case Record</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="../config/CrimeRecord.php">Add New</a></li>
                <li class="nav-item"><a class="nav-link" href="../config/viewCrime.php">View Cases</a></li>
                <li class="nav-item"><a class="nav-link" href="../config/searchCaseRecord.php">Search</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <!-- <a class="nav-link" data-bs-toggle="collapse" href="#op" aria-expanded="false" aria-controls="form-elements"> -->
            
              <a href="../config/optable.php" type ="button" class="btn btn-light  nav-link"><span>OP</span></a> 
              
            </a>
            <div class="collapse" id="op">
              <ul class="nav flex-column sub-menu">
             
                <!-- <li class="nav-item"><a class="nav-link" href="../config/OP.php">Add New</a></li>
                <li class="nav-item"><a class="nav-link" href="../config/viewOP.php">View Cases</a></li> -->
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="menu-icon mdi mdi-podium"></i>
              <span class="menu-title">Police Record</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../config/PoliceRecord.php">Add New</a></li>
                <li class="nav-item"><a class="nav-link" href="../config/viewPoliceRecord.php">View PRC</a></li>
                <li class="nav-item"><a class="nav-link" href="../config/searchPoliceRecord.php">Search</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="menu-icon mdi mdi-account"></i>
              <span class="menu-title">Prisoner Reocrd</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../config/PrisoneRcord.php">Add New</a></li>
                <li class="nav-item"><a class="nav-link" href="../config/viewPrisonerRecord.php">View Prisoners</a></li>
                <li class="nav-item"><a class="nav-link" href="../config/searchPrisonerRecord.php">Search</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="menu-icon mdi mdi-account-group"></i>
              <span class="menu-title">Complaint Record</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../config/ComplaintForm.php">Add New</a></li>
                <li class="nav-item"><a class="nav-link" href="../config/viewComplainment.php">View Complainment</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#incidents" aria-expanded="false" aria-controls="icons">
              <i class="menu-icon mdi mdi-account-group"></i>
              <span class="menu-title">Online Incident Reporting</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="incidents">
              <ul class="nav flex-column sub-menu">
                <!-- <li class="nav-item"> <a class="nav-link" href="../config/ComplaintForm.php">Add New</a></li> -->
                <li class="nav-item"><a class="nav-link" href="../config/viewOnlineReports.php">View Incidents</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#iconss" aria-expanded="false" aria-controls="icons">
              <i class="menu-icon mdi mdi-home-analytics"></i>
              <span class="menu-title">Police Asset Record</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="iconss">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../config/PoliceAsset.php">Add New</a></li>
                <li class="nav-item"><a class="nav-link" href="../config/viewPoliceAsset.php">View Police Asset</a></li>
              </ul>
            </div>
          </li>

          <!-- <li class="nav-item nav-category">pages</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
              </ul>
            </div>
          </li> -->
         
          <li class="nav-item nav-category">Reports</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#report" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">Reports</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="report">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../config/reportpage.php">Reports </a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>