<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>

    <!-- Include jQuery from a CDN (Content Delivery Network) -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>
<body data-booked-times="{{ htmlspecialchars(json_encode($bookedTimes)) }}">
    <form action="{{ route('appointments.store', ['doctor_id' => $doctor_id]) }}" method="post" id="appointmentForm">
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
        var startTime = $('#day option:selected').data('start') + ':00';
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
                var formattedStartTime = currentTime.toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: false });

                // Calculate end time
                var endTime = new Date(currentTime);
                endTime.setMinutes(endTime.getMinutes() + 30);

                // Format end time
                var formattedEndTime = endTime.toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: false });

                // Display time slot as "start_time - end_time"
                var timeSlotText = formattedStartTime + ' - ' + formattedEndTime;

                // Check if the time slot is booked
                var isBooked = isTimeSlotBooked(selectedDay, formattedStartTime);

                // If the time slot is not booked, append it to the dropdown list
                if (!isBooked) {
                    $('#start_time').append('<option value="' + timeSlotText + '">' + timeSlotText + '</option>');
                }

                // Move to the next time slot
                currentTime.setMinutes(currentTime.getMinutes() + 30);
            }
        }
    }

    // Function to check if a time slot is booked
    function isTimeSlotBooked(selectedDay, startTime) {
        // Parse the JSON-encoded booked times
        var bookedTimes = JSON.parse(htmlDecode($('body').data('booked-times')));
// console.log(bookedTimes)
        // Loop through the booked times
        for (var i = 0; i < bookedTimes.length; i++) {
            // Check if the booked time matches the selected day and start time
console.log(bookedTimes[i].start_time)
console.log(startTime)
            if (bookedTimes[i].day_of_week == selectedDay && bookedTimes[i].start_time == startTime) {
                return true; // Time slot is booked
            }
        }
        return false; // Time slot is not booked
    }

    // Function to decode HTML entities
    function htmlDecode(input) {
        var doc = new DOMParser().parseFromString(input, "text/html");
        return doc.documentElement.textContent;
    }

    // Call the function initially
    $(document).ready(function () {
        // Parse the JSON-encoded booked times
        var bookedTimes = JSON.parse(htmlDecode($('body').data('booked-times')));

        // Set the global variable for bookedTimes
        window.bookedTimes = bookedTimes;

        // Call the function to update start times
        updateStartTimes();
    });

    // Call the function whenever the day is changed
    $('#day').change(updateStartTimes);
</script>


    

</body>
</html>