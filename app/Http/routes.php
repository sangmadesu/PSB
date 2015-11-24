<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@Index');
Route::get('/calon-siswa/daftar', 'ApplicantController@getRegister');
Route::post('calon-siswa/daftar', 'ApplicantController@postRegister');
Route::get('/files', 'ApplicantController@public');
Route::get('/pendaftar', 'ApplicantController@showApplicants');

// Authentication routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
// Route::get('/login', 'ApplicantController@login');
// Route::post('/login', 'ApplicantController@postlogin');
// Route::get('/applicant/login', 'Auth\AuthController@applicantLogin');

// Admin Page
Route::get('/admin', 'AdminPageController@admin');
// Route::get('/admin/')
// Staff Page
Route::get('/staff', 'AdminPageController@staff');

// Applicant Page
Route::get('/applicant', 'AdminPageController@applicant');