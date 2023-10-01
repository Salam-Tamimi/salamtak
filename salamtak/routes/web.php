<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ReviewController;
use App\Models\Appointment;
use App\Models\Department;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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
Route::get('/admin', function () {
    return view('admin.pages.index');
});
Route::resource('appointments-admin', AppointmentController::class);
Route::resource('hospitals-admin', HospitalController::class);
Route::resource('departments-admin', DepartmentController::class);
Route::resource('reviews-admin', ReviewController::class);
Route::resource('doctors-list', DoctorController::class);



Route::get('/patient-list', function () {
    return view('admin.pages.patient-list');
});

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

