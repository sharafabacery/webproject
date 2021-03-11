<?php require_once("./header_footer/header.php")?>
<body>
    <div class="main-wrapper">
    
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
                    <a href="index-2.html" class="navbar-brand logo">
                        <img src="./img/logo1.jpg" width="80px" class="img-fluid" alt="Logo">
                    </a>
                </div>
                <div class="main-menu-wrapper">
                    <div class="menu-header">
                        <a href="index-2.html" class="menu-logo">
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
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
                            </ol>
                        </nav>
                        <h2 class="breadcrumb-title">Profile Settings</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                
                    <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
                        <div class="profile-sidebar">
                            <div class="widget-profile pro-widget-content">
                                <div class="profile-info-widget">
                                    <a href="#" class="booking-doc-img">
                                        <img src="./img/patients/patient4.jpg" alt="User Image">
                                    </a>
                                    <div class="profile-det-info">
                                        <h3>Salma Mahmoud</h3>
                                        <div class="patient-details">
                                            <h5><i class="fas fa-birthday-cake"></i> 22 June 1990 30</h5>
                                            <h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> Alexandria , Egypt </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-widget">
                                <nav class="dashboard-menu">
                                    <ul>
                                       
                                
                                        <li class="active">
                                            <a href="profile-settings.html">
                                                <i class="fas fa-user-cog"></i>
                                                <span>Profile Settings</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="./change-pass.html">
                                                <i class="fas fa-lock"></i>
                                                <span>Change Password</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="./index.html">
                                                <i class="fas fa-sign-out-alt"></i>
                                                <span>Logout</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                        </div>
                    </div>
                  
                    
                    <div class="col-md-7 col-lg-8 col-xl-9">
                        <div class="card">
                            <div class="card-body">
                                
                               
                                <form>
                                    <div class="row form-row">
                                        <div class="col-12 col-md-12">
                                            <div class="form-group">
                                                <div class="change-avatar">
                                                    <div class="profile-img">
                                                        <img src="./img/patients/patient4.jpg" alt="User Image">
                                                    </div>
                                                    <div class="upload-img">
                                                        <div class="change-photo-btn">
                                                            <span><i class="fa fa-upload"></i> Upload Photo</span>
                                                            <input type="file" class="upload">
                                                        </div>
                                                     
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control"placeholder="Salma">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control"placeholder="Mahmoud">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label>Date of Birth</label>
                                                <div class="cal-icon">
                                                    <input type="text" class="form-control datetimepicker" value="22-06-1990">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label>Blood Group</label>
                                                <select class="form-control select">
                                                    <option>A-</option>
                                                    <option>A+</option>
                                                    <option>B-</option>
                                                    <option>B+</option>
                                                    <option>AB-</option>
                                                    <option>AB+</option>
                                                    <option>O-</option>
                                                    <option>O+</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label>Email ID</label>
                                                <input type="email" class="form-control" placeholder="salma@example.com">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label>Mobile</label>
                                                <input type="text" placeholder="+20 01006321208" class="form-control">
                                            </div>
                                        </div>
                                     
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" class="form-control" placeholder="Egypt">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" class="form-control" placeholder="Alexnadria">
                                            </div>
                                        </div>
                              
                                    </div>
                                    <div class="submit-section">
                                        <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                                    </div>
                                </form>
                          
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <br>
        <?php require_once("./header_footer/footer.php")?>