<?php

Route::get('update_server/{code}',array('as'=>'update_server','uses'=>'HomeController@update_server'));

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
    Route::get('tshirt',array('as'=>'events.ITSP_2015.tshirt','uses'=>'ITSPController@tshirt'));

});

//Tutorials
Route::get('tutorials',array('as'=>'tutorials','uses'=>'HomeController@tutorials'));
Route::get('tutorials/upload',array('as'=>'tutorials.upload','uses'=>'HomeController@tutorials_upload'));
Route::post('tutorials/save',array('as'=>'tutorials.save','uses'=>'HomeController@tutorials_save'));

Route::group(array('prefix' => 'robotics-club/event/XLR8-2015'),function()
{
    Route::get('/',array('as'=>'club.robo.XLR8_2015.index','uses'=>'HomeController@XLR8_index'));
    Route::get('frequently-asked-questions',array('as'=>'club.robo.XLR8_2015.faq','uses'=>'HomeController@XLR8_faq'));
    Route::get('about',array('as'=>'club.robo.XLR8_2015.about','uses'=>'HomeController@XLR8_about'));
    Route::get('discuss',array('as'=>'club.robo.XLR8_2015.discuss','uses'=>'HomeController@XLR8_discuss'));
    Route::get('timeline',array('as'=>'club.robo.XLR8_2015.timeline','uses'=>'HomeController@XLR8_timeline'));
    Route::get('student_reg',array('as'=>'club.robo.XLR8_2015.students_reg','uses'=>'HomeController@XLR8_stud_reg'));
    Route::get('mentor_reg',array('as'=>'club.robo.XLR8_2015.mentor_reg','uses'=>'HomeController@XLR8_mentor_reg'));
    Route::get('mentor_list',array('as'=>'club.robo.XLR8_2015.mentor_list','uses'=>'HomeController@XLR8_mentor_list'));
    Route::get('resources',array('as'=>'club.robo.XLR8_2015.resources','uses'=>'HomeController@XLR8_resources'));
});

Route::group(array('prefix' => 'aeromodelling-club/event/RC-Plane'),function()
{
    Route::get('/',array('as'=>'club.aero.RC_Plane.index','uses'=>'HomeController@RCPlane_index'));
    //Route::get('frequently-asked-questions',array('as'=>'club.robo.XLR8_2015.faq','uses'=>'HomeController@XLR8_faq'));
    Route::get('about',array('as'=>'club.aero.RC_Plane.about','uses'=>'HomeController@RCPlane_about'));
    //Route::get('discuss',array('as'=>'club.robo.XLR8_2015.discuss','uses'=>'HomeController@XLR8_discuss'));
    //Route::get('timeline',array('as'=>'club.robo.XLR8_2015.timeline','uses'=>'HomeController@XLR8_timeline'));
    Route::get('student_reg',array('as'=>'club.aero.RC_Plane.students_reg','uses'=>'HomeController@RCPlane_stud_reg'));
    //Route::get('mentor_reg',array('as'=>'club.robo.XLR8_2015.mentor_reg','uses'=>'HomeController@XLR8_mentor_reg'));
    //Route::get('mentor_list',array('as'=>'club.robo.XLR8_2015.mentor_list','uses'=>'HomeController@XLR8_mentor_list'));
    Route::get('resources',array('as'=>'club.aero.RC_Plane.resources','uses'=>'HomeController@RCPlane_resources'));
});

Route::get('techandrndexpo2015/',array('as'=>'events.techexpo.2015','uses'=>'HomeController@techexpo2015'));
Route::get('techandrndexpo2015/{page}',array('as'=>'events.techexpo.2015.pages','uses'=>'HomeController@techexpo2015'));


Route::get('implinks',array('as'=>'links','uses'=>'HomeController@links')); 
Route::get('freshie_intro',array('as'=>'freshie_intro','uses'=>function(){return View::make('freshie_intro');}));

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
Route::get('wncc',array('as'=>'wncc','uses'=>'HomeController@wncc'));
Route::get('technovation',array('as'=>'technovation','uses'=>'HomeController@technovation'));

// Clubs Pages
Route::get('aeromodelling-club/{page}','HomeController@aeromodelling_club');
Route::get('electronics-club/{page}','HomeController@electronics_club');
Route::get('krittika/{page}','HomeController@krittika');
Route::get('robotics-club/{page}','HomeController@robotics_club');
Route::get('math-and-physics-club/{page}','HomeController@MnP');
Route::get('wncc/{page}','HomeController@wncc');

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

Route::get('tech-gc-points-2014',array('as'=>'techgc2014','uses'=>'HomeController@techgc2014'));
Route::get('tech-gc-points-2015',array('as'=>'techgc2015','uses'=>'HomeController@techgc2015'));

// Smart Campus
Route::get('smart-campus',array('as'=>'smart-campus','uses'=>'AppsController@smart_campus_home'));
Route::get('smart-campus/team/{id}',array('before'=>'login','as'=>'smart_campus.page','uses'=>'AppsController@smart_campus_team'));
Route::get('smart-campus/all-team-list',array('before'=>'login','as'=>'smart_campus.all-team-list','uses'=>'AppsController@smart_campus_xls'));
Route::get('smart-campus/{page}',array('as'=>'smart_campus.page','uses'=>'AppsController@smart_campus_home'));
Route::post('smart-campus/register',array('as'=>'smart_campus.register','uses'=>'AppsController@smart_campus_register'));
Route::post('smart-campus/all-team',array('as'=>'smart_campus.all-team','uses'=>'AppsController@smart_campus_abstract'));

// Inter IIT Tech Meet
Route::get('inter-iit-tech-meet/register',array('as'=>'interiit.reg','uses'=>'AppsController@interiit'));



/* User */
Route::get('login_page',array('as'=>'login_page', 'uses' => 'UserController@login_page'));
Route::post('login',array('as'=>'user.login','uses'=>'UserController@login'));
Route::post('signup',array('as'=>'user.signup','uses'=>'UserController@signup'));
Route::post('set_password',array('as'=>'user.set_password','uses'=>'UserController@set_password'));

Route::any('logout',array('as'=>'logout' ,'before'=>'login', 'uses' => 'UserController@logout'));
Route::any('profile',array('as'=>'user.profile' ,'before'=>'login', 'uses' => 'UserController@profile'));
Route::get('fblogin','UserController@fblogin');
Route::post('ldap_verify',array('as'=>'user.verify','before'=>'login','uses'=>'UserController@verify'));
Route::post('profile_update',array('as'=>'user.update','before'=>'login','uses'=>'UserController@update'));
Route::get('profile_edit',array('as'=>'user.edit','before'=>'login','uses'=>'UserController@edit'));
Route::get('show_users',array('as'=>'user.show','before'=>'login','uses'=>'UserController@show_users'));

Route::get('sso_login_redirect',array('as'=>'sso_login_redirect', 'uses' => 'UserController@sso_login_redirect'));





Route::get('sitemap', function(){

    // create new sitemap object
    $sitemap = App::make("sitemap");

    // add items to the sitemap (url, date, priority, freq)
    $sitemap->add(URL::to('/'), '2012-08-25T20:10:00+02:00', '1.0', 'weekly');
    $sitemap->add(URL::route('vision'), '2012-08-25T20:10:00+02:00', '0.8', 'monthly');
    $sitemap->add(URL::route('events.ITSP_2015.itsp'),'2015-06-15T20:10:00+02:00','0.8','weekly');

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
