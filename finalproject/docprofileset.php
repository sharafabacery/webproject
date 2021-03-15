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
       
    }
    $_SESSION['docname']=$user_data['docname'];
    //update_profile()
    if($_SERVER['REQUEST_METHOD']=="POST"){

        //echo "ok";

        $user->docname=$_POST['docname'];
        $user->email=$_POST['email'];
        $user->password=$_POST['password'];
        $user->phonenumber=$_POST['phonenumber'];
        $user->speciallist=$_POST['speciallist'];
        if(!isset($_POST['image']))$user->profile_img="";
        else $user->profile_img=$_POST['image'];
        if(!isset($_POST['image']))$user->image_card="";
        else $user->image_card=$_POST['image_card'];
         $user->city=$_POST['city'];
         $user->shortdescription=$_POST['shortdescription'];
        
        $user->bio=$_POST['bio'];
        $user->area=$_POST['area'];
       print_r($user);
        $check=$user->complete_register_doctor();
         if($check){
            
            header("Location: /webproject/finalproject/docprofileset.php");
            
            
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
            <form action="docprofileset.php" method="post">
            <div class="col-md-7 col-lg-8 col-xl-9">
							<!-- Basic Information -->
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Basic Information</h4>
									<div class="row form-row">
										<div class="col-md-12">
											<div class="form-group">
												<div class="change-avatar">
													<div class="profile-img">
														<img src='<?php echo $user_data['image']?>' alt="User Image">
													</div>
													<div class="upload-img">
														<div class="change-photo-btn">
															<span><i class="fa fa-upload"></i> Upload Photo</span>
															<input type="text" class="form-control" value='<?php echo $user_data['image']?>' name="image">
												        </div>
                                                        <div class="profile-img">
														<img src='<?php echo $user_data['image_card']?>' alt="User Image">
													</div>
													<div class="upload-img">
														<div class="change-photo-btn">
															<span><i class="fa fa-upload"></i> Upload image_card</span>
															<input type="text" class="form-control" value='<?php echo $user_data['image_card']?>' name="image_card">
												        </div>
                                                        
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Username <span class="text-danger">*</span></label>
												<input type="text" class="form-control" value='<?php echo $user_data['docname']?>' name="docname">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Email <span class="text-danger">*</span></label>
												<input type="email" class="form-control" value='<?php echo $user_data['email']?>' name="email">
											</div>
										</div>
                                        <div class="col-md-6">
											<div class="form-group">
												<label>phonenumber <span class="text-danger">*</span></label>
												<input type="text" class="form-control" value='<?php echo $user_data['phonenumber']?>' name="phonenumber">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>password<span class="text-danger">*</span></label>
												<input type="text" class="form-control" value='<?php echo $user_data['password']?>' name="password">
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Basic Information -->
							
							<!-- About Me -->
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">About Me</h4>
									<div class="form-group mb-0">
										<label>Biography</label>
										<textarea class="form-control" rows="5" value='' name="bio"><?php echo $user_data['bio']?></textarea>
									</div>
								</div>
                                <div class="card-body">
									<h4 class="card-title">speciallist</h4>
									<div class="form-group mb-0">
										<label>speciallist</label>
										<input class="form-control" type="text" value='<?php echo $user_data['speciallist']?>' name="speciallist"></input>
									</div>
								</div>
                                <div class="card-body">
									<h4 class="card-title">shortdescription</h4>
									<div class="form-group mb-0">
										<label>shortdescription</label>
										<input class="form-control" type="text" value='<?php echo $user_data['shortdescription']?>' name="shortdescription"></input>
									</div>
								</div>
							</div>

            </form>
            
<div class="card contact-card">
    <div class="card-body">
        <h4 class="card-title">Contact Details</h4>
        <div class="row form-row">
            
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">City</label>
                    <input type="text" class="form-control" value='<?php echo $user_data['city']?>' name="city">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">area</label>
                    <input type="text" class="form-control" value='<?php echo $user_data['area']?>' name="area">
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- /Contact Details -->

<!-- Pricing -->
<!-- <div class="card">
    <div class="card-body">
        <h4 class="card-title">Pricing</h4>
        
        <div class="form-group mb-0">
            <div id="pricing_select">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="price_free" name="rating_option" class="custom-control-input" value="price_free" checked>
                    <label class="custom-control-label" for="price_free">Free</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="price_custom" name="rating_option" value="custom_price" class="custom-control-input">
                    <label class="custom-control-label" for="price_custom">Custom Price (per hour)</label>
                </div>
            </div>

        </div> -->
        
        <div class="row custom_price_cont" id="custom_price_cont" style="display: none;">
            <div class="col-md-4">
                <input type="text" class="form-control" id="custom_rating_input" name="custom_rating_count" value="" placeholder="20">
                <small class="form-text text-muted">Custom price you can add</small>
            </div>
        </div>
        
    </div>
</div>

<!-- /Pricing -->
<div class="submit-section submit-btn-bottom">
    <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
</div>
                            </div>
            </div>
        </div>
    </div>

<br>
<?php require_once("./header_footer/footer.php")?>