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

// Team 
Route::get('team-stab-2014',array('as'=>'team_2014','uses'=>function ()
{
	return View::make('team.2014');
}));
Route::get('team-stab-2013',array('as'=>'team_2013','uses'=>function ()
{
	return View::make('team.2013');
}));
Route::get('team-stab-2012',array('as'=>'team_2012','uses'=>function ()
{
	return View::make('team.2012');
}));
Route::get('stab-alumni',array('as'=>'alumni','uses'=>function ()
{
	return View::make('team.alumni');
}));

// Hall of fame
Route::get('hall-of-fame',array('as'=>'halloffame','uses'=>function ()
{
	return View::make('hallofame');
}));

// Hall of fame
Route::get('faculty-advisor-and-mentor',array('as'=>'facad','uses'=>function ()
{
	return View::make('home.facad');
}));

// Calender
Route::get('calendar',array('as'=>'calender','uses'=>function ()
{
	return View::make('calender');
}));

//TechEXPO
Route::get('techexpo',array('as'=>'tech_rnd','uses'=>function ()
{
	return View::make('events.tech_rnd');
}));
//Tech Expo Registrant
Route::get('tech-expo-register',array('as' => 'expo.register' , 'uses' => 'AppsController@expo_view'));
Route::post('tech-expo-register',array('as' => 'expo.register' , 'uses' => 'AppsController@expo_save'));

