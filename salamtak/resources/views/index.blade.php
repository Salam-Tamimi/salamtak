@extends('layout.master')
@section('title', 'سلامتك - الصفحة الرئيسية ')
 @section('css')
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
   <!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<style>
    /* Owl Carousel Navigation Arrows */
    .owl-nav {
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: auto;
        display: flex;
        justify-content: space-between;
        z-index: 1; /* Ensure it appears above the slider */
    }

    .owl-prev,
    .owl-next {
        font-size: 18px;
        color: #fff;
        background-color: #ebebeb;
        padding: 8px;
        margin: 10px;
        border-radius: 15%;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    /* Hover effect for arrows */
    .owl-prev:hover,
    .owl-next:hover {
        background-color: #6499d2;
        scale: 1.08;
    }
    body {
    overflow-x: hidden;
}
</style>
@endsection     
   
@section('content')
                <div class="container-xxl bg-primary hero-header">
                <div class="containerbg">
                <div class="words word-1">
                    <span>سـ</span>
                    <span>ـلا</span>
                    <span>مـ</span>
                    <span>ـتـ</span>
                    <span>ـك</span>
                </div>
                </div>
                <div class="container">
                    <div class="row g-5 align-items-center" style="margin-top: -8%;">
                        <div class="col-lg-6 text-center text-lg-start">
                            <a href="{{ url('/hospitals') }}" class="btn btn-outline-light rounded-pill border-2 py-4 px-6 animated slideInRight mainbtn" style="width: 60%; font-size: 25px;">المستشفيات الخاصة</a> <br> <br>
                            <a href="{{ url('/lab') }}" class="btn btn-outline-light rounded-pill border-2 py-4 px-6 animated slideInRight mainbtn" style="width: 60%;font-size: 25px;">المختبرات الطبية</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid animated zoomIn mainpic" src="{{ asset('images/home-removebg-preview.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        {{-- </div> --}}
        <!-- Navbar & Hero End -->

<!-- cards start-->
        <div class="row g-3 cards py-5">
                <div class="card mb-5 card1 wow fadeInRight"data-wow-delay="0.1s"style="max-width: 22rem;">
                     <h2 class="card-title">احجز موعد</h2>
                     <a href="{{ url('/filter') }}"><button class="btn btn-primary rounded-pill mt-4 px-4" >احجز الآن </button></a>
                </div>
                <div class="card mb-5 card2 wow fadeInRight"data-wow-delay="0.1s" style="max-width: 22rem;">
                    <h2 class="card-title">ابحث عن مختبر</h2>
                    <a href="{{ url('/lab') }}"><button class="btn btn-primary rounded-pill mt-4 px-4" >ابحث الآن</button></a>
               </div>
               <div class="card mb-5 card3 wow fadeInRight"data-wow-delay="0.1s" style="max-width: 22rem;">
                <h2 class="card-title">لماذا "سلامتك" ؟</h2>
                <a href="{{ url('/about') }}"><button class="btn btn-primary rounded-pill mt-4 px-4" >اقرأ المزيد</button></a>
           </div>
        </div>
<!-- cards end-->
        

{{-- hospital start --}}
    @php
        use App\Models\User;
        // $hospitals = User::where('role', 'hospital')->get();
        $hospitals = User::where('role', 'hospital')
                ->whereNotNull('hospital_id')
                ->get();
    @endphp
    <hr class="my-4">
    <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
        <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">المستشفيات</div>
        <h2 class="mb-5">المستشفيات الخاصة </h2>
    </div>
    
    <div class="row my-4">
        <div class="owl-carousel">
            @foreach ($hospitals as $hospital)
                <div class="col mb-3">
                    <div class="card mx-3">
                        <h4 class="card-title" style="color: black;">{{ $hospital->name }}</h4>
                        <img src="{{ $hospital->image }}" alt="{{ $hospital->name }}" class="card-img-top" style="height: 200px;">
                        <div class="card-body" style="width: 300px;">
                            <a href="{{ route('hospital.single', ['hospital_id' => $hospital->hospital_id]) }}" class="btn btn-primary" style="text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5); margin-right:35%;">حجز موعد</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- hospital end --}}
    


    <!-- departments Start -->
        <div class="container-xxl py-5 sections mb-3"><hr>
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">الأقسام</div>
                    <h2 class="mb-5">الأقسام الرئيسية </h2>
                </div>
                <div class="row g-4 mx-4">
                    @php
                    use App\Models\Department;
                    $Alldepartments = Department::groupBy('name')->select('name', \DB::raw('MAX(id) as id'))->get();
                @endphp
                    @foreach ($Alldepartments as $department)
                    <div class="col-lg-4 col-md-6 wow fadeInUp"  data-wow-delay="0.1s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bandaid-fill" viewBox="0 0 16 16"><path d="m2.68 7.676 6.49-6.504a4 4 0 0 1 5.66 5.653l-1.477 1.529-5.006 5.006-1.523 1.472a4 4 0 0 1-5.653-5.66l.001-.002 1.505-1.492.001-.002Zm5.71-2.858a.5.5 0 1 0-.708.707.5.5 0 0 0 .707-.707ZM6.974 6.939a.5.5 0 1 0-.707-.707.5.5 0 0 0 .707.707ZM5.56 8.354a.5.5 0 1 0-.707-.708.5.5 0 0 0 .707.708Zm2.828 2.828a.5.5 0 1 0-.707-.707.5.5 0 0 0 .707.707Zm1.414-2.121a.5.5 0 1 0-.707.707.5.5 0 0 0 .707-.707Zm1.414-.707a.5.5 0 1 0-.706-.708.5.5 0 0 0 .707.708Zm-4.242.707a.5.5 0 1 0-.707.707.5.5 0 0 0 .707-.707Zm1.414-.707a.5.5 0 1 0-.707-.708.5.5 0 0 0 .707.708Zm1.414-2.122a.5.5 0 1 0-.707.707.5.5 0 0 0 .707-.707ZM8.646 3.354l4 4 .708-.708-4-4-.708.708Zm-1.292 9.292-4-4-.708.708 4 4 .708-.708Z"/></svg> 
                                </div>
                                <a class="service-btn" href="{{ url('/appointments-dates', ['department_id' => $department->id]) }}">
                                    <i class="fa fa-link fa-2x"></i>
                                </a>
                            </div>
                            <div class="p-5">
                                <h4 class="mb-3">{{ $department->name }}</h4>
                               <a href="{{ url('/appointments-dates', ['department_id' => $department->id]) }}"><span>احجز موعد عند {{ $department->name }}</span></a> 
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    <!-- sections End -->
    
    <!-- Subscribe Start -->
        <div class="container-xxl  my-6 wow fadeInUp subscribe" data-wow-delay="0.1s">
            <div class="container px-lg-5">
                <div class="row align-items-center" style="height: 250px;">
                    <div class="col-12 col-md-6">
                        <h3 class="text-primary">جاهز للبدء معنا ومتابعة جديدنا !</h3>
                        <small class="text-primary">اكتب بريدك الالكتروني ليصلك كل جديد</small>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="اكتب بريدك الالكتروني" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div>
                    <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                        <img class="img-fluid mt-5" style="max-height: 250px;" src="{{ asset('images//newsletter.png') }}">
                    </div>
                </div>
            </div>
        </div>
    <!-- Subscribe End -->



    @php
    // use App\Models\User;
    use App\Models\Doctor_schaduale;

// Get all doctors
$doctors = User::where('role', 'doctor')
    ->with(['doctors.appointments.review'])
    ->get();

// Filter out doctors with no appointments
$doctors = $doctors->filter(function ($doctor) {
    return optional(optional($doctor->doctors)->appointments)->isNotEmpty();
});

// Sort doctors based on average ratings in descending order
$doctors = $doctors->sortByDesc(function ($doctor) {
    $reviews = optional(optional($doctor->doctors)->appointments)->pluck('review')->pluck('review');
    $totalReviews = count($reviews);

    if ($totalReviews > 0) {
        $averageRating = $reviews->sum() / $totalReviews;
        return $averageRating;
    } else {
        return 0;
    }
})->take(4);
@endphp
    <!-- doctors Start -->
        <div class="container-xxl py-4">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h2 class="mb-5">الأطباء الأكثر تقييما :</h2>
                </div>
                <div class="row g-4">
                    @foreach ($doctors as $doctor)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <h5> د. {{ $doctor->name }}</h5>
                            <p class="mb-4">{{ $doctor->doctors->departments->name }}</p>
                            <div class="rating text-right my-3" dir="rtl">
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
                            {{-- <img class="img-fluid rounded-circle w-100 mb-4" src="{{ asset('images/team-1.jpg') }}" alt=""> --}}
                             <a href="{{ url('/doctor-single', ['doctor_id' => $doctor->doctors->id]) }}">
                            <img class="img-fluid rounded-circle w-100 mb-4" src="{{ $doctor->image }}" alt="">
                             </a>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    <!-- doctors End -->


    <!-- Reviews Start -->
    @php
    use App\Models\Appointment;
    $reviews = Appointment::has('review')
        ->with(['review', 'user', 'hospital', 'department', 'payment', 'doctor'])
        // ->orderByDesc('reviews.review') // Specify the table name in the order by clause
        ->take(8)
        ->get();
    @endphp
        <div class="container-xxl py-6">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">التقييمات</div>
                    <h2 class="mb-5">آراء عملائنا</h2>
                </div>
                <div class="owl-carousel  wow fadeInUp" data-wow-delay="0.2s" data-autoplay="true" data-autoplay-speed="5000">
                    @foreach ($reviews as $review)
                    <div class=" rounded p-4">
                        {{-- <i class="fa fa-quote-left fa-x text-primary mb-3"></i> --}}
                        
                        <div class="d-flex align-items-center">
                            @php
                            $avatarUrl = $review->user->image ?? 'https://bootdey.com/img/Content/avatar/avatar7.png';
                            @endphp
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset($avatarUrl) }}"style="width:60px;" alt="صورة المريض">
                         <div class="ps-3">
                                <h4 class="mb-1">{{ $review->user->name }}</h4>
                                 <p> &nbsp;  {{ $review->review->comment }}</p>
                                 <small> {{ $review->department->name }} &nbsp; &nbsp;</small>
                                 <small> د.{{ $review->doctor->name }}</small> 
                                {{-- <small> &nbsp; &nbsp;{{ $review->user->name }}</small> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    <!-- Reviews End -->


        <!-- why us Start -->
        <div class="container-xxl py-4">
            <div class="container">
                <div class="row g-5 ">
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">"سلامتك "</div>
                        <h2 class="mb-4">لماذا يختارنا المرضى ؟<br> ما الذي يميز موقع  <strong style="color: var(--dark);">"سلامتك"</strong>  عن المواقع المشابهة ؟</h2>
                        <p>يوفر موقعنا العديد من المزايا للمرضى وتحسين تجربتهم في الحصول على الرعاية الصحية. ويسهم في تيسير وتحسين عملية الحجز والتواصل مع مقدمي الرعاية الصحية وتعزيز المرونة والسرعة في الحصول على الخدمات الطبية المطلوبة.</p>
                        <a  href="{{ url('/about') }}">
                            <button class="btn btn-primary rounded-pill mt-4" style="width: 40%;height: 18%;"><h5 class="text-white">تعرف علينا أكثر</h5></button>
                        </a>
                    </div>
                    <div class="col-lg-7 ">
                        <div class="row g-5 aboutuscard">
                            <div class="col-sm-4 mx-4 wow fadeIn aboutus" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center mb-3 ">
                                    <div class="flex-shrink-0 btn-square rounded-circle me-3"style=" background-color: var(--dark);">
                                        <i class="fa fa-cubes text-white"></i>
                                    </div>
                                    <h6 class="mb-0">&nbsp;توفير الوقت</h6>
                                </div>
                            </div>
                            <div class="col-sm-4 mx-4 wow fadeIn aboutus" data-wow-delay="0.2s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square rounded-circle me-3"style=" background-color: var(--dark);">
                                        <i class="fa fa-percent text-white"></i>
                                    </div>
                                    <h6 class="mb-0">&nbsp;توفير الجهد</h6>
                                </div>
                            </div>
                            <div class="col-sm-4 mx-4 wow fadeIn aboutus" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square rounded-circle me-3"style=" background-color: var(--dark);">
                                        <i class="fa fa-award text-white"></i>
                                    </div>
                                    <h6 class="mb-0">&nbsp;تقليل التكلفة</h6>
                                </div>
                            </div>
                            <div class="col-sm-4 mx-4 wow fadeIn aboutus" data-wow-delay="0.4s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square rounded-circle me-3"style=" background-color: var(--dark);">
                                        <i class="fa fa-smile-beam text-white"></i>
                                    </div>
                                    <h6 class="mb-0"> &nbsp;تقليل الازدحام</h6>
                                </div>
                            </div>
                            <div class="col-sm-4 mx-4 wow fadeIn aboutus" data-wow-delay="0.5s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square rounded-circle me-3"style=" background-color: var(--dark);">
                                        <i class="fa fa-user-tie text-white"></i>
                                    </div>
                                    <h6 class="mb-0">&nbsp;تقييمات المرضى والتعليقات</h6>
                                </div>
                            </div>
                            <div class="col-sm-4 mx-4 wow fadeIn aboutus" data-wow-delay="0.6s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square rounded-circle me-3"style=" background-color: var(--dark);">
                                        <i class="fa fa-headset text-white"></i>
                                    </div>
                                    <h6 class="mb-0">&nbsp;التذكير بالمواعيد</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- why us End -->

@endsection

@section('js')
    <!-- Include Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    
    <!-- Include jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    
    <!-- Include Owl Carousel JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                loop:true,
                margin:20,
                rtl:true,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:true
                    },
                    600:{
                        items:3,
                        nav:false
                    },
                    1000:{
                        items:4,
                        nav:true,
                        loop:false
                    }
                },
                navText: [
                    "<svg fill='#000000' width='20px' height='20px' viewBox='0 0 24 24' id='prev' data-name='Flat Color' xmlns='http://www.w3.org/2000/svg' class='icon flat-color' transform='matrix(1, 0, 0, 1, 0, 0)'><g id='SVGRepo_bgCarrier' stroke-width='0'></g><g id='SVGRepo_tracerCarrier' stroke-linecap='round' stroke-linejoin='round'></g><g id='SVGRepo_iconCarrier'><path id='primary' d='M18.6,11.2l-12-9A1,1,0,0,0,5,3V21a1,1,0,0,0,.55.89,1,1,0,0,0,1-.09l12-9a1,1,0,0,0,0-1.6Z' style='fill: #cccccc;'></path></g></svg>",
                    "<svg fill='#000000' width='20px' height='20px' viewBox='0 0 24 24' id='next' data-name='Flat Color' xmlns='http://www.w3.org/2000/svg' class='icon flat-color' transform='matrix(-1, 0, 0, 1, 0, 0)'><g id='SVGRepo_bgCarrier' stroke-width='0'></g><g id='SVGRepo_tracerCarrier' stroke-linecap='round' stroke-linejoin='round'></g><g id='SVGRepo_iconCarrier'><path id='primary' d='M18.6,11.2l-12-9A1,1,0,0,0,5,3V21a1,1,0,0,0,.55.89,1,1,0,0,0,1-.09l12-9a1,1,0,0,0,0-1.6Z' style='fill: #cccccc;'></path></g></svg>"
                ]
            });
        });
    </script>
@endsection