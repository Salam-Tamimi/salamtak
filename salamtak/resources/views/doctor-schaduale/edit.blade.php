<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>تعديل جدول الطبيب</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/Medical Care Logo 2.png') }}">

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
</head>

<body>
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
                        <a href="{{ url('/appointments') }}" class="dropdown-item">قسم العيون</a>
                        <a href="{{ url('/appointments') }}" class="dropdown-item">قسم العظام</a>
                        <a href="{{ url('/appointments') }}" class="dropdown-item">قسم الأشعة</a>
                        <a href="{{ url('/appointments') }}" class="dropdown-item">قسم القلب</a>
                        <a href="{{ url('/appointments') }}" class="dropdown-item">قسم الجراحة</a>
                        <a href="{{ url('/appointments') }}" class="dropdown-item">قسم الولادة</a>
                        <a href="{{ url('/appointments') }}" class="dropdown-item">قسم الأطفال</a>
                        <a href="{{ url('/appointments') }}" class="dropdown-item">قسم العلاج الطبيعي</a>
                        <a href="{{ url('/appointments') }}" class="dropdown-item">قسم الباطني</a>
                        <a href="{{ url('/appointments') }}" class="dropdown-item">قسم الجلدية</a>
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
            <a class="btn rounded-pill" href="{{ url('/profile') }}">
                <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" style="width: 25px;"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>profile [#B3CDE6]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-420.000000, -2159.000000)" fill="#B3CDE6"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M374,2009 C371.794,2009 370,2007.206 370,2005 C370,2002.794 371.794,2001 374,2001 C376.206,2001 378,2002.794 378,2005 C378,2007.206 376.206,2009 374,2009 M377.758,2009.673 C379.124,2008.574 380,2006.89 380,2005 C380,2001.686 377.314,1999 374,1999 C370.686,1999 368,2001.686 368,2005 C368,2006.89 368.876,2008.574 370.242,2009.673 C366.583,2011.048 364,2014.445 364,2019 L366,2019 C366,2014 369.589,2011 374,2011 C378.411,2011 382,2014 382,2019 L384,2019 C384,2014.445 381.417,2011.048 377.758,2009.673" id="profile-[#B3CDE6]"> </path> </g> </g> </g> </g></svg>                   
            </a>
    </nav> <br> <br> <br> <br>
    <div>
        <div class="my-4 mx-3">
            <div class="container" style="margin: 5%;">
                <h2>تعديل ساعات الدوام</h2>
                <form method="POST" action="{{ route('doctor-schaduale.update', $schedule->id) }}" enctype="multipart/form-data" style="width: 40%;">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="day_of_week">اختر يوم من الأسبوع</label>
                        <select name="day_of_week" id="day_of_week" class="form-control">
                            <option value="الأحد" {{ $schedule->day_of_week == 'الأحد' ? 'selected' : '' }}>الأحد</option>
                            <option value="الإثنين" {{ $schedule->day_of_week == 'الإثنين' ? 'selected' : '' }}>الإثنين</option>
                            <option value="الثلاثاء" {{ $schedule->day_of_week == 'الثلاثاء' ? 'selected' : '' }}>الثلاثاء</option>
                            <option value="الأربعاء" {{ $schedule->day_of_week == 'الأربعاء' ? 'selected' : '' }}>الأربعاء</option>
                            <option value="الخميس" {{ $schedule->day_of_week == 'الخميس' ? 'selected' : '' }}>الخميس</option>
                            <option value="الجمعة" {{ $schedule->day_of_week == 'الجمعة' ? 'selected' : '' }}>الجمعة</option>
                            <option value="السبت" {{ $schedule->day_of_week == 'السبت' ? 'selected' : '' }}>السبت</option>
                        </select>
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="start_time">يبدأ الدوام من الساعة</label>
                        <input type="time" name="start_time" class="form-control" value="{{ $schedule->start_time }}" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="end_time">ينتهي الدوام الساعة</label>
                        <input type="time" name="end_time" class="form-control" value="{{ $schedule->end_time }}" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">حفظ التعديلات</button>
                </form>
            </div>
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


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>

