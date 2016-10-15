<?php

	Route::get('/', [
		'uses' => '\endgrain\Http\Controllers\HomeController@index',
		'as' => 'home',
	]);