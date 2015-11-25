<?php

/*Route::get('/', 'HomeController@Index');
Route::get('/calon-siswa/daftar', 'ApplicantController@getRegister');
Route::post('calon-siswa/daftar', 'ApplicantController@postRegister');
Route::get('/files', 'ApplicantController@public');
Route::get('/pendaftar', 'ApplicantController@showApplicants');

// Authentication routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');*/

// Admin in group
Route::group(['prefix' => 'admin'], function(){

	Route::get('dashboard',[
		'as' => 'admin.dashboard',
		'uses' => 'Admin\PanelController@dashboard']
	);

	Route::resource('applicants','Admin\ApplicantController');

});

Route::get('/staff', 'AdminPageController@staff');
Route::get('/applicant', 'AdminPageController@applicant');

// Admin Page
/*Route::get('/admin', 'AdminPageController@admin');
Route::get('/admin-applicant', 'AdminPageController@adminShow');
*/