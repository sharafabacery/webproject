<?php require_once("./header_footer/header.php")?>
<?php require_once("../project/config/database.php")?>
<?php require_once("../project/classes/Userclass.php")?>
<?php require_once("../project/classes/doctorclass.php")?>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	$db=new Database();
	$user=new Users($db->connect());
	$doc=new Doctors($db->connect());
	
	$user->id=$_SESSION['id'];
	$user->doc_id=$_GET['doc_id'];
	$user->payment_method=$_POST['radio'];
	$user->app_id=$_POST['dateofbook'];
	$ff=$user->book_appotiment();
	if($ff){
		echo "lets go";
		$link="Location: /webproject/finalproject/bookingsuc.php?doc_id=".$_GET['doc_id']."&check=".$_POST['dateofbook'];
		header($link);
	}else{
		echo "no";
	}
}
elseif(isset($_GET['doc_id'])){
	$db=new Database();
	$doc=new Doctors($db->connect());
	$user=new Users($db->connect());
	$doc->id=$_GET['doc_id'];
	$doc_data=$doc->show_profile();
	$doc_appotiment=$doc->get_all_appotiment_for_Booking();//fetch
	if(isset($_SESSION['id'])){
		if($_SESSION['id']!==""){
			$user->id=$_SESSION['id'];
			$user_data=$user->show_profile();
		}
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
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                            </ol>
                        </nav>
                        <h2 class="breadcrumb-title">Checkout</h2>
                    </div>
                </div>
            </div>
        </div>
    		<div class="content">
				<div class="container">

					<div class="row">
						<div class="col-md-7 col-lg-8">
							<div class="card">
								<div class="card-body">
								
									<form action="checkout.php?doc_id=<?php echo $_GET['doc_id'];?>" method="POST">
										<?php
										if(isset($_SESSION['username'])){
											if($_SESSION['username']!==""){
												echo "<div class='info-widget'>";
											echo "<h4 class='card-title'>Personal Information</h4>";
											echo "<div class='row'>";

												echo "<div class='col-md-6 col-sm-12'>";
													echo"<div class='form-group card-label'>";
														echo"<label>username</label>";
														echo "<h4>".$user_data['username']."</h4>";
													echo"</div>";
												echo"</div>";
												echo "<div class='col-md-6 col-sm-12'>";
												echo	"<div class='form-group card-label'>";
														echo"<label>Email</label>";
														echo"<h4>". $user_data['email']."</h4>";
													echo "</div>";
												echo "</div>";
												echo "<div class='col-md-6 col-sm-12'>";
												echo  	"<div class='form-group card-label'>";
														echo "<label>Phone</label>";
													echo	"<h4>". $user_data['phonenumber']."</h4>";
													echo"</div>";
												echo"</div>";
											echo"</div>";
											
										echo"</div>";
											}
										}else{
											echo "<div class='exist-customer'>Existing Customer? <a href='login.php'>Click here to login</a></div>";
										}
										?>
										
										
										<div class="payment-widget">
											<h4 class="card-title">Payment Method</h4>
											
											<div class="payment-list">
											<label class="payment-radio credit-card-option">
													<input type="radio" name="radio" value="cash" checked>
													<span class="checkmark"></span>
													cash
												</label>
												<label class="payment-radio credit-card-option">
													<input type="radio" name="radio" value="Credit card">
													<span class="checkmark"></span>
													Credit card
												</label>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group card-label">
															<label for="card_name">Name on Card</label>
															<input class="form-control" id="card_name" type="text">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group card-label">
															<label for="card_number">Card Number</label>
															<input class="form-control" id="input-cc" placeholder="1234  5678  9876  5432" type="text">
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group card-label">
															<label for="expiry_month">Expiry Month</label>
															<input class="form-control" id="expiry_month" placeholder="MM" type="text">
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group card-label">
															<label for="expiry_year">Expiry Year</label>
															<input class="form-control" id="expiry_year" placeholder="YY" type="text">
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group card-label">
															<label for="cvv">CVV</label>
															<input class="form-control" id="cvv" type="text">
														</div>
													</div>
												</div>
											</div>
											<div class="payment-list">
												<label class="payment-radio paypal-option">
													<input type="radio" name="radio" value="Paypal">
													<span class="checkmark"></span>
													Paypal
												</label>
											</div>
											<div class="terms-accept">
												<div class="custom-checkbox">
												   <input type="checkbox" id="terms_accept">
												   <label for="terms_accept">I have read and accept <a href="#">Terms &amp; Conditions</a></label>
												</div>
											</div>
											<?php
											 if(isset($_SESSION['username'])){
												if($_SESSION['username']==""){
													echo " <a class='nav-link header-login' href='login.php'>login / Signup </a>";
												}else{
													echo"<div class='submit-section mt-4'>";
												echo "<button type='submit' class='btn btn-primary submit-btn'>Confirm and Pay</button>";
											echo "</div>";
										}
												  
											}
											?>
											
										</div>
									
									
								</div>
							</div>
							
						</div>
						
						<div class="col-md-5 col-lg-4 theiaStickySidebar">
							<div class="card booking-card">
								<div class="card-header">
									<h4 class="card-title">Booking Summary</h4>
								</div>
								<div class="card-body">
								
									<div class="booking-doc-info">
										<a href="" class="booking-doc-img">
											<img src="<?php echo $doc_data['image']?>" alt="User Image">
										</a>
										<div class="booking-info">
											<h4><a href=""><?php echo $doc_data['docname']?></a></h4>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">35</span>
											</div>
											<div class="clinic-details">
												<p class="doc-location"><i class="fas fa-map-marker-alt"></i> <?php echo $doc_data['location_clinic']?></p>
											</div>
										</div>
									</div>
									
									<div class="booking-summary">
										<div class="booking-item-wrap">
											<ul class="booking-date">
											<select name="dateofbook" id="">
											<?php
											while($data=$doc_appotiment->fetch_assoc())
												echo"<option value=".$data['id'].">".$data['day'].$data['from_app'].$data['to_app']."</option>";
											?>
											</select>	
												
											</ul>
                                            
                                            <div class="booking-total">
												<ul class="booking-total-list">
													<li>
														<span>Total</span>
														<span class="total-cost"><?php echo $doc_data['price']?> LE</span>
													</li>
												</ul>
											</div>
									
										
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>

				</div>
</form>
            </div>
            <br>
            <?php require_once("./header_footer/footer.php")?>