<?php require_once("./header_footer/header.php")?>
<?php require_once("../project/config/database.php")?>
<?php require_once("../project/classes/Userclass.php")?>
<?php require 'vendor/autoload.php'; use GuzzleHttp\Psr7\Request;?>




<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    //echo "ok";
    $db=new Database();
    $user=new Users($db->connect());

    $user->name=$_POST['Name'];
    $user->email=$_POST['Email'];
    $user->phonenumber=$_POST['MobileNumber'];
    $user->password=$_POST['Password'];
    $user->dateofbirth=strval($_POST['date']);
    $user->gender=$_POST['radio'];
    $check=$user->register();
    if($check){
        
        $client = new \GuzzleHttp\Client();
        //http://localhost/webproject/
        //welcome patient
        $wep='https://smsmisr.com/api/webapi/?username=FHV9ce5E&password=4OLWygYhxw&language=1&sender=Offers&mobile='.$user->phonenumber.'&message=welcome to app';
        $response = $client->request('POST', $wep);
        if($response->getStatusCode()==200){
            echo "you can now login "; // 200
        }
        
        
    }else{
        echo "not ok";
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
                    <?php?>
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
                            
                    
                        <div class="account-content">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-7 col-lg-6 login-left">
                                    <img src="./img/login-banner.png" class="img-fluid" alt="Doccure Register">	
                                </div>
                                <div class="col-md-12 col-lg-6 login-right">
                                    <div class="login-header">
                                        <h3>Patient Register <a href="./registerdoctor.php">Are you a Doctor?</a></h3>
                                    </div>
                                  
                                    <form method="POST" action="register.php">
                                        <div class="form-group form-focus">
                                            <input type="text" class="form-control floating" name="Name" required>
                                            <label class="focus-label" >Name</label>
                                        </div>
                                        <div class="form-group form-focus">
                                            <input type="text" class="form-control floating" name="Email" required>
                                            <label class="focus-label">Email</label>
                                        </div>
                                        <div class="form-group form-focus">
                                            <input type="text" class="form-control floating" name="MobileNumber" required>
                                            <label class="focus-label">Mobile Number</label>
                                        </div>
                                        <div class="form-group form-focus">
                                            <input type="password" class="form-control floating"name="Password" required>
                                            <label class="focus-label">Create Password</label>
                                        </div>
                                        <div class="form-group form-focus">
                                            <input type="date" class="form-control floating"name="date" required>
                                            <label class="focus-label">Date Of Birth</label>
                                        </div>
                                        <div class="form-group form-focus">
                                        
                                            &nbsp;	<input type="radio" name="radio" value="male"> Male  &nbsp;&nbsp;  &nbsp;  &nbsp;&nbsp;  &nbsp;
                                            <input type="radio"  name="radio" value="female"> Female
                                        </div>	
                                        <div class="text-right">
                                            <a class="forgot-link" href="login.php">Already have an account?</a>
                                        </div>
                                        <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Signup</button>
                                
                                    
                                    </form>
                                     
                                </div>
                            </div>
                        </div>
                 
                            
                    </div>
                </div>

            </div>

        </div>		
        <br>
        <br>
        <?php require_once("./header_footer/footer.php")?>