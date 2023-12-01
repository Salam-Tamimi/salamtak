<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:20 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title> @yield('title') </title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images\Medical Care Logo 2 .png') }}">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/admin/bootstrap.min.css') }}">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{ asset('css/admin/font-awesome.min.css') }}">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="{{ asset('css/admin/feathericon.min.css') }}">
		
		<link rel="stylesheet" href="{{ asset('css/admin/morris.css') }}">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper my-4">
		
			<!-- Header -->
            <div class="header">
	
				
				<a href="javascript:void(0);" id="toggle_btn">
					<i class="fe fe-text-align-right"></i>
				</a>

				<!-- Logo -->
                <div class="header-left">
                    <a href="admin.pages.index.blade.php" class="logo">
						<img src="{{ asset('images/Medical Care Logo 2 .png') }}" alt="Logo"style="scale:1.5;margin-top:10px;">
					</a>
					<a href="admin.pages.index.blade.php" class="logo logo-small">
						<img src="{{ asset('images/Medical Care Logo 2 .png') }}" alt="Logo" width="60" height="60">
					</a>
                </div>
				<!-- /Logo -->
				<div class="top-nav-search">
					<form>
						<input type="text" class="form-control" placeholder="ابحث هنا">
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

					<!-- Notifications -->
					{{-- <li class="nav-item dropdown noti-dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="fe fe-bell"></i> <span class="badge badge-pill">3</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">الإشعارات</span>
								<a href="javascript:void(0)" class="clear-noti"> امسح الجميع </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="{{ asset('images/doctor-thumb-01.jpg') }}">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">د. محمد محمود</span> حدد <span class="noti-title">موعد حجزه</span></p>
													<p class="noti-time"><span class="notification-time">منذ ٣ دقائق</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="{{ asset('images/patients/patient1.jpg') }}">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">سعاد محمد</span> حجزت موعدها عند  <span class="noti-title">الدكتورة مريم الأحمد</span></p>
													<p class="noti-time"><span class="notification-time">منذ ٧ دقائق</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="{{ asset('images/patients/patient2.jpg') }}">
												</span>
												<div class="media-body">
												<p class="noti-details"><span class="noti-title">Travis Trimble</span> sent a amount of $210 for his <span class="noti-title">appointment</span></p>
												<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="{{ asset('images/patients/patient3.jpg') }}">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Carl Kelly</span> send a message <span class="noti-title"> to his doctor</span></p>
													<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
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
					</li> --}}
					<!-- /Notifications -->
					
					<!-- User Menu -->
					<a href="{{ url('/profile-hospital') }}" class="dropdown-toggle nav-link" data-toggle="dropdown">
						<span class="user-img"><img class="rounded-circle" src="{{ asset('storage/images/'  . auth()->user()->image) }}" width="31" alt="Ryan Taylor"></span>
					</a>
					{{-- <li class="nav-item dropdown has-arrow">
						<div class="dropdown-menu">
							<div class="user-header">
								<div class="avatar avatar-sm">
									<img src="{{ asset('images/avatar-01.jpg" alt="User Image') }}" class="avatar-img rounded-circle">
								</div>
								<div class="user-text">
									<h6>Ryan Taylor</h6>
									<p class="text-muted mb-0">الإدارة</p>
								</div>
							</div>
							<a class="dropdown-item" href="admin.pages.profile.blade.php">حسابي الشخصي</a>
							<a class="dropdown-item" href="admin.pages.settings.blade.php">الإعدادات</a>
							<a class="dropdown-item" href="admin.pages.login.blade.php">تسجيل خروج</a>
						</div>
					</li> --}}
					<!-- /User Menu -->
					
				</ul>
				<!-- /Header Right Menu -->
				
            </div>
			<!-- /Header -->
		