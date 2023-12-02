<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>@yield('title')</title>
    <style>
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            right: 0; /* Set right to 0 to position on the right side */
            background-color: #0d51ac; /* Set the desired background color */
            padding-top: 20px;
            text-align: right;
            direction: rtl;
        }
    
        .sidebar h2 {
            color: white;
            margin-bottom: 10%;
            margin-top: 15%;
            margin-right: 7%;
        }
    
        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
    
        .sidebar li {
            padding: 15px;
        }
    
        .sidebar a {
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
            transition: 0.3s;
            padding: 2%;
        }
    
        .sidebar a:hover {
            background-color: rgb(109, 141, 211);
        }
    </style>
</head>

<body>
    @php
    use App\Models\Doctor_schaduale;
    $doctor_id = auth()->user()->doctor_id;
  @endphp
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>القائمة</h2>
        <ul>
            <li><a href="{{ route('doctor-details.index') }}">الصفحة الرئيسية</a></li>
            <li><a href="{{ route('doctor-schaduale.index') }}">جدول الدوام الأسبوعي</a></li>
            <li><a href="{{ route('doctor-appointments.index', ['doctor_id' => $doctor_id]) }}">جدول الحجوزات</a></li>
                @if(auth()->check())
                    <li>
                       <a href="{{ url('/profile-doctor') }}" >الإعدادات</a>
                    </li>
                    <li>
                        <form action="{{ url('/logout') }}" method="POST" style="display: inline;margin-left:2%;">
                            @csrf
                            <button type="submit" class="btn rounded-pill" style="color: white; text-decoration: underline; font-size: 15px; background: none; border: none; padding: 0; cursor: pointer;">
                                <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" transform="matrix(-1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.5" d="M9.00195 7C9.01406 4.82497 9.11051 3.64706 9.87889 2.87868C10.7576 2 12.1718 2 15.0002 2L16.0002 2C18.8286 2 20.2429 2 21.1215 2.87868C22.0002 3.75736 22.0002 5.17157 22.0002 8L22.0002 16C22.0002 18.8284 22.0002 20.2426 21.1215 21.1213C20.2429 22 18.8286 22 16.0002 22H15.0002C12.1718 22 10.7576 22 9.87889 21.1213C9.11051 20.3529 9.01406 19.175 9.00195 17" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M15 12L2 12M2 12L5.5 9M2 12L5.5 15" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                         &nbsp;تسجيل خروج
                            </button>
                        </form>
                    </li>
                    
                       
                @endif
        </ul>
    </div>

    <!-- Page Content -->
    <div class="content"style="margin-right:15%;margin-top:5%">
        @yield('content')
    </div>

    <!-- Include the full version of jQuery instead of the slim version -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>
