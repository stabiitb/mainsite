<!DOCTYPE html>

<html lang="en">
	<head>
		<!-- Meta -->
		@yield('meta')
		<meta name="google-site-verification" content="U37UkrwWrB9z8bjUiI4i6-iss8-hQom2u2j5mlSs9v8" />
		<title>STAB | IITB</title>
		
		<!-- Bootstrap Core CSS -->
		<link href="{{ URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
		
		<!-- Customizable CSS -->
		<link href="{{ URL::asset('assets/css/main.css')}}" rel="stylesheet" data-skrollr-stylesheet>
		<link href="{{ URL::asset('assets/css/green.css')}}" rel="stylesheet" title="Color">
		<link href="{{ URL::asset('assets/css/owl.carousel.css')}}" rel="stylesheet">
		<link href="{{ URL::asset('assets/css/owl.transitions.css')}}" rel="stylesheet">
		<link href="{{ URL::asset('assets/css/animate.min.css')}}" rel="stylesheet">
		
		<!-- Fonts -->
		<link href="http://fonts.googleapis.com/css?family=Lato:400,900,300,700" rel="stylesheet">
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic,700italic" rel="stylesheet">
		
		<!-- Icons/Glyphs -->
		<link href="{{ URL::asset('assets/fonts/fontello.css')}}" rel="stylesheet">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico')}}">
		<style>
			@yield('css')
		</style>
		<!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
		<!--[if lt IE 9]>
			<script src="{{ URL::asset('assets/js/html5shiv.js')}}"></script>
			<script src="{{ URL::asset('assets/js/respond.min.js')}}"></script>
		<![endif]-->

		<script src="{{ URL::asset('assets/js/jquery.min.js')}}"></script>
		@yield('script')
		
	</head>
	
	<body>

	

		<!-- ============================================================= HEADER ============================================================= -->
		
		<header>
			<div class="navbar">
				
				<div class="navbar-header">
					<div class="container">
						
						<ul class="info pull-left">
							<li><a href="mailto://oc.stab@iitb.ac.in"><i class="icon-mail-1 contact"></i>oc.stab@iitb.ac.in</a></li>
						</ul><!-- /.info -->
						
						<ul class="pull-right" style="margin:3px">
							@if(Auth::check())
							<!-- <li style="padding-right:9px"><a href="{{URL::Route('events.ITSP_2015.team')}}" class="btn btn-small btn-green" >ITSP Profile</a></li>  -->
							<li style="padding-right:5px"><a href="{{URL::Route('user.profile')}}" class="btn btn-small btn-green" >Profile</a></li> 
							<li><a href="{{URL::Route('logout')}}" class="btn btn-small btn-green" >Logout</a></li> 
							</li>	
							@else
							<li><a href="{{URL::Route('login_page')}}" class="btn btn-small btn-green" >Login</a></li> 
							@endif
						</ul>
						<ul class="social pull-right">
							<li><a href="https://www.facebook.com/stab.iitb"><i class="icon-s-facebook"></i></a></li>
							<li><a href="https://github.com/stabiitb"><i class="icon-s-github"></i></a></li>
							<li><a href="https://www.youtube.com/user/STABiitb"><i class="icon-s-youtube"></i></a></li>
							<li><a href="#"><i class="icon-s-gplus"></i></a></li>
						</ul><!-- /.social -->
						<div class="pull-left " style="width:40%; all=default;">
							<div id='cse-search-form' style='width: 100%;'>Loading</div>
							<script src='//www.google.com/jsapi' type='text/javascript'></script>
							<script type='text/javascript'>
							google.load('search', '1', {language: 'en', style: google.loader.themes.V2_DEFAULT});
							google.setOnLoadCallback(function() {
							  var customSearchOptions = {};
							  var orderByOptions = {};
							  orderByOptions['keys'] = [{label: 'Relevance', key: ''} , {label: 'Date', key: 'date'}];
							  customSearchOptions['enableOrderBy'] = true;
							  customSearchOptions['orderByOptions'] = orderByOptions;
							  var imageSearchOptions = {};
							  imageSearchOptions['layout'] = 'google.search.ImageSearch.LAYOUT_POPUP';
							  customSearchOptions['enableImageSearch'] = true;
							  var customSearchControl =   new google.search.CustomSearchControl('011681609419535670422:cdwkjdrely0', customSearchOptions);
							  customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
							  var options = new google.search.DrawOptions();
							  options.enableSearchboxOnly('https://www.google.com/cse?cx=011681609419535670422:cdwkjdrely0');
							  options.setAutoComplete(true);
							  customSearchControl.draw('cse-search-form', options);
							}, true);
							</script>
							<style type='text/css'>
							  input.gsc-input, .gsc-input-box, .gsc-input-box-hover, .gsc-input-box-focus {
							    border-color: #D9D9D9;
							    height: 38px;
							    margin-top: 5px;
							    padding-top: -10px;
							    font-family: Arial, sans-serif;
							  }
							  input.gsc-search-button, input.gsc-search-button:hover, input.gsc-search-button:focus {
							    border-color: #2F5BB7;
							    background-color: #357AE8;
							    background-image: none;
							    height: 28px;
							    width: 70px;
							    margin-top: 8px;

							  }
							</style>
						</div>
						
						<!-- ============================================================= LOGO MOBILE ============================================================= -->
						
						<a class="navbar-brand" href="index.php"><img src="{{ URL::asset('assets/images/logo.png')}}" class="logo" alt=""></a>
						
						<!-- ============================================================= LOGO MOBILE : END ============================================================= -->
						
						<a class="btn responsive-menu pull-right" data-toggle="collapse" data-target=".navbar-collapse"><i class='icon-menu-1'></i></a>
						
					</div><!-- /.container -->
				</div><!-- /.navbar-header -->
				
				<div class="yamm">
					<div class="navbar-collapse collapse">
						<div class="container">
							
							<!-- ============================================================= LOGO ============================================================= -->
							
							<a class="navbar-brand" href="{{URL::Route('stab.home')}}"><img src="{{ URL::asset('assets/images/logo.png')}}" class="logo" alt=""></a>
							
							<!-- ============================================================= LOGO : END ============================================================= -->
							
							
							<!-- ============================================================= MAIN NAVIGATION ============================================================= -->
							
							<ul class="nav navbar-nav">
								
								<li class="dropdown yamm-fullwidth">
									<a href="#" class="dropdown-toggle js-activated">About</a>
									
									<ul class="dropdown-menu yamm-dropdown-menu" style="width: 40%;left:10%">
										<li>
											<div class="yamm-content row">
											
											
												<div class="col-sm-6 inner">
													<h4></h4>
													
													<ul class="circled">
														<li><a href="{{URL::Route('vision')}}">VISION</a></li>
														<li><a href="{{URL::Route('halloffame')}}">HALL OF FAME</a></li>
														<li>REPORTS
															<ul>
																<li>
																	<a href="{{URL::Route('institute_review_2013')}}">INSTITUTE REVIEW 2013</a>
																</li>
																<li>
																	<a href="{{URL::Route('annual_report_2014_2015')}}">ANNUAL REPORT 2014-2015</a>
																</li>
															</ul>
														</li>
													</ul><!-- /.circled -->
												</div><!-- /.col -->

												<div class="col-sm-6 inner">
													<h4>CONTACTS</h4>
													
													<ul class="circled">
														<li><a href="{{URL::Route('team_2015')}}">TEAM 2015-16</a></li>
														<li><a href="{{URL::Route('alumni')}}">ALUMNI</a></li>
														<li><a href="{{URL::Route('facad')}}">FACULTY ADVISORS/MENTORS</a></li>
													</ul><!-- /.circled -->
												</div><!-- /.col -->
											
												
											</div><!-- /.yamm-content -->
										</li>
									</ul><!-- /.yamm-dropdown-menu -->
								</li><!-- /.yamm-fullwidth -->
								
								
								<li class="dropdown">
									<a href="#" class="dropdown-toggle js-activated">Clubs</a>
									
									<ul class="dropdown-menu">
										<li><a href="{{URL::Route('aeromodelling-club')}}">Aeromodelling Club</a></li>
										<li><a href="{{URL::Route('electronics-club')}}">Electronics Club</a></li>
										<li><a href="{{URL::Route('krittika')}}">Krittika</a></li>
										<li><a href="{{URL::Route('MnP')}}">Math and Physics Club</a></li>
										<li><a href="{{URL::Route('robotics-club')}}">Robotics Club</a></li>
										<li><a href="{{URL::Route('wncc')}}">Web and Coding club</a></li>
									</ul><!-- /.dropdown-menu -->
								</li><!-- /.dropdown -->
								

								<li class="dropdown">
									<a href="#" class="dropdown-toggle js-activated">Technovation</a>
									
									<ul class="dropdown-menu">
										
										<li><a href="http://stab-iitb.org/technovation/">Visit Site</a></li>
										
									</ul> <!-- /.dropdown-menu -->
								</li> <!-- /.dropdown -->


								<li class="dropdown">
									<a href="http://stab-iitb.org/tinkerers-lab/">Tinkerer's Lab</a>
								</li><!-- /.dropdown -->

								<li class="dropdown">
									<a href="http://techgsr.com/" >TechGSR</a>
								</li><!-- /.dropdown -->

								
								
								<li class="dropdown">
									<a href="#" class="dropdown-toggle js-activated">Tech Teams</a>
									
									<ul class="dropdown-menu">
										<li><a target=_blank href="http://www.iitbracing.org/">IITB Racing</a></li>
										<li><a target=_blank href="http://www.auv-iitb.org/">AUV IITB</a></li>
										<li><a target=_blank href="http://www.aero.iitb.ac.in/pratham/Pratham/">Pratham</a></li>
										<li><a target=_blank href="http://www.marssociety.org.in/">Mars Rover</a></li>
										<li><a target=_blank href="http://www.umic-iitb.org/">Innovation Cell</a></li>
										<li><a target=_blank href="http://teamshunya.in/">Team Shunya</a></li>
									</ul><!-- /.dropdown-menu -->
								</li><!-- /.dropdown -->

								<li class="dropdown">
									<a href="#" class="dropdown-toggle js-activated">IITB Corner</a>
									
									<ul class="dropdown-menu">
										<!-- <li><a href="http://stab-iitb.org/tinkerers-lab/">Tinkerers’ Lab</a></li>									 -->
										<li><a href="http://stab-iitb.org/wiki">STAB WIKI</a></li>
										<!-- <li><a href="http://techid.stab-iitb.org/seasons">Stab Seasons</a></li> -->
										<li><a href="{{URL::Route('lightsaber')}}">Light Saber</a></li>
										<li><a href="{{URL::asset('media/WELpermission.pdf')}}">WEL Lab Permission form</a></li>
										<li><a href="{{URL::Route('techgc')}}">Tech GC Rankings</a></li>
										<li><a href="{{URL::Route('calendar')}}">Tech Calendar</a></li>
									</ul><!-- /.dropdown-menu -->
								</li><!-- /.dropdown -->
								
								<!-- /.dropdown -->

								
							</ul><!-- /.nav -->
							
							<!-- ============================================================= MAIN NAVIGATION : END ============================================================= -->
							
						</div><!-- /.container -->
					</div><!-- /.navbar-collapse -->
				</div><!-- /.yamm -->
			</div><!-- /.navbar -->
		</header>
		
		<!-- ============================================================= HEADER : END ============================================================= -->
		@yield('clubcontent')
		@yield('content')
<!-- ============================================================= FOOTER ============================================================= -->
		
		<footer class="dark-bg">
			
			<div class="footer-bottom">
				<div class="container inner">
					<p class="pull-left">© 2015 STAB-IITB. All rights reserved. Designed by
					<a href="http://www.cse.iitb.ac.in/~prateekchandan">Prateek Chandan</a> and maintained by 
					<a href="{{URL::Route('team_2015')}}#Webteam">STAB Web Team</a>.
					</p>
					<ul class="footer-menu pull-right">
						<li><a href="{{URL::Route('stab.home')}}">Home</a></li>
						<li><a href="{{URL::Route('team_2015')}}">Contact</a></li>
					</ul><!-- .footer-menu -->
				</div><!-- .container -->
			</div><!-- .footer-bottom -->
		</footer>
		
		<!-- ============================================================= FOOTER : END ============================================================= -->
		
		<!-- JavaScripts placed at the end of the document so the pages load faster -->
		
		<script src="{{ URL::asset('assets/js/jquery.easing.1.3.min.js')}}"></script>
		<script src="{{ URL::asset('assets/js/jquery.form.js')}}"></script>
		<script src="{{ URL::asset('assets/js/jquery.validate.min.js')}}"></script>
		<script src="{{ URL::asset('assets/js/bootstrap.min.js')}}"></script>
		<script src="{{ URL::asset('assets/js/bootstrap-hover-dropdown.min.js')}}"></script>
		<script src="{{ URL::asset('assets/js/skrollr.min.js')}}"></script>
		<script src="{{ URL::asset('assets/js/skrollr.stylesheets.min.js')}}"></script>
		<script src="{{ URL::asset('assets/js/waypoints.min.js')}}"></script>
		<script src="{{ URL::asset('assets/js/waypoints-sticky.min.js')}}"></script>
		<script src="{{ URL::asset('assets/js/owl.carousel.min.js')}}"></script>
		<script src="{{ URL::asset('assets/js/jquery.isotope.min.js')}}"></script>
		<script src="{{ URL::asset('assets/js/jquery.easytabs.min.js')}}"></script>
		<script src="{{ URL::asset('assets/js/viewport-units-buggyfill.js')}}"></script>
		<script src="{{ URL::asset('assets/js/scripts.js')}}"></script>
		
		<!-- For demo purposes – can be removed on production -->
		<link href="{{ URL::asset('assets/css/green.css ')}}" rel="alternate stylesheet" title="Green color">
		<link href="{{ URL::asset('assets/css/blue.css ')}}" rel="alternate stylesheet" title="Blue color">
		<link href="{{ URL::asset('assets/css/red.css ')}}" rel="alternate stylesheet" title="Red color">
		<link href="{{ URL::asset('assets/css/pink.css')}}" rel="alternate stylesheet" title="Pink color">
		<link href="{{ URL::asset('assets/css/purple.css')}}" rel="alternate stylesheet" title="Purple color">
		<link href="{{ URL::asset('assets/css/orange.css')}}" rel="alternate stylesheet" title="Orange color">
		<link href="{{ URL::asset('assets/css/navy.css')}}" rel="alternate stylesheet" title="Navy color">
		<link href="{{ URL::asset('assets/css/gray.css')}}" rel="alternate stylesheet" title="Gray color">
		
		<script src="switchstylesheet/switchstylesheet.js"></script>
		
		<script>
			$(document).ready(function(){ 
				$(".changecolor").switchstylesheet( { seperator:"color"} );
			});
		</script>
		
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  //ga('create', 'UA-56449536-1', 'auto');
		  ga('create', 'UA-47791016-3', 'auto');
		  ga('send', 'pageview');

		</script>

	</body>
</html>
