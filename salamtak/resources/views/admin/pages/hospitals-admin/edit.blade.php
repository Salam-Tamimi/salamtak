@extends('admin.Layout.master')
@section('title', ' تعديل معلومات مستشفى  ')
@section('content')
<br> <br> 

<div class="container">
    <h1>تعديل معلومات مستشفى </h1>
    <form method="POST" action="{{ route('hospitals-admin.update', $hospital->id) }}" enctype="multipart/form-data" style="width: 80%; margin: 50px auto;">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">اسم المستشفى:</label>
            <input type="text" name="name" id="name" class="form-control" required value="{{ old('name', $hospital->name) }}">
        </div>

        <div class="form-group">
            <label for="image">صورة المستشفى:</label>
            <input type="file" class="form-control" name="image" accept="image/*" required>
        </div>

        
        <div class="form-group">
            <label for="email">البريد الإلكتروني:</label>
            <input type="email" name="email" id="email" class="form-control" required value="{{ old('email', $hospital->email) }}">
        </div>


        <div class="form-group">
            <label for="mobile">رقم الهاتف المحمول :</label>
            <input type="string" name="mobile" id="mobile" class="form-control" required value="{{ old('mobile', $hospital->mobile) }}">
        </div>

        <button type="submit" class="btn btn-primary">تعديل المستشفى</button>
    </form> <br> <br> <br>
</div>
<!-- /Main Wrapper -->
@endsection

<!-- jQuery -->
<script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>

<!-- Bootstrap Core JS -->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<!-- Slimscroll JS -->
<script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

<!-- Datatables JS -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>

<!-- Custom JS -->
<script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
