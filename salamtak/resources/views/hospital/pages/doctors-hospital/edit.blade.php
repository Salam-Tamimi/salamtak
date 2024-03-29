@extends('hospital.Layout.master')
@section('title','قائمة الأطباء')
@section('content')
			
<br> <br> 

<div class="container">
    <h1>تعديل معلومات الطبيب </h1>
    <form method="POST" action="{{ route('doctors-hospital.update', Auth::user()->id) }}" style="width: 80%; margin: 50px auto;" enctype="multipart/form-data">
        @csrf
        @method('PUT') 

        <div class="form-group">
            <label for="email">البريد الإلكتروني</label>
            <input type="email" name="email" class="form-control" id="email" value="{{ $doctor->email }}" required>
        </div>
        <div class="form-group">
            <label for="password">كلمة المرور</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="******">
        </div>
        <div class="form-group">
            <label for="name">اسم الطبيب:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $doctor->name }}" required>
        </div>

        <div class="form-group">
            <label for="image">صورة الطبيب:</label>
            <input type="file" class="form-control" name="image" accept="image/*">
        </div>

        <div class="form-group">
            <label> القسم:</label> <br>
            <select name="department_id" id="department" class="form-control">
                <option value="">اختر القسم</option>
                @foreach ($departments as $department)
                    <option value="{{ $department->id }}" {{ $doctor->department_id == $department->id ? 'selected' : '' }}>
                        {{ $department->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
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

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/doctor-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:51 GMT -->
</html>