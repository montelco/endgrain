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
	Route::get('/news/10-pitman-ave', [
		'uses' => '\endgrain\Http\Controllers\HomeController@pitmanAve',
		'as' => 'pitmanAve',
	]);
