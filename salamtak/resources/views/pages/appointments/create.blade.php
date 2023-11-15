<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>

    <!-- Include jQuery from a CDN (Content Delivery Network) -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>
<body>
<form  action="{{ route('appointments.store', ['doctor_id' => $doctor_id]) }}" method="post" id="appointmentForm">
    @csrf
    @method('post')
    <label for="day">اختر يوم الحجز:</label>
    <select name="day" id="day">
        @foreach ($schedules as $schedule)
            <option value="{{ $schedule->day_of_week }}" data-start="{{ $schedule->start_time }}" data-end="{{ $schedule->end_time }}">{{ $schedule->day_of_week }}</option>
        @endforeach
    </select>

    <label for="start_time">اختر وقت الحجز:</label>
    <select name="start_time" id="start_time" disabled></select>

    <button type="submit">حجز الموعد</button>
</form>
<script>
// Function to update start_time options based on selected day
function updateStartTimes() {
    var selectedDay = $('#day').val();
    var startTime = $('#day option:selected').data('start');
    var endTime = $('#day option:selected').data('end');

    // Clear existing options
    $('#start_time').empty().prop('disabled', false);

    // Extract hours and minutes using regular expression
    var startTimeMatches = startTime.match(/(\d+):(\d+)/);
    var endTimeMatches = endTime.match(/(\d+):(\d+)/);

    if (startTimeMatches && endTimeMatches) {
        var startHour = parseInt(startTimeMatches[1], 10);
        var startMinute = parseInt(startTimeMatches[2], 10);
        var endHour = parseInt(endTimeMatches[1], 10);
        var endMinute = parseInt(endTimeMatches[2], 10);

        // Calculate time slots every half an hour
        var currentTime = new Date();
        currentTime.setHours(startHour, startMinute, 0, 0);

        var endTimeObj = new Date();
        endTimeObj.setHours(endHour, endMinute, 0, 0);

        while (currentTime < endTimeObj) {
            // Format start time
            var formattedStartTime = currentTime.toLocaleTimeString('en-US', { hour: 'numeric', minute: 'numeric', hour12: false });

            // Calculate end time
            var endTime = new Date(currentTime);
            endTime.setMinutes(endTime.getMinutes() + 30);

            // Format end time
            var formattedEndTime = endTime.toLocaleTimeString('en-US', { hour: 'numeric', minute: 'numeric', hour12: false });

            // Display time slot as "start_time - end_time"
            var timeSlotText = formattedStartTime + ' - ' + formattedEndTime;

            // Append option to the dropdown list
            $('#start_time').append('<option value="' + timeSlotText + '">' + timeSlotText + '</option>');

            // Move to the next time slot
            currentTime.setMinutes(currentTime.getMinutes() + 30);
        }
    }
}

// Call the function initially
$(document).ready(function () {
    updateStartTimes();
});

// Call the function whenever the day is changed
$('#day').change(updateStartTimes);

</script>

</body>
</html>
