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
	
				
				{{-- <a href="javascript:void(0);" id="toggle_btn">
					<i class="fe fe-text-align-right"></i>
				</a> --}}

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
						<button class="btn" type="submit"></button>
					</form>
				</div>
				
				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					{{-- <i class="fa fa-bars"></i> --}}
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
					{{-- <a href="{{ url('/profile-hospital') }}" class="dropdown-toggle nav-link" data-toggle="dropdown">
						{{ auth()->user()->name }}
						<span class="user-img"><img class="rounded-circle" src="{{ asset('storage/images/'  . auth()->user()->image) }}" width="31" alt="صورة {{ auth()->user()->name }}"></span>
					</a> --}}
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
				<div style="margin-left: 5%;">
				@if(auth()->check())
				
					<form action="{{ url('/logout') }}" method="POST" style="display: inline;margin-left:2%;">
						@csrf
						<button type="submit" class="btn rounded-pill" style="color: rgb(175, 42, 42)); text-decoration: underline; font-size: 15px; background: none; border: none; padding: 0; cursor: pointer;">
							<svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" transform="matrix(-1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.5" d="M9.00195 7C9.01406 4.82497 9.11051 3.64706 9.87889 2.87868C10.7576 2 12.1718 2 15.0002 2L16.0002 2C18.8286 2 20.2429 2 21.1215 2.87868C22.0002 3.75736 22.0002 5.17157 22.0002 8L22.0002 16C22.0002 18.8284 22.0002 20.2426 21.1215 21.1213C20.2429 22 18.8286 22 16.0002 22H15.0002C12.1718 22 10.7576 22 9.87889 21.1213C9.11051 20.3529 9.01406 19.175 9.00195 17" stroke="rgb(175, 42, 42)" stroke-width="1.5" stroke-linecap="round"></path> <path d="M15 12L2 12M2 12L5.5 9M2 12L5.5 15" stroke="rgb(175, 42, 42)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
					&nbsp;تسجيل خروج
						</button>
					</form>
				
					<a class="btn rounded-pill px-0" href="{{ url('/profile-hospital') }}">
						<svg width="45px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill-rule="evenodd" clip-rule="evenodd" d="M16.5 7.063C16.5 10.258 14.57 13 12 13c-2.572 0-4.5-2.742-4.5-5.938C7.5 3.868 9.16 2 12 2s4.5 1.867 4.5 5.063zM4.102 20.142C4.487 20.6 6.145 22 12 22c5.855 0 7.512-1.4 7.898-1.857a.416.416 0 0 0 .09-.317C19.9 18.944 19.106 15 12 15s-7.9 3.944-7.989 4.826a.416.416 0 0 0 .091.317z" fill="rgb(29, 29, 29)"></path></g></svg>                        
					</a>
				@else
					<a class="btn rounded" style="color: white; background-color:#FE8325" href="{{ url('/login') }}">تسجيل دخول</a>
					{{-- <a class="btn rounded" style="color: white;text-decoration: underline;" href="{{ url('/register') }}">إنشاء حساب</a> --}}
				@endif
				</div>
				<!-- /Header Right Menu -->
				
            </div>
			<!-- /Header -->
		