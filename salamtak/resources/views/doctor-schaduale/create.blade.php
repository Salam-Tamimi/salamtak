@extends('layout-doctor')

@section('title', 'مواعيد الطبيب')

@section('content')
        <div class="my-4 mx-3" dir="rtl" style="text-align: right">
            <div class="container" dir="rtl" style=" margin:5%;text-align: right">
                <h2 style="text-align: right">إضافة ساعات الدوام</h2>
                <form method="POST" action="{{ route('doctor-schaduale.store') }}" enctype="multipart/form-data" style="width: 40%;">
                    @csrf
                    @method('POST')
                    
                    <div class="form-group" style="text-align: right">
                        <label for="day_of_week" style="text-align: right">اختر يوم من الأسبوع</label>
                        <select name="day_of_week" id="day_of_week" class="form-control" style="text-align: right">
                            @foreach($availableDays as $day)
                                <option value="{{ $day }}">{{ $day }}</option>
                            @endforeach
                        </select>
                    </div> <br>
                    
                    <div class="form-group" style="text-align: right">
                        <label for="start_time" style="text-align: right">يبدأ الدوام من الساعة</label>
                        <input type="time" name="start_time" class="form-control" required style="text-align: right">
                    </div> <br>
                    <div class="form-group" style="text-align: right">
                        <label for="end_time" style="text-align: right">ينتهي الدوام الساعة</label>
                        <input type="time" name="end_time" class="form-control" required style="text-align: right">
                    </div> <br>
                    <button type="submit" class="btn btn-primary" style="text-align: right">إضافة الجدول</button>
                </form>
            </div>
        </div>
    </div>
    @endsection