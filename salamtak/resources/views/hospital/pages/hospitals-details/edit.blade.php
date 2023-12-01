@extends('hospital.Layout.master')
@section('title', ' إضافة مستشفى جديد ')
@section('content')
<br> <br> 

<div class="container">
    <h1>إضافة مستشفى جديد</h1>
    <form method="POST" action="{{ route('hospitals-details.update',Auth::user()->id) }}" enctype="multipart/form-data" style="width: 80%; margin: 50px auto;">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">اسم المستشفى:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ Auth::user()->name }}" required>
        </div>


        {{-- <div class="form-group">
            <label>أقسام المستشفى:</label> <br>
            @foreach ($departments as $department)
                <input type="hidden" name="departments[{{ $department->id }}][id]" value="{{ $department->id }}">
                <input type="checkbox" name="departments[{{ $department->id }}][name]" value="{{ $department->name }}">
                {{ $department->name }}<br>
            @endforeach
        </div> --}}

        <div class="form-group">
            <label for="location">موقع المستشفى:</label>
            <input type="text" name="location" id="location" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="image">صورة للمستشفى:</label>
            <input type="file" class="form-control" name="image" accept="image/*" required>
        </div>

        <div class="form-group">
            <label for="video">فيديو للمستشفى:</label>
            <input type="text" name="video" id="video" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="virtual_tour">جولة إفتراضية:</label>
            <input type="text" name="virtual_tour" id="virtual_tour" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">إضافة المستشفى</button>
    </form> <br> <br> <br>
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
          
     
      