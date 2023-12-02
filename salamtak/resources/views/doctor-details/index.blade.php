@extends('layout-doctor')

@section('title', 'تفاصيل الطبيب')

@section('content')
@php
    use App\Models\Doctor_schaduale;
    $doctor_id = auth()->user()->doctor_id;
@endphp

<div >
  <a href="{{ route('doctor-details.create') }}" class="btn btn-primary m-4">إضافة معلومات</a>
  <a href="{{ route('doctor-schaduale.create') }}" class="btn btn-primary m-4">إضافة جدول الدوام الأسبوعي</a>
  @if ($doctor_id)
  <a href="{{ route('doctor-appointments.index', ['doctor_id' => $doctor_id]) }}" class="btn btn-primary m-4">جدول الحجوزات</a>
@endif
</div>

        {{-- <div id="blur"> --}}
          <div class="d-flex justify-content-around flex-wrap mx-5 row ">
    {{-- <img src="{{ asset('/images/doctor2.png') }}" alt="صورة الدكتور" style="width: 24%;"> --}}
    <div class="col mt-1 d-flex" >
    <img src="{{ asset(Auth::user()->image) }}" alt="صورة الدكتور" style="width: 200px; margin-left:2%;">
    
    <h2>د. {{ Auth::user()->name }}   &nbsp;</h2>  
    
</div>
</div>
@endsection






