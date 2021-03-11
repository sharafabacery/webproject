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
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Patient  Profile</li>
                            </ol>
                        </nav>
                        <h2 class="breadcrumb-title">Patient Profile</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container">

                <div class="card">
                    <div class="card-body">
                        <div class="doctor-widget">
                            <div class="doc-info-left">
                                <div class="doctor-img">
                                    <img src="./img/patients/patient4.jpg   " class="img-fluid" alt="User Image">
                                </div>
                                <div class="doc-info-cont">
                                    <h4 class="doc-name">Salma Mahmoud </h4>
                                        <div class="clinic-details">
                                        <p class="doc-location"><i class="fas fa-map-marker-alt"></i> Alexandria , Egypt  </p>
                            
                          
                                </div>
                            </div>
                            <div class="doc-info-right">
                      
                                <div class="doctor-action">
                               
                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body pt-0">
                    
                
                        <nav class="user-tabs mb-4">
                            <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#doc_overview" data-toggle="tab">Overview</a>
                                </li>
         
                            </ul>
                        </nav>
                   
                        <div class="tab-content pt-0">
                        
                            <div role="tabpanel" id="doc_overview" class="tab-pane fade show active">
                                <div class="row">
                                    <div class="col-md-12 col-lg-9">
                                        <div class="widget about-widget">
                                            <h4 class="widget-title">About Me</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                             

                                    </div>
                                </div>
                            </div>
                    
                                
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