<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="keywords" content="">
<meta name="description" content="">
<meta property="fb:admins" content="prateekchandan5545">
<meta property="og:type" content="website">
<meta property="og:locale" content="ja_JP">
<meta property="og:image" content="http://tokyomildfoundation.com/images/ogp.png">
<meta property="og:site_name" content="STAB IITB">
<meta property="og:title" content="Students' Technical Activities Body">
<meta property="og:description" content="">
<meta property="og:url" content="http://www.stab-iitb.org/">
<link rel="shortcut icon" href="{{ URL::asset('assets/front/images/favicon.ico')}}">
<link rel="apple-touch-icon" href="{{ URL::asset('assets/front/images/webclip.png')}}">
<link rel="stylesheet" href="{{ URL::asset('assets/front/css/style.css')}}">
<link rel="stylesheet" href="{{ URL::asset('assets/front/css/font.css')}}">
<link rel="stylesheet" href="{{ URL::asset('assets/front/js/libs/video-js.css')}}">
<link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Gilda+Display" rel="stylesheet" type="text/css">
<title>STAB IITB</title>
</head>
<body>
<span id="dummy_span"></span>
<div class="preloader">
	<div class="preloader_bg"></div>
	<div class="text">
		<p class="main"><span class="world">STAB</span> IITB</p>
		<p class="tagline">Be still to feel the glory of tech.</p>
		<div class="progress"></div>
	</div>
	<div class="logo">
		<div class="logo_box">  </div>
		<!--/logo_box-->
		<div class="logo_lines"> <span class="line1"></span> <span class="line2"></span> <span class="line3"></span> </div>
		<img src="img/preloader_logo.png" alt="Students' Technical Activities Body, IIT Bombay"> </div>
	<!-- /.preloader --></div>
<canvas id="bgCanvas"></canvas>

<nav>
	<div class="nav_open"> 
		<div class="bar1">&nbsp;</div>
		<div class="bar2">&nbsp;</div>
		<div class="bar3">&nbsp;</div>
	</div>
	<div class="nav_ameba">
		<canvas id="canvas_ameba" width="58" height="40"></canvas>
	</div>
	<div class="nav_content">
		<h1> <a href="#">
			<span class="logo_section"> <!--span class="logo_box"> <span class="box1"></span> <span class="box2"></span> <span class="box3"></span> <span class="box4"></span> <span class="box5"></span> <span class="box6"></span> <span class="box7"></span> <span class="box8"></span> <span class="box9"></span> </span--><!--/logo_box-->
			<img src="{{ URL::asset('assets/front/img/nav_logo_01.png')}}" alt="STAB IITB"  style="left: -45px;
position: absolute;
height: 80px;"></span> </a> </h1>
		<ul class="nav_pages">
			<li class="current"><a href="#"><span>HOME</span></a></li>
			<li><a href="index.html#works"><span>WORKS</span></a></li>
			<li><a href="index.html#member"><span>MEMBER</span></a></li>
			<li><a href="index.html#service"><span>SERVICE</span></a></li>
			<li><a href="index.html#about"><span>ABOUT</span></a></li>
		</ul>
		<ul class="nav_social">
			<li><a href="javascript:void(0);" onclick="window.open('http://www.facebook.com/share.php?u=http://twww.stab-iitb.org/' , 'facebook_share', 'width=550, height=450,personalbar=0,toolbar=0,scrollbars=1,resizable=1'); return false;" target="_blank"><img src="{{ URL::asset('assets/front/img/nav_social_fb.png')}}" alt="facebook" width="17" height="17"></a></li>
			<li><a href="javascript:void(0);" onclick="javascript:void window.open('http://twitter.com/intent/tweet?text=Students; Technical Activities Body , IIT Bombay - http://www.stab-iitb.org/','_blank','width=550,height=480,left=100,top=50,scrollbars=1,resizable=1',0); return false;"><img src="{{ URL::asset('assets/front/img/nav_social_tw.png')}}" alt="twitter" width="17" height="17"></a></li>
		</ul>
		<p class="nav_copyright">&copy; 2014 STAB IITB</p>
	</div>
</nav>
<div class="blocker"></div>
<div id="map">&nbsp;</div>
<div id="map_zoomin_container"><div id="map_zoomin">&nbsp;</div></div>


<main>
	<div class="main_index">
		<ul class="panels">
			<li><article>
				<a href="#">
				<figure class="preview"> <img class="preview_bw" src="{{ URL::asset('assets/front/img/aero_b.png')}}" alt=""> <img class="preview_color" src="{{ URL::asset('assets/front/img/aero_d.png')}}" alt=""> </figure>
				<p class="play"><img src="{{ URL::asset('assets/front/img/index_panel_play.png')}}" alt="play" width="26" height="32"></p>
				<h1 class="title">AEROMODELLING CLUB</h1>
				</a>
				</article>
			</li
			><li><article>
				<a href="#">
				<figure class="preview"> <img class="preview_bw" src="{{ URL::asset('assets/front/img/elec_b.png')}}" alt=""> <img class="preview_color" src="{{ URL::asset('assets/front/img/elec_d.png')}}" alt=""> </figure>
				<p class="play"> <img src="{{ URL::asset('assets/front/img/index_panel_play.png')}}" alt="play" width="26" height="32"> </p>
				<h1 class="title">ELECTRONICS CLUB</h1>
				</a>
				</article>
			</li>
			<li><article>
				<a href="#">
				<figure class="preview"> <img class="preview_bw" src="{{ URL::asset('assets/front/img/kritikka_b.png')}}" alt=""> <img class="preview_color" src="{{ URL::asset('assets/front/img/kritikka_d.png')}}" alt=""> </figure>
				<p class="play"><img src="{{ URL::asset('assets/front/img/index_panel_play.png')}}" alt="play" width="26" height="32"></p>
				<h1 class="title">KRITTIKA ASTRONOMY CLUB</h1>
				</a>
				</article>
			</li>
			<li><article>
				<a href="#">
				<figure class="preview"> <img class="preview_bw" src="{{ URL::asset('assets/front/img/mnp_b.png')}}" alt=""> <img class="preview_color" src="{{ URL::asset('assets/front/img/mnp_d.png')}}" alt=""> </figure>
				<p class="play"><img src="{{ URL::asset('assets/front/img/index_panel_play.png')}}" alt="play" width="26" height="32"></p>
				<h1 class="title">MATHS AND PHYSICS CLUB</h1>
				</a>
				</article>
			</li>
			<li><article>
				<a href="#">
				<figure class="preview"> <img class="preview_bw" src="{{ URL::asset('assets/front/img/preloader_logo.png')}}" alt=""> <img class="preview_color" src="{{ URL::asset('assets/front/img/preloader_logo.png')}}" alt=""> </figure>
				<p class="play"><img src="{{ URL::asset('assets/front/img/index_panel_play.png')}}" alt="play" width="26" height="32"></p>
				<h1 class="title"></h1>
				</a>
				</article>
			</li>
			<li><article>
				<a href="#">
				<figure class="preview"> <img class="preview_bw" src="{{ URL::asset('assets/front/img/robotics_b.png')}}" alt=""> <img class="preview_color" src="{{ URL::asset('assets/front/img/robotics_d.png')}}" alt=""> </figure>
				<p class="play"><img src="{{ URL::asset('assets/front/img/index_panel_play.png')}}" alt="play" width="26" height="32"></p>
				<h1 class="title">ROBOTICS CLUB</h1>
				</a>
				</article>
			</li>
			<li><article>
				<a href="#">
				<figure class="preview"> <img class="preview_bw" src="{{ URL::asset('assets/front/img/wncc_b.png')}}" alt=""> <img class="preview_color" src="{{ URL::asset('assets/front/img/wncc_d.png')}}" alt=""> </figure>
				<p class="play"><img src="{{ URL::asset('assets/front/img/index_panel_play.png')}}" alt="play" width="26" height="32"></p>
				<h1 class="title">WEB AND CODING CLUB</h1>
				</a>
				</article>
			</li
			><li><article>
				<a href="http://technovation.stab-iitb.org">
				<figure class="preview"> <img class="preview_bw" src="{{ URL::asset('assets/front/img/technovation_b.png')}}" alt=""> <img class="preview_color" src="{{ URL::asset('assets/front/img/technovation_d.png')}}" alt=""> </figure>
				<p class="play"><img src="{{ URL::asset('assets/front/img/index_panel_play.png')}}" alt="play" width="26" height="32"></p>
				<h1 class="title">TECHNOVATION</h1>
				</a>
				</article>
			</li
			><li class="member"><article>
				<a href="http://www.stab-iitb.org/tinkerers_lab">
				<figure class="preview"> <img class="preview_bw" src="{{ URL::asset('assets/front/img/index_panel_08_img_01.jpg')}}" alt="">
					<video class="preview_color" autoplay muted loop>
						<source src="{{ URL::asset('assets/front/mov/home_member.mp4')}}" type="video/mp4">
						<source src="{{ URL::asset('assets/front/mov/home_member.webm')}}" type="video/webm">
					</video>
				</figure>
				<h1 class="title">TINKERERS LAB</h1>
				<p class="more"><span class="text">VISIT SITE</span><span class="underline">&nbsp;</span></p>
				</a>
				</article>
			</li>

			<li class="service"><article>
				<a href="http://techid.stab-iitb.org">
				<figure class="preview"> <img class="preview_bw" src="{{ URL::asset('assets/front/img/index_panel_09_img_01.jpg')}}" alt="">
					<video class="preview_color" autoplay muted loop>
						<source src="{{ URL::asset('assets/front/mov/home_service.mp4')}}" type="video/mp4">
						<source src="{{ URL::asset('assets/front/mov/home_service.webm')}}" type="video/webm">
					</video>
				</figure>
				<h1 class="title">TECHID</h1>
				<p class="more"><span class="text">Grab your TECH ID</span><span class="underline">&nbsp;</span></p>
				</a>
				</article>
			</li>
			<li><article>
				<a href="http://techid.stab-iitb.org">
				<figure class="preview"> <img class="preview_bw" src="{{ URL::asset('assets/front/img/index_panel_09_img_01.jpg')}}" alt="">
					<video class="preview_color" autoplay muted loop>
						<source src="{{ URL::asset('assets/front/mov/home_service.mp4')}}" type="video/mp4">
						<source src="{{ URL::asset('assets/front/mov/home_service.webm')}}" type="video/webm">
					</video>
				</figure>
				<h1 class="title">TECHID</h1>
				<p class="more"><span class="text">Grab your TECH ID</span><span class="underline">&nbsp;</span></p>
				</a>
				</article>
			</li>
		</ul>
	</div>
</main>

<div class="loading_progress">&nbsp;</div>
<div class="loading_cover">

	<span class="logo_box">
		<span class="box1"></span> <span class="box2"></span> <span class="box3"></span> <span class="box4"></span> <span class="box5"></span> <span class="box6"></span> <span class="box7"></span> <span class="box8"></span> <span class="box9"></span>
	 </span><!--/logo_box-->
</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJsEDhjFsyttzwLfnB_3gwt4oyk35doz4&amp;sensor=false"></script>
<script src="{{ URL::asset('assets/front/js/libs/all.lib.min.js')}}"></script>
<script src="{{ URL::asset('assets/front/js/min/script.min.js')}}"></script>
</body>
</html>
