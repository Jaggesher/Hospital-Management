<?php

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
    return view('Home.home');
});

// Doctors Route

Route::get('/add_doctor',function(){
	return view('doctor.add-doctor');
});

Route::get('/show_doc',function(){
	return view('doctor.view-doctor');
});

Route::get('/edit_doc',function(){
	return view('doctor.edit-doctor');
});

Route::get('/doctors',function(){
	return view('doctor.doctors');
});

//Patients Route
Route::get('/show_patient','patientController@Show')->name('patient.Profile');

Route::get('/edit_patient',function(){
	return view('patient.edit-patient');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
