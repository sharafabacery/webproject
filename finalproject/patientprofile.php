<?php require_once("./header_footer/header.php")?>
<?php require_once('./header_footer/checkrorsessions.php')?>
<?php require_once("../project/config/database.php")?>
<?php require_once("../project/classes/Userclass.php")?>
<?php require_once("../project/classes/MedicalHisory.php")?>
<?php
    $db=new Database();
    $user=new Users($db->connect());
    $user->id=$_SESSION['id'];
    $user_data=$user->show_profile();
    if ($user_data==false) {
       
    }
    $med_history=new MedicalHistory($db->connect());
    $med_history->user_id=$_SESSION['id'];
    $patient=$med_history->view_all_medical_history();
    if(isset($_GET['view'])){
        $db=new Database();
        $med2=new MedicalHistory($db->connect());
        $med2->med_id=$_GET['view'];
        $user_med=$med2->show_medical_History();
        
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
                        if(isset($_SESSION['username'])){
                            if($_SESSION['username']==""){
                                echo " <a class='nav-link header-login' href='login.php'>login / Signup </a>";
                            }else{
                                echo " <a class='nav-link header-login' href='patientprofile.php'>".$_SESSION['username']. "</a>";
                                echo " <a class='nav-link header-login' href='profilepatientsett.php'>edit Data</a>";
                                echo " <a class='nav-link header-login' href='logout.php'>logout</a>";
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
                                        <h4 class="widget-title">Medical history</h4>
                                            <div class="tab-pane show active" id="upcoming-appointments">
                                        <div class="card card-table mb-0">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-center mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>title</th>
                                                                <th>date</th>
                                                                <th>edit</th>
                                                                <th>view</th>
                                                                
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                           
                                                        <?php
                                                        while($data=$patient->fetch_assoc()){
         
                                                                echo"<td> ".$data['title']."  </td>";
                                                                echo "  <td>".$data['date']."</td>";
                                                                
                                                                echo "  <td>".$data['date']."</td>";
                                                                $link="http://localhost/webproject/finalproject/patientprofile.php"."?view=".$data['med_id'];
                                                                echo "  <td> <a href='$link'>view</a></td>";
                                                               
                                                            echo "</tr>";
                                                        }
                                                            
                                                        
                                                        
                                                        ?>
                                   
                                                            
                                                            
                                                            
                                                            
                                                            
                                                        </tbody>
                                                    </table>		
                                                </div>
                                            </div>
                                        </div>
                                    </div></div>
                             

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