<?php require_once("./header_footer/header.php")?>
<?php require_once("./header_footer/checkrorsessionsdoc.php")?>
<?php require_once("../project/config/database.php")?>
<?php require_once("../project/classes/doctorclass.php")?>
<?php
    $db=new Database();
    $user=new Doctors($db->connect());
    $user->id=$_SESSION['id'];
    $user_data=$user->show_profile();
    if ($user_data==false) {
       
    }else{
        $user->id=$_SESSION['id'];
        $patient=$user->get_all_reservation_doctor();
        
    }
    
    

    ?>
<body>
    
            <!-- Header -->
            <header class="header">
                <nav class="navbar navbar-expand-lg header-nav">
                    <div class="navbar-header">
                        <a id="mobile_btn" href="javascript:void(0);">
                            <span class="bar-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </a>
                        <a href="index.php" class="navbar-brand logo">
                            <img src="./img/logo1.jpg" width="80px" class="img-fluid" alt="Logo">
                        </a>
                    </div>
                    <div class="main-menu-wrapper">
                        <div class="menu-header">
                            <a href="index.php" class="menu-logo">
                                <img src="./img/logo1.jpg" class="img-fluid" alt="Logo">
                            </a>
                            <a id="menu_close" class="menu-close" href="javascript:void(0);">
                                <i class="fas fa-times"></i>
                            </a>
                        </div>
                                
                    <ul class="nav header-navbar-rht">
                        <li class="nav-item contact-item">
                            <div class="header-contact-img">
                                <i class="far fa-hospital"></i>							
                            </div>
                            <div class="header-contact-detail">
                                <p class="contact-header">Contact</p>
                                <p class="contact-info-header"> +19566</p>
                            </div>
                        </li>
                    
                        <li class="nav-item">
                        <?php
                        if(isset($_SESSION['value'])){
                            if($_SESSION['value']==1){
                                if(isset($_SESSION['username'])){
                                    if($_SESSION['username']==""){
                                        echo " <a class='nav-link header-login' href='login.php'>login / Signup </a>";
                                    }else{
                                        echo " <a class='nav-link header-login' href='patientprofile.php'>".$_SESSION['username']. "</a>";
                                        echo " <a class='nav-link header-login' href='logout.php'>logout</a>";
                                    }
                                      
                                }
                            }elseif($_SESSION['value']==0){
                                if (isset($_SESSION['docname'])) {
                                    if($_SESSION['docname']==""){
                                        echo " <a class='nav-link header-login' href='login.php'>login / Signup </a>";
                                    }else{
                                        echo " <a class='nav-link header-login' href='dash.php'>".$_SESSION['docname']. "</a>";
                                        echo " <a class='nav-link header-login' href='logout.php'>logout</a>";
                                    }
                                }
                            }
                            else{
                                echo " <a class='nav-link header-login' href='login.php'>login / Signup </a>";
                                    
                            }
                        }
                        
                       
                                             
                        ?></li>
                    </ul>
                </nav>
            </header>
            <div class="breadcrumb-bar">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-12">
                            <nav aria-label="breadcrumb" class="page-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Breadcrumb -->
     <!-- Page Content -->
     <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
                
                    <!-- Profile Sidebar -->
                    <div class="profile-sidebar">
                        <div class="widget-profile pro-widget-content">
                            <div class="profile-info-widget">
                                <a href="#" class="booking-doc-img">
                                    <img src='<?php echo $user_data['image'];?>' alt="User Image">
                                </a>
                                <div class="profile-det-info">
                                    <h3><?php echo $user_data['docname'];?> </h3>
                                    
                                    <div class="patient-details">
                                        <h5 class="mb-0"><?php echo $user_data['speciallist'];?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-widget">
                            <nav class="dashboard-menu">
                                <ul>
                                    <li>
                                        <a href="dash.php">
                                            <i class="fas fa-columns"></i>
                                            <span>Dashboard</span>
                                        </a>
                                    </li>
                                    <li>
                                    <li>
                                        <a href="">
                                            <i class="fas fa-hourglass-start"></i>
                                            <span>Schedule Timings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="docprofileset.php">
                                            <i class="fas fa-user-cog"></i>
                                            <span>Profile Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="clinic.php">
                                            <i class="fas fa-user-cog"></i>
                                            <span>clinic</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="addappotiment.php">
                                            <i class="fas fa-user-cog"></i>
                                            <span>addappotiment</span>
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="">
                                            <i class="fas fa-lock"></i>
                                            <span>Change Password</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="logout.php">
                                            <i class="fas fa-sign-out-alt"></i>
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- /Profile Sidebar -->
                    
                </div>
                <div class="col-md-7 col-lg-8 col-xl-9">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card dash-card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-4">
                                            <div class="dash-widget dct-border-rht">
                                                <div class="circle-bar circle-bar1">
                                                    <div class="circle-graph1" data-percent="75">
                                                        <img src="./img/icon-01.png" class="img-fluid" alt="patient">
                                                    </div>
                                                </div>
                                                <div class="dash-widget-info">
                                                    <h6>Total Patient</h6>
                                                    <h3><?php echo mysqli_num_rows($patient);?></h3>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        
                                     
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="mb-4">Patient Appoinment</h4>
                            <div class="appointment-tab">
                            
                                <!-- Appointment Tab -->
                                <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#upcoming-appointments" data-toggle="tab">my patients</a>
                                    </li>
                                </ul>
                                <!-- /Appointment Tab -->
                                
                                <div class="tab-content">
                                
                                    <!-- Upcoming Appointment Tab -->
                                    <div class="tab-pane show active" id="upcoming-appointments">
                                        <div class="card card-table mb-0">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-center mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>Patient Name</th>
                                                                <th>dateofbirth</th>
                                                                <th>phonenumber</th>
                                                                <th>Blood_Group</th>
                                                                <th>day/time</th>
                                                                
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        while($data=$patient->fetch_assoc()){
                                                            echo"<tr>";
                                                            echo    "<td>";
                                                             echo       "<h2 class='table-avatar'>";
                                                             $link="patient-profile.php?user_id=".$data["user_id"];


                                                             echo           "<a href=".$link." class='avatar avatar-sm mr-2'><img class='avatar-img rounded-circle'src='./img/patients/160Hf.png' alt='User Image'></a>";
                                                                echo        "<a href=".$link.">".$data['username']."</a>";
                                                                    echo "</h2>";
                                                                echo"</td>";
                                                                echo"<td> ".$data['dateofbirth']."  </td>";
                                                                echo "  <td>".$data['phonenumber']."</td>";
                                                                echo "   <td>".$data['Blood_Group']."</</td>";
                                                                echo "  <td>".$data['time']."</span></td>";
                                                                echo "  <td class='text-right'>";
                                                                echo "    <div class='table-action'>";
                                                                    echo "     <a href='javascript:void(0);' class='btn btn-sm bg-info-light'>";
                                                                        echo "<i class='far fa-eye'></i> View";
                                                                            echo  "</a>";
                                                                        echo "  </div>";
                                                                    echo "  </td>";
                                                            echo "</tr>";
                                                        }
                                                            
                                                        
                                                        
                                                        ?>
                                   
                                                            
                                                            
                                                            
                                                            
                                                            
                                                        </tbody>
                                                    </table>		
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Upcoming Appointment Tab -->
                               
                                    <!-- Today Appointment Tab -->
                                    <div class="tab-pane" id="today-appointments">
                                        <div class="card card-table mb-0">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-center mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>Patient Name</th>
                                                                <th>Appt Date</th>
                                                                <th>Purpose</th>
                                                                <th>Type</th>
                                                                <th class="text-center">Paid Amount</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="patient-profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="./img/patients/patient6.jpg" alt="User Image"></a>
                                                                        <a href="patient-profile.html">Elsie Gilley <span>#PT0006</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>14 Nov 2019 <span class="d-block text-info">6.00 PM</span></td>
                                                                <td>Fever</td>
                                                                <td>Old Patient</td>
                                                                <td class="text-center">$300</td>
                                                                <td class="text-right">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                        
                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                            <i class="fas fa-check"></i> Accept
                                                                        </a>
                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                            <i class="fas fa-times"></i> Cancel
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                           
                                                    
                                                           
                                                            
                                                        </tbody>
                                                    </table>		
                                                </div>	
                                            </div>	
                                        </div>	
                                    </div>
                                    <!-- /Today Appointment Tab -->
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>		
    <br>
    <?php require_once("./header_footer/footer.php")?>