@extends('layout-doctor')

@section('title', 'مواعيد الطبيب')

@section('content')
    <div class="container">
        <h2>تعديل المعلومات {{ $doctor->name }}</h2>
        <form method="POST" action="{{ route('doctor-details.update', $doctor->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">الإسم</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $doctor->name }}" required>
            </div>

            <div class="form-group">
                <label for="image">الصورة</label>
                <input type="file" name="image" class="form-control-file" id="image">
            </div>

            <div class="form-group">
                <label for="price">الكشفية</label>
                <input type="number" name="price" class="form-control" id="price" value="{{ $doctor->price }}" required>
            </div>

            <div class="form-group">
                <label for="experience">الخبرة</label>
                <textarea name="experience" class="form-control" id="experience" rows="4" required>{{ $doctor->experience }}</textarea>
            </div>

            <div class="form-group">
                <label for="department_id">القسم</label>
                <select name="department_id" class="form-control" id="department_id" required>
                    @foreach($departments as $department)
                        <option value="{{ $department->id }}" {{ $doctor->department_id == $department->id ? 'selected' : '' }}>{{ $department->name }}</option>
                    @endforeach
                </select>
            </div>


            <button type="submit" class="btn btn-primary">Update Doctor</button>
        </form>
    </div>
@endsection