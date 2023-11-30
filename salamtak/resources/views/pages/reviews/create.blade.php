<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Add any additional stylesheets or scripts here -->

</head>
<body>

<!-- Display success message if present -->
@if(session('success'))
    <div class="alert alert-success" dir="rtl">
        {{ session('success') }}
    </div>
@endif

@php
    $appointments = Auth::user()->appointments;
    $past_appointments = $appointments->where('status', 1);
    $user = Auth::user();
@endphp
<h4 dir="rtl" style="margin-right: 12%; margin-top:3%;">إضافة تقييم للطبيب</h4>
<hr>
<!-- Add Review Form -->
<form action="{{ route('reviews.store', ['appointment' => $appointment->id]) }}" method="post" class="mx-auto mt-4" style="width: 70%;background-color:#B3CDE6;border-radius:20px;box-shadow: rgba(0, 0, 0, 0.15) 0px 15px 25px, rgba(0, 0, 0, 0.05) 0px 5px 10px; padding:5%" dir="rtl">
    @csrf
    @method('post')
    <!-- Select Appointment -->
    {{-- <div class="form-group">
        <label for="appointment_id">Select Appointment:</label>
        <select name="appointment_id" id="appointment_id" class="form-control">
            @foreach($past_appointments as $past_appointment)
                <option value="{{ $past_appointment->id }}">{{ $past_appointment->doctor->name }} - {{ $past_appointment->hospital->name }}</option>
            @endforeach
        </select>
    </div> --}}
    <input class="mb-3" type="hidden" name="appointment_id" value="{{ $appointment->id }}">
    <!-- Review Comment -->
    <div class="form-group mb-3">
        <label for="comment"class="mb-1" style="font-size:20px;">التعليق: <span style="color: rgb(217, 23, 23)">*</span></label>
        <textarea name="comment" id="comment" class="form-control mb-3" rows="3" placeholder="اكتب تعليقك عن الطبيب هنا"></textarea>
    </div>

    <!-- Review Rating -->
    <div class="form-group mb-3">
        <label for="review"class="mb-1 mt-3" style="font-size:20px;">التقييم: <span style="color: rgb(217, 23, 23)">*</span></label>
        <input type="number" name="review" id="review" class="form-control mb-3" min="1" max="5" placeholder="قيم من 1 الى 5" style="width: 17%;">
    </div>

    <!-- Submit Button -->
    <button type="submit" class="btn"style="font-size:20px; background-color:#0d51ac; color:white; margin-top:2%; padding:1.5%; box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px;">
        إرسال التقييم
    </button>
</form>

<!-- Bootstrap JS (optional, but may be required for certain components) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Add any additional scripts here -->

</body>
</html>
