<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> سلامتك - صفحة المستشفى  </title>
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

<link href="{{ asset('/css/hospital-single.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- JQUERY SCRIPT -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{ asset('/css/nav_foot.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style type="text/css">
        img.wp-smiley, img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
        /*** Service ***/
            .service-item {
                box-shadow: rgba(0, 0, 0, 0.18) 0px 2px 4px;
                border: 1px solid transparent;
                transition: .6s;
            }

            .service-item:hover {
                box-shadow: 3px 3px 10px rgba(57, 137, 230, 0.4);
                border-color: #0d51ac;
                scale: 1.03;
                font-size:x-large ;
                color:#FE8325;
            }

            .service-item .service-icon,
            .service-item .service-btn {
                margin: -1px 0 0 -1px;
                width: 65px;
                height: 65px;
                display: flex;
                align-items: center;
                justify-content: center;
                color: #FFFFFF;
                background: #0d51ac;
                border-radius: 5px 0;
                transition: .5s;
            }

            .service-item .service-btn {
                margin: -1px -1px 0 0;
                border-radius: 0 5px;
                opacity: 0;
            }

            .service-item:hover .service-btn {
                opacity: 1;
            }

            .container-xxl {
            width: 100%;
            padding-right: var(--bs-gutter-x, .75rem);
            padding-left: var(--bs-gutter-x, .75rem);
            margin-right: auto;
            margin-left: auto;
            margin-bottom: 7%;
           }
           
    </style>

<style>
    
    .btn-appointment {
        background-color: #FE8325;
        color: white;
        padding: 10px 20px; 
        border: none; 
        border-radius: 5px;
        margin-right:1%; 
        box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;
    }
    .btn-appointment:hover {
        transform: scale(1.08);
    }

    .content{
        margin-right: 5%;
        margin-left: 5%;
        padding: 2%;
        background-color: rgb(225, 225, 225);
        border: 1px solid rgb(128, 128, 128);
        border-radius: 5px;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;
    }
</style>
</head>
<body data-booked-times="{{ htmlspecialchars(json_encode($bookedTimes)) }}" dir="rtl" style="text-align: right;">
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
                            @php
                                use App\Models\Department;
                                $Alldepartments = Department::groupBy('name')->select('name', \DB::raw('MAX(id) as id'))->get();
                            @endphp
                            @foreach ($Alldepartments as $department)
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
                    <span>&nbsp;</span>
                    <button class="btn btn-light rounded-pill text-primary py-2 px-4 ms-lg-5 " type="submit">بحث</button>
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
        </nav>                                                                                                                                              <br> <br><br> <br><br> <br><br> 
    
    <div class="content">
        <h3 style="margin-right: 3%;">حجز موعد</h3>
    <form action="{{ route('appointments.store', ['doctor_id' => $doctor_id]) }}" method="post" id="appointmentForm" style="margin: 3%;">
        @csrf
        @method('post')
        <label for="day">اختر يوم الحجز:</label>
        <select name="day" id="day">
            @foreach ($schedules as $schedule)
                <option value="{{ $schedule->day_of_week }}" data-start="{{ $schedule->start_time }}" data-end="{{ $schedule->end_time }}">{{ $schedule->day_of_week }}</option>
            @endforeach
        </select> <span> &nbsp; &nbsp;</span>

        <label for="start_time">اختر وقت الحجز:</label>
        <select name="start_time" id="start_time" disabled></select> <span> &nbsp; &nbsp;</span>

        <button type="submit" class="btn-appointment">حجز الموعد</button>
    </form>
    </div>



  <!-- Footer Start -->
  <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-4">
                <h5 class="text-white mb-4">ابقى على تواصل</h5>
                <p ><i class="fa fa-phone-alt me-3"></i> &nbsp; 0797263731</p>
                <p ><i class="fa fa-envelope me-3"></i> &nbsp; salamtak@example.com</p>
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


<script>
    // Function to update start_time options based on selected day
    function updateStartTimes() {
        var selectedDay = $('#day').val();
        var startTime = $('#day option:selected').data('start') + ':00';
        var endTime = $('#day option:selected').data('end');

        // Clear existing options
        $('#start_time').empty().prop('disabled', false);

        // Extract hours and minutes using regular expression
        var startTimeMatches = startTime.match(/(\d+):(\d+)/);
        var endTimeMatches = endTime.match(/(\d+):(\d+)/);

        if (startTimeMatches && endTimeMatches) {
            var startHour = parseInt(startTimeMatches[1], 10);
            var startMinute = parseInt(startTimeMatches[2], 10);
            var endHour = parseInt(endTimeMatches[1], 10);
            var endMinute = parseInt(endTimeMatches[2], 10);

            // Calculate time slots every half an hour
            var currentTime = new Date();
            currentTime.setHours(startHour, startMinute, 0, 0);

            var endTimeObj = new Date();
            endTimeObj.setHours(endHour, endMinute, 0, 0);

            while (currentTime < endTimeObj) {
                // Format start time
                var formattedStartTime = currentTime.toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: false });

                // Calculate end time
                var endTime = new Date(currentTime);
                endTime.setMinutes(endTime.getMinutes() + 30);

                // Format end time
                var formattedEndTime = endTime.toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: false });

                // Display time slot as "start_time - end_time"
                var timeSlotText = formattedStartTime + ' - ' + formattedEndTime;

                // Check if the time slot is booked
                var isBooked = isTimeSlotBooked(selectedDay, formattedStartTime);

                // If the time slot is not booked, append it to the dropdown list
                if (!isBooked) {
                    $('#start_time').append('<option value="' + timeSlotText + '">' + timeSlotText + '</option>');
                }

                // Move to the next time slot
                currentTime.setMinutes(currentTime.getMinutes() + 30);
            }
        }
    }

    // Function to check if a time slot is booked
    function isTimeSlotBooked(selectedDay, startTime) {
        // Get the booked times directly from the data attribute as a string
        var bookedTimesString = $('body').data('booked-times');

        try {
            // Parse the booked times string as JSON
            var bookedTimes = JSON.parse(bookedTimesString);

            // Check if bookedTimes is not empty or undefined
            if (bookedTimes && Array.isArray(bookedTimes) && bookedTimes.length > 0) {
                // Loop through the booked times
                for (var i = 0; i < bookedTimes.length; i++) {
                    // Check if the booked time matches the selected day and start time
                    if (bookedTimes[i].day_of_week == selectedDay && bookedTimes[i].start_time == startTime && bookedTimes[i].status === 0) {
                        return true; // Time slot is booked
                    }
                }
            }
        } catch (error) {
            console.error('Error parsing booked times:', error);
        }

        return false; // Time slot is not booked
    }

    // Call the function initially
    $(document).ready(function () {
        // Call the function to update start times
        updateStartTimes();
    });

    // Call the function whenever the day is changed
    $('#day').change(updateStartTimes);
</script>
 

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