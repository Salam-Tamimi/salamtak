@extends('admin.Layout.master')
@section('title', 'إنشاء موعد جديد ')
@section('content')
<br> <br>
<div class="container">
    <h1>إنشاء موعد جديد</h1>
    <form method="POST" action="{{ route('appointments-admin.store') }}"
        style="width: 80%;margin:50px auto;">
        @csrf
        @method('post')

        <div class="form-group">
            <label style="font-size:20px;"> القسم:</label> <br>
            <select name="department_id" id="department" class="form-control">
                <option value="">اختر القسم</option>
                @foreach ($departments as $department)
                <option value="{{ $department->id }}">{{ $department->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label style="font-size:20px;" for="doctor">اسم الطبيب:</label> <br>
            <select name="departmentdoctor_id" id="doctor" class="form-control">
                <option value="">اختر اسم الطبيب</option>
                <!-- Doctor options will be populated dynamically using JavaScript -->
            </select>
            <p style="color: red;font-size:14px;">*عليك اختيار القسم أولا</p>
        </div>

        <div class="form-group">
            <label  style="font-size:20px;"for="patient">اسم المريض:</label>
            <input type="text" name="patient" id="patient" class="form-control" required>
        </div>

        <div class="form-group">
            <label style="font-size:20px;" for="date">التاريخ:</label>
            <input type="date" name="date" id="date" class="form-control" required>
        </div>

        <div class="form-group">
            <label style="font-size:20px;" for="time">الوقت:</label>
            <input type="time" name="time" id="time" class="form-control" required>
        </div>

        <div class="form-group">
            <label style="font-size:20px;" for="price">الدفع:</label>
            <input type="number" name="price" id="price" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">إنشاء موعد </button>
    </form> <br> <br> <br>
</div>

<!-- Add this JavaScript block at the end of your Blade template -->
<script>
    // Get the department select element
    var departmentSelect = document.getElementById('department');
    // Get the doctor select element
    var doctorSelect = document.getElementById('doctor');

    // Define a JavaScript object that maps department IDs to lists of doctors
    var departmentDoctorMap = @json($departmentDoctorMap);

    // Function to update the list of doctors based on the selected department
    function updateDoctorOptions() {
        var selectedDepartmentId = departmentSelect.value;

        // Clear the current doctor options
        doctorSelect.innerHTML = '<option value="">اختر اسم الطبيب</option>';

        if (selectedDepartmentId && departmentDoctorMap[selectedDepartmentId]) {
            // Populate the doctor options based on the selected department
            departmentDoctorMap[selectedDepartmentId].forEach(function (doctor) {
                var option = document.createElement('option');
                option.value = doctor.id;
                option.textContent = doctor.name;
                doctorSelect.appendChild(option);
            });
        }
    }

    // Add an event listener to the department select element to update doctors when the department changes
    departmentSelect.addEventListener('change', updateDoctorOptions);

    // Initial population of doctor options
    updateDoctorOptions();
</script>
    
@endsection

		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Datatables JS -->
		<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatables/datatables.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/appointment-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:49 GMT -->
</html>
          
     
      