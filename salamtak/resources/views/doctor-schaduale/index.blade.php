@extends('layout.master')

@section('content')
<br> <br> <br> <br>
    <div class="my-4 mx-3">
        <div class="container">
            <h3>جدول الطبيب</h3>
            <a href="{{ route('doctor-schaduale.create') }}" class="btn btn-primary mb-2">إضافة جدول</a>
    
            @if (count($schedules) > 0)
                <table class="table">
                    <thead>
                        <tr>
                            <th>أيام الأسبوع</th>
                            <th>بداية الدوام</th>
                            <th>نهاية الدوام </th>
                            <th>الإجراء</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($schedules as $schedule)
                            <tr>
                                <td>{{ $schedule->day_of_week }}</td>
                                <td>{{ $schedule->start_time }}</td>
                                <td>{{ $schedule->end_time }}</td>
                                <td>
                                    <a href="{{ route('doctor-schaduale.edit', $schedule->id) }}" class="btn btn-primary">Edit</a>
                                    <form method="POST" action="{{ route('doctor-schaduale.destroy', $schedule->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this schedule?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>لا يوجد مواعيد لحد الآن</p>
            @endif
        </div>
    </div>
@endsection
