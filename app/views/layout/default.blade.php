<!DOCTYPE html>

<html lang="en">
	<head>
		<!-- Meta -->
		@yield('meta')
		
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
		
		<!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
		<!--[if lt IE 9]>
			<script src="{{ URL::asset('assets/js/html5shiv.js')}}"></script>
			<script src="{{ URL::asset('assets/js/respond.min.js')}}"></script>
		<![endif]-->
		
	</head>
	
	<body>

	

		<!-- ============================================================= HEADER ============================================================= -->
		
		<header>
			<div class="navbar">
				
				<div class="navbar-header">
					<div class="container">
						
						<ul class="info pull-left">
							<li><a href="mailto://stab.iitb@gmail.com"><i class="icon-mail-1 contact"></i> stab.iitb@gmail.com</a></li>
						</ul><!-- /.info -->
						
						<ul class="social pull-right">
							<li><a href="https://www.facebook.com/stab.iitb"><i class="icon-s-facebook"></i></a></li>
							<li><a href="https://github.com/stabiitb"><i class="icon-s-github"></i></a></li>
							<li><a href="https://www.youtube.com/user/STABiitb"><i class="icon-s-youtube"></i></a></li>
							<li><a href="#"><i class="icon-s-gplus"></i></a></li>
						</ul><!-- /.social -->
						
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
							
							<a class="navbar-brand" href="index.php"><img src="{{ URL::asset('assets/images/logo.png')}}" class="logo" alt=""></a>
							
							<!-- ============================================================= LOGO : END ============================================================= -->
							
							
							<!-- ============================================================= MAIN NAVIGATION ============================================================= -->
							
							<ul class="nav navbar-nav">
								
								<li class="dropdown">
									<a href="#" class="dropdown-toggle js-activated">About</a>
									
									<ul class="dropdown-menu">
										<li><a href="#">Team Stab 2014</a></li>
										<li><a href="#">Vision of STAB Team 2014-15</a></li>
										<li><a href="#">Alumni</a></li>
										<li><a href="#">Hall of Fame</a></li>
										<li><a href="#">Faculty advisors/mentors</a></li>
									</ul><!-- /.dropdown-menu -->
								</li><!-- /.dropdown -->
								
								<li class="dropdown">
									<a href="#" class="dropdown-toggle js-activated">Clubs</a>
									
									<ul class="dropdown-menu">
										<li><a href="#">Aeromodelling Club</a></li>
										<li><a href="#">Electronics Club</a></li>
										<li><a href="#">Krittika</a></li>
										<li><a href="#">Math and Physics Club</a></li>
										<li><a href="#">Robotics Club</a></li>
										<li><a href="#">Web and Coding club</a></li>
									</ul><!-- /.dropdown-menu -->
								</li><!-- /.dropdown -->
								
								<li class="dropdown">
									<a href="http://technovation.stab-iitb.org/" class="dropdown-toggle js-activated">Technovation</a>

									<ul class="dropdown-menu">
										<li><a href="http://technovation.stab-iitb.org/">Visit Site</a></li>
									</ul>
								</li><!-- /.dropdown -->
								
								<li class="dropdown">
									<a href="#" class="dropdown-toggle js-activated">Resources</a>
									
									<ul class="dropdown-menu">
										<li><a href="http://stab-iitb.org/wiki">STAB WIKI</a></li>
										<li><a href="http://techid.stab-iitb.org/seasons">Stab Seasons</a></li>
										<li><a href="#">Light Saber</a></li>
									</ul><!-- /.dropdown-menu -->
								</li><!-- /.dropdown -->
								
								<li class="dropdown">
									<a href="http://techid.stab-iitb.org/" class="dropdown-toggle js-activated">Tech ID</a>

									<ul class="dropdown-menu">
										<li><a href="http://technovation.stab-iitb.org/">Visit tech id</a></li>
									</ul>
								</li><!-- /.dropdown -->

								<li class="dropdown">
									<a href="#" class="dropdown-toggle js-activated">Tinkerers’ Lab</a>
									
									<ul class="dropdown-menu">
										
										<li><a href="#">View Page</a></li>
										
									</ul><!-- /.dropdown-menu -->
								</li><!-- /.dropdown -->
								
								<!-- ============================================================= MEGA MENU ============================================================= -->
								
								<li class="dropdown yamm-fullwidth">
									<a href="#" class="dropdown-toggle js-activated">Mega Menu</a>
									
									<ul class="dropdown-menu yamm-dropdown-menu">
										<li>
											<div class="yamm-content row">
											
												<div class="col-sm-3 inner">
													<h4>Focus on</h4>
													<figure>
														<div class="icon-overlay icn-link">
															<a href="portfolio-post.php"><img src="{{ URL::asset('assets/images/art/work01.jpg')}}" alt=""></a>
														</div>
														<figcaption>
															<p>Consed quodips ameniat empernam que apid cust quas molor eatis numa estio.</p>
															<a href="portfolio-post.php" class="btn">View Project</a>
														</figcaption>
													</figure>
												</div><!-- /.col -->
												
												<div class="col-sm-3 inner">
													<h4>Special Pages</h4>
													
													<ul class="circled">
														<li><a href="portfolio2.php">3 Columns Details Grid Portfolio</a></li>
														<li><a href="portfolio5.php">Fullscreen Grid Portfolio</a></li>
														<li><a href="portfolio-post5.php">Portfolio Post with Video</a></li>
														<li><a href="blog5.php">2 Columns Grid Blog with Left Sidebar</a></li>
														<li><a href="blog7.php">3 Columns Grid Blog without Sidebar</a></li>
														<li><a href="blog-post.php">Blog Post with Right Sidebar</a></li>
														<li><a href="sidenav.php">Side Navigation Page</a></li>
														<li><a href="about2.php">About Page II</a></li>
														<li><a href="services.php">Service Page I</a></li>
														<li><a href="pricing.php">Pricing Page I</a></li>
														<li><a href="contact.php">Contact Page I</a></li>
													</ul><!-- /.circled -->
												</div><!-- /.col -->
												
												<div class="col-sm-3 inner">
													<h4>Latest Works</h4>
													
													<div class="row thumbs gap-xs">
														
														<div class="col-xs-6 thumb">
															<figure class="icon-overlay icn-link">
																<a href="portfolio-post.php"><img src="{{ URL::asset('assets/images/art/work02.jpg')}}" alt=""></a>
															</figure>
														</div><!-- /.thumb -->
														
														<div class="col-xs-6 thumb">
															<figure class="icon-overlay icn-link">
																<a href="portfolio-post.php"><img src="{{ URL::asset('assets/images/art/work03.jpg')}}" alt=""></a>
															</figure>
														</div><!-- /.thumb -->
														
														<div class="col-xs-6 thumb">
															<figure class="icon-overlay icn-link">
																<a href="portfolio-post.php"><img src="{{ URL::asset('assets/images/art/work04.jpg')}}" alt=""></a>
															</figure>
														</div><!-- /.thumb -->
														
														<div class="col-xs-6 thumb">
															<figure class="icon-overlay icn-link">
																<a href="portfolio-post.php"><img src="{{ URL::asset('assets/images/art/work05.jpg')}}" alt=""></a>
															</figure>
														</div><!-- /.thumb -->
														
														<div class="col-xs-6 thumb">
															<figure class="icon-overlay icn-link">
																<a href="portfolio-post.php"><img src="{{ URL::asset('assets/images/art/work06.jpg')}}" alt=""></a>
															</figure>
														</div><!-- /.thumb -->
														
														<div class="col-xs-6 thumb">
															<figure class="icon-overlay icn-link">
																<a href="portfolio-post.php"><img src="{{ URL::asset('assets/images/art/work07.jpg')}}" alt=""></a>
															</figure>
														</div><!-- /.thumb -->
														
													</div><!-- /.row -->
												</div><!-- /.col -->
												
												<div class="col-sm-3 inner">
													<h4>About Us</h4>
													<p>Voluptat ibusaped molorporro consequ idustibus. Reressi morum ut dolessiti tem nihicid ernatum, coria volore non pro officat ut autem accaborem conet. Omnis peribus qui dolent praeperrum coria.</p>
													<p>Equam conesti occum dolorest, quae venderes quistius, comnitatur sae dinam nonseculpa cum fugit is verciam.</p>
													<a href="about.php" class="btn">Read More</a>
												</div><!-- /.col -->
												
											</div><!-- /.yamm-content -->
										</li>
									</ul><!-- /.yamm-dropdown-menu -->
								</li><!-- /.yamm-fullwidth -->
								
								<!-- ============================================================= MEGA MENU : END ============================================================= -->
								
								
								<li class="dropdown pull-right searchbox">
									<a href="#" class="dropdown-toggle js-activated"><i class="icon-search"></i></a>
											  
									<div class="dropdown-menu">
										<form id="search" class="navbar-form search" role="search">
											<input type="search" class="form-control" placeholder="Type to search">
											<button type="submit" class="btn btn-default btn-submit icon-right-open"></button>
										</form>
									</div><!-- /.dropdown-menu -->
								</li><!-- /.searchbox -->
								
							</ul><!-- /.nav -->
							
							<!-- ============================================================= MAIN NAVIGATION : END ============================================================= -->
							
						</div><!-- /.container -->
					</div><!-- /.navbar-collapse -->
				</div><!-- /.yamm -->
			</div><!-- /.navbar -->
		</header>
		
		<!-- ============================================================= HEADER : END ============================================================= -->
		@yield('content')
<!-- ============================================================= FOOTER ============================================================= -->
		
		<footer class="dark-bg">
			
			<div class="footer-bottom">
				<div class="container inner">
					<p class="pull-left">© 2014 STAB-IITB. All rights reserved. Designed and maintained by
					<a href="http://www.cse.iitb.ac.in/~prateekchandan">Prateek Chandan</a>
					</p>
					<ul class="footer-menu pull-right">
						<li><a href="{{URL::to('/')}}">Home</a></li>
						<li><a href="portfolio.html">Portfolio</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="services.html">Services</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul><!-- .footer-menu -->
				</div><!-- .container -->
			</div><!-- .footer-bottom -->
		</footer>
		
		<!-- ============================================================= FOOTER : END ============================================================= -->
		
		<!-- JavaScripts placed at the end of the document so the pages load faster -->
		<script src="{{ URL::asset('assets/js/jquery.min.js')}}"></script>
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
		<script src="{{ URL::asset('assets/js/google.maps.api.v3.js')}}"></script>
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
		<!-- For demo purposes – can be removed on production : End -->
	</body>
</html>