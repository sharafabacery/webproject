<?php require_once("./header_footer/header.php")?>
<?php require_once("../project/config/database.php")?>
<?php require_once("../project/classes/Userclass.php")?>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	$db=new Database();
    $user=new Users($db->connect());
    
	if (isset($_POST['searchall'])&&$_POST['searchall']=='yes') {
		$getalldoctors=$user->search_all();
		
	}else{
		$combinations=[];
		if(isset($_POST['city'])){
			$combinations+=["city"=>$_POST['city']];
		}
		if(isset($_POST['area'])){
			$combinations+=["area"=>$_POST['area']];
		}
		if(isset($_POST['name'])){
			if($_POST['name']!="")
			$combinations+=["docname"=>$_POST['name']];
		}
		if(isset($_POST['Specialities'])){
			$combinations+=["speciallist"=>$_POST['Specialities']];
		}
		print_r($combinations);
		$user->combine_array=$combinations;
		$getalldoctors=$user->search_comination();
		//print_r($yy);

		
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
						<a href="./index.php" class="navbar-brand logo">
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
						<div class="col-md-8 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="./index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Search</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title"><?php echo mysqli_num_rows($getalldoctors);?> matches found for : Dentist In all places</h2>
				         </div>
			        </div>
			    </div>
			</div>
			<div class="content" style="display: inline-block;">
				<!---<div class="container-fluid">

					<div class="row">
						<div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar">
							<div class="card search-filter">
								<div class="card-header">
									<h4 class="card-title mb-0">Search Filter</h4>
								</div>
								<div class="card-body">
								<div class="filter-widget">
									<div class="">
										<input type="date" class="form-control datetimepicker" placeholder="Select Date">
									</div>			
								</div>
								<div class="filter-widget">
									<h4>Gender</h4>
								<div>
										<label class="custom_check">
											<input type="checkbox" name="gender_type" checked>
											<span class="checkmark"></span> Male Doctor
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="gender_type">
											<span class="checkmark"></span> Female Doctor
										</label>
									</div>
								</div>
								<div class="filter-widget">
									<h4>Select Specialist</h4>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist" checked>
											<span class="checkmark"></span> Prosthodontics 
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist" checked>
											<span class="checkmark"></span> oral surgery
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist">
											<span class="checkmark"></span>  maxillofacial surgery
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist">
											<span class="checkmark"></span> restorative dentistry 
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist">
											<span class="checkmark"></span> endodontics
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist">
											<span class="checkmark"></span> pedodontics
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist">
											<span class="checkmark"></span> orthodontics
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist">
											<span class="checkmark"></span> periodontics
										</label>
									</div>
								</div>
									<div class="btn-search">
										<button type="button" class="btn btn-block">Search</button>
								</div>	
							</div>
						</div>
							
							
						</div>-->
						
						<div class="col-md-12 col-lg-8 col-xl-9">
						<?php
						if($getalldoctors){
						while ($data = $getalldoctors->fetch_assoc()) {
							echo "<div class='card'>";
								echo "<div class='card-body'>";
									echo "<div class='doctor-widget'>";
										echo "<div class='doc-info-left'>";
											echo"<div class='doctor-img'>";
												echo"<a href='doctor-profile.php'>";
													echo "<img src=".$data['image']." class='img-fluid' alt='User Image'>";
												echo"</a>";
											echo"</div>";
											echo "<div class='doc-info-cont'>";
											echo	"<h4 class='doc-name'><a href='doctor-profile.php'>".$data['docname']."</a></h4>";
												"<h5 class='doc-department'>".$data['speciallist']."</h5>";
												echo"<div class='clinic-details'>";
												
												echo"</div>";
												echo"<div class='clinic-services'>";
													echo"<span>".$data['shortdescription']."</span>";
													
												echo"</div>";
											echo"</div>";
										echo"</div>";
										echo"<div class='doc-info-right'>";
											echo"<div class='clini-infos'>";
												echo"<ul>";
													echo "<li><i class='far fa-money-bill-alt'></i> ".$data['price'] ."LE <i class='fas fa-info-circle' data-toggle='tooltip' title='Lorem Ipsum'></i> </li>";
													echo "<li><i class='far fa-money-bill-alt'></i> ".$data['offer']*100 ."% offer LE <i class='fas fa-info-circle' data-toggle='tooltip' title='Lorem Ipsum'></i> </li>";
												echo"</ul>";
											echo"</div>";
											echo"<div class='clinic-booking'>";
												echo"<a class='view-pro-btn' href='doctor-profile.php'>View Profile</a>";
												$link="booking.php?doc_id=".$data['id'];
												echo"<a class='apt-btn' href=".$link.">Book Appointment</a>";
											echo"</div>";
										echo"</div>";
									echo"</div>";
								echo"</div>";
							echo"</div>";
						}}
						
						?>
							<!-- Doctor Widget -->
							
							<!-- /Doctor Widget -->
					</div>

				</div>
			</div>
			<?php require_once("./header_footer/footer.php")?>