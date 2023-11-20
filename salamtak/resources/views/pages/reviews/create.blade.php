<!-- Display success message if present -->
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@php
    $appointments = Auth::user()->appointments;
    $past_appointments = $appointments->where('status', 1);
    $user = Auth::user();
@endphp

<!-- Add Review Form -->
<form action="{{ route('reviews.store', ['appointment' => $appointment->id]) }}" method="post">
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
    <input type="hidden" name="appointment_id" value="{{ $appointment->id }}">
    <!-- Review Comment -->
    <div class="form-group">
        <label for="comment">Comment:</label>
        <textarea name="comment" id="comment" class="form-control" rows="3" placeholder="Add your comment"></textarea>
    </div>

    <!-- Review Rating -->
    <div class="form-group">
        <label for="review">Rating:</label>
        <input type="number" name="review" id="review" class="form-control" min="1" max="5" placeholder="Enter rating">
    </div>

    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary">Submit Review</button>
</form>
