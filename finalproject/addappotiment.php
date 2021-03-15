<?php require_once("./header_footer/header.php")?>
<?php require_once("./header_footer/checkrorsessionsdoc.php")?>
<?php require_once("../project/config/database.php")?>
<?php require_once("../project/classes/doctorclass.php")?>
<?php
    $db=new Database();
    $user=new Doctors($db->connect());
    $user->id=$_SESSION['id'];
    $user_data=$user->show_profile();
    $all_appotiment=$user->get_all_appotiment();
    if ($user_data==false) {
       
    }else if($all_appotiment==false){

    }
    print_r($all_appotiment);
    $_SESSION['docname']=$user_data['docname'];
    //update_profile()
    if($_SERVER['REQUEST_METHOD']=="POST"){

        
        $user->day=$_POST['day'];
        $user->from_app=$_POST['from_app'];
        $user->to_app=$_POST['to_app'];
     
       print_r($user);
        $check=$user->add_appotiment();
         if($check){
            
            header("Location: /webproject/finalproject/addappotiment.php");
            
            
         }else{
             echo "cant updated";
         }
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
                        
                       
                                             
                        ?>  </li>
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
                            <h2 class="breadcrumb-title">Doctor profile</h2>
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
                                <img src='<?php echo $user_data['image']?>' alt="User Image">
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
                                    <a href="schedule-timings.html">
                                        <i class="fas fa-hourglass-start"></i>
                                        <span>Schedule Timings</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="doctorprofileset.php">
                                        <i class="fas fa-user-cog"></i>
                                        <span>Profile Settings</span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="doctor-change-password.php">
                                        <i class="fas fa-lock"></i>
                                        <span>Change Password</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php">
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
            <form action="addappotiment.php" method="post">
            <div class="col-md-7 col-lg-8 col-xl-9">
							<!-- Basic Information -->
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Basic Information</h4>
									<div class="row form-row">
										
										<div class="col-md-6">
											<div class="form-group">
												<label>day <span class="text-danger">*</span></label>
												<input type="text" class="form-control"  name="day">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>from_app <span class="text-danger">*</span></label>
												<input type="text" class="form-control"  name="from_app">
											</div>
										</div>
                                        <div class="col-md-6">
											<div class="form-group">
												<label>to_app <span class="text-danger">*</span></label>
												<input type="text" class="form-control"  name="to_app">
											</div>
										</div>
                                        
									</div>
								</div>
							</div>
							<!-- /Basic Information -->

            
            


        
    </div>
</div>

<!-- /Pricing -->
<div class="submit-section submit-btn-bottom">
    <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
</div></form>
                            </div>
            </div>
        </div>
    </div>

<br>
<?php require_once("./header_footer/footer.php")?>