@extends('layout.default')

@section('content')
<style type="text/css">
	
</style>
		<!-- ============================================================= MAIN ============================================================= -->
		
		<main>
			
			<section id="buy-template" class="tint-bg">
				<div class="container inner-xs">
					<div class="row">
						<div class="col-sm-10 center-block text-center">
							<ul>
							@if (Auth::check())
								@if (Auth::User()->admin==1)

							 <li class="single-block"><a href="{{URL::route('events.ITSP_2015.review',array('ara'))}}" class="btn">ITSP 2015 All Abstracts</a> </li>		
							 <li class="single-block"><a href="{{URL::route('events.ITSP_2015.give_reviews')}}" class="btn">Review link for managers</a> </li>		

							 <!-- <li class="single-block"><a href="{{URL::route('links')}}" class="btn">Stab Important links</a></li> -->

							 @endif
							 <li class="single-block"><a href="{{URL::route('events.ITSP_2015.documentation')}}?id={{Auth::User()->itsp}}" class="btn">ITSP 2015 Documentation &nbsp</a> </li>
							 <li class="single-block">Any team member can document.</li>
							 <!-- <li class="single-block"><a href="http://itsp2014.stab-iitb.org/" class="btn">Last Year's Documentation</a> </li> -->
							 @else
							 <li class="single-block">Login to document your ITSP project. Any team member can document.</li>
<!-- 							 <li class="single-block"><a href="http://itsp2014.stab-iitb.org/" class="btn">Last Year's Documentation &nbsp</a> </li>
 -->					     @endif
							 <li class="single-block"><a href="{{URL::route('events.ITSP_2015.final_team_verification')}}" class="btn">Final Team Verification Form &nbsp</a> </li>

							 <!-- <li class="single-block"><a href="{{URL::route('events.ITSP_2015.mentor')}}" class="btn">ITSP 2015 Mentor Registration Link&nbsp</a> </li> -->
							<!-- <li class="single-block">1) If your idea is selected, you need not worry about room retention, money, anything at all. <br>
													 2) You need not necessarily have a team while registering now.<br>
													 3) We'll soon have multiple brainstorming sessions, do attend.<br>
													 4) Abstract submission deadline will soon be announced.<br>
													 For further queries join the <a href="https://www.facebook.com/groups/1566380240276628/"><b>ITSP FB group</b></a>.</li> -->
							<!-- <li class="single-block">Convener and Hostel Technical Secretary Application Form &nbsp<a href="{{URL::route('events.PoR.form')}}" class="btn">Apply</a></li> -->
							</ul>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</section>
			@if($errors->has('email.absent'))
									
			<section id="error" class="light-bg">
				<div class="container inner-xs">
					<div class="row">
						<div class="col-sm-10 center-block text-center">
							{{$errors->first('email.absent')}}
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</section>
			@endif	
			<section id="services">
				<div class="container inner">
					<div class="row">
						<div class="col-md-8 col-sm-10 center-block text-center" style="">
							<header>
								<h1>Hobby Clubs</h1>
							</header>
						</div>
						<div class="col-xs-12">
							<div class="tabs tabs-services tabs-circle-top tab-container">
								
								<ul class="etabs text-center">
									<li class="tab"><a href="#tab-1"><div><i class="icon-flight"></i></div>Aeromodelling Club</a></li>
									<li class="tab"><a href="#tab-2"><div><i class="icon-flow-tree"></i></div>Electronics Club</a></li>
									<li class="tab"><a href="#tab-3"><div><i class="icon-star"></i></div>Krittika</a></li>
									<li class="tab"><a href="#tab-4"><div><i class="icon-beaker"></i></div>Maths and Physics Club</a></li>
									<li class="tab"><a href="#tab-5"><div><i class="icon-magnet"></i></div>Robotics Club</a></li>
									<li class="tab"><a href="#tab-6"><div><i class="icon-code"></i></div>Web and Coding Club</a></li>
								</ul><!-- /.etabs -->
								
								<div class="panel-container">
									
									<div class="tab-content" id="tab-1">
										<div class="row">
											
											<div class="col-md-5 col-md-offset-1 col-sm-6 inner-right-xs">
												<figure><img src="{{ URL::asset('assets/images/art/aero-small.png')}}" alt=""></figure>
											</div><!-- /.col -->
											
											<div class="col-md-5 col-sm-6 inner-left-xs">
												<h3><a href="{{URL::Route('aeromodelling-club')}}">Aeromodelling Club</a></h3>
												<p>The Aeromodelling Club, IIT-Bombay envision the club becoming open to more people through activities that are fun to perform and require minimal input .Club also want the entry barrier – both financial and otherwise -for participating in aero modelling events to be reduced, so that a lot more people can participate. Apart from increasing participation, Club desire to encourage people to innovate a lot by extending all possible help to them.
												</p>
												<a href="{{URL::Route('aeromodelling-club')}}" class="btn btn-blue">Visit WebPage</a>
												<a href="https://groups.google.com/forum/#!forum/aeromodellingiitb" class="btn btn-red">Join Google-Group</a>
											</div><!-- /.col -->
											
										</div><!-- /.row -->
									</div><!-- /.tab-content -->
									
									<div class="tab-content" id="tab-2">
										<div class="row">
											
											<div class="col-md-5 col-md-push-5 col-md-offset-1 col-sm-6 col-sm-push-6 inner-left-xs">
												<figure><img src="{{ URL::asset('assets/images/art/elec-small.png')}}" alt=""></figure>
											</div><!-- /.col -->
											
											<div class="col-md-5 col-md-pull-5 col-sm-6 col-sm-pull-6 inner-right-xs">
												<h3><a href="{{URL::Route('electronics-club')}}">Electronics Club</a></h3>
												<p>Current scenario: Majority of the club activities are focused on freshmen. Main issue with senior participation is that they have not been able to relate themselves with the sessions that are planned keeping them in mind. </p>
												<ul class="arrowed">
													<li>Improve the participation of PGs in the club activities</li>
													<li>Increase involvement of seniors through informal meets and try to get product level outputs</li>
													<li>Give a purpose to each and every learning session that is organized</li>
												</ul>
												<a href="{{URL::Route('electronics-club')}}" class="btn btn-blue">Visit WebPage</a>
												<a href="https://groups.google.com/forum/#!forum/elec-club" class="btn btn-red">Join Google-Group</a>
											</div><!-- /.col -->
											
										</div><!-- /.row -->
									</div><!-- /.tab-content -->
									
									<div class="tab-content" id="tab-3">
										<div class="row">
											
											<div class="row">
											
											<div class="col-md-5 col-md-offset-1 col-sm-6 inner-right-xs">
												<figure><img src="{{ URL::asset('assets/images/art/krit-small.png')}}" alt=""></figure>
											</div><!-- /.col -->
											
											<div class="col-md-5 col-sm-6 inner-left-xs">
												<h3><a href="{{URL::Route('krittika')}}">Krittika - The Astronomy CLub</a></h3>
												<p>Every one of us is amazed by the spectacle of the night sky and feels curious about its mysteries that lay hidden in plain sight. But very few follow it up as they grow up. At Krittika, we provide you an opportunity to do just that. Krittika is IIT Bombay’s focal point for amateur astronomers and casual stargazers alike. This year I want to focus my efforts on increasing the outreach of the club.
												</p>
												<a href="{{URL::Route('krittika')}}" class="btn btn-blue">Visit WebPage</a>
												<a href="https://groups.google.com/forum/#!forum/krittika" class="btn btn-red">Join Google-Group</a>
											</div><!-- /.col -->
											
										</div><!-- /.row -->
											
										</div><!-- /.row -->
									</div><!-- /.tab-content -->
									
									<div class="tab-content" id="tab-4">
										<div class="row">
											
											<div class="col-md-5 col-md-push-5 col-md-offset-1 col-sm-6 col-sm-push-6 inner-left-xs">
												<figure><img src="{{ URL::asset('assets/images/art/mnp-small.png')}}" alt=""></figure>
											</div><!-- /.col -->
											
											<div class="col-md-5 col-md-pull-5 col-sm-6 col-sm-pull-6 inner-right-xs">
												<h3><a href="{{URL::Route('MnP')}}">Maths and Physics Club</a></h3>
												<p>Students after coming to IIT and studying engineering tend to forget why they were fascinated by math and physics in their childhood and why they chose it. The documentaries, scientific phenomena happening around and interesting chats with elders were those things which had attracted us in our childhood towards our current field of studies. The aim of the club is to bring back that feeling of fascination inside students by showing them similar interesting scientific phenomenon and discussing about them in experimental demonstrations, lectures and group discussions. 
												 </p>
												
												<a href="{{URL::Route('MnP')}}" class="btn btn-blue">Visit WebPage</a>
												<a href="https://groups.google.com/forum/#!forum/mnp-club-iitb" class="btn btn-red">Join Google-Group</a>
											</div><!-- /.col -->
											
										</div><!-- /.row -->
									</div><!-- /.tab-content -->
									
									<div class="tab-content" id="tab-5">
										
										<div class="row">
											
											<div class="col-md-5 col-md-offset-1 col-sm-6 inner-right-xs">
												<figure><img src="{{ URL::asset('assets/images/art/robo-small.png')}}" alt=""></figure>
											</div><!-- /.col -->
											
											<div class="col-md-5 col-sm-6 inner-left-xs inner-top-xs">
												<h3><a href="{{URL::Route('robotics-club')}}">Robotics CLub</a></h3>
												<ul class="arrowed">
													<li>To get a ‘club feeling’ within the students of IIT Bombay</li>
													<li>Increasing participation of all the Student’s including PG’s, not just freshmen in club /li>
													<li>Bringing out a product and not just a working model out of projects and other club events activities</li>
												</ul>
												<a href="{{URL::Route('robotics-club')}}" class="btn btn-blue">Visit WebPage</a>
												<a href="https://groups.google.com/forum/#!forum/robotics-iitb" class="btn btn-red">Join Google-Group</a>
											</div><!-- /.col -->
											
										</div><!-- /.row -->
										
									</div><!-- /.tab-content -->
									
									<div class="tab-content" id="tab-6">
										
										<div class="row">
											
											<div class="col-md-5 col-md-push-5 col-md-offset-1 col-sm-6 col-sm-push-6 inner-left-xs">
												<figure><img src="{{ URL::asset('assets/images/art/wncc-small.png')}}" alt=""></figure>
											</div><!-- /.col -->
											
											<div class="col-md-5 col-md-pull-5 col-sm-6 col-sm-pull-6 inner-right-xs">
												<h3><a href="{{URL::Route('wncc')}}">Web and Coding Club</a></h3>
												<p>While students in IIT Bombay learn programming in their first year, they usually drop it after that. One of our goals is to help these people carry on with programming and retain it as the useful skill it is. For the people who already program, we wish to maintain a community of programmers from all spheres and help people reach greater heights. We also have a focus on improving IITB's student participation in open source, thus increasing the institute's footprint and instilling a sense of giving back to the community.
												</p>
												
												<a href="{{URL::Route('wncc')}}" class="btn btn-blue">Visit WebPage</a>
												<a href="https://groups.google.com/forum/#!forum/wncc_iitb" class="btn btn-red">Join Google-Group</a>
											</div><!-- /.col -->
											
										</div><!-- /.row -->
										
									</div><!-- /.tab-content -->
									 
								</div><!-- /.panel-container -->
								 
							</div><!-- /.tabs -->
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</section>
			
			<!-- ============================================================= SECTION – SERVICES : END ============================================================= -->
			<!-- ============================================================= SECTION – STANDARD TABS TOP ============================================================= -->
			
			<section id="standard-tabs-top" class="light-bg">
				<div class="container inner">
					
					<div class="row">
						<div class="col-md-8 col-sm-9 center-block text-center">
							<header>
								<h1>Innovation Programme and Infrastructure</h1>
							</header>
						</div><!-- /.col -->
					</div><!-- ./row -->
					
					<div class="row">
						<div class="col-xs-12 inner-top">
							<div class="tabs tabs-top tab-container">
								
								<ul class="etabs text-center">
									<li class="tab"><a href="#tab-technovation">Technovation</a></li>
									<li class="tab"><a href="#tab-tinkerer-lab">Tinkerers' Lab</a></li>
								</ul><!-- /.etabs -->
								
								<div class="panel-container">
									
									<div class="tab-content" id="tab-technovation">
										<div class="row">
											
											<div class="col-md-5 col-md-offset-1 col-sm-6 inner-right-xs">
												<figure><img src="{{URL::asset('assets/images/art/technovation/parinat.png')}}" alt="" style="width:auto;max-height:450px;"></figure>
											</div><!-- /.col -->
											
											<div class="col-md-5 col-sm-6 inner-top-xs inner-left-xs">
												<h3><a href="{{URL::Route('technovation')}}">Technovation</a></h3>
												<p>Did you ever have an innovative idea but you just couldn’t get it going? Innovative technologies are the foundation of everything existing around you whether its new iPhone or your credit cards. But innovating new technologies needs money, inspiring leaders, dedicated teams and experience. This is where technovation steps in. What is Technovation? Technovation is a platform for students to float innovative projects, recruit teams, get funded, find mentors and realize their dream projects. Put simply its an expressway to innovation.</p>

											<a href="{{URL::Route('technovation')}}" class="btn btn-blue">Visit WebPage</a>

											</div><!-- /.col -->
										</div><!-- /.row -->
									</div><!-- /.tab-content -->
									
									<div class="tab-content" id="tab-tinkerer-lab">
										<div class="row">
											
											<div class="col-md-5 col-md-push-5 col-md-offset-1 col-sm-6 col-sm-push-6 inner-left-xs">
												<figure><img src="{{URL::asset('assets/images/art/technovation/tl.jpg')}}" alt=""></figure>
											</div><!-- /.col -->
											
											<div class="col-md-5 col-md-pull-5 col-sm-6 col-sm-pull-6 inner-top-xs inner-right-xs">
												<h3><a href="http://stab-iitb.org/tinkerers-lab/">Tinkerers' Lab</a></h3>
												<p>The dictionary defines a tinkerer as one who enjoys experimenting with machines. This lab is for all! Such tinkerers who love to do, for those who want limitless hands-on experience, for those who can spend hours tinkering. If you are turned on by machines and technology and integrated circuits, this place is built keeping you in mind.</p>
												<p>Tinkerers needed something better, so we've got it for you. Tinkerers’ Lab has all you will need for projects and prototyping. We’ve got modern electrical and mechanical equipment in place and more is coming soon. The fresh and enabling environment makes this the perfect place for ideating, implementing and innovating. We have coffee too!</p>
												<a href="http://stab-iitb.org/tinkerers-lab/" class="btn btn-blue">Visit WebPage</a>
												
											</div><!-- /.col -->
											
										</div><!-- /.row -->
									</div><!-- /.tab-content -->
									
									 
								</div><!-- /.panel-container -->
								 
							</div><!-- /.tabs -->
						</div><!-- /.col -->
					</div><!-- /.row -->
					
				</div><!-- /.container -->
			</section>
			
			<!-- ============================================================= SECTION – STANDARD TABS TOP : END ============================================================= -->
			
			
			
			<!-- ============================================================= SECTION – TEAM ============================================================= -->
			
			<section id="team"  class="light-bg img-bg-softer" style="background-image: url(assets/images/art/pattern-background01.jpg);">
				<div class="container inner-top inner-bottom-sm">
					
					<div class="row">
						<div class="col-md-9 col-sm-10 center-block text-center">
							<header>
								<h1>International Competing Technical Teams</h1>
							</header>
						</div><!-- /.col -->
					</div><!-- /.row -->
					
					<div class="row inner-top-sm text-center">
						
						<div class="col-sm-4 inner-bottom-sm inner-left inner-right">
							<figure class="member">
								
								<div class="icn-link">
									<a href="http://www.iitbracing.org/"><img src="{{URL::asset('assets/images/art/fs.jpg')}}" class="img-circle"></a>
								</div><!-- /.icon-overlay -->
								
								<figcaption>
								
									<h2>
										<a href="http://www.iitbracing.org/">IITB Racing</a>
										<span>Formula Student</span>
									</h2>
									
									<blockquote>The IITB Racing team had recently participated in the Formula Student 2014, the largest student motorsport competition in the world. Formula Student is run by the Institute of Mechanical Engineers- IMechE, a UK based body, which challenges student engineers to design, build and race a single seat race-car within a year. </blockquote>
									
								</figcaption>
								
							</figure>
						</div><!-- /.col -->

						<div class="col-sm-4 inner-bottom-sm inner-left inner-right">
							<figure class="member">
								
								<div class="icn-link">
									<a href="http://www.auv-iitb.org/"><img src="{{URL::asset('assets/images/art/auv.jpg')}}" class="img-circle"></a>
								</div><!-- /.icon-overlay -->
								
								<figcaption>
								
									<h2>
										<a href="http://www.auv-iitb.org/">AUV IITB</a>
										<span>AUVSI Robosub Competition</span>
									</h2>
									
									<blockquote>AUV-IITB comprises of highly enthusiastic and hard working technocrats ranging from bright-eyed freshmen to driven senior undergraduates and tech-experienced post-graduates spanning various branches of engineering like Mechanical, Electrical, Software, Aerospace, Material Science and Civil at Indian Institute of Technology Bombay (IIT Bombay).</blockquote>
									
								</figcaption>
								
							</figure>
						</div><!-- /.col -->

						<div class="col-sm-4 inner-bottom-sm inner-left inner-right">
							<figure class="member">
								
								<div class="icn-link">
									<a href="http://www.aero.iitb.ac.in/pratham/Pratham/"><img src="{{URL::asset('assets/images/art/Pratham.jpg')}}" class="img-circle"></a>
								</div><!-- /.icon-overlay -->
								
								<figcaption>
								
									<h2>
										<a href="http://www.aero.iitb.ac.in/pratham/Pratham/">Pratham</a>
										<span>Student Satellite</span>
									</h2>
									
									<blockquote>The IIT Bombay Student Satellite Project is a landmark project taken up by IIT Bombay students. The objective of this project is to make IIT Bombay a respected centre for advancement in Satellite and Space Technology in the world. The project aims at launching at least 5 satellites within the next few years. These Satellites could be test-beds for new technology that is being developed in the institute and also a method for space qualification.</blockquote>
									
								</figcaption>
								
							</figure>
						</div><!-- /.col -->						
						
					</div><!-- /.row -->
					
					<div class="row text-center">
						
						<div class="col-sm-4 inner-bottom-sm inner-left inner-right">
							<figure class="member">
								
								<div class="icn-link">
									<a href="http://www.marssociety.org.in/"><img src="{{URL::asset('assets/images/art/msi.png')}}" class="img-circle"></a>
								</div><!-- /.icon-overlay -->
								
								<figcaption>
								
									<h2>
										<a href="http://www.marssociety.org.in/">Mars Rover</a>
										<span>Mars Society of India</span>
									</h2>
									
									<blockquote>The Mars Society India (MSI) is an initiative by IIT Bombay students, taking the country a step further towards Mars exploration.</blockquote>
									<blockquote>IIT Bombay currently being the chief patron, we are the official Indian chapter of The Mars Society, an international space advocacy dedicated to promoting the human exploration and settlement of the planet Mars. We are in the processing of expanding and extending our reach throughout the scientific community of India as well as beyond.</blockquote>
									
								</figcaption>
								
							</figure>
						</div><!-- /.col -->

						<div class="col-sm-4 inner-bottom-sm inner-left inner-right">
							<figure class="member">
								
								<div class="icn-link">
									<a href="http://www.umic-iitb.org/"><img src="{{URL::asset('assets/images/art/igvc.JPG')}}" class="img-circle"></a>
								</div><!-- /.icon-overlay -->
								
								<figcaption>
								
									<h2>
										<a href="http://www.umic-iitb.org/">Innovation Cell</a>
										<span><a href="www.igvc.org/">Intelligent Ground Vehicle Competition</a></span>
									</h2>
									
									<blockquote>Founded by Prof C Amarnath, Innovation Cell, formerly known as UMIC (Unmesh Mashruwala Innovation Cell), aims to foster an atmosphere of creativity, innovation, discovery and exploration on the campus. Innovation Cell provides infrastructural facilities to nurture inventions among students from various disciplines.</blockquote>
									
								</figcaption>
								
							</figure>
						</div><!-- /.col -->

						<div class="col-sm-4 inner-bottom-sm inner-left inner-right">
							<figure class="member">
								
								<div class="icn-link">
									<a href="http://teamshunya.in/"><img src="{{URL::asset('assets/images/art/shunya.jpg')}}" class="img-circle"></a>
								</div><!-- /.icon-overlay -->
								
								<figcaption>
								
									<h2>
										<a href="http://teamshunya.in/">Team Shunya</a>
										<span>Solar Decathon</span>
									</h2>
									
									<blockquote>Team Shunya, the first Indian team to get selected in Solar Decathlon Europe, aims to change the meaning of comfortable and affordable living for the middle class Indian households.</blockquote>
									<blockquote>The Solar Decathlon is an international student competition taking place every two years. This competition was created in 2002 by the U.S. Department of Energy in order to develop the transmission of the knowledge and the research in the field of the green buildings, in particular solar energy.</blockquote>
									
								</figcaption>
								
							</figure>
						</div><!-- /.col -->						
						
					</div><!-- /.row -->
				</div><!-- /.container -->
			</section>
			
			<!-- ============================================================= SECTION – TEAM : END ============================================================= -->	
			
		</main>
		
		<!-- ============================================================= MAIN : END ============================================================= -->
@endsection