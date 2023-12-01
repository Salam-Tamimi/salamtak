<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> الأطباء </title>
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
    {{-- @yield('css') --}}
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
                    <div class="navbar-nav  py-0">
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
                    <form class="d-flex mx-4">
                        <input class="form-control me-2 rounded-pill" type="search" placeholder="بحث" aria-label="Search">
                        <span>&nbsp</span>
                        <button class="btn btn-light rounded-pill text-primary py-2 px-4 ms-lg-5" type="submit">بحث</button>
                    </form>
                    </div>                      
                    {{-- <a class="btn rounded-pill" href="{{ url('/profile') }}">
                        <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" style="width: 25px;"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>profile [#B3CDE6]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-420.000000, -2159.000000)" fill="#B3CDE6"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M374,2009 C371.794,2009 370,2007.206 370,2005 C370,2002.794 371.794,2001 374,2001 C376.206,2001 378,2002.794 378,2005 C378,2007.206 376.206,2009 374,2009 M377.758,2009.673 C379.124,2008.574 380,2006.89 380,2005 C380,2001.686 377.314,1999 374,1999 C370.686,1999 368,2001.686 368,2005 C368,2006.89 368.876,2008.574 370.242,2009.673 C366.583,2011.048 364,2014.445 364,2019 L366,2019 C366,2014 369.589,2011 374,2011 C378.411,2011 382,2014 382,2019 L384,2019 C384,2014.445 381.417,2011.048 377.758,2009.673" id="profile-[#B3CDE6]"> </path> </g> </g> </g> </g></svg>                   
                    </a> --}}
                    @if(auth()->check())
                    {{-- <a class="btn rounded-pill" style="color: white;text-decoration: underline;font-size:15px;" href="{{ url('/logout') }}">
                        <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" transform="matrix(-1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.5" d="M9.00195 7C9.01406 4.82497 9.11051 3.64706 9.87889 2.87868C10.7576 2 12.1718 2 15.0002 2L16.0002 2C18.8286 2 20.2429 2 21.1215 2.87868C22.0002 3.75736 22.0002 5.17157 22.0002 8L22.0002 16C22.0002 18.8284 22.0002 20.2426 21.1215 21.1213C20.2429 22 18.8286 22 16.0002 22H15.0002C12.1718 22 10.7576 22 9.87889 21.1213C9.11051 20.3529 9.01406 19.175 9.00195 17" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M15 12L2 12M2 12L5.5 9M2 12L5.5 15" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                     &nbsp;تسجيل خروج
                    </a> --}}
                    <form action="{{ url('/logout') }}" method="POST" style="display: inline;margin-left:2%;">
                        @csrf
                        <button type="submit" class="btn rounded-pill" style="color: white; text-decoration: underline; font-size: 15px; background: none; border: none; padding: 0; cursor: pointer;">
                            <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" transform="matrix(-1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.5" d="M9.00195 7C9.01406 4.82497 9.11051 3.64706 9.87889 2.87868C10.7576 2 12.1718 2 15.0002 2L16.0002 2C18.8286 2 20.2429 2 21.1215 2.87868C22.0002 3.75736 22.0002 5.17157 22.0002 8L22.0002 16C22.0002 18.8284 22.0002 20.2426 21.1215 21.1213C20.2429 22 18.8286 22 16.0002 22H15.0002C12.1718 22 10.7576 22 9.87889 21.1213C9.11051 20.3529 9.01406 19.175 9.00195 17" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M15 12L2 12M2 12L5.5 9M2 12L5.5 15" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                     &nbsp;تسجيل خروج
                        </button>
                    </form>
                    
                        <a class="btn rounded-pill px-0" href="{{ url('/edit-appointment') }}">
                            <svg width="45px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill-rule="evenodd" clip-rule="evenodd" d="M16.5 7.063C16.5 10.258 14.57 13 12 13c-2.572 0-4.5-2.742-4.5-5.938C7.5 3.868 9.16 2 12 2s4.5 1.867 4.5 5.063zM4.102 20.142C4.487 20.6 6.145 22 12 22c5.855 0 7.512-1.4 7.898-1.857a.416.416 0 0 0 .09-.317C19.9 18.944 19.106 15 12 15s-7.9 3.944-7.989 4.826a.416.416 0 0 0 .091.317z" fill="#ffffff"></path></g></svg>                        
                        </a>
                    @else
                        <a class="btn rounded" style="color: white; background-color:#FE8325" href="{{ url('/login') }}">تسجيل دخول</a>
                        <a class="btn rounded" style="color: white;text-decoration: underline;" href="{{ url('/register') }}">إنشاء حساب</a>
                    @endif
            </nav> <br> <br> <br> <br> <br> 
@php
    // use App\Models\Department;
    use App\Models\User;
    use App\Models\Doctor_schaduale;

    $department = Department::find($departmentId);
    $doctors = User::where('role', 'doctor')
        ->whereHas('doctors', function ($query) use ($departmentId) {
            $query->where('department_id', $departmentId);
        })
        ->with(['doctors.appointments.review'])
        ->get();

    $schedules = Doctor_schaduale::all();

// pagination
    $perPage = 6;
    $currentPage = request()->get('page', 1);
    $items = $doctors->forPage($currentPage, $perPage);
    $paginator = new \Illuminate\Pagination\LengthAwarePaginator($items, $doctors->count(), $perPage, $currentPage);
@endphp
<div id="blur">
    <div class="contain" style="width:90%;margin-right:4%;">
        <strong class="row mb-4">الرئيسية / المستشفيات الخاصة / {{ $department->name }}</strong>
        <div>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="بحث" aria-label="Search">
                <button class="btn btn-primary searchbtn" type="submit" style="width: 10%;">بحث </button>
            </form>
        </div>
    </div>
    <!-- doctors card start-->
  <div class="m-4 justify-content-center">
    <div class="row m-4">


        {{-- @foreach ($doctors as $doctor) --}}
        @foreach ($searchAppointment as $doctor)
        <div class="card  col-lg-3 col-md-6 col-sm-12" style="border: 1px solid #dee2e6; box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;margin-right:5%;">
          <div class="p-3 doctorscard">
            <div>
                <h5 class="card-title">{{ $doctor->hospitals->name }}</h5>
                <img src="{{ asset('/images/doctor1.png') }}" class="img-fluid rounded-start" style="height:300px;" alt="doctor image" >
                <div>
                    @if ($doctor->doctors->appointments->isNotEmpty() && $doctor->doctors->appointments->first()->review)

                <div class="rating text-right" dir="rtl">
                    @php
                        $reviews = $doctor->doctors->appointments->pluck('review')->pluck('review');
                        $totalReviews = count($reviews);
                        
                        if ($totalReviews > 0) {
                            $averageRating = $reviews->sum() / $totalReviews;
                            $filledStars = floor($averageRating);
                            $remainingStar = $averageRating - $filledStars;
                        } else {
                            $averageRating = 0;
                            $filledStars = 0;
                            $remainingStar = 0;
                        }
                    @endphp
                
                
                    @for ($i = 1; $i <= 5; $i++)
                        @if ($i <= $filledStars)
                            <svg width="30px" height="30px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#FAD97F">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M923.2 429.6H608l-97.6-304-97.6 304H97.6l256 185.6L256 917.6l256-187.2 256 187.2-100.8-302.4z"stroke="#CCCCCC"></path>
                                    </g>
                            </svg>
                        @else
                            @if ($remainingStar > 0 && $i == ($filledStars + 1))
                            <svg fill="#FAD97F" width="28px" height="28px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" transform="matrix(-1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>star-half-stroke-filled</title> <path d="M30.383 12.699c-0.1-0.303-0.381-0.519-0.713-0.519-0 0-0 0-0 0h-9.898l-3.059-9.412c-0.1-0.303-0.381-0.518-0.712-0.518-0.083 0-0.163 0.014-0.238 0.039l0.005-0.002c-0.226 0.078-0.399 0.256-0.468 0.48l-0.001 0.005-0.012-0.004-3.059 9.412h-9.897c-0.414 0-0.749 0.336-0.749 0.75 0 0.248 0.121 0.469 0.307 0.605l0.002 0.001 8.007 5.818-3.059 9.412c-0.023 0.069-0.037 0.149-0.037 0.232 0 0.414 0.336 0.75 0.75 0.75 0.165 0 0.318-0.053 0.442-0.144l-0.002 0.001 8.008-5.819 8.006 5.819c0.122 0.090 0.275 0.144 0.441 0.144 0.414 0 0.75-0.336 0.75-0.75 0-0.083-0.014-0.164-0.039-0.239l0.002 0.005-3.059-9.412 8.010-5.818c0.188-0.138 0.308-0.357 0.308-0.605 0-0.083-0.014-0.163-0.038-0.238l0.002 0.005zM20.779 18.461c-0.188 0.138-0.309 0.358-0.309 0.607 0 0.083 0.014 0.163 0.039 0.238l-0.002-0.005 2.514 7.736-6.581-4.783c-0.116-0.080-0.259-0.128-0.414-0.128-0.009 0-0.018 0-0.028 0l0.001-0v-16.701l2.514 7.737c0.1 0.303 0.381 0.519 0.713 0.519 0 0 0 0 0 0h8.135z"></path> </g></svg>                           
                             @else
                                <svg width="28px" height="28px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g id="icomoon-ignore"></g>
                                            <path d="M19.38 12.803l-3.38-10.398-3.381 10.398h-11.013l8.925 6.397-3.427 10.395 8.896-6.448 8.895 6.448-3.426-10.395 8.925-6.397h-11.014zM20.457 19.534l2.394 7.261-6.85-4.965-6.851 4.965 2.64-8.005-0.637-0.456-6.228-4.464h8.471l2.606-8.016 2.605 8.016h8.471l-6.864 4.92 0.245 0.744z"stroke="#CCCCCC"></path>
                                        </g>
                                </svg>
                            @endif
                        @endif
                    @endfor
                    <span class="average-rating">{{ number_format($averageRating, 1) }}</span>

                </div>
                    @endif                
                
                </div>
                   
                <div class="card-body">
                    <h5 class="card-title"> د.  {{ $doctor->name }}</h5>
                    
                        <div class="d-flex btns_reserve "style="margin-right:22%;margin-top:10%;">
                            {{-- <button class="btn btn-primary reserve">احجز &nbsp; &nbsp;</button>  --}}
                            <a href="{{ url('/doctor-single', ['doctor_id' => $doctor->doctors->id]) }}" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.05) 0px 8px 32px;"><button class="btn btn-primary" style="width:170%;2%;">احجز موعد </button></a>  
                        </div>
                        </div>
                </div>
            </div>
        </div>

        @endforeach


     </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        {{ $paginator->links() }}
    </div>

   
    </div>
</div>
<!--Scroll to top-->
{{-- <div class="scroll-to-top scroll-to-target" data-target=".header-top">
  <span class="icon fa fa-angle-up"></span>
</div> --}}


         <!-- Footer Start -->
         <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4">
                        <h5 class="text-white mb-4">ابقى على تواصل</h5>
                        <p><i class="fa fa-phone-alt me-3"></i>+962 345 67890</p>
                        <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <h5 class="text-white mb-4">خدمة العملاء</h5>
                        <a class="btn btn-link" href="" style="text-align: right;">معلومت عنا </a>
                        <a class="btn btn-link" href=""style="text-align: right;">تواصل معنا </a>
                        <a class="btn btn-link" href=""style="text-align: right;">سياسة الخصوصية </a>
                        <a class="btn btn-link" href=""style="text-align: right;">الأحكام والشروط </a>
                    </div>
                    <!-- <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Popular Link</h5>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">Career</a>
                    </div> -->
                    <div class="col-md-6 col-lg-4">
                        <h5 class="text-white mb-4">جاهز للبدء معنا ومتابعة جديدنا !</h5>
                        <p>اكتب بريدك الالكتروني ليصلك كل جديد</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="اكتب بريدك الالكتروني" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-7 text-center text-md-start mb-3 mb-md-0">
                            &copy; جميع الحقوق محفوظة <a class="border-bottom" href="#">سلامتك </a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
    
    
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    
    <!-- JavaScript Libraries -->
    {{-- @yield('js') --}}
    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
    </body>
    
    </html>