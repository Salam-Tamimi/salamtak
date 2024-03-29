@extends('layout.master')
@section('title', 'سلامتك - الصفحة الرئيسية ')
@section('css')
<link href="{{ asset('/css/profile.css') }}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    {{-- <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> --}}

    {{-- <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous"> --}}
 
   @endsection
@section('content')
@php
    $appointments = Auth::user()->appointments;
    $past_appointments = $appointments->where('status', 1);
    $future_appointments = $appointments->where('status', 0);
    $user=Auth::user();
// $avatarUrl = $user->image ?? ($user->gender === 'female' ? 'https://img.freepik.com/premium-vector/vector-hand-drawn-flat-colourful_637178-464.jpg?size=338&ext=jpg&ga=GA1.1.44546679.1699315200&semt=ais' : 'https://bootdey.com/img/Content/avatar/avatar7.png');
$avatarUrl = $user->image ?? ('https://bootdey.com/img/Content/avatar/avatar7.png');
// dd($user->gender);
@endphp

    <div class="page-header header-filter" data-parallax="true" style="background-image:url('http://wallpapere.org/wp-content/uploads/2012/02/black-and-white-city-night.png');"></div>
@if(isset($success))
        <div class="alert alert-success">
            {{ $success }}
        </div>
@endif
    <div class="main main-raised"style="margin-top:-40%; padding-top:5%;">
		<div class="profile-content">
            <div class="container">
                <div class="row" style="margin-right:45%;">
	                {{-- <div class="col-md-6 ml-auto mr-auto">
        	          <div class="profile"> --}}
	                        <div class="avata"  >
	                            {{-- <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Circle Image" class="img-raised rounded-circle"> --}}
                              <img src="{{ $avatarUrl }}" alt="Circle Image" class="img-raised rounded-circle" style="width:15%;padding:1%;">
                              <h4 class="title" style="margin-left: 30%"> {{ $user->name }}&nbsp; &nbsp; &nbsp; </h4>
                          </div>
	                        {{-- <div class="name">
									        </div> --}}
	                  {{-- </div>
    	            </div> --}}
                </div>
               				<div class="row">
					<div class="  d-flex justify-content-center">
                        <div class="profile-tabs">
                          <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#studio" role="tab" data-toggle="tab">
                                  <i class="material-icons"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 392.533 392.533" xml:space="preserve" width="40px" height="40px" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path style="fill:#FFFFFF;" d="M359.822,370.715c6.012,0,10.925-4.848,10.925-10.925V136.76H21.786v222.901 c0,6.012,4.848,10.925,10.925,10.925h327.111V370.715z"></path> <g> <path style="fill:#f7f7f7;" d="M119.919,64.226V32.679c0-6.012-4.848-10.925-10.925-10.925c-6.077,0-10.925,4.913-10.925,10.925 v31.612c0,6.012,4.848,10.925,10.925,10.925C115.071,75.216,119.919,70.303,119.919,64.226z"></path> <path style="fill:#f7f7f7;" d="M294.4,64.226V32.679c0-6.012-4.848-10.925-10.925-10.925c-6.077,0-10.925,4.848-10.925,10.925 v31.612c0,6.012,4.848,10.925,10.925,10.925C289.552,75.216,294.4,70.303,294.4,64.226z"></path> <rect x="72.469" y="183.693" style="fill:#f7f7f7;" width="32.711" height="32.711"></rect> </g> <rect x="179.911" y="183.693" style="fill:#c2c2c2;" width="32.711" height="32.711"></rect> <rect x="287.354" y="183.693" style="fill:#f7f7f7;" width="32.711" height="32.711"></rect> <rect x="72.469" y="289.261" style="fill:#c2c2c2;" width="32.711" height="32.711"></rect> <rect x="179.911" y="289.261" style="fill:#f7f7f7;" width="32.711" height="32.711"></rect> <rect x="287.354" y="289.261" style="fill:#c2c2c2;" width="32.711" height="32.711"></rect> <path style="fill:#a3a3a3;" d="M359.822,37.592h-43.572v-4.848c0-18.036-14.675-32.711-32.711-32.711 c-18.036,0-32.711,14.675-32.711,32.711v4.848H141.705v-4.848c0-18.036-14.675-32.711-32.711-32.711S76.283,14.707,76.283,32.743 v4.848H32.711C14.675,37.592,0,52.267,0,70.303V359.79c0,18.036,14.675,32.711,32.711,32.711h327.111 c18.036,0,32.711-14.675,32.711-32.711V70.303C392.533,52.267,377.859,37.592,359.822,37.592z M272.614,32.679 c0-6.012,4.848-10.925,10.925-10.925c6.077,0,10.925,4.913,10.925,10.925v31.612c0,6.012-4.848,10.925-10.925,10.925 c-6.077,0-10.925-4.848-10.925-10.925V32.679z M98.133,32.679c0-6.012,4.848-10.925,10.925-10.925s10.925,4.848,10.925,10.925 v31.612c0,6.012-4.848,10.925-10.925,10.925s-10.925-4.848-10.925-10.925V32.679z M370.747,359.79 c0,6.012-4.848,10.925-10.925,10.925H32.711c-6.012,0-10.925-4.848-10.925-10.925V136.76h348.962L370.747,359.79L370.747,359.79z M370.747,115.038H21.786V70.303c0-6.012,4.848-10.925,10.925-10.925h43.572v4.848c0,18.036,14.675,32.711,32.711,32.711 s32.711-14.675,32.711-32.711v-4.848h109.059v4.848c0,18.036,14.675,32.711,32.711,32.711c18.036,0,32.711-14.675,32.711-32.711 v-4.848h43.572c6.012,0,10.925,4.848,10.925,10.925v44.735L370.747,115.038L370.747,115.038z"></path> <path style="fill:#c2c2c2;" d="M21.786,70.303v44.735h348.962V70.303c0-6.012-4.848-10.925-10.925-10.925H316.25v4.848 c0,18.036-14.675,32.711-32.711,32.711c-18.036,0-32.711-14.675-32.711-32.711v-4.848H141.705v4.848 c0,18.036-14.675,32.711-32.711,32.711S76.283,82.263,76.283,64.226v-4.848H32.711C26.699,59.378,21.786,64.226,21.786,70.303z"></path> <g> <path style="fill:#a3a3a3;" d="M61.608,238.19h54.497c6.012,0,10.925-4.848,10.925-10.925v-54.562 c0-6.012-4.848-10.925-10.925-10.925H61.608c-6.012,0-10.925,4.848-10.925,10.925v54.562 C50.683,233.341,55.531,238.19,61.608,238.19z M72.469,183.693h32.711v32.711H72.469C72.469,216.404,72.469,183.693,72.469,183.693 z"></path> <path style="fill:#a3a3a3;" d="M168.986,238.19h54.562c6.012,0,10.925-4.848,10.925-10.925v-54.562 c0-6.012-4.848-10.925-10.925-10.925h-54.562c-6.012,0-10.925,4.848-10.925,10.925v54.562 C158.125,233.341,162.974,238.19,168.986,238.19z M179.911,183.693h32.711v32.711h-32.711V183.693z"></path> <path style="fill:#a3a3a3;" d="M276.493,238.19h54.562c6.012,0,10.925-4.848,10.925-10.925v-54.562 c0-6.012-4.848-10.925-10.925-10.925h-54.562c-6.012,0-10.925,4.848-10.925,10.925v54.562 C265.568,233.341,270.481,238.19,276.493,238.19z M287.354,183.693h32.711v32.711h-32.711V183.693z"></path> <path style="fill:#a3a3a3;" d="M61.608,343.822h54.497c6.012,0,10.925-4.848,10.925-10.925v-54.562 c0-6.012-4.848-10.925-10.925-10.925H61.608c-6.012,0-10.925,4.849-10.925,10.925v54.562 C50.683,338.909,55.531,343.822,61.608,343.822z M72.469,289.261h32.711v32.711H72.469 C72.469,321.972,72.469,289.261,72.469,289.261z"></path> <path style="fill:#a3a3a3;" d="M168.986,343.822h54.562c6.012,0,10.925-4.848,10.925-10.925v-54.562 c0-6.012-4.848-10.925-10.925-10.925h-54.562c-6.012,0-10.925,4.849-10.925,10.925v54.562 C158.125,338.909,162.974,343.822,168.986,343.822z M179.911,289.261h32.711v32.711h-32.711V289.261z"></path> <path style="fill:#a3a3a3;" d="M276.493,343.822h54.562c6.012,0,10.925-4.848,10.925-10.925v-54.562 c0-6.012-4.848-10.925-10.925-10.925h-54.562c-6.012,0-10.925,4.849-10.925,10.925v54.562 C265.568,338.909,270.481,343.822,276.493,343.822z M287.354,289.261h32.711v32.711h-32.711V289.261z"></path> </g> </g></svg>
                                  </i>
                                  <h5>
                                  مواعيدي السابقة
                                  </h5>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#works" role="tab" data-toggle="tab">
                                  <i class="material-icons"><svg height="40px" width="40px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 390.271 390.271" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path style="fill:#ffffff;" d="M289.972,126.836v53.139h-4.848c-53.139,0-97.034,39.564-104.081,90.505H21.689V126.836H289.972z"></path> <g> <path style="fill:#e4e3e2;" d="M289.972,55.273h-42.796v22.756c0,5.947-4.848,10.861-10.861,10.861 c-5.947,0-10.861-4.848-10.861-10.861V55.273H66.166v22.756c0,5.947-4.848,10.861-10.861,10.861S44.444,84.04,44.444,78.028V55.273 H21.689v49.842h268.283V55.273z"></path> <path style="fill:#e4e3e2;" d="M368.582,284.509c0,46.61-37.366,83.976-83.976,83.976c-46.093,0-84.04-37.366-84.04-83.976 c0-46.093,37.366-84.04,84.04-84.04S368.582,238.481,368.582,284.509z"></path> </g> <g> <path style="fill:#b8b8b8;" d="M311.628,182.626V44.412c0-5.947-4.849-10.861-10.861-10.861h-53.657V10.861 C247.111,4.913,242.263,0,236.251,0c-5.947,0-10.861,4.848-10.861,10.861v22.756H66.166V10.861C66.166,4.913,61.317,0,55.305,0 S44.444,4.848,44.444,10.861v22.756H10.893c-5.947,0-10.861,4.848-10.861,10.861V280.76c0,5.948,4.848,10.861,10.861,10.861 h168.533c3.232,54.756,49.325,98.651,105.115,98.651c57.988,0,105.697-47.127,105.697-105.697 C390.238,235.766,356.622,194.586,311.628,182.626z M284.541,368.549c-46.093,0-83.976-37.366-83.976-83.976 c0-46.093,37.366-83.976,83.976-83.976s83.976,37.947,83.976,83.976C368.582,331.119,331.152,368.549,284.541,368.549z M21.689,55.273h22.756v22.756c0,5.947,4.848,10.861,10.861,10.861s10.861-4.848,10.861-10.861V55.273h159.354v22.756 c0,5.947,4.848,10.861,10.861,10.861c5.947,0,10.861-4.848,10.861-10.861V55.273h42.796v49.842H21.754V55.273H21.689z M21.689,126.836h268.283v53.139c-1.616,0-3.232,0-4.848,0c-53.139,0-97.034,39.564-104.081,90.505H21.689V126.836z"></path> <path style="fill:#b8b8b8;" d="M91.055,151.725H67.782c-5.947,0-10.861,4.848-10.861,10.861s4.848,10.861,10.861,10.861h23.273 c5.947,0,10.861-4.848,10.861-10.861S97.067,151.725,91.055,151.725z"></path> <path style="fill:#b8b8b8;" d="M167.467,151.725h-23.273c-5.947,0-10.861,4.848-10.861,10.861s4.848,10.861,10.861,10.861h23.273 c5.947,0,10.861-4.848,10.861-10.861S173.479,151.725,167.467,151.725z"></path> <path style="fill:#b8b8b8;" d="M220.606,173.446h23.273c5.947,0,10.861-4.848,10.861-10.861c0-6.012-4.848-10.861-10.861-10.861 h-23.273c-5.947,0-10.861,4.848-10.861,10.861C209.745,168.598,214.659,173.446,220.606,173.446z"></path> <path style="fill:#b8b8b8;" d="M91.055,215.143H67.782c-5.947,0-10.861,4.848-10.861,10.861c0,5.947,4.848,10.861,10.861,10.861 h23.273c5.947,0,10.861-4.848,10.861-10.861C101.915,220.057,97.067,215.143,91.055,215.143z"></path> <path style="fill:#b8b8b8;" d="M167.467,215.143h-23.273c-5.947,0-10.861,4.848-10.861,10.861c0,5.947,4.848,10.861,10.861,10.861 h23.273c5.947,0,10.861-4.848,10.861-10.861C178.327,220.057,173.479,215.143,167.467,215.143z"></path> <path style="fill:#b8b8b8;" d="M322.489,276.428h-27.087v-53.657c0-5.947-4.848-10.861-10.861-10.861 c-5.947,0-10.861,4.848-10.861,10.861v64.517c0,5.947,4.848,10.861,10.861,10.861h37.947c5.947,0,10.861-4.848,10.861-10.861 S328.436,276.428,322.489,276.428z"></path> </g> </g></svg>
                                  </i>
                                  <h5>
                                    مواعيدي القادمة
                                  </h5>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#favorite" role="tab" data-toggle="tab">
                                  <i class="material-icons"><svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M11 15C10.1183 15 9.28093 14.8098 8.52682 14.4682C8.00429 14.2315 7.74302 14.1131 7.59797 14.0722C7.4472 14.0297 7.35983 14.0143 7.20361 14.0026C7.05331 13.9914 6.94079 14 6.71575 14.0172C6.6237 14.0242 6.5425 14.0341 6.46558 14.048C5.23442 14.2709 4.27087 15.2344 4.04798 16.4656C4 16.7306 4 17.0485 4 17.6841V19.4C4 19.9601 4 20.2401 4.10899 20.454C4.20487 20.6422 4.35785 20.7951 4.54601 20.891C4.75992 21 5.03995 21 5.6 21H8.4M15 7C15 9.20914 13.2091 11 11 11C8.79086 11 7 9.20914 7 7C7 4.79086 8.79086 3 11 3C13.2091 3 15 4.79086 15 7ZM12.5898 21L14.6148 20.595C14.7914 20.5597 14.8797 20.542 14.962 20.5097C15.0351 20.4811 15.1045 20.4439 15.1689 20.399C15.2414 20.3484 15.3051 20.2848 15.4324 20.1574L19.5898 16C20.1421 15.4477 20.1421 14.5523 19.5898 14C19.0376 13.4477 18.1421 13.4477 17.5898 14L13.4324 18.1574C13.3051 18.2848 13.2414 18.3484 13.1908 18.421C13.1459 18.4853 13.1088 18.5548 13.0801 18.6279C13.0478 18.7102 13.0302 18.7985 12.9948 18.975L12.5898 21Z" stroke="#d6d6d6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                  </i>
                                  <h5>
                                    معلوماتي
                                  </h5>
                                </a>
                            </li>
                          </ul>
                        </div>
    	    	</div>
            </div>
        
          <div class="tab-content tab-space">
            <div class="tab-pane active text-center gallery" id="studio">
  				<div class="row">
  					<div class="col-md-4 ">
             @if ($past_appointments)
             @foreach ($past_appointments as $appointment)
             <div class="card mb-4" style="border: 1px solid #dee2e6; box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;margin-right:5%;" >
                     <div class="p-3 doctorscard">
                         <div>
                             <h5 class="card-title">{{ $appointment->hospital->name }}</h5>
                             <img src="{{ $appointment->doctor->image }}" class="img-fluid rounded-start " style="height:300px;" alt="doctor image" >
                             <a href="{{ route('reviews.create', ['appointment' => $appointment->id]) }}">
                               @if (!$appointment->review)
                                   <button class="btnreview py-3">قيم الطبيب</button>
                               @endif
                           </a>
                           <div class="rating text-right my-3" dir="rtl">
                            @php
                                $reviews = $appointment->doctor->appointments->pluck('review')->pluck('review');
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
                               
                             <div class="card-body">
                                 <h4 class="card-title"> د. {{ $appointment->doctor->name }} </h4>
                                 <p class="card-text"> اليوم: {{ $appointment->day_of_week }}<br>
                                   التوقيت: {{ $appointment->start_time }} - {{ $appointment->end_time }}<br>
                                    تمت عملية الحجز: {{ $appointment->created_at->format(' Y-m-d ') }}
                                 </p>
                                     <div class="d-flex btns ">
                                         <button class="btn disabled" style="background-color:#c4c4c4;margin-right:35%;text-align:center;"><h4>احجز </h4></button> 
                                         {{-- <button class="btn btn-info disabled"><h4>من أنا ؟</h4></button>   --}}
                                       </div>
                                     </div>
                             </div>
                         </div>
                     </div>
                    @endforeach
                    @else
                        <div>
                          <p>لا يوجد حجوزات لحد الآن ...</p>
                        </div>
                    @endif
            </div>
  				</div>
  			</div>
            <div class="tab-pane text-center gallery" id="works">
              <div class="row">
                @foreach ($future_appointments as $appointment)      
                <div class="col-lg-4 col-md-6 ">
                  <div class="card" style="border: 1px solid #dee2e6; box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;margin-right:5%;">
                          <div class="p-3 doctorscard">
                              <div>
                                  <h5 class="card-title">{{ $appointment->hospital->name }}</h5>
                                  <img src="{{ $appointment->doctor->image }}" class="rounded-start " style="height:300px;" alt="doctor image" >
                                  <div class="rating text-right my-3" dir="rtl">
                                    @php
                                        $reviews = $appointment->doctor->appointments->pluck('review')->pluck('review');
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
                                    
                                  <div class="card-body">
                                    <h4 class="card-title">د. {{ $appointment->doctor->name }} </h4>
                                    <p class="card-text">
                                       اليوم: {{ $appointment->day_of_week }}<br>
                                      التوقيت: {{ $appointment->start_time }} - {{ $appointment->end_time }}<br>
                                       تمت عملية الحجز: {{ $appointment->created_at->format(' Y-m-d ') }}</p>
                                    <div class="d-flex">
                                      <a href="{{ route('appointments.edit', ['id' => $appointment->id]) }}" class="btn mx-3 btn-success border" style="color:white; font-size:20px;">
                                        <button class="btn btn-success update-appointment" style="color:white; font-size:20px; padding:0px;" ><p>تعديل الموعد</p></button>
                                      </a>
                                      <form action="{{ route('appointments.destroy', ['id' => $appointment->id]) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger border cancel-appointment" style="color:white; font-size:20px;"><p>إلغاء الحجز</p></button>
                                    </form>
                                    </div>
                                </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                        @endforeach
              </div>
  			</div>
            <div class="tab-pane text-center gallery" id="favorite">
      			<div class="row">

                <div class="container">
                  <div class="row gutters">
                  <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                  <div class="card h-100">
                    <div class="card-body">
                      <div class="account-settings">
                        <div class="user-profile">
                          <div class="user-avatar">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
                          </div>
                          <h4 class="user-name">{{ $user->name }} </h4><br>
                          <h6 class="user-email">{{ $user->name }}</h6><br>
                          <a href=""style="text-decoration:underline;color:dodgerblue;">تغيير كلمة المرور</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                  <div class="card h-100">
                    <div class="card-body">
                      <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                          <h4 class="mb-2 text-dark">المعلومات الشخصية</h4>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                          <div class="form-group">
                            <label for="fullName">الإسم الكامل</label>
                            <input type="text" class="form-control" id="fullName" value="{{ $user->name }}">
                          </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                          <div class="form-group">
                            <label for="email">البريد الإلكتروني</label>
                            <input type="email" class="form-control" id="email" value="{{ $user->email }}">
                          </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                          <div class="form-group">
                            <label for="phone">رقم الهاتف المحمول</label>
                            <input type="text" class="form-control" id="phone" value="{{ $user->mobile }}">
                          </div>
                        </div>
                      </div>
                      <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                          <div class="text-right d-flex">
                            <button class="btn btn-danger border"style="font-size: 22px;">إلغاء</button>
                            <button class="btn btn-primary border"style="font-size: 22px;">تعديل</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                  </div>
                  </div>
      			</div>
      		</div>
          </div>

        
            </div>
        </div>
	</div>
	
    
  @section('js')

  <!-- ********* confirmation popup ********* -->
<div class="popup_box">
  <i class="fas fa-exclamation"></i>
  <h1>سيتم تعديل موعدك</h1>
  <label>هل انت متأكد من تعديل موعد الحجز؟</label>
  <div class="btnsupdate">
      <a href="#" class="btn1">إلغاء</a>
      <a href="#" class="btn2">تعديل الحجز</a>
  </div>
</div>
<!-- *********  end confirmation popup ********* -->
<div class="popup_box2">
  <i class="fas fa-exclamation"></i>
  <h1>سيتم إلغاء حجزك </h1>
  <label>هل انت متأكد من إلغاء الحجز؟</label>
  <div class="btnsupdate">
      <a href="#" class="btn1">إغلاق</a>
      <a href="#" class="btn2"style="background-color:red;">إلغاء الحجز</a>
  </div>
</div>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
@endsection
@endsection