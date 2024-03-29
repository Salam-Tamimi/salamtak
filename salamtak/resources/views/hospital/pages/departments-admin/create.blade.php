@extends('hospital.Layout.master')
@section('title', 'الأقسام')
@section('content')
			
<br> <br> 

<div class="container" dir="rtl" style="text-align: right">
    <h1 dir="rtl" style="text-align: right; margin-right:10%; margin-top:4%">إضافة قسم جديد</h1>
    <form method="POST" action="{{ route('departments-admin.store',Auth::user()->hospital_id) }}" enctype="multipart/form-data" dir="rtl" style="width: 80%; margin: 50px auto; text-align: right">
        @csrf
        <input type="hidden" name="hospital_id" value="{{ Auth::user()->hospital_id }}">
        <div class="form-group">
            <label for="name">اسم القسم:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="is_active">الحالة:</label>
            <input type="checkbox" class="form-control" id="is_active" name="is_active" value="1">
        </div>

        <button type="submit" class="btn btn-primary">إضافة القسم</button>
    </form>
     <br> <br> <br>
</div>
<!-- /Main Wrapper -->
@endsection
        </div>
		<!-- /Main Wrapper -->
		
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

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/specialities.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:51 GMT -->
</html>