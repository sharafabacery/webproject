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
                        
                       
                                             
                        ?>
                       
                    </li>
                </ul>
            </nav>
        </header>
        <section class="section section-search">
            <div class="container-fluid">
                <div class="banner-wrapper">
                    <div class="banner-header text-center">
                        <h1>Search Doctor, Make an Appointment</h1>
                        <p>Discover the best doctors, clinic & hospital the city nearest to you.</p>
                    </div>
                     
                    <div class="search-box">
                        <form action="search.php" method="POST">
                          
                            <div class="form-group search-spec">

                                <select  class="form-control" placeholder="" name="Specialities">
                                    
                                    <option value="Prosthodontics" selected>Prosthodontics </option>
                                    <option value="Oral surgery">Oral surgery</option>
                                    <option value="Maxillofacial surgery">Maxillofacial surgery</option>
                                    <option value="Restorative dentistry">Restorative dentistry </option>
                                    <option value="Endodontic">Endodontic </option>
                                    <option value="Pedodontics">Pedodontics</option>
                                    <option value="Orthodontics">Orthodontics</option>
                                    <option value="Periodontics">Periodontics</option>
                                
                                </select>
                                <span class="form-text">Select Specialities</span>
                            </div>
                            <div class="form-group search-location">

                                <select  class="form-control" placeholder="" name="city">
  
                                    <option value="Alexandria" selected>Alexandria </option>
                                    <option value="Cairo">Cairo</option>
                                    <option value="Giza">Giza </option>
                               
                                
                                </select>
                                <span class="form-text"> Choose City</span>
                            </div>
                           
                            <div class="form-group search-location">
                                <div class="form-group search-location">

                                    <select  class="form-control" placeholder="" name="area">
                                    
                                        <option value="Sporting" selected>Sporting </option>
                                        <option value="Smouha">Smouha</option>
                                        <option value="Louran">Louran </option>
                                   
                                    
                                    </select>
                                    <span class="form-text"> Choose Area</span>
                                </div>
                            </div>
                            <div class="form-group search-doc">
                                <input type="text" class="form-control search-doc" placeholder="Enter Dr Name " name="name">
                                <span class="form-text">Choose Dr Name</span>
                            </div>
                            
                            <button type="submit"  class="btn btn-primary search-btn"><a  style="color: white;"  href="./booking.html"><i class="fas fa-search"></i> <span>Search</span></button> </a>
                        </form>
                     

                    </div>
                    <div class="search-box">
                     <form action="search.php" method="POST">
                          
                     <select  class="form-control" placeholder="search all doctor" name="searchall">
                                        <option value="yes">yes </option>
                                        <option value="No" selected>No</option>
                                       
                                    
                                    </select>
                                    <br>
                          
                        <button type="submit"  class="btn btn-primary search-btn"><a  style="color: white;"  href="./booking.php"><i class="fas fa-search"></i> <span>SearchAllDoctors</span></button> </a>
                      </form>
                      
                      </div>
                   
        
                    
                </div>
            </div>
        </section>
    
        <section class="section section-specialities">
            <div class="container-fluid">
                <div class="section-header text-center">
                    <h2>Clinic and Specialities</h2>
                    <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-9">

                        <div class="specialities-slider slider">
                        
                            <div class="speicality-item text-center">
                                <div class="speicality-img">
                                    <img src="./img/1.jpg" width="100px"  class="img-fluid" alt="Speciality">
                                    <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                </div>
                                <p class="cap">Prosthodontics 
                                </p>
                            </div>	
                            <div class="speicality-item text-center">
                                <div class="speicality-img">
                                    <img src="./img/2.jpg" class="img-fluid" alt="Speciality" width="100px">
                                    <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                </div>
                                <p class="cap">Oral surgery</p>	
                            </div>							
                            <div class="speicality-item text-center">
                                <div class="speicality-img">
                                    <img src="./img/3.jpg" width="100px" class="img-fluid" alt="Speciality">
                                    <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                </div>	
                                <p class="cap"> maxillofacial surgery</p>	
                            </div>							
                            <div class="speicality-item text-center">
                                    <div class="speicality-img">
                                    <img src="./img/4.jpg" width="89px" class="img-fluid" alt="Speciality">
                                    <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                </div>	
                                <p class="cap">restorative dentistry </p>	
                            </div>	
                            <div class="speicality-item text-center">
                                <div class="speicality-img">
                                    <img src="./img/5.jpg" width="65px" class="img-fluid" alt="Speciality">
                                    <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                </div>	
                                <p class="cap">Endodontic </p>	
                            </div>						
                            <div class="speicality-item text-center">
                                <div class="speicality-img">
                                    <img src="./img/6.jpg" width="97px" class="img-fluid" alt="Speciality">
                                    <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                </div>	
                                <p class="cap">Pedodontics</p>
                            </div>	
                            <div class="speicality-item text-center">
                                <div class="speicality-img">
                                    <img src="./img/7.jpg" width="97px" class="img-fluid" alt="Speciality">
                                    <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                </div>	
                                <p class="cap"> orthodontics</p>
                            </div>	   
                             <div class="speicality-item text-center">
                                <div class="speicality-img">
                                    <img src="./img/8.jpg" width="100px" height="110px" class="img-fluid" alt="Speciality">
                                    <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                </div>	
                                <p class="cap">  periodontics</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
        </section>	 
     <?php require_once("./header_footer/footer.php")?>