@extends('layout.master')
@section('title','سلامتك - معلومات الطبيب')
@section('css')
      <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link href="{{ asset('/css/doctor-single.css') }}" rel="stylesheet">
@endsection
@section('content') <br> <br> <br> <br> 
<a href="{{ route('doctor-details.create') }}" class="btn btn-primary m-4">إضافة معلومات</a>
<a href="{{ route('doctor-schaduale.create') }}" class="btn btn-primary m-4">إضافة جدول الدوام الأسبوعي</a>

        {{-- <div id="blur"> --}}
          <div class="d-flex justify-content-around flex-wrap mx-5 row ">
    {{-- <img src="{{ asset('/images/doctor2.png') }}" alt="صورة الدكتور" style="width: 24%;"> --}}
    <div class="col mt-5 d-flex"> 
    <img src="{{ asset(Auth::user()->image) }}" alt="صورة الدكتور" style="width: 24%;">
    
    <h2>د. {{ Auth::user()->name }}   &nbsp;</h2>  
    
</div>
</div>

@endsection





