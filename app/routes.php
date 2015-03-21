<?php

Route::filter('login',function(){
	$value = Session::get('admin');
	if($value!="1")
	{
		return View::make('user.login');
	}
});

$itspRoutes = function()
{
    Route::get('register',array('as'=>'events.ITSP.form','uses'=>'ITSPController@form'));
    Route::get('/',array('as'=>'events.ITSP.index','uses'=>'ITSPController@index'));
    Route::get('frequently-asked-questions',array('as'=>'events.ITSP.faq','uses'=>'ITSPController@faq'));
    Route::get('timeline',array('as'=>'events.ITSP.timeline','uses'=>'ITSPController@timeline'));
}

//ITSP - 2015 URL
Route::group(array('domain' => 'itsp.stab-iitb.org'),$itspRoutes);

Route::group(array('domain' => 'www.stab-iitb.org'),function(){
    Route::get('/',array('as'=>'stab.home' , 'uses'=>'HomeController@home'));
    // Clubs URLs
    Route::get('aeromodelling-club',array('as'=>'aeromodelling-club','uses'=>'HomeController@aeromodelling_club'));
    Route::get('electronics-club',array('as'=>'electronics-club','uses'=>'HomeController@electronics_club'));
    /*function(){
    	Redirect::to('http://www.stab-iitb.org/elec-club');
    }));*/
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


    // USERS
    Route::post('login',array('as'=>'login','uses'=>'UserController@ManagerAuth'));
    Route::get('logout',array('as'=>'logout','uses'=>'UserController@ManagerLogout'));



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
});