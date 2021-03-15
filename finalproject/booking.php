<?php require_once("./header_footer/header.php")?>
<?php require_once("../project/config/database.php")?>
<?php require_once("../project/classes/doctorclass.php")?>
<?php
if(isset($_GET['doc_id'])){
$db=new Database();
$doc=new Doctors($db->connect());
$doc->id=$_GET['doc_id'];
$doc_data=$doc->show_profile();
print_r($doc_data);
$doc_appotiment=$doc->get_all_appotiment_for_Booking();//fetch
}else{
    header("Location: /webproject/finalproject");
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
                        }else{
                            echo " <a class='nav-link header-login' href='login.php'>login / Signup </a>";
                                
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
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Booking</li>
                            </ol>
                        </nav>
                        <h2 class="breadcrumb-title">Booking</h2>
                    </div>
                </div>
            </div>
        </div>
        
  

        <div class="content">
            <div class="container">
            
                <div class="row">
                    <div class="col-12">
                    
                        <div class="card">
                            <div class="card-body">
                                <div class="booking-doc-info">
                                    <a href="" class="booking-doc-img">
                                        <img src="<?php echo $doc_data['image'];?>" alt="User Image">
                                    </a>
                                    <div class="booking-info">
                                        <h4><a href=""><?php echo $doc_data['docname'];?></a></h4>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">35</span>
                                        </div>
                                        <p class="text-muted mb-0"><i class="fas fa-map-marker-alt"></i> <?php echo $doc_data['location_clinic']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                     <br>
                        <div class="card booking-schedule schedule-widget">
                            <div class="schedule-header">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="day-slot">
                                            <ul>
                                                <li class="left-arrow">
                                                    <a href="#">
                                                        <i class="fa fa-chevron-left"></i>
                                                    </a>
                                                </li>
                                                <?php
                                                while($data=$doc_appotiment->fetch_assoc()){
                                                    echo"<li>";
                                                    echo"<span>".$data['day']."</span>";
                                                echo"</li>";
                                                
                                                ?>

                                                <li class="right-arrow">
                                                    <a href="#">
                                                        <i class="fa fa-chevron-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="schedule-cont">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="time-slot">
                                            <ul class="clearfix">
                                            <?php
                                            
                                            
echo "<li>";
                                                echo    "<a class='timing order' href='#'>";
                                                echo        "<span class='order'>".$data['from_app']."                  </span>"; 
                                                echo    "</a>";
                                                echo    "<a class='timing' href='#'>";
                                                echo        "<span >".$data['to_app']."</span>"; 
                                                echo    "</a>";
                                                echo    "<a class='timing' href='#'>";
                                                echo        "<span>  <br>".$doc_data['waiting_time']." waiting_time</span>"; 
                                                echo    "</a>";
                                                echo "</li>";
                                            }
                                            ?>
                                                



                                              
                                            
                                              
                                            </ul>
                                        </div>
                                   
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <br>
                        <div class="submit-section proceed-btn text-right">
                            <a href="checkout.php?doc_id=<?php echo $_GET['doc_id'];?>" class="btn btn-primary submit-btn">Proceed to Pay</a>
                        </div>
                       
                        
                    </div>
                </div>
            </div>

        </div>		
        <br>
        <?php require_once("./header_footer/footer.php")?>