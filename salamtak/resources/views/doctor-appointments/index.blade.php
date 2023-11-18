<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>مواعيد الطبيب</title>
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-right">جدول المواعيد</h1> <br>
    
        <p class="text-right">مرحبا بك  د. {{ auth()->user()->name }}</p>
        <p class="text-right">مواعيدك :</p>
        
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="text-right">المريض</th>
                    <th scope="col" class="text-right">اليوم</th>
                    <th scope="col" class="text-right">التوقيت</th>
                    <th scope="col" class="text-right">حالة الموعد</th>
                </tr>
            </thead>
            <tbody>
                @foreach($appointments as $appointment)
                    <tr style="{{ $appointment->status ? 'display:none;' : '' }}" id="row_{{ $loop->index }}">
                        <td class="text-right">{{ $appointment->user->name }}</td>
                        <td class="text-right">{{ $appointment->day_of_week }}</td>
                        <td class="text-right">{{ $appointment->start_time }} - {{ $appointment->end_time }}</td>
                        {{-- <td class="text-right">{{ $appointment->status ? 'Done' : 'Not Done' }}</td> --}}
                        <td class="text-right">
                            @if(Auth::user()->role === 'doctor')
                            <button class="btn btn-sm btn-success toggle-status"  data-appointment-id="{{ $appointment->id }}" data-row-id="row_{{ $loop->index }}">
                                <svg width="20px" height="20px" viewBox="0 -1.5 11 11" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>done_mini [#ffffff]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-304.000000, -366.000000)" fill="#ffffff"> <g id="icons" transform="translate(56.000000, 160.000000)"> <polygon id="done_mini-[#ffffff]" points="259 207.6 252.2317 214 252.2306 213.999 252.2306 214 248 210 249.6918 208.4 252.2306 210.8 257.3082 206"> </polygon> </g> </g> </g> </g></svg>
                                تم
                            </button>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Include the full version of jQuery instead of the slim version -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



<script>
    $(document).ready(function() {
        $('.toggle-status').click(function() {
            var appointmentId = $(this).data('appointment-id');
            var rowId = $(this).data('row-id');
    
            // Create a custom confirmation modal
            var confirmationModal = $('<div class="modal text-right" tabindex="-1" role="dialog">\
                                        <div class="modal-dialog text-right" role="document">\
                                            <div class="modal-content text-right">\
                                                <div class="modal-header text-right">\
                                                    <h5 class="modal-title text-right">تأكيد</h5>\
                                                    <button type="button" class="close text-right" data-dismiss="modal" aria-label="Close">\
                                                        <span aria-hidden="true">&times;</span>\
                                                    </button>\
                                                </div>\
                                                <div class="modal-body text-right">\
                                                    <p>هل أنت متأكد أن هذا الحجز قد تم؟</p>\
                                                </div>\
                                                <div class="modal-footer text-right">\
                                                    <button type="button" class="btn btn-primary mx-2" id="confirm-yes">نعم</button>\
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>\
                                                </div>\
                                            </div>\
                                        </div>\
                                    </div>');
    
            // Style the "نعم" (Yes) button
            confirmationModal.find('#confirm-yes').addClass('btn-primary').css('margin-right', '10px');
    
            // Append the modal to the body
            $('body').append(confirmationModal);
    
            // Show the modal
            confirmationModal.modal('show');
    
            // Handle 'نعم' button click
            $('#confirm-yes').click(function() {
                // Perform an AJAX request to update the status
                $.ajax({
                    type: 'POST',
                    url: '/update-status/' + appointmentId,
                    data: {
                        _token: '{{ csrf_token() }}',
                    },
                    success: function(response) {
                        // Update the UI or handle the response
                        console.log(response);
                        console.log('Row ID:', rowId);
    
                        // Alert before fade-out (for debugging)
                        alert('About to hide row: ' + rowId);
    
                        // Hide the row with a fade effect
                        $('#' + rowId).fadeOut('slow', function() {
                            // Once the animation is complete, remove the row
                            $(this).remove();
                            console.log('Row removed successfully.');
                        });
    
                        // Close the modal
                        confirmationModal.modal('hide');
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        // Close the modal in case of an error
                        confirmationModal.modal('hide');
                    }
                });
            });
    
            // Handle modal close
            confirmationModal.on('hidden.bs.modal', function () {
                // Remove the modal from the DOM
                confirmationModal.remove();
            });
        });
    });
    
    </script>
    </body>
    </html>
    