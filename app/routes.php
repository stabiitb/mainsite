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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('test', function()
{
	return View::make('layout.front');
});


Route::get('team-stab-2014', array('as'=>'team-stab-2014','uses'=>function(){
	return View::make('team.2014');
}));
