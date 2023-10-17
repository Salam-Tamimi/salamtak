{{-- @extends('layout.master')

@section('content') --}}
<div> <br> <br> <br> <br>
    <div class="my-4 mx-3"> <br> <br> <br> <br>
        <div class="container">
            <h2>Create Doctor Schedule</h2>
            <form method="POST" action="{{ route('doctor-schaduale.store') }}" enctype="multipart/form-data">
                @csrf
                @method('POST')
                {{-- <div class="form-group">
                    <label for="day_of_week">Day of the Week</label>
                    <input type="text" name="day_of_week" class="form-control" required>
                </div> --}}
                {{-- <div class="form-group">
                    <label>Choose Days of the Week</label>
                    <div>
                        <input type="checkbox" name="day_of_week[]" value="Monday" id="monday">
                        <label for="monday">Monday</label>
                    </div>
                    <div>
                        <input type="checkbox" name="day_of_week[]" value="Tuesday" id="tuesday">
                        <label for="tuesday">Tuesday</label>
                    </div>
                    <div>
                        <input type="checkbox" name="day_of_week[]" value="Wednesday" id="wednesday">
                        <label for="wednesday">Wednesday</label>
                    </div>
                    <div>
                        <input type="checkbox" name="day_of_week[]" value="Thursday" id="thursday">
                        <label for="thursday">Thursday</label>
                    </div>
                    <div>
                        <input type="checkbox" name="day_of_week[]" value="Friday" id="friday">
                        <label for="friday">Friday</label>
                    </div>
                    <div>
                        <input type="checkbox" name="day_of_week[]" value="Saturday" id="saturday">
                        <label for="saturday">Saturday</label>
                    </div>
                    <div>
                        <input type="checkbox" name="day_of_week[]" value="Sunday" id="sunday">
                        <label for="sunday">Sunday</label>
                    </div>
                </div> --}}
                <div class="form-group">
                    <label for="day_of_week">Choose Day of the Week</label>
                    <select name="day_of_week" id="day_of_week" class="form-control">
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                        <option value="Friday">Friday</option>
                        <option value="Saturday">Saturday</option>
                        <option value="Sunday">Sunday</option>
                    </select>
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
{{-- @endsection --}}
