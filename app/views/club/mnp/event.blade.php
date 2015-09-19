@extends('club.mnp.layout')

@section('inner-content')
<!-- ============================================================= SECTION – BLOG ============================================================= -->
			<!-- <section>
				<h2>List of events throughout the Year</h2>
				<ul class="arrowed">
					<li>Experimental demonstration</li>
					<li>Maths Olympic and Mathematics question solving sessions</li>
					<li>In-sem Projects</li>
					<li>LogicGC</li>
					<li>Quiz GC</li>
					<li>Lectures/talks</li>
					<li>GD/ Club open meetings</li>
					<li>Lab Visit</li>
					<li>Documentary/Movie Screening</li>
					<li>Puzzles solving sessions</li>
					<li>Exclusive Physics and Mathematics Quiz</li>
					<li>Gaming Sessions (logical games, boardgames)</li>
					<li>Outstation Research Laboratory Trip</li>
				</ul>
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
			
			
			
			<!-- ============================================================= SECTION – BLOG : END ============================================================= -->

@endsection