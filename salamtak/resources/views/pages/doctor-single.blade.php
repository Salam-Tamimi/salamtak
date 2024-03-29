
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> سلامتك - معلومات الطبيب  </title>
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

<link href="{{ asset('/css/doctor-single.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- JQUERY SCRIPT -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{ asset('/css/nav_foot.css') }}">
    {{-- @yield('css') --}}
    <style>
        .reviews-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            overflow-y: auto;
            height: 60vh;
            margin: 0 auto;
        }
    
        .review-container {
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px;
            padding: 2%;
            width: 50%;
            margin-bottom: 20px;
        }
    
        .user-info {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }
    
        .user-image {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }
        /* .star-svg {
        width: 25px;
        height: 25px;
        margin-right: 3px;
    } */
    </style>
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
                            {{-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">الخدمات</a>
                            <div class="dropdown-menu m-0" >
                                <a href="{{ url('/filter') }}" class="dropdown-item">حجز مواعيد</a>
                                <a href="{{ url('/edit-appointment') }}" class="dropdown-item">ادارة المواعيد</a>
                                <a href="{{ url('/lab') }}" class="dropdown-item">المختبرات الطبية</a>
                                <a href="{{ url('/hospitals') }}" class="dropdown-item">المستشفيات</a>
                                <!-- <a href="404.html" class="dropdown-item">مواعيد عيادات الاختصاص</a> -->
                            </div> --}}
                        </div>
                        <a href="{{ url('/hospitals') }}" class="nav-item nav-link">المستشفيات</a>
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
                                $Alldepartments = Department::groupBy('name')->select('name', \DB::raw('MAX(id) as id'))->get();
                                @endphp
                                @foreach ($Alldepartments as $department)
                                <a href="{{ url('/appointments-dates', ['department_id' => $department->id]) }}" class="dropdown-item">{{ $department->name }}</a>
                                @endforeach
                            </div>
                        </div>
                        <a href="{{ url('/about') }}" class="nav-item nav-link">من نحن</a>

                        <a href="{{ url('/contact') }}" class="nav-item nav-link">تواصل معنا</a>
                    </div>
                    <form class="d-flex mx-4">
                        <input class="form-control me-2 rounded-pill" type="search" placeholder="بحث" aria-label="Search">
                        <span>&nbsp;</span>
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
            </nav> <br> <br> <br>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <div id="blur">
          <div class="d-flex justify-content-around flex-wrap mx-5 row " style="margin-top: 3%">
            @php
            $avatarUrl = $doctor->image ?? ('/images/doctor1.png');
            @endphp
    <img src="{{ asset($avatarUrl) }}" alt="صورة الدكتور" style="width: 25%; height:25%">
    <div class="col "> 
    <br> <br>
    <strong class="d-flex">
        <h2> {{ $doctor->name }}  &nbsp;</h2>    
        <button class="btn view-modal" style="margin-top:2%; margin-left:8%;">
            <svg width="45px" height="45px" viewBox="-2.4 -2.4 28.80 28.80" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" transform="matrix(-1, 0, 0, 1, 0, 0)rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-2.4" y="-2.4" width="28.80" height="28.80" rx="14.4" fill="#f0f0f0" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>شارك هذا الطبيب</title> <g id="页面-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="System" transform="translate(-1296.000000, -48.000000)" fill-rule="nonzero"> <g id="share_forward_fill" transform="translate(1296.000000, 48.000000)"> <path d="M24,0 L24,24 L0,24 L0,0 L24,0 Z M12.5934901,23.257841 L12.5819402,23.2595131 L12.5108777,23.2950439 L12.4918791,23.2987469 L12.4918791,23.2987469 L12.4767152,23.2950439 L12.4056548,23.2595131 C12.3958229,23.2563662 12.3870493,23.2590235 12.3821421,23.2649074 L12.3780323,23.275831 L12.360941,23.7031097 L12.3658947,23.7234994 L12.3769048,23.7357139 L12.4804777,23.8096931 L12.4953491,23.8136134 L12.4953491,23.8136134 L12.5071152,23.8096931 L12.6106902,23.7357139 L12.6232938,23.7196733 L12.6232938,23.7196733 L12.6266527,23.7031097 L12.609561,23.275831 C12.6075724,23.2657013 12.6010112,23.2592993 12.5934901,23.257841 L12.5934901,23.257841 Z M12.8583906,23.1452862 L12.8445485,23.1473072 L12.6598443,23.2396597 L12.6498822,23.2499052 L12.6498822,23.2499052 L12.6471943,23.2611114 L12.6650943,23.6906389 L12.6699349,23.7034178 L12.6699349,23.7034178 L12.678386,23.7104931 L12.8793402,23.8032389 C12.8914285,23.8068999 12.9022333,23.8029875 12.9078286,23.7952264 L12.9118235,23.7811639 L12.8776777,23.1665331 C12.8752882,23.1545897 12.8674102,23.1470016 12.8583906,23.1452862 L12.8583906,23.1452862 Z M12.1430473,23.1473072 C12.1332178,23.1423925 12.1221763,23.1452606 12.1156365,23.1525954 L12.1099173,23.1665331 L12.0757714,23.7811639 C12.0751323,23.7926639 12.0828099,23.8018602 12.0926481,23.8045676 L12.108256,23.8032389 L12.3092106,23.7104931 L12.3186497,23.7024347 L12.3186497,23.7024347 L12.3225043,23.6906389 L12.340401,23.2611114 L12.337245,23.2485176 L12.337245,23.2485176 L12.3277531,23.2396597 L12.1430473,23.1473072 Z" id="MingCute" fill-rule="nonzero"> </path> <path d="M10.1141,4.49112 L9.91063,7.63542 L9.891,8.05196 L9.8012,8.06134 C5.36297,8.583 2,12.3671 2,17 C2,17.457 2.03414,17.91 2.10168,18.3565 C2.38094,20.2022 2.59088,20.3807 3.87391,18.8547 C4.18977,18.479 4.54227,18.1439 4.91368,17.8247 C6.24977,16.7224 7.90632,16.0786 9.66842,16.0067 L9.894,16.002 L9.95549,17.2308 L10.1215,19.576 C10.2008,20.38 11.0467,20.9293 11.8253,20.4902 C12.1766,20.2919 12.52,20.0809 12.8641,19.8706 C14.652,18.7519 16.3249,17.4666 17.9553,16.1321 C18.9147,15.3326 19.7558,14.5744 20.4714,13.8844 C20.8007,13.5606 21.1304,13.2376 21.4496,12.9037 C21.9118,12.42 21.9575,11.6189 21.4737,11.1124 C20.3603,9.94706 18.7862,8.48751 16.8271,6.94049 C15.2394,5.69825 13.597,4.53773 11.8571,3.51856 C11.0203,3.04172 10.1902,3.69599 10.1141,4.49112 Z" id="路径" fill="#0d51ac"> </path> </g> </g> </g> </g></svg>    
        </button>
    </strong>

    @if ($doctor->departments)
        <h4 style="color: rgb(207, 206, 206);">{{ $doctor->departments->name }}</h4>
    @else
        <p style="color: red;"></p>
    @endif

    <div>
      
        <div>
            @if ($doctor->appointments->isNotEmpty() && $doctor->appointments->first()->review)

        <div class="rating text-right" dir="rtl">
            @php
                $reviews = $doctor->appointments->pluck('review')->pluck('review');
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
                    <svg fill="#FAD97F" width="28px" height="28px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" transform="matrix(-1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>star-half-stroke-filled</title> <path d="M30.383 12.699c-0.1-0.303-0.381-0.519-0.713-0.519-0 0-0 0-0 0h-9.898l-3.059-9.412c-0.1-0.303-0.381-0.518-0.712-0.518-0.083 0-0.163 0.014-0.238 0.039l0.005-0.002c-0.226 0.078-0.399 0.256-0.468 0.48l-0.001 0.005-0.012-0.004-3.059 9.412h-9.897c-0.414 0-0.749 0.336-0.749 0.75 0 0.248 0.121 0.469 0.307 0.605l0.002 0.001 8.007 5.818-3.059 9.412c-0.023 0.069-0.037 0.149-0.037 0.232 0 0.414 0.336 0.75 0.75 0.75 0.165 0 0.318-0.053 0.442-0.144l-0.002 0.001 8.008-5.819 8.006 5.819c0.122 0.090 0.275 0.144 0.441 0.144 0.414 0 0.75-0.336 0.75-0.75 0-0.083-0.014-0.164-0.039-0.239l0.002 0.005-3.059-9.412 8.010-5.818c0.188-0.138 0.308-0.357 0.308-0.605 0-0.083-0.014-0.163-0.038-0.238l0.002 0.005zM20.779 18.461c-0.188 0.138-0.309 0.358-0.309 0.607 0 0.083 0.014 0.163 0.039 0.238l-0.002-0.005 2.514 7.736-6.581-4.783c-0.116-0.080-0.259-0.128-0.414-0.128-0.009 0-0.018 0-0.028 0l0.001-0v-16.701l2.514 7.737c0.1 0.303 0.381 0.519 0.713 0.519 0 0 0 0 0 0h8.135z"></path> </g></svg>                            @else
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
        <span><a href="#reviews"><button style="font-size: small;"class="btn btn-link">التقييمات</button></a></span>
    </div> <br>
    <div class="d-flex">
        <svg width="35px" height="35px" viewBox="0 0 72 72" id="emoji" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="color"> <path fill="#D0CFCE" d="M36,65.0208c0,0-3.091-5.9737-13.8722-26.8922C20,34,17.3106,30.4224,17.3106,25.6045 c0-10.3214,8.3671-18.6885,18.6885-18.6885l0.0001,8.0285c0,0-10.4584,0.5199-10.4584,10.3971s10.4587,10.7561,10.4587,10.7561 L36,65.0208z"></path> <path fill="#D0CFCE" d="M35.9736,65.0172c0,0,2.998-6.0172,13.8722-26.8922c2.0634-3.9611,4.8173-7.7062,4.8173-12.5242 c0-10.3214-8.3671-18.6885-18.6885-18.6885l-0.2836,8.0321c0,0,11.1773,0.2666,11.0085,10.7347S35.6907,36.0975,35.6907,36.0975 L35.9736,65.0172z"></path> <path fill="#9B9B9A" d="M36.8281,7.5469c0,0,9.7494,4.0365,11.8385,15.2865C50.7057,33.8135,39.5,53,36.5,62.6667 S54.6914,28,54.6914,28S55.1562,7.2812,36.8281,7.5469z"></path> </g> <g id="hair"></g> <g id="skin"></g> <g id="skin-shadow"></g> <g id="line"> <circle cx="36.001" cy="25.5211" r="10.5766" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></circle> <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M36,65.0208c0,0-3.091-5.9737-13.8722-26.8922C20,34,17.3106,30.4224,17.3106,25.6045c0-10.3214,8.3671-18.6885,18.6885-18.6885"></path> <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M36.002,65.0172c0,0,2.998-6.0172,13.8722-26.8922c2.0634-3.9611,4.8173-7.7062,4.8173-12.5242 c0-10.3214-8.3671-18.6885-18.6885-18.6885"></path> </g> </g></svg>
        <h5> {{ $doctor->hospitals->location }}</h5>
    </div>
    <div class="d-flex">
        <svg width="40px" height="40px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M732.1 399.3C534.6 356 696.5 82.1 425.9 104.8s-527.2 645.8-46.8 791.7 728-415 353-497.2z" fill="#dde4fd"></path><path d="M539.5 838.8c-1.4 0-2.9-0.3-4.2-1L330.1 730.3a8.95 8.95 0 0 1-3.8-12.1L529 331.1a8.92 8.92 0 0 1 8-4.8c1.4 0 2.9 0.3 4.2 1l205.2 107.5c4.4 2.3 6.1 7.7 3.8 12.1L547.4 834a8.92 8.92 0 0 1-7.9 4.8z" fill="#7584f0"></path><path d="M537 335.3l205.2 107.5-202.7 387-205.2-107.4L537 335.3m0-17.9c-1.8 0-3.6 0.3-5.3 0.8-4.5 1.4-8.3 4.6-10.5 8.8L318.4 714.1a17.9 17.9 0 0 0 7.6 24.2l205.2 107.5c2.6 1.4 5.4 2 8.3 2 1.8 0 3.6-0.3 5.3-0.8 4.5-1.4 8.3-4.6 10.5-8.8L758.1 451a17.88 17.88 0 0 0-7.6-24.1L545.3 319.4c-2.5-1.3-5.4-2-8.3-2z" fill="#151B28"></path><path d="M538.4 835.5c-1 0-2-0.2-2.9-0.5l-254-87a8.98 8.98 0 0 1-5.6-11.4L440 257.4c1.3-3.7 4.7-6.1 8.5-6.1 1 0 1.9 0.2 2.9 0.5l254 87c2.2 0.8 4.1 2.4 5.1 4.5s1.2 4.6 0.4 6.8l-164 479.3c-0.8 2.2-2.4 4.1-4.5 5.1-1.3 0.7-2.6 1-4 1z" fill="#FFFFFF"></path><path d="M448.6 260.4l254 87-164.2 479.1-254-87 164.2-479.1m0-17.9c-2.7 0-5.4 0.6-7.9 1.8a18.1 18.1 0 0 0-9.1 10.3L267.5 733.7c-3.2 9.4 1.8 19.5 11.1 22.7l254 87c1.9 0.6 3.8 1 5.8 1 2.7 0 5.4-0.6 7.9-1.8 4.3-2.1 7.5-5.8 9.1-10.3l164.1-479.2c3.2-9.4-1.8-19.5-11.1-22.7l-254-87c-1.9-0.6-3.9-0.9-5.8-0.9z" fill="#151B28"></path><path d="M448.6 323c-6.9 0-13.7-1.1-20.3-3.4-2.2-0.8-4.1-2.4-5.1-4.5s-1.2-4.6-0.4-6.8l17.4-50.8c1.3-3.7 4.7-6.1 8.5-6.1 1 0 1.9 0.2 2.9 0.5l50.8 17.4c2.2 0.8 4.1 2.4 5.1 4.5s1.2 4.6 0.4 6.8a62.83 62.83 0 0 1-59.3 42.4z" fill="#FFFFFF"></path><path d="M448.6 260.4l50.8 17.4a53.82 53.82 0 0 1-50.8 36.3c-5.8 0-11.6-0.9-17.4-2.9l17.4-50.8m0-17.9c-7.4 0-14.4 4.7-16.9 12.1l-17.4 50.8c-1.5 4.5-1.2 9.4 0.9 13.7 2.1 4.3 5.8 7.5 10.3 9.1 7.5 2.6 15.3 3.9 23.2 3.9a71.6 71.6 0 0 0 67.7-48.4c1.5-4.5 1.2-9.4-0.9-13.7a18.1 18.1 0 0 0-10.3-9.1l-50.8-17.4c-2-0.7-3.9-1-5.8-1z" fill="#151B28"></path><path d="M685.1 407.1c-1 0-2-0.2-2.9-0.5a62.74 62.74 0 0 1-39-79.6c1.3-3.7 4.7-6.1 8.5-6.1 1 0 1.9 0.2 2.9 0.5l50.8 17.4c4.7 1.6 7.2 6.7 5.6 11.4L693.6 401c-0.8 2.2-2.4 4.1-4.5 5.1-1.3 0.7-2.6 1-4 1z" fill="#FFFFFF"></path><path d="M651.7 330l50.8 17.4-17.4 50.8a53.8 53.8 0 0 1-33.4-68.2m0-17.9c-2.7 0-5.4 0.6-7.9 1.8a18.1 18.1 0 0 0-9.1 10.3c-12.8 37.3 7.2 78.1 44.5 90.9 1.9 0.7 3.9 1 5.8 1 7.4 0 14.4-4.7 16.9-12.1l17.4-50.8c1.5-4.5 1.2-9.4-0.9-13.7a18.1 18.1 0 0 0-10.3-9.1L657.5 313c-1.8-0.6-3.8-0.9-5.8-0.9z" fill="#151B28"></path><path d="M335.3 765.9c-1 0-2-0.2-2.9-0.5L281.6 748c-2.2-0.8-4.1-2.4-5.1-4.5s-1.2-4.6-0.4-6.8l17.4-50.8c0.8-2.2 2.4-4.1 4.5-5.1a8.9 8.9 0 0 1 6.8-0.4 62.74 62.74 0 0 1 39 79.6c-0.8 2.2-2.4 4.1-4.5 5.1-1.3 0.5-2.7 0.8-4 0.8z" fill="#FFFFFF"></path><path d="M301.9 688.8c28.1 9.6 43 40.1 33.4 68.2l-50.8-17.4 17.4-50.8m0-17.9c-2.7 0-5.4 0.6-7.9 1.8a18.1 18.1 0 0 0-9.1 10.3l-17.4 50.8c-3.2 9.4 1.8 19.5 11.1 22.7l50.8 17.4c1.9 0.6 3.8 1 5.8 1 2.7 0 5.4-0.6 7.9-1.8 4.3-2.1 7.5-5.8 9.1-10.3 6.2-18.1 5-37.5-3.4-54.7-8.4-17.2-23-30-41.1-36.2-1.9-0.7-3.9-1-5.8-1z" fill="#151B28"></path><path d="M538.4 835.5c-1 0-1.9-0.2-2.9-0.5l-50.8-17.4c-2.2-0.8-4.1-2.4-5.1-4.5s-1.2-4.6-0.4-6.8a62.75 62.75 0 0 1 59.2-42.4c6.9 0 13.8 1.1 20.4 3.4 2.2 0.8 4.1 2.4 5.1 4.5s1.2 4.6 0.4 6.8l-17.4 50.8a9.01 9.01 0 0 1-8.5 6.1z" fill="#FFFFFF"></path><path d="M538.4 772.8c5.8 0 11.7 0.9 17.5 2.9l-17.4 50.8-50.8-17.4a53.56 53.56 0 0 1 50.7-36.3m0-17.9v17.9-17.9a71.6 71.6 0 0 0-67.7 48.4c-3.2 9.4 1.8 19.5 11.1 22.7l50.8 17.4c1.9 0.6 3.8 1 5.8 1 2.7 0 5.4-0.6 7.9-1.8 4.3-2.1 7.5-5.8 9.1-10.3l17.4-50.8c3.2-9.4-1.8-19.5-11.1-22.7-7.6-2.6-15.4-3.9-23.3-3.9z" fill="#151B28"></path><path d="M493.6 692.4c-16.4 0-32.6-2.7-48.3-8.1-1-0.4-2.2-0.7-3.4-1.3a148.5 148.5 0 0 1-97.2-143c0-0.8 0.2-1.7 0.4-2.4l27.6-80.6c0.3-0.8 0.7-1.5 1.2-2.2 27.9-37.8 72.7-60.3 119.7-60.3 16.4 0 32.6 2.7 48.2 8.1 51.5 17.6 89.2 61.9 98.4 115.5 1.7 9.5 2.5 19.2 2.3 28.8 0 0.8-0.2 1.6-0.4 2.4l-27.6 80.6c-0.3 0.8-0.7 1.5-1.2 2.2-28 37.7-72.7 60.3-119.7 60.3z" fill="#FFFFFF"></path><path d="M493.5 402.6c15.1 0 30.5 2.5 45.6 7.6 50.3 17.2 84.6 60.1 93 109.2 1.6 8.9 2.4 18.1 2.2 27.2l-27.6 80.6a141.19 141.19 0 0 1-113.1 57.1c-15.1 0-30.5-2.5-45.7-7.6-1-0.3-2-0.7-3-1.2-0.1 0-0.2-0.1-0.2-0.1-57.7-21.3-93.3-76.6-91.9-135.2l27.6-80.6c26.4-35.8 68.7-57 113.1-57m0-16.3c-49.6 0-96.8 23.8-126.3 63.6-1 1.3-1.8 2.8-2.3 4.4l-27.6 80.6c-0.5 1.6-0.8 3.2-0.9 4.9a156.78 156.78 0 0 0 102.3 150.7l3.8 1.5c16.5 5.7 33.6 8.5 50.9 8.5 49.6 0 96.7-23.8 126.2-63.6 1-1.3 1.8-2.8 2.3-4.4l27.6-80.6c0.5-1.6 0.8-3.2 0.9-4.9 0.3-10.1-0.6-20.4-2.4-30.5a156.69 156.69 0 0 0-103.8-121.7c-16.3-5.6-33.4-8.5-50.7-8.5z" fill="#151B28"></path><path d="M634.3 546.6l-27.6 80.6c-35.5 48-99.2 69.8-158.8 49.4-1-0.3-2-0.7-3-1.2-0.1 0-0.2-0.1-0.2-0.1-43.1-31.7-62.9-88.9-44.6-142.2 22.5-65.7 94-100.7 159.6-78.3a125.1 125.1 0 0 1 72.5 64.4 140 140 0 0 1 2.1 27.4z" fill="#2AEFC8"></path><path d="M456.5 496.9c-11 5.4-18 10.7-22.3 23.3-4.8 14.1 1.3 26.5 14.5 31 34.1 11.7 45.7-54.8 94.4-38.1 21.3 7.3 31.1 25.7 26.7 47.7l22.3 7.6-4.2 12.2-22.1-7.6c-6.4 14-18.5 25.7-30.3 32l-8.6-11.7c11.4-6.4 22.1-15.5 26.9-29.6 5.9-17.3-0.5-29.3-15.1-34.3-38.1-13.1-50.7 53.1-94.9 37.9-19.7-6.7-29.4-24.9-25.7-44.9l-22.3-7.6 4.2-12.2 22.1 7.6c6.3-13.8 16.3-20.7 27.4-25.6l7 12.3z" fill=""></path></g></svg>
        <h5>الكشفية: {{ $doctor->price }} دينار أردني</h5>
    </div>  
   </div>


   <div class="col" >
    @php
    use App\Http\Controllers\AppointmentController;
    @endphp
    <h3 class="my-4">جدول مواعيد الدوام الرسمي لدى الدكتور {{ $doctor->name }}:</h3>
    @if ($schedules && count($schedules) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>أيام الأسبوع</th>
                    <th>بداية الدوام</th>
                    <th>نهاية الدوام </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($schedules as $schedule)
                    <tr>
                        <td>{{ $schedule->day_of_week }}</td>
                        <td>{{ $schedule->start_time }}</td>
                        <td>{{ $schedule->end_time }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <button class="btn btn-primary" style="background-color:#FE8325; box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;">
            <a href="{{ route('appointments.create', ['doctor_id' => $doctor_id]) }}"style="color:white; font-size:20px;">احجز موعدك الآن</a>
        </button>
        {{-- <a href="{{ route('appointments.create') }}">احجز موعدك الآن</a> --}}
    
    @else
        <p>لم يتم إضافة مواعيد الدوام لحد الآن</p>
    @endif
    

   </div>

    </div>

    <div class="px-5 py-2 me-5" style="width: 55%; background-color: rgb(238, 238, 238);">
        <div>
            <br><h4>الخبرة المهنية :</h4>
            {{ $doctor->experience }}
        </div><br>
    </div>
<hr>

<div class="reviews-container" id="reviews">
    <div class="title">
        <h2 style="color: var(--primary);">تقييمات الطبيب</h2>
        <div class="underline"></div>
    </div>
    {{-- Reviews start --}}
    @foreach ($Allreviews as $review)
        @if ($review)
            <div class="review-container">
                <p>{{ $review->comment }}</p>
                {{-- <p>{{ $review->review }}</p> --}}
                {{-- Display stars based on rating --}}
                @php
                    $rating = $review->review;
                    $filledStars = floor($rating);
                    $halfStar = ceil($rating - $filledStars);
                    $emptyStars = 5 - $filledStars - $halfStar;
                @endphp

                <div class="star-container">
                    @for ($i = 0; $i < $filledStars; $i++)
                    <svg width="30px" height="30px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#FAD97F">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M923.2 429.6H608l-97.6-304-97.6 304H97.6l256 185.6L256 917.6l256-187.2 256 187.2-100.8-302.4z"stroke="#CCCCCC"></path>
                        </g>
                    </svg>
                    @endfor

                    @if ($halfStar)
                    <svg fill="#FAD97F" width="28px" height="28px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" transform="matrix(-1, 0, 0, 1, 0, 0)">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier"> <title>star-half-stroke-filled</title> 
                            <path d="M30.383 12.699c-0.1-0.303-0.381-0.519-0.713-0.519-0 0-0 0-0 0h-9.898l-3.059-9.412c-0.1-0.303-0.381-0.518-0.712-0.518-0.083 0-0.163 0.014-0.238 0.039l0.005-0.002c-0.226 0.078-0.399 0.256-0.468 0.48l-0.001 0.005-0.012-0.004-3.059 9.412h-9.897c-0.414 0-0.749 0.336-0.749 0.75 0 0.248 0.121 0.469 0.307 0.605l0.002 0.001 8.007 5.818-3.059 9.412c-0.023 0.069-0.037 0.149-0.037 0.232 0 0.414 0.336 0.75 0.75 0.75 0.165 0 0.318-0.053 0.442-0.144l-0.002 0.001 8.008-5.819 8.006 5.819c0.122 0.090 0.275 0.144 0.441 0.144 0.414 0 0.75-0.336 0.75-0.75 0-0.083-0.014-0.164-0.039-0.239l0.002 0.005-3.059-9.412 8.010-5.818c0.188-0.138 0.308-0.357 0.308-0.605 0-0.083-0.014-0.163-0.038-0.238l0.002 0.005zM20.779 18.461c-0.188 0.138-0.309 0.358-0.309 0.607 0 0.083 0.014 0.163 0.039 0.238l-0.002-0.005 2.514 7.736-6.581-4.783c-0.116-0.080-0.259-0.128-0.414-0.128-0.009 0-0.018 0-0.028 0l0.001-0v-16.701l2.514 7.737c0.1 0.303 0.381 0.519 0.713 0.519 0 0 0 0 0 0h8.135z"></path> 
                        </g>
                    </svg> 
                    @endif

                    @for ($i = 0; $i < $emptyStars; $i++)
                    <svg width="28px" height="28px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g id="icomoon-ignore"></g>
                            <path d="M19.38 12.803l-3.38-10.398-3.381 10.398h-11.013l8.925 6.397-3.427 10.395 8.896-6.448 8.895 6.448-3.426-10.395 8.925-6.397h-11.014zM20.457 19.534l2.394 7.261-6.85-4.965-6.851 4.965 2.64-8.005-0.637-0.456-6.228-4.464h8.471l2.606-8.016 2.605 8.016h8.471l-6.864 4.92 0.245 0.744z"stroke="#CCCCCC"></path>
                        </g>
                    </svg>
                    @endfor
                </div>
                <div class="user-info">
                    <img src="{{ $review->appointments->user->image }}" alt="User Image" class="user-image">
                    <p>{{ $review->appointments->user->name }}</p>
                </div>
            </div>
        @endif
    @endforeach
    @empty($Allreviews)
    <h6>لايوجد تقييمات لهذا الطبيب</h6>
    @endempty
    {{-- Reviews end --}}
</div>

    </div>




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
    
    

    <!-- JavaScript Libraries -->

            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        </div>
    <!-- *********** social media *********** -->
    <div class="popup">
        <header>
          <span>مشاركة صفحة هذا الطبيب</span>
          <div class="close"><i class="uil uil-times"></i></div>
        </header>
        <div class="content">
          <p>مشاركة الرابط باستخدام</p>
          <ul class="icons">
            <a href="#" onclick="shareOnFacebook()"><i class="fab fa-facebook-f">ff</i></a>
            <a href="#" onclick="shareOnTwitter()"><i class="fab fa-twitter"></i></a>
            <a href="#" onclick="shareOnInstagram()"><i class="fab fa-instagram"></i></a>
            <a href="#" onclick="shareOnWhatsApp()"><i class="fab fa-whatsapp"></i></a>
            <a href="#" onclick="shareOnTelegram()"><i class="fab fa-telegram-plane"></i></a>
          </ul>
          <p>أو قم بنسخ الرابط</p>
          <div class="field">
            <i class="url-icon uil uil-link"></i>
            <input type="text" readonly id="pageLinkInput">
            <button class="btn" style="background-color: var(--primary); color: white;" onclick="copyLink()">نسخ</button>
          </div>
        </div>
      </div>
    
    
    
    
    
    {{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            // Enable time dropdown when a day is selected
            $('#day').change(function () {
                var selectedDay = $(this).val();
                var startTime = $('#day option:selected').data('start');
                var endTime = $('#day option:selected').data('end');
                var interval = 30;
                var format = 'HH:mm';
    
                // Populate time dropdown
                $('#time').empty();
                var currentTime = moment(startTime, format);
                var endTimeMoment = moment(endTime, format);
                while (currentTime.isBefore(endTimeMoment)) {
                    $('#time').append('<option value="' + currentTime.format(format) + '">' + currentTime.format(format) + '</option>');
                    currentTime.add(interval, 'minutes');
                }
    
                // Enable time dropdown
                $('#time').prop('disabled', false);
            });
        });
    </script> --}}
    
    <script>
      // Set the value of the input field with the current page link
      document.getElementById('pageLinkInput').value = window.location.href;
    
      // Function to copy the link to the clipboard
      function copyLink() {
        var copyText = document.getElementById('pageLinkInput');
        copyText.select();
        document.execCommand('copy');
        alert('تم نسخ الرابط: ' + copyText.value);
      }
    
      // Function to share on Facebook
      function shareOnFacebook() {
        window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(window.location.href), '_blank');
      }
    
      // Function to share on Twitter
      function shareOnTwitter() {
        window.open('https://twitter.com/intent/tweet?url=' + encodeURIComponent(window.location.href), '_blank');
      }
    
      // Function to share on Instagram
      function shareOnInstagram() {
        // Use Instagram sharing URL or fallback to the page link
        window.open('https://www.instagram.com/share?url=' + encodeURIComponent(window.location.href), '_blank');
      }
    
      // Function to share on WhatsApp
      function shareOnWhatsApp() {
        window.open('https://api.whatsapp.com/send?text=' + encodeURIComponent(window.location.href), '_blank');
      }
    
      // Function to share on Telegram
      function shareOnTelegram() {
        window.open('https://t.me/share/url?url=' + encodeURIComponent(window.location.href), '_blank');
      }
    </script>
    
    
        <script>
        const viewBtn = document.querySelector(".view-modal"),
        popup = document.querySelector(".popup"),
        close = popup.querySelector(".close"),
        field = popup.querySelector(".field"),
        input = field.querySelector("input"),
        copy = field.querySelector("button");
    
        viewBtn.onclick = ()=>{
          popup.classList.toggle("show");
          var blur = document.getElementById("blur");
          blur.classList.toggle("active");
        }
        close.onclick = ()=>{
          viewBtn.click();
        }
    
        copy.onclick = ()=>{
          input.select(); 
          if(document.execCommand("copy")){ 
            field.classList.add("active");
            copy.innerText = "منسوخ";
            setTimeout(()=>{
              window.getSelection().removeAllRanges();
              field.classList.remove("active");
              copy.innerText = "نسخ";
            }, 3000);
          }
        }
      </script>  
      <script src="{{ asset('js/doctor-single.js') }}"></script>
    
    
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



