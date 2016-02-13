@extends('layout.default')
@section('content')
		<main>	
			<!-- ============================================================= SECTION – PORTFOLIO POST ============================================================= -->
			
			<section id="portfolio-post">
				<div class="container inner-top-xs inner-bottom">
					
					<div class="row">
						<div class="col-sm-4">
							<br>
							<br>
							<br>
							<img src="{{ URL::asset('media/2015/club_assets/tl/harald_haas.jpg')}}" width="100%" height="100%">
						</div><!-- /.col -->
						<div class="col-sm-8 inner-top-xs inner-right-xs">
								<header>
									<h2>Heard about LiFi??</h2>
									<p class="text-normal">Ever tried sending data just by blinking of a led. Probably you must have tried it when sending a signal to your friend. But what about sending complicated messages through it. Ever thought of it. May be you did not but someone did. Just have a look at this video.</p>
									<div class="video-container">
										<iframe width="560" height="315" src="https://www.youtube.com/embed/NaoSp4NpkGg" frameborder="0" allowfullscreen></iframe>
									</div>				
									<br>					
									<p class="text-normal strong">Tinkerers' Lab, IIT Bombay invites to most awaited TL Talk by Prof. Harald Haas of University of Edinburgh.</p>
									<div class="col-sm-12 outer-top-xs inner-left-xs border-left">
										<ul class="item-details">
											<li><b>Title :</b> What is Li-Fi?</li>

											<li><b>Speaker :</b> Prof. Harald Haas<br>Chair of Mobile Communications, University of Edinburgh<br>
											Co-founder and Chief Scientific Officer, PureLiFi Ltd.<br>
											Director, LiFi Research and Development Center, University of Edinburgh
											</li>
											<li><b>Abstract : </b>
											We will start by clarifying the differences between visible light communications (VLC) and LiFi. This is followed by the introduction of the key building blocks required to create full LiFi networks. Next we report recent key achievements with respect to component and demonstrator developments underpinning LiFi attocellular networks. We provide modelling results of such networks and address numerous misconceptions such as "LiFi is a line-of-sight technology". The talk also addresses the issue of energy efficiency of optical attocell networks and showcases how off-the-shelf solar panels can fulfill two functions at the same time, i) energy harvesting and ii) LiFi data detection. The talk closes by summarising commercialization challenges. </li>
											<li class="date">6:30 pm, Feb 14, 2016, Main Auditorium, VMCC</li>
										</ul><!-- /.item-details -->
									</div><!-- /.col -->						
								</header>

							</div><!-- /.col -->

					</div><!-- /.row -->
				</div><!-- /.container -->
				
			</section>
			
			<!-- ============================================================= SECTION – PORTFOLIO POST : END ============================================================= -->
		</main>

@endsection
