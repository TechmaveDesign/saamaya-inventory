<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Samaya Inventory</title>

		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/new-image/saamaya-inventory-favicon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Datetimepicker CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

	<!-- animation CSS -->
	<link rel="stylesheet" href="assets/css/animate.css">

	<!-- Select2 CSS -->
	<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/modernstyle.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
	<div id="global-loader">
		<div class="whirly-loader"> </div>
	</div>
	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<!-- Header -->
		<div class="header">

			<!-- Logo -->
			<div class="header-left active">
				<a href="index.html" class="logo logo-normal">
					<img src="assets/img/new-image/Saamaya-Inventory-Logo.png" alt="">
				</a>
				<a href="index.html" class="logo logo-white">
					<img src="assets/img/new-image/Saamaya-Inventory-Logo.png" alt="">
				</a>
				<a href="index.html" class="logo-small">
					<img src="assets/img/new-image/Saamaya-Inventory-sm-logo.png" alt="">
				</a>
				<a id="toggle_btn" href="javascript:void(0);">
					<i data-feather="chevrons-left" class="feather-16"></i>
				</a>
			</div>
			<!-- /Logo -->

			<a id="mobile_btn" class="mobile_btn" href="#sidebar">
				<span class="bar-icon">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</a>

			<!-- Header Menu -->
			<ul class="nav user-menu">

				<!-- Search -->
				<li class="nav-item nav-searchinputs">
					<!-- <div class="top-nav-search">
						<a href="javascript:void(0);" class="responsive-search">
							<i class="fa fa-search"></i>
						</a>
						<form action="#" class="dropdown">
							<div class="searchinputs dropdown-toggle" id="dropdownMenuClickable"
								data-bs-toggle="dropdown" data-bs-auto-close="false">
								<input type="text" placeholder="Search">
								<div class="search-addon">
									<span><i data-feather="x-circle" class="feather-14"></i></span>
								</div>
							</div>
							<div class="dropdown-menu search-dropdown" aria-labelledby="dropdownMenuClickable">
								<div class="search-info">
									<h6><span><i data-feather="search" class="feather-16"></i></span>Recent Searches
									</h6>
									<ul class="search-tags">
										<li><a href="javascript:void(0);">Products</a></li>
										<li><a href="javascript:void(0);">Sales</a></li>
										<li><a href="javascript:void(0);">Applications</a></li>
									</ul>
								</div>
								<div class="search-info">
									<h6><span><i data-feather="help-circle" class="feather-16"></i></span>Help</h6>
									<p>How to Change Product Volume from 0 to 200 on Inventory management</p>
									<p>Change Product Name</p>
								</div>
								<div class="search-info">
									<h6><span><i data-feather="user" class="feather-16"></i></span>Customers</h6>
									<ul class="customers">
										<li>
											<a href="javascript:void(0);">Aron Varu<img src="assets/img/profiles/avator1.jpg" alt="" class="img-fluid"></a>
										</li>
										<li>
											<a href="javascript:void(0);">Jonita<img src="assets/img/profiles/avatar-01.jpg" alt="" class="img-fluid"></a>
										</li>
										<li>
											<a href="javascript:void(0);">Aaron<img src="assets/img/profiles/avatar-10.jpg" alt="" class="img-fluid"></a>
										</li>
									</ul>
								</div>
							</div>
						</form>
					</div> -->
				</li>
				<!-- /Search -->


				
				

				<li class="nav-item nav-item-box">
					<a href="javascript:void(0);" id="btnFullscreen">
						<i data-feather="maximize"></i>
					</a>
				</li>
			
				<!-- Notifications -->
				<li class="nav-item dropdown nav-item-box">
					<a href="javascript:void(0);" class="dropdown-toggle nav-link me-3" data-bs-toggle="dropdown">
						<i data-feather="bell"></i><span class="badge rounded-pill">2</span>
					</a>
					<div class="dropdown-menu notifications">
						<div class="topnav-dropdown-header">
							<span class="notification-title">Notifications</span>
							<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
						</div>
						<div class="noti-content">
							<ul class="notification-list">
								<li class="notification-message">
									<a href="#">
										<div class="media d-flex">
											<span class="avatar flex-shrink-0">
												<img alt="" src="assets/img/profiles/avatar-02.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details"><span class="noti-title">John Doe</span> added
													new task <span class="noti-title">Patient appointment booking</span>
												</p>
												<p class="noti-time"><span class="notification-time">4 mins ago</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="#">
										<div class="media d-flex">
											<span class="avatar flex-shrink-0">
												<img alt="" src="assets/img/profiles/avatar-03.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details"><span class="noti-title">Tarah Shropshire</span>
													changed the task name <span class="noti-title">Appointment booking
													with payment gateway</span>
												</p>
												<p class="noti-time"><span class="notification-time">6 mins ago</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="#">
										<div class="media d-flex">
											<span class="avatar flex-shrink-0">
												<img alt="" src="assets/img/profiles/avatar-06.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details"><span class="noti-title">Misty Tison</span>
													added <span class="noti-title">Domenic Houston</span> and <span
													class="noti-title">Claire Mapes</span> to project <span
													class="noti-title">Doctor available module</span>
												</p>
												<p class="noti-time"><span class="notification-time">8 mins ago</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="#">
										<div class="media d-flex">
											<span class="avatar flex-shrink-0">
												<img alt="" src="assets/img/profiles/avatar-17.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details"><span class="noti-title">Rolland Webber</span>
													completed task <span class="noti-title">Patient and Doctor video conferencing</span>
												</p>
												<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="#">
										<div class="media d-flex">
											<span class="avatar flex-shrink-0">
												<img alt="" src="assets/img/profiles/avatar-13.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span>
													added new task <span class="noti-title">Private chat module</span>
												</p>
												<p class="noti-time"><span class="notification-time">2 days ago</span></p>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="topnav-dropdown-footer">
							<a href="#">View all Notifications</a>
						</div>
					</div>
				</li>
				<!-- /Notifications -->

				<!-- <li class="nav-item nav-item-box">
					<a href="general-settings.html"><i data-feather="settings"></i></a>
				</li> -->
				<li class="nav-item dropdown has-arrow main-drop">
					<a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
						<span class="user-info">
							<span class="user-letter">
								<img src="assets/img/new-image/userdummy.png" alt="" class="img-fluid">
							</span>
							<span class="user-detail">
								<span class="user-name">John Smilga</span>
								<!-- <span class="user-role">Super Admin</span> -->
							</span>
						</span>
					</a>
					<div class="dropdown-menu menu-drop-user">
						<div class="profilename">
							<div class="profileset">
								<span class="user-img"><img src="assets/img/new-image/userdummy.png" alt="">
									<span class="status online"></span></span>
								<div class="profilesets">
									<h6>John Smilga</h6>
									<!-- <h5>Super Admin</h5> -->
								</div>
							</div>
							<hr class="m-0">
							<a class="dropdown-item" href="profile.php"> <i class="me-2" data-feather="user"></i> My Profile</a>
							<!-- <a class="dropdown-item" href="#"><i class="me-2" data-feather="settings"></i>Settings</a> -->
							<hr class="m-0">
							<a class="dropdown-item logout pb-0" href="login.html"><img src="assets/img/icons/log-out.svg" class="me-2" alt="img">Logout</a>
						</div>
					</div>
				</li>
			</ul>
			<!-- /Header Menu -->

			<!-- Mobile Menu -->
			<div class="dropdown mobile-user-menu">
				<a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
				<div class="dropdown-menu dropdown-menu-right">
					<a class="dropdown-item" href="profile.php">My Profile</a>
					<a class="dropdown-item" href="#">Settings</a>
					<a class="dropdown-item" href="#">Logout</a>
				</div>
			</div>
			<!-- /Mobile Menu -->
		</div>
		<!-- /Header -->

		<!-- Sidebar -->
		<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li class="">
									<a href="index.php" class="subdrop active"><i data-feather="grid"></i><span>Dashboard</span></a>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);"><i data-feather="box"></i><span>Inventory</span><span class="menu-arrow"></span></a>
							<ul>
								<li><a href="item-list.php">Items</a></li>
								<li><a href="composite-item.php">Composite Items</a></li>
								<!-- <li><a href="#">Item Groups</a></li> -->
								<!-- <li><a href="#">Price Lists</a></li> -->
								<li><a href="inventory-adjustment-list.php">Inventory Adjustments</a></li>
								<li><a href="inventory-transfer-list.php">Inventory Transfer</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);"><i data-feather="shopping-cart"></i><span>Sales</span><span class="menu-arrow"></span></a>
							<ul>
								<li><a href="customer-list.php">Customers</a></li>
								<li><a href="sales-order-list.php">Sales Orders</a></li>
								<!-- <li><a href="#">Packages</a></li>
								<li><a href="#">Shipments</a></li>
								<li><a href="#">Delivery Challans</a></li> -->
								<li><a href="invoice-list.php">Invoices</a></li>
								<li><a href="recevied-payment.php">Payments Received</a></li>
								<li><a href="return-sale-order.php">Sales Returns</a></li>
								<li><a href="sales-credit.php">Credit Nots</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);"><i data-feather="shopping-bag"></i><span><span>Purchases</span><span class="menu-arrow"></span></a>
							<ul>
								<li><a href="vendor.php">Vendors</a></li>
								<!-- <li><a href="#">Expenses</a></li> -->
								<li><a href="purchase-orders.php">Purchase Orders</a></li>
								<li><a href="purchase-received.php">Purchase Receive</a></li>
								<li><a href="all-bills.php">Bills</a></li>
								<li><a href="all-payments.php">Payment Made</a></li>
								<li><a href="vendor-credits.php">Vendor Credits</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);"><i data-feather="settings"></i><span>Settings</span><span class="menu-arrow"></span></a>
							<ul>
								<li><a href="category.php">Category</a></li>
								<li><a href="sub-category.php">Sub Category</a></li>
								<li><a href="brands.php">Brands</a></li>
								<li><a href="units.php">Units</a></li>
								<li><a href="variant.php">Variant Attributes</a></li>
								<li><a href="warehouses.php">Warehouses</a></li>

							</ul>
						</li>
						<li>
							<a href="javascript:void(0);"><i data-feather="shield"></i><span><span>Roles & Permissions</span></a>
						
						</li>
						<li>
							<a href="javascript:void(0);"><i data-feather="git-pull-request"></i><span><span>System Activity</span></a>
						
						</li>
			
						<li>
							<a href="invoice-create.php" class="cmnCheckincheckout_btn"><span><iconify-icon icon="basil:invoice-outline"></iconify-icon> Quick Invoice</span></a>
						</li>
						
						
						
						
						
					</ul>
				</div>

				<div class="alertPopup">
					<div class="card bg-white border-0 mb-0">
						<div class="alert custom-alert1 alert-primary">
							<div class="innerAlertBox">
								<!-- <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"><i class="fas fa-xmark"></i></button> -->
								<div class="text-center  px-1 pb-0"> 
									<div class="custom-alert-icon"> 
										<!-- <i class="feather-info flex-shrink-0"></i> -->
										<i data-feather="info"></i>
									</div>
									<h5>Expiry Soon</h5>
									<p class="planPara">Your Premium plan's trial expires in <span>12 days.</span></p>
							</div>
							</div>
							<div class="alertPlanButtons">
								<a href="#">Change Plan</a>
								<a href="#">Upgrade</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Sidebar -->
