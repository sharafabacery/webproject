<?php require_once("./header_footer/header.php")?>
<?php require_once('./header_footer/checkrorsessions.php')?>
<?php require_once("../project/config/database.php")?>
<?php require_once("../project/classes/Userclass.php")?>
<?php
    $db=new Database();
    $user=new Users($db->connect());
    $user->id=$_SESSION['id'];
    $user_data=$user->show_profile();
    if ($user_data==false) {
       
    }
    //update_profile()
    if($_SERVER['REQUEST_METHOD']=="POST"){

        //echo "ok";

        $user->email=$_POST['email'];
        $user->username=$_POST['username'];
        $user->phonenumber=$_POST['phonenumber'];
        $user->dateofbirth=$_POST['dateofbirth'];
        $user->Country_city=$_POST['Country_city'];
        $user->Blood_Group=$_POST['Blood_Group'];
         $check=$user->update_profile();
         if($check){
            
            header("Location: /webproject/finalproject/profilepatientsett.php");
            
            
         }else{
             echo "cant updated";
         }
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
                
                    <?php
                        if(isset($_SESSION['username'])){
                            if($_SESSION['username']==""){
                                echo " <a class='nav-link header-login' href='login.php'>login / Signup </a>";
                            }else{
                                echo " <a class='nav-link header-login' href='patientprofile.php'>".$_SESSION['username']. "</a>";
                                echo " <a class='nav-link header-login' href='logout.php'>logout</a>";
                            }
                           
                        }
                        ?>
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
                                        <img src="./img/patients/user.jpg" alt="User Image">
                                    </a>
                                    <div class="profile-det-info">
                                        <h3><?php echo $user_data['username']?></h3>
                                        <div class="patient-details">
                                            <h5><i class="fas fa-birthday-cake"></i> <?php echo $user_data['dateofbirth']?></h5>
                                            <h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> <?php echo $user_data['Country_city']?> </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-widget">
                                <nav class="dashboard-menu">
                                    <ul>
                                       
                                
                                        <li class="active">
                                            <a href="patientprofile.php">
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
                                            <a href="logout.php">
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
                                
                               
                                <form action='profilepatientsett.php' method="POST">
                                    <div class="row form-row">
                                        <div class="col-12 col-md-12">
                                            <div class="form-group">
                                                <div class="change-avatar">
                                                    <div class="profile-img">
                                                        <img src="./img/patients/user.jpg" alt="User Image">
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label>Uername</label>
                                                <input type="text" class="form-control" value='<?php echo $user_data['username']?>' name="username">
                                            </div>
                                        </div>
                                       
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label>Date of Birth</label>
                                                <div class="cal-icon">
                                                    <input type="text" class="form-control datetimepicker" value='<?php echo $user_data['dateofbirth']?>' name="dateofbirth">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label>Blood Group</label>
                                                <select class="form-control select" name="Blood_Group" >
                                                <option value='<?php echo $user_data['Blood_Group']?>'><?php echo $user_data['Blood_Group']?></option>
                                                    <option value="A-">A-</option>
                                                    <option value="A+">A+</option>
                                                    <option value="B-">B-</option>
                                                    <option value="B+">B+</option>
                                                    <option value="AB-">AB-</option>
                                                    <option value="AB+">AB+</option>
                                                    <option value="O-">O-</option>
                                                    <option value="O+">O+</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label>Email ID</label>
                                                <input type="email" class="form-control" value='<?php echo $user_data['email']?>' name='email'>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label>Mobile</label>
                                                <input type="text" value='<?php echo $user_data['phonenumber']?>' class="form-control" name="phonenumber">
                                            </div>
                                        </div>
                                     
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label>Country/city</label>
                                                <input type="text" class="form-control" value='<?php echo $user_data['Country_city']?>' name="Country_city">
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
<?php require_once('./header_footer/footer.php');?>