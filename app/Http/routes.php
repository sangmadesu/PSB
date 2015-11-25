<?php

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
