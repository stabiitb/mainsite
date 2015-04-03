<?php


//ITSP - 2015 URL
Route::group(array('prefix' => 'itsp'),function()
{
    Route::get('register',array('as'=>'events.ITSP_2015.form','uses'=>'ITSPController@form'));
    Route::get('/',array('as'=>'events.ITSP_2015.index','uses'=>'ITSPController@index'));
    Route::get('frequently-asked-questions',array('as'=>'events.ITSP_2015.faq','uses'=>'ITSPController@faq'));
    Route::get('timeline',array('as'=>'events.ITSP_2015.timeline','uses'=>'ITSPController@timeline'));
    Route::get('about',array('as'=>'events.ITSP_2015.about','uses'=>'ITSPController@about'));
    Route::post('auth',array('as'=>'events.ITSP_2015.auth','uses'=>'ITSPController@auth'));
    Route::post('signup',array('as'=>'events.ITSP_2015.signup','uses'=>'ITSPController@signup'));
    Route::get('abstract',array('as'=>'events.ITSP_2015.abstract','uses'=>'ITSPController@abs'));
    Route::get('mentor',array('as'=>'events.ITSP_2015.mentor','uses'=>'ITSPController@mentor'));
    
});


Route::get('test','ITSPController@test');
Route::group(array('prefix'=>'PoR'),function()
{
    Route::get('/',array('as'=>'events.PoR.form','uses'=>'PoRController@form'));
    Route::get('register',array('as'=>'events.PoR.form','uses'=>'PoRController@form'));
});
    

Route::get('/',array('as'=>'stab.home' , 'uses'=>'HomeController@home'));
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

//CLub Events
Route::get('electronics-club/event/CMOS-Design-Challenege-solution',array('as'=>'electronics-club.CMOS','uses'=>'EventController@elec_CMOS_Challenge_show'));
Route::get('electronics-club/event/CMOS-Design-Challenege-solution/all',array('as'=>'electronics-club.CMOS.all','uses'=>'EventController@elec_CMOS_Challenge_all'));
Route::post('electronics-club/event/CMOS-Design-Challenege-solution',array('as'=>'electronics-club.CMOS','uses'=>'EventController@elec_CMOS_Challenge_add'));

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

// Events
Route::get('jan-events',array('as' => 'events.jan.2015' , 'uses' => 'EventController@jan_2015'));

//TechEXPO
Route::get('techexpo',array('as'=>'tech_rnd','uses'=>function ()
{
    return View::make('events.tech_rnd');
}));

Route::get('tech-gc-points',array('as'=>'techgc','uses'=>'HomeController@techgc'));

// Smart Campus
Route::get('smart-campus',array('as'=>'smart-campus','uses'=>'AppsController@smart_campus_home'));
Route::get('smart-campus/team/{id}',array('before'=>'login','as'=>'smart_campus.page','uses'=>'AppsController@smart_campus_team'));
Route::get('smart-campus/all-team-list',array('before'=>'login','as'=>'smart_campus.all-team-list','uses'=>'AppsController@smart_campus_xls'));
Route::get('smart-campus/{page}',array('as'=>'smart_campus.page','uses'=>'AppsController@smart_campus_home'));
Route::post('smart-campus/register',array('as'=>'smart_campus.register','uses'=>'AppsController@smart_campus_register'));
Route::post('smart-campus/all-team',array('as'=>'smart_campus.all-team','uses'=>'AppsController@smart_campus_abstract'));

// Inter IIT Tech Meet
Route::get('inter-iit-tech-meet/register',array('as'=>'interiit.reg','uses'=>'AppsController@interiit'));


Route::any('logout',array('as'=>'logout' ,'before'=>'login', 'uses' => 'UserController@logout'));
Route::any('profile',array('as'=>'user.profile' ,'before'=>'login', 'uses' => 'UserController@profile'));
Route::get('fblogin','UserController@fblogin');
Route::post('ldap_verify',array('as'=>'user.verify','before'=>'login','uses'=>'UserController@verify'));


Route::get('sitemap', function(){

    // create new sitemap object
    $sitemap = App::make("sitemap");

    // add items to the sitemap (url, date, priority, freq)
    $sitemap->add(URL::to('/'), '2012-08-25T20:10:00+02:00', '1.0', 'weekly');
    $sitemap->add(URL::route('vision'), '2012-08-25T20:10:00+02:00', '0.8', 'monthly');

    $clubs=['aeromodelling-club'=>['about','team','vision','event']
    ,'electronics-club'=>['about','team','event'],
    'krittika'=>['about','team','vision','event'],
    'math-and-physics-club'=>['about','team','vision','event'],
    'math-and-physics-club'=>['about','team','vision','event'],
    'web-and-coding-club'=>['about','team','vision','event']];

    foreach ($clubs as $key => $row) {
    	$sitemap->add(URL::to('/'.$key), '2012-08-25T20:10:00+02:00', '0.8', 'weekly');
    	foreach ($row as $key1 => $value) {
    		$sitemap->add(URL::to('/'.$key.'/'.$value), '2012-08-25T20:10:00+02:00', '0.25', 'monthly');
    	}
    }
    return $sitemap->render('xml');
});
