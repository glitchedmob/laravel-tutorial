<?php

/*Route::get('/', function () {
	$people = ['Taylor', 'Matt', 'Jeffery'];

	return view('welcome', compact('people'));
});*/

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');