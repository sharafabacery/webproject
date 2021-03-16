<?php require_once("./header_footer/header.php")?>
<?php require_once("./header_footer/checkrorsessionsdoc.php")?>
<?php require_once("../project/config/database.php")?>
<?php require_once("../project/classes/doctorclass.php")?>
<?php require_once("../project/classes/Userclass.php")?>
<?php require_once("../project/classes/MedicalHisory.php")?>
<body>
    <?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $db=new Database();
        $med1=new MedicalHistory($db->connect());
        $med1->user_id=$_GET['user_id'];
        $med1->doc_id=$_SESSION['id'];
        $med1->title=$_POST['title'];
        $med1->description=$_POST['description'];
        $med1->med_id=$_GET['view'];
        
       if($med1->update_midicalHistory()){
           $link="http://localhost/webproject/finalproject/patient-profile.php?user_id=".$_GET['user_id'];
           header('Location:'. $link);
       }

    }else if(isset($_GET['user_id'])){
        $db=new Database();
        $user=new Users($db->connect());
        $user->id=$_GET['user_id'];
        $user_data=$user->show_profile();
        if ($user_data==false) {
           
        }else{
            $med=new MedicalHistory($db->connect());
            $med->user_id=$_GET['user_id'];
            $med->doc_id=$_SESSION['id'];
            $patient=$med->view_all_patient_doc_medical_history();
        }
    }
    if(isset($_GET['view'])){
        $db=new Database();
        $med2=new MedicalHistory($db->connect());
        $med2->med_id=$_GET['view'];
        $user_med=$med2->show_medical_History();
        
    }
        
    
    
    ?>
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
                        
                       
                                             
                        ?></li>
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
                                    <?php
                                    if($user_data['gender']=="male"){
                                       echo "<img src='./img/patients/160Hf.png   '' class='img-fluid' alt='User Image'>";
                                    }else{
                                        echo "<img src='./img/patients/user.jpg   '' class='img-fluid' alt='User Image'>";  
                                    }
                                    ?>
                                   
                                </div>
                                <div class="doc-info-cont">
                                    <h4 class="doc-name"><?php echo $user_data['username'];?> </h4>
                                        <div class="clinic-details">
                                        <p class="doc-location"><i class="fas fa-map-marker-alt"></i> <?php echo $user_data['Country_city'];?> </p>
                            
                          
                                </div>
                            </div>
                            <?php if(isset($_GET['view'])){
                           echo "<div>";
                                echo "<h3>title</h3>";
                                 echo "<p>". $user_med['title']."</p>";   
                                 echo "<h3>description</h3>";
                                 echo "<p>". $user_med['description']."</p>"; 
                                 echo"<h3>Link of Model</h3>";
                                 echo"<a href=".$user_med['link_model'].">Model</a>";  

                            echo"</div>";
                            }?>
                            
                            <div class="doc-info-right">
                                    <form action="patient-profile-update.php?user_id=<?php echo $_GET['user_id'];?>&view=<?php echo $_GET['view'];?>" method="POST">
                                    <div class="card-body">
									<h4 class="card-title">title</h4>
									<div class="form-group mb-0">
                                    <label>title</label>
										<input class="form-control" type="text"  name="title" value="<?php echo  $user_med['title']?>">
                                    
                                    </input>
									</div>
                                    <div class="card-body">
									<h4 class="card-title">description</h4>
									<div class="form-group mb-0">
										<label>description and med</label>
										<textarea class="form-control" rows="5"  name="description"><?php echo $user_med['description'];?></textarea>
									</div>
								</div>
                                
                                            <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">update medical history</button>
                                    </form>
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
                   
                        
            </div>
        </div>	
        

</body>





<?php require_once("./header_footer/footer.php")?>