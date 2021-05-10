<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PatientlistController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\ProfileController;
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



Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', [FrontendController::class, 'index']);
Route::get('/new-appointment/{doctorId}/{date}', [FrontendController::class, 'show'])
    ->name('create.appointment');



Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::resource('doctor', DoctorController::class);
    Route::get('/patients', [PatientlistController::class, 'index'])->name('patient');
    Route::get('/patients/all', [PatientlistController::class, 'allTimeAppointment'])->name('all.appointments');
    Route::get('/status/update/{id}', [PatientlistController::class, 'toggleStatus'])->name('update.status');
    Route::resource('department', DepartmentController ::class);

});

Route::group(['middleware' => ['auth', 'doctor']], function () {
    Route::resource('appointment', AppointmentController::class);
    Route::post('/appointment/check', 'App\Http\Controllers\AppointmentController@check')->name('appointment.check');
    Route::post('/appointment/update', 'App\Http\Controllers\AppointmentController@updateTime')->name('update');
 
     

});


Route::group(['middleware' => ['auth', 'patient']], function () {
    Route::post('/booking/appointment', [FrontendController::class, 'store'])->name('booking.appointment');
    Route::get('/my-booking', [FrontendController::class, 'myBookings'])->name('my.booking');
    Route::get('/user-profile', [ProfileController::class, 'index']);
    Route::post('/user-profile', [ProfileController::class, 'store'])->name('profile.store');
    Route::post('/profile-pic', [ProfileController::class, 'profilePic'])->name('profile.pic');
});
