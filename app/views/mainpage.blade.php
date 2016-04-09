@extends('layout.default')

@section('meta')

<!-- <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
 -->
@endsection

@section('content')
<style>
	#myDIV {
	    /*border: 1px solid black;
	    background-color: lightblue;
	    width: 300px;
	    height: 300px;*/
	    position: fixed;
	    right : 0%;
	    top: 17%;
	}
	#fb-div {
	    data-width: 22%;
	    data-height: 300px;
	    
</style>

<style type="text/css">
	#mask {

  position: absolute;

  left: 0;

  top: 0;

  z-index: 9000;

  background-color: #000;

  display: none;

}

 

#boxes .window {

  position: absolute;

  left: 0;

  top: 0;

  width: 440px;

  height: 200px;

  display: none;

  z-index: 9999;

  padding: 20px;

  border-radius: 15px;

  text-align: center;

}

 

#boxes #dialog {

  width: 750px;

  height: 300px;

  padding: 10px;

  background-color: #ffffff;

  font-family: 'Segoe UI Light', sans-serif;

  font-size: 15pt;

}

 

#popupfoot {

  font-size: 16pt;

  position: absolute;

  bottom: 0px;

  width: 250px;

  left: 250px;

}
	
</style>
		<!-- ============================================================= MAIN ============================================================= -->
		
		<main>
		<!--====================================================popup======================================================
		
		<div id="boxes">

  <div id="dialog" class="window">

    Hello Freshie !
    <br>
    Feel free to introduce yourself :)
    <br>
    <textarea onKeyUp="count_it()" onKeyDown="count_it()" style="height: 150px; font-size:30px ;font-family: 'Comic Sans MS' "id="special_box" maxlength='101'></textarea> 
    <button class="btn" onclick="hideMask()">Submit</button>
	
    <div id="popupfoot">
     <a href="#" class="close agree"></a>
       
      <a class="agree"style="color:red;" href="#">
      </a> 
      </div>

  </div>

  <div id="mask"></div>

</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
<script >
	function hideMask(){
		$('#mask').hide();
		$('.window').hide();
	}

$(document).ready(function() { 

 

var id = '#dialog';

//Get the screen height and width

var maskHeight = $(document).height();

var maskWidth = $(window).width();

   

//Set heigth and width to mask to fill up the whole screen

$('#mask').css({'width':maskWidth,'height':maskHeight});

//transition effect

$('#mask').fadeIn(500);

$('#mask').fadeTo("slow",0.9); 

//Get the window height and width

var winH = $(window).height();

var winW = $(window).width();

               

//Set the popup window to center

$(id).css('top',  winH/2-$(id).height()/2);

$(id).css('left', winW/2-$(id).width()/2);

   

//transition effect

$(id).fadeIn(2000);  


//if mask is clicked

$('#mask').click(function () {

$(this).hide();

$('.window').hide();

});

});

</script>
<script>
var str="Ideas are dime a dozen, people who implement are priceless. Be one.  STAB welcomes you to IIT Bombay!"
function count_it() {
 
document.getElementById('special_box').value = str.substr(0,document.getElementById('special_box').value.length);
}
count_it();
</script>
		 ====================================================popup======================================================-->
		 <div class="row">
			<div class="col-xs-12">
			<section class="tint-bg">
				<div class="container ">
					<div class="row">
						<div class="col-md-9 col-sm-10 center-block text-center">
						<ul>
							<br>
							@if (Auth::check())
								@if (Auth::User()->admin==1)

							 <li class="single-block"><a href="{{URL::route('events.ITSP_2016.review',array('ara'))}}" class="btn">ITSP 2016 All Team Details</a> </li>

							 {{--<!-- <li class="single-block"><a href="{{URL::route('events.ITSP_2015.give_reviews')}}" class="btn">Review link for managers</a> </li>		 -->--}}

							 {{--<li class="single-block"><a href="{{URL::route('links')}}" class="btn">Stab Important links</a></li>--}}

							 @endif
 					     @endif
 							<li class="single-block"><a href="{{URL::route('events.ITSP_2016.index')}}" class="btn">ITSP 2016</a></li>   
							 <li class="single-block"><a href="{{URL::route('events.PoR.form')}}" class="btn">Institute Technical Coordinators Form</a></li>
				
							 <li class="single-block"><a href="{{URL::route('events.ITSP_2015.projects')}}" class="btn">ITSP 2015 Projects</a> &emsp; <a href="https://www.youtube.com/watch?v=9EcNSvCPXpg&list=PL2jc8R1dnwjVOj4seOL8Lrmz9s6vdDzHS" class="btn">ITSP 2015 Videos</a></li>
							
							<li class="single-block"><a href="{{URL::route('events.ITSP_2016.mentor')}}" class="btn">ITSP 2016 Mentors Form</a></li>

							  	
							<!--
							<li class="single-block"><a href="{{URL::Route('events.ITSP_2015.tshirt')}}" class="btn">ITSP Tshirt Form</a></li> -->
							 <!-- <li class="single-block"><a href="{{URL::route('events.ITSP_2015.mentor')}}" class="btn">ITSP 2015 Mentor Registration Link&nbsp</a> </li> -->
							<!-- <li class="single-block">1) If your idea is selected, you need not worry about room retention, money, anything at all. <br>
													 2) You need not necessarily have a team while registering now.<br>
													 3) We'll soon have multiple brainstorming sessions, do attend.<br>
													 4) Abstract submission deadline will soon be announced.<br>
													 For further queries join the <a href="https://www.facebook.com/groups/1566380240276628/"><b>ITSP FB group</b></a>.</li> -->
							<!-- <li class="single-block">Convener and Hostel Technical Secretary Application Form &nbsp<a href="{{URL::route('events.PoR.form')}}" class="btn">Apply</a></li> -->
							</ul>
							<br>
						</div>
						<!-- <div class="col-md-3">
							<ul>
								<li class="single-block"><a href="https://docs.google.com/forms/d/12Svhrqr0oZK2Y6P1T9LAxQMn-e6iNBmh9IqRfXmP4GU/viewform" class="btn">XLR8 Mentor Registration</a> </li>	
							</ul>
						</div> -->
					</div>
					
				</div>
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
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-10 center-block text-center" style="">
							<header>
							<br>
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
												<p>Maths and Physics Club conducts several events throughout the semester. Our events vary from casual events such as movie screenings, demonstrations of physical phenomenon and quizzes to formal events such as lectures and Olympiad level paper solving. We have always motivated students to explore Physics and Maths, we also fund students for making their own demonstrations and experiments. Our flagship event, Bazinga, is a quiz that relies solely on your concepts rather than the dry and conventional algorithmic procedure of solving questions with pre-defined methods. We also conduct Group Discussions (popularly known as GDs) where everyone is invited to discuss Physics and Maths and go out as a more learned person than they were when they came in. Apart from this, we host lectures from eminent researchers and students alike and we also screen inspiring documentaries and movies based on Maths and Physics. All in all, we are a self-sustaining community of intellectuals, students & professors, across ages and departments, who enjoy sharing knowledge through platforms provided by our club​ and if you talk Physics and Maths, there is no better place for you than the Maths and Physics Club IIT Bombay. 
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
												<h3><a href="#">Technovation</a></h3>
												<p>Did you ever have an innovative idea but you just couldn’t get it going? Innovative technologies are the foundation of everything existing around you whether its new iPhone or your credit cards. But innovating new technologies needs money, inspiring leaders, dedicated teams and experience. This is where technovation steps in. What is Technovation? Technovation is a platform for students to float innovative projects, recruit teams, get funded, find mentors and realize their dream projects. Put simply its an expressway to innovation.</p>

											<!-- <a href="{{URL::Route('technovation')}}" class="btn btn-blue">Visit WebPage</a> -->

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
			</div>
			<div class="col-xs-3 center-block text-center" id="myDIV">

								<!-- <h2>Hot Links</h2> -->
								<ul>
							<!-- <li class="single-block">Welcome!!</li>
 -->
							</ul>
								<!-- <div id="fb-div" class="fb-page" data-href="https://www.facebook.com/stab.iitb" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/stab.iitb"><a href="https://www.facebook.com/stab.iitb">Tech&#064;IITB</a></blockquote></div></div>	
			 -->
				</div>
			</div>
		</main>
		
		<!-- ============================================================= MAIN : END ============================================================= -->
@endsection