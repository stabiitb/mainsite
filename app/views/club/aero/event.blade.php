@extends('club.aero.layout')

@section('inner-content')
<!-- ============================================================= SECTION – BLOG ============================================================= -->
			<!-- <section>		
							<div class="posts sidemeta">
								
							
								<div class="post format-standard">
									
									<div class="date-wrapper">
										<div class="date">
											<span class="day">7</span>
											<span class="month">August</span>
										</div>
									</div>
									
									<div class="format-wrapper">
										<a href="#" data-filter=".format-standard"><i class="icon-edit"></i></a>
									</div>
									
									<div class="post-content">
										
										<h2 class="post-title">
											<a href="blog-post.html"><b>"Missile"</b> - Water rocket workshop and competition</a>
										</h2>
										
										
										<p>Hello everyone,<br>
										I am pleased to announce the results of yesterday's(6 Aug,2014) competition held after the Aeromodelling Club event "Missile". We were happy to see such a great enthusiasm in you, and we're sure that you'll continue to have a lot of fun in the upcoming events. Stay tuned.
										</p>
										<p>
										 the winning teams are -<br>
											First place - Team-<b>COSMOS (Ila Toppo)</b> Best time- 5.64 Sec<br>
											Second place - Team -<b> UDDAN (Siddrath Keshan)</b> - 5.51 Sec
										</p>
										<p>
										</p>
										
									</div>
									
								</div>
								
								
								
							</div>
			</section>
			 -->
			
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
