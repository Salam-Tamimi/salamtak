@extends('admin.Layout.master')
@section('title','قائمة الأطباء')
@section('content')
			
<br> <br> 

<div class="container">
    <h1>تعديل معلومات الطبيب </h1>
    <form method="POST" action="{{ route('doctors-list.update', $doctor->id) }}" enctype="multipart/form-data" style="width: 80%; margin: 50px auto;">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">اسم الطبيب:</label>
            <input type="text" name="name" id="name" class="form-control" required value="{{ old('name', $doctor->name) }}">
        </div>
        <div class="form-group">
            <label for="image">صورة الطبيب:</label>
            <input type="file" class="form-control" name="image" accept="image/*" required>
        </div>
        {{-- <div class="form-group">
            <label for="department"> القسم:</label>
            <input type="text" name="department" id="department" class="form-control" required value="{{ old('department', $doctor->department) }}">
        </div> --}}
        <div class="form-group">
            <label> القسم:</label> <br>
                <select name="department_id" id="department" class="form-control">
                    <option value="{{ old('department', $doctor->department) }}">{{ old('department', $doctor->departments->name) }} </option>
                    @foreach ($departments as $department)
                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                    @endforeach
                </select>
        </div>
        <div class="form-group">
            <label for="experience"> الخبرة:</label>
            <input type="text" name="experience" id="experience" class="form-control" required value="{{ old('experience', $doctor->experience) }}">
        </div>
        <div class="form-group">
            <label for="price"> الكشفية:</label>
            <input type="number" name="price" id="price" class="form-control" required value="{{ old('price', $doctor->price) }}">
        </div>

        <button type="submit" class="btn btn-primary">تعديل </button>
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