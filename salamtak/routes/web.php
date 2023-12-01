<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\Hospital_detailsController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Models\Department;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GoogleAuthController;
use App\Models\Doctor;
use Illuminate\Support\Facades\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/dashboard', function () {
    return view('pages.profile');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::post('/forgot-password', [ForgotPasswordController::class, 'sendPasswordResetLink'])->middleware(['guest'])->name('password.email');
Route::get('/register', [RegisteredUserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);


Route::get('/loginwithgoogle', [GoogleAuthController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/loginwithgoogle/callback', [GoogleAuthController::class, 'handleGoogleCallback']);
Route::post('/logout', [GoogleAuthController::class, 'logout'])->name('logout');


Route::get('/', function () {
    return view('index');
})->name('home');
// Route::get('/', function () {
//     $departments = App\Http\Controllers\DepartmentController.php::getData();
//     $doctors = App\Http\Controllers\PostController::getData();

//     return view('index', compact('departments', 'doctors'));
// });

Route::get('/filter', function () {
    return view('pages.filter');
});
Route::get('/edit-appointment', function () {
    return view('pages.profile');
});
Route::get('/lab', function () {
    return view('pages.lab');
});
Route::get('/hospitals', function () {
    return view('pages.hospitals');
});
Route::get('/profile-hospital', function () {
    return view('hospital.profile');
});

// Route::get('/hospitals', [HospitalController::class, 'index']);


// Route::get('/appointments/{department_id}', function ($departmentId) {
//     return view('pages.appointments', ['department_id' => $departmentId]);
// });



Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
// Route::get('/doctor-single', function () {
//     return view('pages.doctor-single');
// });
// Route::get('/doctor-single/{doctor_id}', function ($doctor_id) {
//     return view('pages.doctor-single', ['doctor_id' => $doctor_id]);
// });
Route::get('/doctor-single/{doctor_id}', [DoctorController::class, 'doctorSingle'])->name('doctors.doctor-single');
// Route for showing the review creation form
Route::get('/reviews/create/{appointment}', [ReviewController::class, 'create'])->name('reviews.create');
// Route for storing reviews
Route::post('/reviews/create/{appointment}', [ReviewController::class, 'store'])->name('reviews.store');

// Route::get('/hospital-single', function () {
//     return view('pages.hospital-single');
// });
Route::get('/hospital-single/{hospital_id}', [Hospital_detailsController::class, 'showHospital'])->name('hospital.single');

//////// *********     ADMIN ROUTES     *********** /////////

// Route::prefix('admin')->group(function () {
//     Route::resource('users', 'AdminController');
// });

// Route::prefix('hospital')->group(function () {
//     Route::resource('users', 'HospitalController');
// });

// Route::prefix('doctor')->group(function () {
//     Route::resource('users', 'DoctorController');
// });

// Route::resource('users', 'UserController'); // For the "user" role

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::resource('users', AdminController::class);
});

Route::prefix('hospital')->middleware(['auth'])->group(function () {
    Route::resource('users', HospitalController::class);
});

Route::prefix('doctor')->middleware(['auth'])->group(function () {
    Route::resource('users', DoctorController::class);
});


Route::get('/admin', function () {
    return view('admin.pages.index');
});

////////////// doctor appointments:
Route::middleware(['auth', 'role:doctor'])->group(function () {
    Route::get('/doctor-appointments/{doctor_id}', [AppointmentController::class, 'index'])->name('doctor-appointments.index');
    Route::post('/update-status/{appointment}', [AppointmentController::class, 'updateStatus']);
});

Route::middleware(['auth', 'role:hospital'])->group(function () {
    Route::resource('users', UserController::class);
    Route::resource('hospitals-admin', HospitalController::class);
    Route::resource('hospitals-details', Hospital_detailsController::class);
    // Route::put('/hospitals-details/{id}', [Hospital_detailsController::class, 'update'])->name('hospitals-details.update');

    Route::resource('doctors-list', DoctorController::class);
    Route::resource('doctors-hospital', DoctorController::class);
    Route::resource('doctor-details', Doctor_detailsController::class);

    Route::get('/hospital-appointments', function () {
        return view('hospital.pages.appointments-admin.index');
    });

});
    // Route::get('/appointments/create/{doctor_id}', 'AppointmentController@create')->name('appointments.create');
    // Route::get('/appointments/create/{doctor_id}', 'AppointmentController@create')->name('appointments.create');
    // Route::get('/appointments/create/{doctor_id}', [AppointmentController::class, 'create'])->name('appointments.create');
    Route::get('/appointments/create/{doctor_id}', [AppointmentController::class, 'create'])->name('appointments.create');

    Route::post('/appointments/create/{doctor_id}', [AppointmentController::class, 'store'])->name('appointments.store');
    Route::get('/appointments/success', [AppointmentController::class, 'success'])->name('appointments.success');    // Route::get('/get-booked-times', 'AppointmentController@getBookedTimes');
    
    Route::get('/appointments/{id}/edit', [AppointmentController::class, 'edit'])->name('appointments.edit');
    Route::put('/appointments/{id}', [AppointmentController::class, 'update'])->name('appointments.update');    // Route::get('/appointments/booked-times/{doctor_id}', [AppointmentController::class, 'getBookedTimes']);
    Route::delete('/appointments/{id}', [AppointmentController::class, 'destroy'])->name('appointments.destroy');


    Route::get('/appointments-dates/{department_id}', function ($departmentId) {
        return view('pages.appointments.index', ['departmentId' => $departmentId]);
    });

    // Route::post('/appointments', 'AppointmentController@store')->name('appointments.store');
    // Route::resource('appointments', AppointmentController::class);
    Route::resource('departments-admin', DepartmentController::class);
    Route::resource('reviews-admin', ReviewController::class);
    Route::resource('patients-list', UserController::class);
    Route::resource('doctor-schaduale', DoctorSchadualeController::class);
    

// Route::resource('success', AppointmentController::class);
// Route::middleware(['auth'])->group(function () {
//     // Common dashboard routes for all roles
//     Route::resource('dashboard', DashboardController::class);

//     // Additional routes for specific roles (e.g., admin, hospital, doctor)
//     Route::resource('admin/dashboard', AdminDashboardController::class)->middleware('admin');
//     Route::resource('hospital/dashboard', HospitalDashboardController::class)->middleware('hospital');
//     Route::resource('doctor/dashboard', DoctorDashboardController::class)->middleware('doctor');
// });

// Route::get('/patient-list', function () {
//     return view('admin.pages.patient-list');
// });

Route::get('/transactions-list', function () {
    return view('admin.pages.transactions-list');
});
Route::get('/settings-admin', function () {
    return view('admin.pages.settings');
});
Route::get('/invoice-report', function () {
    return view('admin.pages.invoice-report');
});
Route::get('//admin-profile', function () {
    return view('admin.pages.profile');
});
Route::get('/admin-login', function () {
    return view('admin.pages.login');
});
Route::get('/admin-register', function () {
    return view('admin.pages.register');
});
Route::get('/admin-forgot-password', function () {
    return view('admin.pages.forgot-password');
});
Route::get('/admin-lock-screen', function () {
    return view('admin.pages.lock-screen');
});
Route::get('/error-404-admin', function () {
    return view('admin.pages.error-404');
});
Route::fallback(function () {
    return view('404');
});
Route::get('/error-500-admin', function () {
    return view('admin.pages.error-500');
});
Route::get('/blank-page-admin', function () {
    return view('admin.pages.blank-page');
});
Route::get('/components-admin', function () {
    return view('admin.pages.components');
});
Route::get('/form-basic-inputs', function () {
    return view('admin.pages.form-basic-inputs');
});
Route::get('/form-input-groups', function () {
    return view('admin.pages.form-input-groups');
});
Route::get('/form-horizontal', function () {
    return view('admin.pages.form-horizontal');
});
Route::get('/form-vertical', function () {
    return view('admin.pages.form-vertical');
});
Route::get('/form-mask', function () {
    return view('admin.pages.form-mask');
});
Route::get('/form-validation', function () {
    return view('admin.pages.form-validation');
});
Route::get('/tables-basic', function () {
    return view('admin.pages.tables-basic');
});
Route::get('/data-tables', function () {
    return view('admin.pages.data-tables');
});
//////// *********    END ADMIN ROUTES     *********** /////////


