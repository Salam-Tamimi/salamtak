@extends('layout.master')
@section('title','المستشفيات')
@section('css')
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/hospitals.css') }}">

@endsection
@section('content')
  <div class="contain">
  <strong class="row mb-4">الرئيسية / المستشفيات</strong>
<div>
  <form class="d-flex " role="search">
    <input class="form-control me-2" type="search" placeholder="بحث" aria-label="Search"style="width: 80%;height: 30px;">
    <button class="btn btn-primary searchbtn" type="submit" style="width: 10%;">بحث </button>
  </form>
</div>
</div>
<!-- start of hero -->
<section class="hero-slider hero-style">
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="slide-inner slide-bg-image grayscale-filter" data-background="{{ asset('images/hospital5.jpg') }}">
          <div class="textbox">
            <div data-swiper-parallax="300" class="slide-title">
              <h2 style=" text-shadow: rgb(32, 107, 227) 5px 5px 5px;">مستشفى ابن النفيس</h2>
            </div>
            <div data-swiper-parallax="400" class="slide-text">
              <p style=" text-shadow: rgb(32, 107, 227) 5px 5px 5px;color: #0d51ac">هل تريد ان ترى المزيد من التفاصيل؟</p>
            </div>
            <div class="clearfix"></div>
            <div data-swiper-parallax="500" class="slide-btns">
              <a href="{{ url('/hospital-single') }}" class="theme-btn-s2" style=" text-shadow: rgb(32, 107, 227) 5px 5px 5px;">المزيد</a>
            </div>
          </div>
        </div>
        <!-- end slide-inner -->
      </div>
      <!-- end swiper-slide -->

      <div class="swiper-slide">
        <div class="slide-inner slide-bg-image grayscale-filter" data-background="{{ asset('images/hospital4.jpg') }}">
          <div class="container">
            <div data-swiper-parallax="300" class="slide-title">
              <h2>مستشفى الراهبات الوردية</h2>
            </div>
            <div data-swiper-parallax="400" class="slide-text">
              <p>هل تريد ان ترى المزيد من التفاصيل؟</p>
            </div>
            <div class="clearfix"></div>
            <div data-swiper-parallax="500" class="slide-btns">
              <a href="{{ url('/hospital-single') }}" class="theme-btn-s2">المزيد</a>
            </div>
          </div>
        </div>
        <!-- end slide-inner -->
      </div>
      <!-- end swiper-slide -->
      <div class="swiper-slide">
        <div class="slide-inner slide-bg-image grayscale-filter" data-background="{{ asset('images/hospital3.jpg') }}">
          <div class="container">
            <div data-swiper-parallax="300" class="slide-title">
              <h2>مستشفى القواسمي</h2>
            </div>
            <div data-swiper-parallax="400" class="slide-text">
              <p>هل تريد ان ترى المزيد من التفاصيل؟</p>
            </div>
            <div class="clearfix"></div>
            <div data-swiper-parallax="500" class="slide-btns">
              <a href="{{ url('/hospital-single') }}" class="theme-btn-s2">المزيد</a>
            </div>
          </div>
        </div>
        <!-- end slide-inner -->
      </div>
      <!-- end swiper-slide -->
      <div class="swiper-slide">
        <div class="slide-inner slide-bg-image grayscale-filter" data-background="{{ asset('images/hospital2.jpg') }}">
          <div class="container">
            <div data-swiper-parallax="300" class="slide-title">
              <h2>مستشفى الإسلامي</h2>
            </div>
            <div data-swiper-parallax="400" class="slide-text">
              <p>هل تريد ان ترى المزيد من التفاصيل؟</p>
            </div>
            <div class="clearfix"></div>
            <div data-swiper-parallax="500" class="slide-btns">
              <a href="{{ url('/hospital-single') }}" class="theme-btn-s2">المزيد</a>
            </div>
          </div>
        </div>
        <!-- end slide-inner -->
      </div>
      <!-- end swiper-slide -->
    </div>
    <!-- end swiper-wrapper -->

    <!-- swipper controls -->
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</section>
<!-- end of hero slider -->        

@endsection

@section('js')
  <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script  src="./script.js"></script>
<script src="/js/hospitals.js"></script>
@endsection


