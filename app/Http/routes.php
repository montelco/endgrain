<?php

	Route::get('/', [
		'uses' => '\endgrain\Http\Controllers\HomeController@index',
		'as' => 'home',
	]);
	// Route::get('/wholesale', [
	// 	'uses' => '\endgrain\Http\Controllers\HomeController@wholesale',
	// 	'as' => 'wholesale',
	// ]);
	Route::get('/catering', [
		'uses' => '\endgrain\Http\Controllers\HomeController@catering',
		'as' => 'catering',
	]);

	Route::get('/beer', [
		'uses' => '\endgrain\Http\Controllers\HomeController@beer',
		'as' => 'beer',
	]);
	
	Route::get('/menu', [
		'uses' => '\endgrain\Http\Controllers\HomeController@menu',
		'as' => 'menu',
	]);

	Route::get('/locations', [
		'uses' => '\endgrain\Http\Controllers\HomeController@locations',
		'as' => 'locations',
	]);

	Route::post('/contact', [
		'uses' => '\endgrain\Http\Controllers\HomeController@postContact',
	]);

