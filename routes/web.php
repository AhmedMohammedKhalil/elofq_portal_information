<?php

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


Route::get('/', 'HomeController@index')->name('home');
Route::get('/doctors', 'HomeController@allDoctors')->name('doctors');
Route::get('/contactus', 'HomeController@contactus')->name('contactus');
Route::get('/search', 'HomeController@search')->name('search');
Route::get('/articles', 'HomeController@articles')->name('articles');

Route::middleware(['guest:admin', 'guest:doctor','guest:nurse', 'guest:patient'])->group(function () {
    Route::get('/admin/login', 'AdminController@showLoginForm')->name('admin.login');
    Route::get('/doctor/login', 'DoctorController@showLoginForm')->name('doctor.login');
    Route::get('/doctor/register', 'DoctorController@showRegisterForm')->name('doctor.register');
    Route::get('/nurse/login', 'NurseController@showLoginForm')->name('nurse.login');
    Route::get('/patient/login', 'PatientController@showLoginForm')->name('patient.login');
    Route::get('/patient/register', 'PatientController@showRegisterForm')->name('patient.register');
});


Route::middleware(['auth:admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('/profile', 'AdminController@profile')->name('profile');
    Route::get('/settings', 'AdminController@settings')->name('settings');
    Route::get('/changePassword', 'AdminController@changePassword')->name('changePassword');
    Route::get('/logout', 'AdminController@logout')->name('logout');

    Route::prefix('/doctor')->name('doctor.')->group(function () {
        Route::get('/index', 'DoctorController@index')->name('index');
        Route::get('/accept', 'DoctorController@accept')->name('accept');
        Route::get('/show', 'DoctorController@adminShowDoctor')->name('show');
        Route::get('/showtable', 'AppointmentDoctorController@adminShowDoctorTable')->name('showtable');
        Route::get('/reject', 'DoctorController@reject')->name('reject');
    });

    Route::prefix('/article')->name('article.')->group(function () {
        Route::get('/index', 'ArticleController@index')->name('index');
        Route::get('/create', 'ArticleController@create')->name('create');
        Route::get('/show', 'ArticleController@show')->name('show');
        Route::get('/edit', 'ArticleController@edit')->name('edit');
        Route::delete('/delete', 'ArticleController@delete')->name('delete');
    });


    Route::prefix('/patient')->name('Patient.')->group(function () {
        Route::get('/index', 'PatientController@adminShowPatients')->name('index');
        Route::get('/showprescription', 'PatientController@adminShowPrescription')->name('showprescription');
    });

    Route::prefix('/appointment')->name('appointment.')->group(function () {
        Route::get('/index', 'AppointmentBookingController@adminShowAppointments')->name('index');
    });


});

Route::middleware(['auth:doctor'])->name('doctor.')->prefix('doctor')->group(function () {
    Route::get('/dashboard', 'DoctorController@dashboard')->name('dashboard');
    Route::get('/profile', 'DoctorController@profile')->name('profile');
    Route::get('/settings', 'DoctorController@settings')->name('settings');
    Route::get('/changePassword', 'DoctorController@changePassword')->name('changePassword');
    Route::get('/logout', 'DoctorController@logout')->name('logout');

    Route::prefix('/nurse')->name('nurse.')->group(function () {
        Route::get('/index', 'NurseController@index')->name('index');
        Route::get('/create', 'NurseController@create')->name('create');
        Route::get('/show', 'NurseController@show')->name('show');
        Route::get('/edit', 'NurseController@edit')->name('edit');
        Route::delete('/delete', 'NurseController@delete')->name('delete');
    });

    Route::prefix('/appointmentDoctor')->name('appointmentDoctor.')->group(function () {
        Route::get('/index', 'AppointmentDoctorController@index')->name('index');
        Route::get('/showtable', 'AppointmentDoctorController@doctorShowTable')->name('showtable');
        Route::get('/create', 'AppointmentDoctorController@create')->name('create');
        Route::get('/show', 'AppointmentDoctorController@show')->name('show');
        Route::get('/edit', 'AppointmentDoctorController@edit')->name('edit');
        Route::delete('/delete', 'AppointmentDoctorController@delete')->name('delete');
    });

    Route::prefix('/appointment')->name('appointment.')->group(function () {
        Route::get('/index', 'AppointmentBookingController@doctorShowAppointmentBookings')->name('index');
    });

    Route::prefix('/patient')->name('Patient.')->group(function () {
        Route::get('/index', 'PatientController@doctorShowPatients')->name('index');
        Route::get('/showprescription', 'PatientController@doctorShowPrescription')->name('showprescription');
    });

});

Route::middleware(['auth:nurse'])->name('nurse.')->prefix('nurse')->group(function () {
    Route::get('/dashboard', 'NurseController@dashboard')->name('dashboard');
    Route::get('/profile', 'NurseController@profile')->name('profile');
    Route::get('/settings', 'NurseController@settings')->name('settings');
    Route::get('/changePassword', 'NurseController@changePassword')->name('changePassword');
    Route::get('/logout', 'NurseController@logout')->name('logout');

    Route::prefix('/appointmentDoctor')->name('appointmentDoctor.')->group(function () {
        Route::get('/showtable', 'AppointmentDoctorController@nurseShowDoctorTable')->name('showtable');
    });

    Route::prefix('/patient')->name('Patient.')->group(function () {
        Route::get('/index', 'PatientController@nurseShowPatients')->name('index');
        Route::get('/showprescription', 'PatientController@nurseShowPrescription')->name('showprescription');
    });

    Route::prefix('/appointmentbooking')->name('appointmentbooking.')->group(function () {
        Route::get('/index', 'AppointmentBookingController@index')->name('index');
        Route::get('/accept', 'AppointmentBookingController@accept')->name('accept');
        Route::get('/reject', 'AppointmentBookingController@reject')->name('reject');
    });


});


Route::middleware(['auth:patient'])->name('patient.')->prefix('patient')->group(function () {
    Route::get('/profile', 'PatientController@profile')->name('profile');
    Route::get('/settings', 'PatientController@settings')->name('settings');
    Route::get('/changePassword', 'PatientController@changePassword')->name('changePassword');
    Route::get('/logout', 'PatientController@logout')->name('logout');

    Route::prefix('/prescription')->name('prescription.')->group(function () {
        Route::get('/index', 'PrescriptionController@index')->name('index');
        Route::get('/create', 'PrescriptionController@create')->name('create');
        Route::get('/show', 'PrescriptionController@show')->name('show');
        Route::get('/edit', 'PrescriptionController@edit')->name('edit');
        Route::delete('/delete', 'PrescriptionController@delete')->name('delete');
    });


    Route::prefix('/appointmentbooking')->name('appointmentbooking.')->group(function () {
        Route::get('/index', 'AppointmentBookingController@patientShowAppointmentBookings')->name('index');
        Route::get('/bookappointment', 'AppointmentBookingController@patientbookAppointment')->name('bookappointment');
        Route::get('/show', 'AppointmentBookingController@patientShowAppointmentBooking')->name('show');
    });

});
