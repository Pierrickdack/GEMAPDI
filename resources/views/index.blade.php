<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
		<title>GEMAPDI - Dashboard</title>
		<!-- General CSS Files -->
		<link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">
		<!-- Template CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
		<!-- Custom style CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
		<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/logo.png') }}">
	</head>

	<body>
		@include('sweetalert::alert')

		<div class="loader"></div>
		<div id="app">
			<div class="main-wrapper main-wrapper-1">
				<div class="navbar-bg"></div>
				<nav class="navbar navbar-expand-lg main-navbar sticky">
					<div class="form-inline mr-auto">
						<ul class="navbar-nav mr-3">
							<li>
								<a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn">
									<i data-feather="align-justify"></i>
								</a>
							</li>
							<li>
								<a href="#" class="nav-link nav-link-lg fullscreen-btn">
									<i data-feather="maximize"></i>
								</a>
							</li>
							<li>
								<form class="form-inline mr-auto">
									<div class="search-element">
										<input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
										<button class="btn" type="submit">
											<i class="fas fa-search"></i>
										</button>
									</div>
								</form>
							</li>
						</ul>
					</div>
					<ul class="navbar-nav navbar-right">
						<li class="dropdown dropdown-list-toggle">
							<a href="#" data-toggle="dropdown"
								class="nav-link nav-link-lg message-toggle">
								<i data-feather="mail"></i>
								<span class="badge headerBadge1">
									6
								</span>
							</a>
							<div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
								<div class="dropdown-header">
									Messages
									<div class="float-right">
										<a href="#">Mark All As Read</a>
									</div>
								</div>
								<div class="dropdown-list-content dropdown-list-message">
									<a href="#" class="dropdown-item">
										<span class="dropdown-item-avatar text-white"> <img alt="image" src="assets/img/users/user-1.png" class="rounded-circle"></span> 
										<span class="dropdown-item-desc"> 
											<span class="message-user">John Deo</span>
											<span class="time messege-text">Please check your mail !!</span>
											<span class="time">2 Min Ago</span>
										</span>
									</a>
								</div>
								<div class="dropdown-footer text-center">
									<a href="#">View All <i class="fas fa-chevron-right"></i></a>
								</div>
							</div>
						</li>
						<li class="dropdown dropdown-list-toggle">
							<a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg">
								<i data-feather="bell" class="bell"></i>
							</a>
							<div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
								<div class="dropdown-header">
									Notifications
									<div class="float-right">
										<a href="#">Mark All As Read</a>
									</div>
								</div>
								<div class="dropdown-list-content dropdown-list-icons">
									<a href="#" class="dropdown-item dropdown-item-unread">
										<span class="dropdown-item-icon bg-primary text-white">
											<i class="fas fa-code"></i>
										</span> 
										<span class="dropdown-item-desc"> 
											Template update is available now!
											<span class="time">2 Min Ago</span>
										</span>
									</a> 
								</div>
								<div class="dropdown-footer text-center">
									<a href="#">View All <i class="fas fa-chevron-right"></i></a>
								</div>
							</div>
						</li>
						<li class="dropdown">
							<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
								<img alt="image" src="assets/img/user.png" class="user-img-radious-style"> 
								<span class="d-sm-none d-lg-inline-block"></span>
							</a>
							<div class="dropdown-menu dropdown-menu-right pullDown">
								<div class="dropdown-title">
									Hello {{ session('username') }}
								</div>
								<a href="profile.html" class="dropdown-item has-icon">
									<i class="far fa-user"></i>
									Profile
								</a>
								<a href="#" class="dropdown-item has-icon"> 
									<i class="fas fa-cog"></i>
									Settings
								</a>
								<div class="dropdown-divider"></div>
								<form action="{{ route('logout') }}" method="POST">
									@csrf
									<button class="dropdown-item has-icon text-danger">
										<i class="fas fa-sign-out-alt"></i>
										Logout
									</button>
								</form>
							</div>
						</li>
					</ul>
				</nav>
				<div class="main-sidebar sidebar-style-2">
					<aside id="sidebar-wrapper">
						<div class="sidebar-brand">
							<a href="{{ route('dashboard') }}"> <img alt="image" src="{{ asset('assets/img/logo.png') }}" class="header-logo" /> <span
								class="logo-name">GEMAPDI</span>
							</a>
						</div>
						<ul class="sidebar-menu">
							<li class="menu-header">Main</li>
							<li class="dropdown active">
								<a href="{{ route('dashboard') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
							</li>
						</ul>
					</aside>
				</div>
				<!-- Main Content -->
				<div class="main-content">
					<section class="section">
						<div class="row ">
							<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="card">
									<div class="card-statistic-4">
										<div class="align-items-center justify-content-between">
											<div class="row ">
												<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
													<div class="card-content">
														<h5 class="font-15">New Booking</h5>
														<h2 class="mb-3 font-18">258</h2>
														<p class="mb-0"><span class="col-green">10%</span> Increase</p>
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
													<div class="banner-img">
														<img src="{{ asset('assets/img/banner/1.png') }}" alt="">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="card">
									<div class="card-statistic-4">
										<div class="align-items-center justify-content-between">
											<div class="row ">
												<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
													<div class="card-content">
														<h5 class="font-15"> Customers</h5>
														<h2 class="mb-3 font-18">1,287</h2>
														<p class="mb-0"><span class="col-orange">09%</span> Decrease</p>
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
													<div class="banner-img">
														<img src="{{ asset('assets/img/banner/2.png') }}" alt="">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="card">
									<div class="card-statistic-4">
										<div class="align-items-center justify-content-between">
											<div class="row ">
												<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
													<div class="card-content">
														<h5 class="font-15">New Project</h5>
														<h2 class="mb-3 font-18">128</h2>
														<p class="mb-0"><span class="col-green">18%</span>
														Increase</p>
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
													<div class="banner-img">
														<img src="{{ asset('assets/img/banner/3.png') }}" alt="">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="card">
									<div class="card-statistic-4">
										<div class="align-items-center justify-content-between">
											<div class="row ">
												<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
													<div class="card-content">
														<h5 class="font-15">Revenue</h5>
														<h2 class="mb-3 font-18">$48,697</h2>
														<p class="mb-0"><span class="col-green">42%</span> Increase</p>
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
													<div class="banner-img">
														<img src="{{ asset('assets/img/banner/4.png') }}" alt="">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>

					<div class="settingSidebar">
						<a href="javascript:void(0)" class="settingPanelToggle">
							<i class="fa fa-spin fa-cog"></i>
						</a>
						<div class="settingSidebar-body ps-container ps-theme-default">
							<div class=" fade show active">
								<div class="setting-panel-header">
									Setting Panel
								</div>
								<div class="p-15 border-bottom">
									<h6 class="font-medium m-b-10">Select Layout</h6>
									<div class="selectgroup layout-color w-50">
										<label class="selectgroup-item">
											<input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
											<span class="selectgroup-button">Light</span>
										</label>
										<label class="selectgroup-item">
											<input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
											<span class="selectgroup-button">Dark</span>
										</label>
									</div>
								</div>
								<div class="p-15 border-bottom">
									<h6 class="font-medium m-b-10">Sidebar Color</h6>
									<div class="selectgroup selectgroup-pills sidebar-color">
										<label class="selectgroup-item">
										<input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
										<span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip" data-original-title="Light Sidebar">
											<i class="fas fa-sun"></i>
										</span>
										</label>
										<label class="selectgroup-item">
											<input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
											<span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip" data-original-title="Dark Sidebar">
												<i class="fas fa-moon"></i>
											</span>
										</label>
									</div>
								</div>
								<div class="p-15 border-bottom">
									<h6 class="font-medium m-b-10">Color Theme</h6>
									<div class="theme-setting-options">
										<ul class="choose-theme list-unstyled mb-0">
											<li title="white" class="active">
												<div class="white"></div>
											</li>
											<li title="cyan">
												<div class="cyan"></div>
											</li>
											<li title="black">
												<div class="black"></div>
											</li>
											<li title="purple">
												<div class="purple"></div>
											</li>
											<li title="orange">
												<div class="orange"></div>
											</li>
											<li title="green">
												<div class="green"></div>
											</li>
											<li title="red">
												<div class="red"></div>
											</li>
										</ul>
									</div>
								</div>
								<div class="p-15 border-bottom">
									<div class="theme-setting-options">
										<label class="m-b-0">
											<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" id="mini_sidebar_setting">
											<span class="custom-switch-indicator"></span>
											<span class="control-label p-l-10">Mini Sidebar</span>
										</label>
									</div>
								</div>
								<div class="p-15 border-bottom">
									<div class="theme-setting-options">
										<label class="m-b-0">
											<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
												id="sticky_header_setting">
											<span class="custom-switch-indicator"></span>
											<span class="control-label p-l-10">Sticky Header</span>
										</label>
									</div>
								</div>
								<div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
									<a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
										<i class="fas fa-undo"></i> Restore Default
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<footer class="main-footer">
					<div class="footer-left">
						<a href="">Département informatique-ICT4D</a></a>
					</div>
					<div class="footer-right"> </div>
				</footer>
			</div>
		</div>

		<!-- General JS Scripts -->
		<script src="{{ asset('assets/js/app.min.js') }}"></script>
		<!-- JS Libraies -->
		<script src="{{ asset('assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
		<!-- Page Specific JS File -->
		<script src="{{ asset('assets/js/page/index.js') }}"></script>
		<!-- Template JS File -->
		<script src="{{ asset('assets/js/scripts.js') }}"></script>
		<!-- Custom JS File -->
		<script src="{{ asset('assets/js/custom.js') }}"></script>

	</body>

</html>
