 {{-- @extends('layout.master') 
 @section('content') --}}


 
    <div class="container">
        <h2>اضافة معلومات</h2>
        <form method="POST" action="{{ route('doctor-details.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name">الإسم</label>
                <input type="text" name="name" class="form-control" id="name"value="{{ Auth::user()->name }}"  required>
            </div>

            <div class="form-group">
                <label for="image">الصورة</label>
                <input type="file" name="image" class="form-control-file" id="image">
            </div>

            <div class="form-group">
                <label for="price">الكشفية</label>
                <input type="number" name="price" class="form-control" id="price" required>
            </div>

            <div class="form-group">
                <label for="experience">الخبرة</label>
                <textarea name="experience" class="form-control" id="experience" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="department_id">القسم</label>
                <select name="department_id" class="form-control" id="department_id" required>
                    @foreach($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">إضافة</button>
        </form>
    </div>
{{-- @endsection --}}
