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
                                        Hello
                                    </div>
                                    <a href="#" class="dropdown-item has-icon">
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
                                    <a href="{{ route('dashboard') }}" class="nav-link">
                                        <i data-feather="monitor"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                                <li class="menu-header">Ajout</li>
                                <li>
                                    <a href="#" class="nav-link" data-toggle="modal" data-target="#matModal">
                                        <i data-feather="file"></i>
                                        <span>Nouveau matériel</span>
                                    </a>
                                </li>
                                <li class="menu-header">Liste</li>
                                <li>
                                    <a href="{{ route('materiels.index') }}" class="nav-link">
                                        <i data-feather="grid"></i>
                                        <span>Liste de matériels</span>
                                    </a>
                                </li>
                                <li class="menu-header">Emprunts</li>
                                <li>
                                    <a href="{{ route('emprunts.create') }}" class="nav-link">
                                        <i data-feather="grid"></i>
                                        <span>Formulaire d'emprunt</span>
                                    </a>
                                </li>
                            </ul>
                        </aside>
                    </div>

                    <!-- Main Content -->
                    @yield('content')

                    @include('partials.settingSidebar')
                    @include('partials._modals')
                </div>


                <footer class="main-footer">
					<div class="footer-left">
						<a href="">Département informatique-ICT4D</a></a>
					</div>
					<div class="footer-right"> </div>
				</footer>
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
        <script src="{{ asset('assets/bundles/datatables/datatables.min.js') }}"></script>
        <script src="{{ asset('assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/bundles/datatables/export-tables/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('assets/bundles/datatables/export-tables/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('assets/bundles/datatables/export-tables/jszip.min.js') }}"></script>
        <script src="{{ asset('assets/bundles/datatables/export-tables/pdfmake.min.js') }}"></script>
        <script src="{{ asset('assets/bundles/datatables/export-tables/vfs_fonts.js') }}"></script>
        <script src="{{ asset('assets/bundles/datatables/export-tables/buttons.print.min.js') }}"></script>
        <script src="{{ asset('assets/js/page/datatables.js') }}"></script>

        <script src="{{ asset('assets/bundles/summernote/summernote-bs4.js') }}"></script>
        <script src="{{ asset('assets/bundles/jquery-selectric/jquery.selectric.min.js') }}"></script>
        <script src="{{ asset('assets/bundles/upload-preview/assets/js/jquery.uploadPreview.min.js') }}"></script>
        <script src="{{ asset('assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
        <!-- Page Specific JS File -->
        <script src="{{ asset('assets/js/page/create-post.js') }}"></script>


    </body>
</html>
