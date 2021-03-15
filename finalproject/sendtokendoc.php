<?php require_once("./header_footer/header.php")?>
<?php require_once("../project/config/database.php")?>
<?php require_once("../project/classes/doctorclass.php")?>
<?php require 'vendor/autoload.php'; use GuzzleHttp\Psr7\Request;?>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    //echo "ok";
    $db=new Database();
    $user=new Doctors($db->connect());


    $user->email=$_POST['Email'];
    $check=$user->get_id_by_email();
    if($check){
        
        $phoneNumber=$check['phonenumber'];
        $id=$check['id'];
        $user->id=$id;
        $user->token=$phoneNumber;
        $check2=$user->add_token();
        if($check2){
            $client = new \GuzzleHttp\Client();

        $wep='https://smsmisr.com/api/webapi/?username=FHV9ce5E&password=4OLWygYhxw&language=1&sender=Offers&mobile='.$phoneNumber.'&message='.'http://localhost/webproject/finalproject/forgetpassworddoc.php?token='.$phoneNumber;
        $response = $client->request('POST', $wep);
        if($response->getStatusCode()==200){
            echo "token has ben sent to phone "; // 200
        }
        }else{
            echo "Error2";
        }
        
        
    }else{
        echo "Error1";
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
                                        <h3>send tpken to phone </h3>
                                    </div>
                                    <form action="sendtokendoc.php" method="POST">
                                        <div class="form-group form-focus">
                                            <input type="email" class="form-control floating" name="Email">
                                            <label class="focus-label">Email </label>
                                        </div>
                                       
                        
                                        <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">send token</button>
                                        
                                    
      
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