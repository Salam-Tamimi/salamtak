@extends('layout.master')

@section('content')
    <div class="container">
        <h2>Edit Doctor Schedule</h2>
        <form method="POST" action="{{ route('schedules.update', $schedule->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="day_of_week">Day of the Week</label>
                <input type="text" name="day_of_week" class="form-control" value="{{ $schedule->day_of_week }}" required>
            </div>
            <div class="form-group">
                <label for="start_time">Start Time</label>
                <input type="time" name="start_time" class="form-control" value="{{ $schedule->start_time }}" required>
            </div>
            <div class="form-group">
                <label for="end_time">End Time</label>
                <input type="time" name="end_time" class="form-control" value="{{ $schedule->end_time }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Schedule</button>
        </form>
    </div>
@endsection
