<?php require_once("./header_footer/header.php")?>
<?php require_once("../project/config/database.php")?>
<?php require_once("../project/classes/Userclass.php")?>
<?php require_once("../project/classes/doctorclass.php")?>
<?php
if(isset($_GET['doc_id'])&&isset($_GET['check'])){
    $db=new Database();
	$user=new Users($db->connect());
	$doc=new Doctors($db->connect());
	$doc->id=$_GET['doc_id'];
    $getDoc=$doc->show_profile();
    $user->sid=$_GET['check'];
    $getApp=$user->show_appotiment();


}


?>
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
                        
                       
                                             
                        ?> </li>
                </ul>
            </nav>
        </header>
        <div class="breadcrumb-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-12 col-12">
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Booking</li>
                            </ol>
                        </nav>
                        <h2 class="breadcrumb-title">Booking</h2>
                    </div>
                </div>
            </div>
        </div>
     
        <div class="content success-page-cont">
            <div class="container-fluid">
            
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                    
                      
                        <div class="card success-card">
                            <div class="card-body">
                                <div class="success-cont">
                                    <i class="fas fa-check"></i>
                                    <h3>Appointment booked Successfully!</h3>
                                    <p>Appointment booked with <strong><?php echo $getDoc['docname'];?> </strong><br> on <strong><?php echo $getApp['day']."     ".$getApp['from_app'];?> </strong></p>
                                 
                                </div>
                            </div>
                        </div>
                     
                        
                    </div>
                </div>
                
            </div>
        </div>
        <br>
        <?php require_once("./header_footer/footer.php")?>