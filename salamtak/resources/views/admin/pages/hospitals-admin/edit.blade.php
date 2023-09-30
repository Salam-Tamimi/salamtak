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
            <label>أقسام المستشفى:</label> <br>
            @foreach ($departments as $department)
                <input type="hidden" name="departments[{{ $department->id }}][id]" value="{{ $department->id }}">
                <input type="checkbox" name="departments[{{ $department->id }}][name]" value="{{ $department->name }}"
                       {{ $department->is_active ? 'checked' : '' }}>
                {{ $department->name }}<br>
            @endforeach
        </div>

        {{-- <div class="form-group">
            <label>أقسام المستشفى:</label> <br>
            @foreach ($departments as $department)
                @php
                    $checked = $hospital->departments->contains('id', $department->id);
                @endphp
                <input type="checkbox" name="departments[{{ $department->id }}][id]" value="{{ $department->id }}"
                       {{ $checked ? 'checked' : '' }}>
                {{ $department->name }}<br>
            @endforeach
        </div> --}}

        <div class="form-group">
            <label for="location">موقع المستشفى:</label>
            <input type="text" name="location" id="location" class="form-control" required value="{{ old('location', $hospital->location) }}">
        </div>

        <div class="form-group">
            <label for="image">صورة للمستشفى:</label>
            <input type="file" class="form-control" name="image" accept="image/*" required>
        </div>

        <div class="form-group">
            <label for="video">فيديو للمستشفى:</label>
            <input type="text" name="video" id="video" class="form-control" required value="{{ old('video', $hospital->video) }}">
        </div>

        <div class="form-group">
            <label for="virtual_tour">جولة إفتراضية:</label>
            <input type="text" name="virtual_tour" id="virtual_tour" class="form-control" required value="{{ old('virtual_tour', $hospital->virtual_tour) }}">
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
