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
    Route::get('discuss',array('as'=>'events.ITSP_2015.discuss','uses'=>'ITSPController@discuss'));
    Route::get('give_reviews',array('as'=>'events.ITSP_2015.give_reviews','uses'=>'ITSPController@give_reviews'));
    Route::any('take_reviews',array('as'=>'events.ITSP_2015.take_reviews','uses'=>'ITSPController@take_reviews'));
    Route::any('resubmit_abstract',array('as'=>'events.ITSP_2015.resubmit_abstract','uses'=>'ITSPController@resubmit_abstract'));
    Route::get('final_reviews',array('as'=>'events.ITSP_2015.final_reviews','uses'=>'ITSPController@final_reviews'));
    Route::get('qwedfrtghyuj/{club}',array('as'=>'events.ITSP_2015.review','uses'=>'ITSPController@review')); 
    Route::get('qwedfrtghyuj',array('as'=>'events.ITSP_2015.reviews','uses'=>'ITSPController@reviews')); 
    Route::get('qwsaqwasqwas/updating_data_base',array('as'=>'events.ITSP_2015.updateslots','uses'=>'ITSPController@update_slots'));
    Route::get('team',array('as'=>'events.ITSP_2015.team','uses'=>'ITSPController@team'));
    Route::get('team_verify',array('as'=>'events.ITSP_2015.team_verify','uses'=>'ITSPController@team_verify'));
    Route::get('team_update',array('as'=>'events.ITSP_2015.team_update','uses'=>'ITSPController@team_update'));
    Route::get('room_retained',array('as'=>'events.ITSP_2015.room_retained','uses'=>'ITSPController@room_retained'));
    Route::get('want_room',array('as'=>'events.ITSP_2015.want_room','uses'=>'ITSPController@want_room'));
    Route::get('edit_team',array('as'=>'events.ITSP_2015.edit_team','uses'=>'ITSPController@edit_team'));
    Route::get('selected_students',array('as'=>'events.ITSP_2015.selected_students','uses'=>'ITSPController@selected_students'));
    Route::get('documentation',array('as'=>'events.ITSP_2015.documentation','uses'=>'ITSPController@documentation'));
    Route::any('documentation/img-upload',array('as'=>'events.ITSP_2015.documentation.img-upload','uses'=>'ITSPController@documentation_img_upload'));
    Route::any('documentation/projectimg-upload',array('as'=>'events.ITSP_2015.documentation.projectimg-upload','uses'=>'ITSPController@documentation_projectimg_upload'));
    Route::any('documentation/savefile',array('as'=>'events.ITSP_2015.documentation.savefile','uses'=>'ITSPController@documentation_savefile'));
    Route::any('documentation/savezip',array('as'=>'events.ITSP_2015.documentation.savezip','uses'=>'ITSPController@documentation_savezip'));
    Route::any('documentation/links',array('as'=>'events.ITSP_2015.documentation.links','uses'=>'ITSPController@documentation_links'));
    Route::get('projects',array('as'=>'events.ITSP_2015.projects','uses'=>'ITSPController@projects'));
    Route::get('feedback',array('as'=>'events.ITSP_2015.feedback','uses'=>'ITSPController@feedback'));
    Route::get('final_team_verification',array('as'=>'events.ITSP_2015.final_team_verification','uses'=>'ITSPController@final_team_verification'));
    Route::get('update_names',array('as'=>'events.ITSP_2015.update_names','uses'=>'ITSPController@update_names'));

});

Route::get('implinks',array('as'=>'links','uses'=>'HomeController@links')); 


Route::get('Status_of_teams','ITSPController@test');
Route::get('final_teams','ITSPController@final_teams');
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
Route::get('annual_report_2014_2015',array('as'=>'annual_report_2014_2015','uses'=>function(){return View::make('annual_report_2014_2015');}));
Route::get('lightsaber',array('as'=>'lightsaber','uses'=>function(){return View::make('lightsaber');}));

// Team 
Route::get('team-stab-2015',array('as'=>'team_2015','uses'=>function ()
{
    return View::make('team.2015');
}));
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
Route::get('calendar',array('as'=>'calendar','uses'=>function ()
{
    return View::make('calendar');
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
Route::post('profile_update',array('as'=>'user.update','before'=>'login','uses'=>'UserController@update'));
Route::get('profile_edit',array('as'=>'user.edit','before'=>'login','uses'=>'UserController@edit'));

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
