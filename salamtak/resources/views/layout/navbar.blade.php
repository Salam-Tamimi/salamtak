<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> @yield('title') </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    
    <!-- Favicon -->
     <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/Medical Care Logo 2 .png') }}">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- JQUERY SCRIPT -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{ asset('/css/nav_foot.css') }}">
    @yield('css')
</head>

<body>
    {{-- <div class="container-xxl bg-white p-0"> --}}
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0 ">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="{{ url('/') }}" class="navbar-brand p-0">
                    <!-- <h1 class="m-0">BizConsult</h1> -->
                    <img src="{{ asset('images/Medical Care Logo 2 .png') }}" alt="Logo" style="width: 110%;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <span>&nbsp; &nbsp; &nbsp; &nbsp;</span>
                        <a href="{{ url('/') }}" class="nav-item nav-link active">الصفحة الرئيسية</a>                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">الخدمات</a>
                            <div class="dropdown-menu m-0" >
                                <a href="{{ url('/filter') }}" class="dropdown-item">حجز مواعيد</a>
                                <a href="{{ url('/edit-appointment') }}" class="dropdown-item">ادارة المواعيد</a>
                                <a href="{{ url('/lab') }}" class="dropdown-item">المختبرات الطبية</a>
                                <a href="{{ url('/hospitals') }}" class="dropdown-item">المستشفيات</a>
                                <!-- <a href="404.html" class="dropdown-item">مواعيد عيادات الاختصاص</a> -->
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">الأقسام</a>
                            <div class="dropdown-menu m-0">
                                {{-- <a href="{{ url('/appointments') }}" class="dropdown-item">قسم العيون</a>
                                <a href="{{ url('/appointments') }}" class="dropdown-item">قسم العظام</a>
                                <a href="{{ url('/appointments') }}" class="dropdown-item">قسم الأشعة</a>
                                <a href="{{ url('/appointments') }}" class="dropdown-item">قسم القلب</a>
                                <a href="{{ url('/appointments') }}" class="dropdown-item">قسم الجراحة</a>
                                <a href="{{ url('/appointments') }}" class="dropdown-item">قسم الولادة</a>
                                <a href="{{ url('/appointments') }}" class="dropdown-item">قسم الأطفال</a>
                                <a href="{{ url('/appointments') }}" class="dropdown-item">قسم العلاج الطبيعي</a>
                                <a href="{{ url('/appointments') }}" class="dropdown-item">قسم الباطني</a>
                                <a href="{{ url('/appointments') }}" class="dropdown-item">قسم الجلدية</a> --}}
                                @php
                                use App\Models\Department;
                                $departments = Department::all();
                                @endphp
                                @foreach ($departments as $department)
                                <a href="{{ url('/appointments-dates', ['department_id' => $department->id]) }}" class="dropdown-item">{{ $department->name }}</a>
                                @endforeach
                            </div>
                        </div>
                        <a href="{{ url('/hospitals') }}" class="nav-item nav-link">المستشفيات</a>
                        <a href="{{ url('/about') }}" class="nav-item nav-link">من نحن</a>

                        <a href="{{ url('/contact') }}" class="nav-item nav-link">تواصل معنا</a>
                    </div>
                    <form class="d-flex">
                        <input class="form-control me-2 rounded-pill" type="search" placeholder="بحث" aria-label="Search">
                        <span>&nbsp</span>
                        <button class="btn btn-light rounded-pill text-primary py-2 px-4 ms-lg-5" type="submit">بحث</button>
                    </form>
                    </div>                      
                    {{-- <a class="btn rounded-pill" href="{{ url('/profile') }}">
                        <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" style="width: 25px;"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>profile [#B3CDE6]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-420.000000, -2159.000000)" fill="#B3CDE6"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M374,2009 C371.794,2009 370,2007.206 370,2005 C370,2002.794 371.794,2001 374,2001 C376.206,2001 378,2002.794 378,2005 C378,2007.206 376.206,2009 374,2009 M377.758,2009.673 C379.124,2008.574 380,2006.89 380,2005 C380,2001.686 377.314,1999 374,1999 C370.686,1999 368,2001.686 368,2005 C368,2006.89 368.876,2008.574 370.242,2009.673 C366.583,2011.048 364,2014.445 364,2019 L366,2019 C366,2014 369.589,2011 374,2011 C378.411,2011 382,2014 382,2019 L384,2019 C384,2014.445 381.417,2011.048 377.758,2009.673" id="profile-[#B3CDE6]"> </path> </g> </g> </g> </g></svg>                   
                    </a> --}}
                    @if(auth()->check())
                        <!-- User is logged in, show profile button -->
                        <a class="btn rounded-pill" href="{{ url('/profile') }}">
                            <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" style="width: 25px;">
                                <!-- Your SVG code here -->
                            </svg>
                        </a>
                    @else
                        <!-- User is not logged in, show login and register buttons -->
                        <a class="btn rounded-pill" href="{{ url('/login') }}">Login</a>
                        <a class="btn rounded-pill" href="{{ url('/register') }}">Register</a>
                    @endif
            </nav>