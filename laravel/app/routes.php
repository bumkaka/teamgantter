<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
$theme = Config::get('site.theme');
View::addLocation(public_path() . '/themes/' . $theme . '/views/');



Route::get('/', function()
{
	echo 'Hello';//return View::make('hello');
});
