@extends('layout.master')

@section('content')
<div> <br> <br> <br> <br>
    <div class="my-4 mx-3"> <br> <br> <br> <br>
        <div class="container">
            <h2>Create Doctor Schedule</h2>
            <form method="POST" action="{{ route('doctor-schaduale.store') }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="day_of_week">Day of the Week</label>
                    <input type="text" name="day_of_week" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="start_time">Start Time</label>
                    <input type="time" name="start_time" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="end_time">End Time</label>
                    <input type="time" name="end_time" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Create Schedule</button>
            </form>
        </div>
    </div>
</div>
@endsection
