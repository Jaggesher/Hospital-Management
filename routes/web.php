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