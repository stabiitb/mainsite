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

// Vision , Reports , Lightsaber
Route::get('vision-of-stab-team-2014-15',array('as'=>'vision','uses'=>'HomeController@vision'));
Route::get('InstiReview-HobbyClubs-TechTeams',array('as'=>'institute_review_2013','uses'=>function(){return View::make('institute_review_2013');}));
Route::get('lightsaber',array('as'=>'lightsaber','uses'=>function(){return View::make('lightsaber');}));


//Tech Expo Registrant
Route::get('tech-expo-register',array('as' => 'expo.register' , 'uses' => 'AppsController@expo_view'));
Route::post('tech-expo-register',array('as' => 'expo.register' , 'uses' => 'AppsController@expo_save'));
Route::get('tech-expo-all',array('as' => 'expo.all' , 'uses' => 'AppsController@expo_all'));

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

// Calender
Route::get('calendar',array('as'=>'calender','uses'=>function ()
{
	return View::make('calender');
}));

// Calender
Route::get('tech-and-RnD-exposition-2014',array('as'=>'tech_rnd','uses'=>function ()
{
	return View::make('events.tech_rnd');
}));
