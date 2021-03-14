<?php require_once("./header_footer/header.php")?>
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
                            <a class="nav-link header-login" href="login.html">login / Signup </a>
                        </li>
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
                                <img src="./img/doctors/doctor-thumb-02.jpg" alt="User Image">
                            </a>
                            <div class="profile-det-info">
                                <h3>Dr. Ahmed Nagy </h3>
                                
                                <div class="patient-details">
                                    <h5 class="mb-0">Maxillofacial Surgery</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-widget">
                        <nav class="dashboard-menu">
                            <ul>
                                <li>
                                    <a href="doctor-dashboard.html">
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
                                    <a href="doctor-profile-settings.html">
                                        <i class="fas fa-user-cog"></i>
                                        <span>Profile Settings</span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="doctor-change-password.html">
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
														<img src="./img/doctors/doctor-thumb-02.jpg" alt="User Image">
													</div>
													<div class="upload-img">
														<div class="change-photo-btn">
															<span><i class="fa fa-upload"></i> Upload Photo</span>
															<input type="file" class="upload">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Username <span class="text-danger">*</span></label>
												<input type="text" class="form-control" readonly>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Email <span class="text-danger">*</span></label>
												<input type="email" class="form-control" readonly>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>First Name <span class="text-danger">*</span></label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Last Name <span class="text-danger">*</span></label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Phone Number</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Gender</label>
												<select class="form-control select">
													<option>Select</option>
													<option>Male</option>
													<option>Female</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group mb-0">
												<label>Date of Birth</label>
												<input type="date" class="form-control">
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
										<textarea class="form-control" rows="5"></textarea>
									</div>
								</div>
							</div>

<div class="card contact-card">
    <div class="card-body">
        <h4 class="card-title">Contact Details</h4>
        <div class="row form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Address Line 1</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">City</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Country</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Postal Code</label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Contact Details -->

<!-- Pricing -->
<div class="card">
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

        </div>
        
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