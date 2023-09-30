@extends('admin.Layout.master')
@section('title', 'إنشاء موعد جديد ')
@section('content')
<br> <br> 
        <div class="container">
            <h1>إنشاء موعد جديد</h1>
            <form method="POST" action="{{ route('appointments-admin.store') }}"style="width: 80%;margin:50px auto;">
                @csrf
                @method('post')
                <div class="form-group">
                    <label for="doctor">اسم الطبيب:</label>
                    <input type="text" name="doctor" id="doctor" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="department">القسم:</label>
                    <input type="text" name="department" id="department" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="patient">اسم المريض:</label>
                    <input type="text" name="patient" id="patient" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="date">التاريخ:</label>
                    <input type="date" name="date" id="date" class="form-control" required>
                </div>
    
                <div class="form-group">
                    <label for="time">الوقت:</label>
                    <input type="time" name="time" id="time" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="price">الدفع:</label>
                    <input type="number" name="price" id="price" class="form-control" required>
                </div>

            
            <button type="submit" class="btn btn-primary">إنشاء موعد </button>
        </form> <br> <br> <br> 
    </div>

        </div>
		<!-- /Main Wrapper -->
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
          
     
      