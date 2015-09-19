@extends('club.elec.layout')

@section('inner-content')
<!-- ============================================================= SECTION – BLOG ============================================================= -->
<!-- <section class="light-bg" style="padding:20px;margin-bottom:20px">
	<h2>CMOS Design Challenge</h2>
	<figure>
		<div class="row">
			{{--<div class="col-md-6">
	    		<img class="custom-img" src="{{URL::asset('assets/images/2014/robo/maze_cracker.jpg')}}" alt="">
			</div>--}}
			<div class="col-md-10 col-sm-10{{-- inner-top-xs --}} inner-left-xs">
				<p>Does a circuit designing problem give you an adrenaline rush? Then this is for you !! </p>
				<ul class="item-details">
					<li class="date">Sunday, January 16, 2015</li>
				</ul>

				<p><a href="{{URL::asset('media/2014/CMOS_Design_Challenge.pdf')}}">Download the Problem Statement</a> </p>
				<p><a href="{{URL::route('electronics-club.CMOS')}}">Submit your solution</a> </p>
                

			</div>
		</div>
	</figure>
</section> -->
<!-- <section  class="light-bg" style="padding:20px;margin-bottom:20px">
	<h2>Line Follower</h2>
      <p>
	      	The wait has ended!<br>
	The time has come.<br>
	Electronics Club brings to you the Line Follower Competition.<br>
	<a href="{{URL::Route('electronics-club')}}/line-follower-registration">Click  here</a> to get your team registered for the event! <br>
	More details to come up soon.<br>
      </p>        
</section>
<section class="light-bg" style="padding:20px;margin-bottom:20px">
	<h2>Electrified Session I</h2>
	<figure>
		<div class="row">
			<div class="col-md-12 col-sm-12 inner-left-xs">
				<p>Want to know a computer works, or how to design a weird circuit? Well, this is the place for you!

				The Electronics Club is a community of electronics hobbyists and enthusiasts within IIT, Bombay. We conduct various events and sessions through out the year to bring out the techie in you. We pour in our every ounce of energy and support to satisfy your curiosity. Every comrade of this community is given exposure to basic Electronic components, Mechanical, Monetary related issues. We have a large number of seniors expert in various areas who are more than ready to sort your bug out. The newly commissioned Tinkerers' Lab provides an excellent place to experiment and try out new things.
				</p>
			</div>
		</div>
	</figure>
</section>

<section class="light-bg" style="padding:20px;margin-bottom:20px">
	<h2>Brain Machine Interface</h2>
	<figure>
		<div class="row">
			<div class="col-md-12 col-sm-12 inner-left-xs">
				<p>Want to know a computer works, or how to design a weird circuit? Well, this is the place for you!

				The Electronics Club is a community of electronics hobbyists and enthusiasts within IIT, Bombay. We conduct various events and sessions through out the year to bring out the techie in you. We pour in our every ounce of energy and support to satisfy your curiosity. Every comrade of this community is given exposure to basic Electronic components, Mechanical, Monetary related issues. We have a large number of seniors expert in various areas who are more than ready to sort your bug out. The newly commissioned Tinkerers' Lab provides an excellent place to experiment and try out new things.
				</p>
			</div>
		</div>
	</figure>
</section> -->

			<section>
				<h2>List of events Conducted</h2>
				<br>
			</section>
			<!-- ============================================================= SECTION – BLOG ============================================================= -->
<!-- Event=== 0:Name 1:Description 2:Date 3:Pics_Url 4:cover_pic_name -->
				<?php //var_dump($events) ?>
				@foreach($events as $event)
					<section class="light-bg" style="padding:20px;margin-bottom:20px">
						<h2>{{$event[0]}}</h2>
						<figure>
							<div class="row">
								<div class="col-md-6">
						    		<img class="custom-img" src="{{$event[4]}}" alt="">
								</div>
								<div class="col-md-5 col-sm-6 inner-top-xs inner-left-xs">
									<p>{{$event[1]}}</p>
									<ul class="item-details">
										<li class="date">{{$event[2]}}</li>
									</ul>
									<!-- <p><a href="https://drive.google.com/file/d/0BzgIkwubB1cgLWdDa21Bc05HeUk/view">Link to Problem Statement</a></p>
									<p><a href="https://docs.google.com/forms/d/1JyRKVKxUEZYEckeA-W0reRAQxRvK-9EpLrgBmFzAR7k/viewform?c=0&w=1">Click here to Register</a>
									<br>
									Deadline : Wednseday , 21st Jan
									</p> -->
									<p>Find content and photographs <a href="{{$event[3]}}" target="_blank">HERE</a></p>

					                

								</div>
							</div>
						</figure>
					</section>
				@endforeach

@endsection