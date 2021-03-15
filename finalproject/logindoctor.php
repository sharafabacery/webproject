<?php require_once("./header_footer/header.php")?>
<?php require_once("../project/config/database.php")?>
<?php require_once("../project/classes/doctorclass.php")?>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    //echo "ok";
    $db=new Database();
    $user=new Doctors($db->connect());


    $user->email=$_POST['Email'];
    $user->password=$_POST['Password'];
    $check=$user->login();
    if($check){
        
        if($check['password']==$user->password){
            echo "login successfully";
            $_SESSION['docname']=$check['docname'];
            $_SESSION['id']=$check['id'];
            $_SESSION['value']=0;
            $_SESSION['doctor']==true;
            header("Location: /webproject/finalproject/dash.php");
        }else{
            echo "cant login _2"; 
        }
        
        
    }else{
        echo "cant login";
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
                
                    <li class="nav-item">
                        <a class="nav-link header-login" href="login.php">login / Signup </a>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="content">
            <div class="container-fluid">
                
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        
                        <!-- Login Tab Content -->
                        <div class="account-content">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-7 col-lg-6 login-left">
                                    <img src="./img/login-banner.png" class="img-fluid" alt="Doccure Login">	
                                </div>
                                <div class="col-md-12 col-lg-6 login-right">
                                    <div class="login-header">
                                        <h3>Login <span> Doctor</span></h3>
                                        <a href="login.php"> <h3>Login <span>Patient</span></h3></a>
                                       
                                    </div>
                                    <form action="logindoctor.php" method="POST">
                                        <div class="form-group form-focus">
                                            <input type="email" class="form-control floating" name="Email">
                                            <label class="focus-label">Email </label>
                                        </div>
                                        <div class="form-group form-focus">
                                            <input type="password" class="form-control floating" name="Password">
                                            <label class="focus-label">Password</label>
                                        </div>
                        
                                        <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
                                        <div class="login-or">
                                            <span class="or-line"></span>
                                            <span class="span-or">or</span>
                                        </div>
                                    
                                        <div class="text-center dont-have ">Don’t have an account? <a  href="register.php">Register</a></div>
                                        <div class="text-center dont-have ">forget password? <a  href="sendtoken.php">forget password??</a></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                            
                    </div>
                </div>

            </div>

        </div>	
        <br>
        <?php require_once("./header_footer/footer.php")?>