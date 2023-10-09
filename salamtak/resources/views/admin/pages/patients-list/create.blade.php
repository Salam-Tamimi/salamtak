@extends('admin.Layout.master')
@section('title','قائمة الأطباء')
@section('content')
			
<br> <br> 

<div class="container">
    <h1>إضافة مريض جديد</h1>
    <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data" style="width: 80%; margin: 50px auto;">
        @csrf
        @method('post')
        <div class="form-group">
            <label for="name">اسم المريض:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="image">صورة المريض:</label>
            <input type="file" class="form-control" name="image" accept="image/*" required>
        </div>

        
        <div class="form-group">
            <label for="email">البريد الإلكتروني:</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="password">كلمة المرور:</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        

        <div class="form-group">
            <label for="mobile">رقم الهاتف المحمول :</label>
            <input type="string" name="mobile" id="mobile" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">إضافة المريض</button>
    </form> <br> <br> <br>
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

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/doctor-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:51 GMT -->
</html>