@extends('layout.master')
@section('title','سلامتك - فلترة البحث')
@section('css')
      <!-- Stylesheets -->
  <link href="{{ asset('/css/filter.css') }}" rel="stylesheet">

  <script>
$(document).ready(function () {
  // Handle update appointment button
  $('.update-appointment').click(function () {
      $('.popup_box').css("display", "block");
      $('#blur').addClass("active");
  });

  $('.popup_box .btn1').click(function () {
      $('.popup_box').css("display", "none");
      $('#blur').removeClass("active");
  });

  $('.popup_box .btn2').click(function () {
      $('.popup_box').css("display", "none");
      $('#blur').removeClass("active");
      window.location.href = "{{ url('/doctor-single') }}";
  });

  // Handle cancel appointment button
  $('.cancel-appointment').click(function () {
      $('.popup_box2').css("display", "block");
      $('#blur').addClass("active");
  });

  $('.popup_box2 .btn1').click(function () {
      $('.popup_box2').css("display", "none");
      $('#blur').removeClass("active");
  });

  $('.popup_box2 .btn2').click(function () {
      $('.popup_box2').css("display", "none");
      $('#blur').removeClass("active");
      alert("لقد تم إلغاء حجزك");
  });
});

  </script>
@endsection
    @section('content')
            <div class="container mt-5">
        <strong class="row pb-3">الرئيسية / تصفية بحث المستشفيات الخاصة </strong>
        <div class="container-fluid pb-3 row">
            <form class="d-flex col-10" role="search">
              <input class="form-control me-2" type="search" placeholder="بحث" aria-label="Search">
              <button class="btn btn-primary searchbtn" type="submit" style="width: 10%;">بحث </button>
            </form>
        </div>
        <div class="row pb-3">
            <a href="#" class="col-md-6 text-center border-1 p-3 active" id="button1">
                <button class="col-md-6 text-center border-0 px-2 py-4" style="background-color:var(--primary);color:white;">
                    حجز موعد
                </button>
            </a>
            <a href="#" class="col-md-6 text-center border-0 p-3" id="button2">
                <button class="col-md-6 text-center border-0 px-2 py-4" style="background-color:white;">
                    إدارة المواعيد
                </button>
            </a>
        </div>   

        <div class="first" style="display: block;">
         
        <div class="row display-flex justify-content-around mx-3">
            <div class="col-md-7"style="margin-top:-50px;">
                <img src="{{ asset('/images/appoitment 1.png') }}" class="col-md-12"style="max-width: 95%;" alt="appointment image">
            </div>
            <div class="col-md-5 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title pb-2">فلترة البحث</h5>
                        <form>
                            <div class="mb-3">
                                <label for="doctorSelect" class="form-label">المستشفيات :</label>
                                <select class="form-select" id="doctorSelect">
                                    <option value="allhospitals">جميع المستشفيات</option>
                                    <option value="hospital1">مستشفى 1</option>
                                    <option value="hospital2">مستشفى 2</option>
                                    <option value="hospital3">مستشفى 3</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="doctorSelect" class="form-label">الأقسام :</label>
                                <select class="form-select" id="doctorSelect">
                                    <option value="alldepartments">جميع الأقسام</option>
                                    <option value="department1">قسم العيون</option>
                                    <option value="department2">قسم العظام</option>
                                    <option value="department3">قسم الأشعة</option>
                                    <option value="department4">قسم القلب</option>
                                    <option value="department5">قسم الجراحة</option>
                                    <option value="department6">قسم الولادة</option>
                                    <option value="department7">قسم الأطفال</option>
                                    <option value="department8">قسم العلاج الطبيعي</option>
                                    <option value="department9">قسم الباطني</option>
                                    <option value="department10">قسم الجلدية</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="doctorSelect" class="form-label">الأطباء :</label>
                                <select class="form-select" id="doctorSelect">
                                    <option value="alldoctors">جميع الأطباء</option>
                                    <option value="doctor1">طبيب 1</option>
                                    <option value="doctor2">طبيب 2</option>
                                    <option value="doctor3">طبيب 3</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="dateInput" class="form-label">التاريخ :</label>
                                <input type="date" class="form-control" id="dateInput">
                            </div>
                            <div class="mb-3">
                                <label for="timeSelect" class="form-label">التوقيت :</label>
                                <select class="form-select" id="timeSelect">
                                    <option value="all">جميع الأوقات</option>
                                    <option value="morning">صباحا</option>
                                    <option value="afternoon"> بعد الظهر </option>
                                    <option value="evening">مساء</option>
                                </select>
                            </div><br>
                            <a href="{{ url('/appointments') }}"><button type="submit" class="btn btn-primary searchbtn" style="width: 35%;">إبحث</button></a>
                        </form>
                    </div>
                </div>
            </div>
            

        </div>
        </div>
        <div class="second" style="display: none;">
            <div class="row">
                <div class="col-lg-4 col-md-6 ">
                    <!-- <img src="https://images.unsplash.com/photo-1524498250077-390f9e378fc0?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=83079913579babb9d2c94a5941b2e69d&auto=format&fit=crop&w=751&q=80" class="rounded"> -->
                  <!-- <img src="https://images.unsplash.com/photo-1528249227670-9ba48616014f?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=66b8e7db17b83084f16fdeadfc93b95b&auto=format&fit=crop&w=357&q=80" class="rounded"> -->
                        <div class="card" >
                          <div class="p-3 doctorscard">
                              <div>
                                  <h4 class="card-title">مستشفى  اربد التخصصي</h4>
                                  <img src="{{ asset('images/doctor1.png') }}" class="rounded-start " style="height:300px;" alt="doctor image" >
                                  <div>
                                      <svg width="30px" height="30px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M923.2 429.6H608l-97.6-304-97.6 304H97.6l256 185.6L256 917.6l256-187.2 256 187.2-100.8-302.4z" fill="#FAD97F"></path><path d="M1024 396H633.6L512 21.6 390.4 396H0l315.2 230.4-121.6 374.4L512 770.4l316.8 232L707.2 628 1024 396zM512 730.4l-256 187.2 97.6-302.4-256-185.6h315.2l97.6-304 97.6 304h315.2l-256 185.6L768 917.6l-256-187.2z" fill=""></path></g></svg>
                                      <svg width="30px" height="30px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M923.2 429.6H608l-97.6-304-97.6 304H97.6l256 185.6L256 917.6l256-187.2 256 187.2-100.8-302.4z" fill="#FAD97F"></path><path d="M1024 396H633.6L512 21.6 390.4 396H0l315.2 230.4-121.6 374.4L512 770.4l316.8 232L707.2 628 1024 396zM512 730.4l-256 187.2 97.6-302.4-256-185.6h315.2l97.6-304 97.6 304h315.2l-256 185.6L768 917.6l-256-187.2z" fill=""></path></g></svg>
                                      <svg width="30px" height="30px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M923.2 429.6H608l-97.6-304-97.6 304H97.6l256 185.6L256 917.6l256-187.2 256 187.2-100.8-302.4z" fill="#FAD97F"></path><path d="M1024 396H633.6L512 21.6 390.4 396H0l315.2 230.4-121.6 374.4L512 770.4l316.8 232L707.2 628 1024 396zM512 730.4l-256 187.2 97.6-302.4-256-185.6h315.2l97.6-304 97.6 304h315.2l-256 185.6L768 917.6l-256-187.2z" fill=""></path></g></svg>
                                      <svg width="30px" height="30px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="icomoon-ignore"> </g> <path d="M19.38 12.803l-3.38-10.398-3.381 10.398h-11.013l8.925 6.397-3.427 10.395 8.896-6.448 8.895 6.448-3.426-10.395 8.925-6.397h-11.014zM20.457 19.534l2.394 7.261-6.85-4.965-6.851 4.965 2.64-8.005-0.637-0.456-6.228-4.464h8.471l2.606-8.016 2.605 8.016h8.471l-6.864 4.92 0.245 0.744z" fill="#000000"> </path> </g></svg>
                                      <svg width="30px" height="30px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="icomoon-ignore"> </g> <path d="M19.38 12.803l-3.38-10.398-3.381 10.398h-11.013l8.925 6.397-3.427 10.395 8.896-6.448 8.895 6.448-3.426-10.395 8.925-6.397h-11.014zM20.457 19.534l2.394 7.261-6.85-4.965-6.851 4.965 2.64-8.005-0.637-0.456-6.228-4.464h8.471l2.606-8.016 2.605 8.016h8.471l-6.864 4.92 0.245 0.744z" fill="#000000"> </path> </g></svg>
                                      <span><a href="{{ url('/doctor-single#reviews') }}"><button style="font-size: small;color:dodgerblue;text-decoration:underline;"class="btn btn-link">التقييمات</button></a></span>
                                    </div>
                                    
                                  <div class="card-body">
                                    <h4 class="card-title">د. منى محمود</h4>
                                    <p class="card-text">التاريخ: 31-12-2023<br>
                                        اليوم: الأحد<br>
                                        التوقيت: 9:00 صباحا</p>
                                    <div class="d-flex">
                                        <button class="btn btn-success border update-appointment "><h4>تعديل الموعد</h4></button>
                                        <button class="btn btn-danger border cancel-appointment "><h4>ألغاء الحجز</h4></button>
                                    </div>
                                </div>
                                  </div>
                              </div>
                          </div>
                </div>

              </div>
        </div>

    </div>
    @endsection


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
<script>
    document.getElementById('button1').addEventListener('click', function() {
        document.querySelector('.first').style.display = 'block';
        document.querySelector('.second').style.display = 'none';
    });

    document.getElementById('button2').addEventListener('click', function() {
        document.querySelector('.first').style.display = 'none';
        document.querySelector('.second').style.display = 'block';
    });
</script>
<script src="plugins/jquery.js"></script>

<!-- Slick Slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- FancyBox -->
<script src="plugins/fancybox/jquery.fancybox.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="plugins/google-map/gmap.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
<script src="/js/profile.js"></script>
  
<script src="plugins/validate.js"></script>
<script src="plugins/wow.js"></script>
<script src="plugins/jquery-ui.js"></script>
<script src="plugins/timePicker.js"></script>
@endsection