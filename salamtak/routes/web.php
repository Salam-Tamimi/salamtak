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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/', function () {
    return view('index');
});
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
Route::get('/appointments', function () {
    return view('pages.appointments');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/doctor-single', function () {
    return view('pages.doctor-single');
});
Route::get('/hospital-single', function () {
    return view('pages.hospital-single');
});

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

Route::middleware(['auth'])->group(function () {
    Route::resource('users', UserController::class);
});


Route::get('/admin', function () {
    return view('admin.pages.index');
});
// Route::resource('hospitals-admin', HospitalController::class);
// Route::post('hospitals-admin/store2', [HospitalController::class, 'store2'])->name('hospitals-admin.store2');
// Route::post('hospitals-admin/create2', [HospitalController::class, 'create2'])->name('hospitals-admin.create2');

// Route::resource('hospitals-details', Hospital_detailsController::class)->middleware('role:hospital');


Route::middleware(['auth'])->group(function () {
    // Route::resource('hospitals-admin', HospitalController::class)->middleware('role:admin');
    Route::resource('hospitals-admin', HospitalController::class);
    Route::resource('hospitals-details', Hospital_detailsController::class);
    Route::resource('doctors-list', DoctorController::class);
    Route::get('/get-doctors-by-hospital/{hospitalId}', 'DoctorController@getDoctorsByHospital');
    Route::resource('doctors-hospital', DoctorController::class);
    Route::resource('appointments-admin', AppointmentController::class);
    Route::resource('departments-admin', DepartmentController::class);
    Route::resource('reviews-admin', ReviewController::class);
    Route::resource('patients-list', UserController::class);
    
    // // Custom routes for 'store2' and 'create2' with 'hospital' role
    // Route::post('hospitals-admin/store2', [HospitalController::class, 'store2'])
    //     ->name('hospitals-admin.store2')
    //     ->middleware('role:hospital');
    
    // // Routes for 'create2', 'store2', and 'update2' with 'admin' role
    // Route::middleware('role:admin')->group(function () {
    //     Route::post('hospitals-admin/create2', [HospitalController::class, 'create2'])
    //         ->name('hospitals-admin.create2');
            
    //     Route::put('hospitals-admin/{id}/update2', [HospitalController::class, 'update2'])
    //         ->name('hospitals-admin.update2');
    // });
});

// Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');




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


