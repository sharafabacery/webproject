<?php require_once("../header_footer/header.php")?>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="index.html" class="logo">
						<img src="assets/img/logo.png" alt="Logo">
					</a>
					<a href="index.html" class="logo logo-small">
						<img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
					</a>
                </div>
				<!-- /Logo -->
				
				<a href="javascript:void(0);" id="toggle_btn">
					<i class="fe fe-text-align-left"></i>
				</a>
				
				<div class="top-nav-search">
					<form>
						<input type="text" class="form-control" placeholder="Search here">
						<button class="btn" type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>
				
				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fa fa-bars"></i>
				</a>
				<!-- /Mobile Menu Toggle -->
				
				<!-- Header Right Menu -->
				<ul class="nav user-menu">

					
					
					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="31" alt="Ryan Taylor"></span>
						</a>
						<div class="dropdown-menu">
							<div class="user-header">
								<div class="avatar avatar-sm">
									<img src="assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
								</div>
								<div class="user-text">
									<h6>Ryan Taylor</h6>
									<p class="text-muted mb-0">Administrator</p>
								</div>
							</div>
							<a class="dropdown-item" href="profile.html">My Profile</a>
							<a class="dropdown-item" href="settings.html">Settings</a>
							<a class="dropdown-item" href="login.html">Logout</a>
						</div>
					</li>
					<!-- /User Menu -->
					
				</ul>
				<!-- /Header Right Menu -->
				
            </div>
			<!-- /Header -->
			
			<!-- Sidebar -->
          <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>Main</span>
							</li>
							<li> 
								<a href="index.html"><i class="fe fe-home"></i> <span>Dashboard</span></a>
							</li>
							<li> 
								<a href="appointment-list.html"><i class="fe fe-layout"></i> <span>Appointments</span></a>
							</li>
							<li> 
								<a href="specialities.html"><i class="fe fe-users"></i> <span>Specialities</span></a>
							</li>
							<li> 
								<a href="doctor-list.html"><i class="fe fe-user-plus"></i> <span>Doctors</span></a>
							</li>
							<li class="active"> 
								<a href="patient-list.html"><i class="fe fe-user"></i> <span>Patients</span></a>
							</li>
							<li> 
								<a href="transactions-list.html"><i class="fe fe-activity"></i> <span>Transactions</span></a>
							</li>
							<li> 
								<a href="settings.html"><i class="fe fe-vector"></i> <span>Settings</span></a>
							</li><li class="menu-title"> 
								<span>Pages</span>
							</li>
							<li> 
								<a href="profile.html"><i class="fe fe-user-plus"></i> <span>Profile</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-document"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="login.html"> Login </a></li>
									<li><a href="register.html"> Register </a></li>
									<li><a href="forgot-password.html"> Forgot Password </a></li>
									<li><a href="lock-screen.html"> Lock Screen </a></li>
								
							</li>
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">List of Patient</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
									<li class="breadcrumb-item active">Patient</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Patient ID</th>
													<th>Patient Name</th>
													<th>Age</th>
													<th>Address</th>
													<th>Phone</th>
													<th>Last Visit</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>#PT001</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient1.jpg" alt="User Image"></a>
															<a href="profile.html">Charlene Reed </a>
														</h2>
													</td>
													<td>29</td>
													<td>4417  Goosetown Drive, Taylorsville, North Carolina, 28681</td>
													<td>8286329170</td>
													<td>20 Oct 2019</td>
												</tr>
												<tr>
													<td>#PT002</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient2.jpg" alt="User Image"></a>
															<a href="profile.html">Travis Trimble </a>
														</h2>
													</td>
													<td>23</td>
													<td>4026  Fantages Way, Brunswick, Maine, 04011</td>
													<td>2077299974</td>
													<td>22 Oct 2019</td>
												</tr>
												<tr>
													<td>#PT003</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient3.jpg" alt="User Image"></a>
															<a href="profile.html">Carl Kelly</a>
														</h2>
													</td>
													<td>29</td>
													<td>2037 Pearcy Avenue, Decatur, Indiana, 46733</td>
													<td>2607247769</td>
													<td>21 Oct 2019</td>
												</tr>
												<tr>
													<td>#PT004</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient4.jpg" alt="User Image"></a>
															<a href="profile.html"> Michelle Fairfax</a>
														</h2>
													</td>
													<td>25</td>
													<td>2037 Pearcy Avenue, Decatur, Indiana, 46733</td>
													<td>5043686874</td>
													<td>21 Sep 2019</td>
												</tr>
												<tr>
													<td>#PT005</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient5.jpg" alt="User Image"></a>
															<a href="profile.html">Gina Moore</a>
														</h2>
													</td>
													<td>23</td>
													<td>888  Everette Alley, Hialeah, Florida, 33012</td>
													<td>9548207887</td>
													<td>18 Sep 2019</td>
												</tr>
												<tr>
													<td>#PT006</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient6.jpg" alt="User Image"></a>
															<a href="profile.html">Elsie Gilley</a>
														</h2>
													</td>
													<td>16</td>
													<td>644  Coffman Alley, Bowling Green, Kentucky, 42101</td>
													<td>3153844562</td>
													<td>18 Sep 2019</td>
												<tr>
													<td>#PT007</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient7.jpg" alt="User Image"></a>
															<a href="profile.html"> Joan Gardner</a>
														</h2>
													</td>
													<td>25</td>
													<td>2399  Hillview Drive, San Francisco, California, 94103</td>
													<td>7072202603</td>
													<td>18 Sep 2019</td>
												</tr>
												<tr>
													<td>#PT008</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient8.jpg" alt="User Image"></a>
															<a href="profile.html"> Daniel Griffing</a>
														</h2>
													</td>
													<td>21</td>
													<td>4914  Hilltop Haven Drive, Passaic, New Jersey, 07055</td>
													<td>9737739497</td>
													<td>7 Sep 2019</td>
												</tr>
												<tr>
													<td>#PT009</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient9.jpg" alt="User Image"></a>
															<a href="profile.html">Walter Roberson</a>
														</h2>
													</td>
													<td>18</td>
													<td>1299  Star Trek Drive, Panama City, Florida, 32405</td>
													<td>8503584445</td>
													<td>11 Sep 2019</td>
												</tr>
												<tr>
													<td>#PT010</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient10.jpg" alt="User Image"></a>
															<a href="profile.html">Robert Rhodes</a>
														</h2>
													</td>
													<td>19</td>
													<td>1214  Hamill Avenue, Del Mar, California, 92014</td>
													<td>8582595285</td>
													<td>12 Sep 2019</td>
												</tr>
												<tr>
													<td>#PT011</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient11.jpg" alt="User Image"></a>
															<a href="profile.html">Harry Williams</a>
														</h2>
													</td>
													<td>9</td>
													<td>4566  Sampson Street, Denver, Colorado, 80202</td>
													<td>3036077075</td>
													<td>14 Sep 2019</td>
												</tr>
												<tr>
													<td>#PT012</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient12.jpg" alt="User Image"></a>
															<a href="profile.html">Robert Johnston</a>
														</h2>
													</td>
													<td>29</td>
													<td>1996  Crummit Lane, Beatrice, Nebraska, 68310</td>
													<td>4022231492</td>
													<td>7 Nov 2019</td>
												</tr>
												<tr>
													<td>#PT013</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient13.jpg" alt="User Image"></a>
															<a href="profile.html">Tracy Mason</a>
														</h2>
													</td>
													<td>32</td>
													<td>4211  Vesta Drive, TOLEDO, Washington, 98591</td>
													<td>7737265795</td>
													<td>9 Nov 2019</td>
												</tr>
												<tr>
													<td>#PT014</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient14.jpg" alt="User Image"></a>
															<a href="profile.html"> Daniel Finch</a>
														</h2>
													</td>
													<td>23</td>
													<td>186  Bryan Street, Greensboro, North Carolina, 27409</td>
													<td>3362314023</td>
													<td>5 Nov 2019</td>
												</tr>
												<tr>
													<td>#PT015</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient15.jpg" alt="User Image"></a>
															<a href="profile.html">Jessica Garza</a>
														</h2>
													</td>
													<td>10</td>
													<td>4672  Rose Street, Schaumburg, Illinois, 60173</td>
													<td>7082788201</td>
													<td>6 Nov 2019</td>
												</tr>
											</tbody>
										</table>
									</div>
									</div>
								</div>
							</div>
						</div>			
					</div>
					
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		<?php require_once("../header_footer/footer.php")?>