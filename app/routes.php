<?php
Route::get('/','HomeController@home');

// Clubs URLs
Route::get('aeromodelling-club',array('as'=>'aeromodelling-club','uses'=>'HomeController@aeromodelling_club'));
Route::get('electronics-club',array('as'=>'electronics-club','uses'=>'HomeController@electronics_club'));
Route::get('krittika',array('as'=>'krittika','uses'=>'HomeController@krittika'));
Route::get('math-and-physics-club',array('as'=>'MnP','uses'=>'HomeController@MnP'));
Route::get('robotics-club',array('as'=>'robotics-club','uses'=>'HomeController@robotics_club'));
Route::get('web-and-coding-club',array('as'=>'wncc','uses'=>'HomeController@wncc'));
Route::get('technovation',array('as'=>'technovation','uses'=>'HomeController@technovation'));

// Clubs Pages
Route::get('aeromodelling-club/{page}','HomeController@aeromodelling_club');
Route::get('electronics-club/{page}','HomeController@electronics_club');
Route::get('krittika/{page}','HomeController@krittika');
Route::get('robotics-club/{page}','HomeController@robotics_club');
Route::get('math-and-physics-club/{page}','HomeController@MnP');
Route::get('web-and-coding-club/{page}','HomeController@wncc');

// Vision
Route::get('vision-of-stab-team-2014-15',array('as'=>'vision','uses'=>'HomeController@vision'));

// Team 
Route::get('team-stab-2014',array('as'=>'team_2014','uses'=>function ()
{
	return View::make('team.2014');
}));

// Hall of fame
Route::get('hall-of-fame',array('as'=>'halloffame','uses'=>function ()
{
	return View::make('hallofame');
}));


