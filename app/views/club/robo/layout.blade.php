	@extends('layout.default')

@section('clubcontent')


		<!-- ============================================================= MAIN ============================================================= -->
		
		<main>
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
			<div class="container inner">
				<div class="row">
					
					<div class="col-md-3 inner-right-md inner-bottom-sm">
						
						<!-- ============================================================= SIDE NAVIGATION ============================================================= -->
							
						<ul class="sidenav">
							<li><a href="{{URL::Route('robotics-club')}}/home">Home</a></li>
							<li><a href="{{URL::Route('robotics-club')}}/vision">Vision</a></li>
							<li><a href="{{URL::Route('robotics-club')}}/event/XLR8-2015">XLR8</a></li>
							<li><a href="{{URL::Route('robotics-club')}}/team">Team</a></li>
							<li><a href="{{URL::Route('robotics-club')}}/event">Past Events</a></li>
							<li><a href="{{URL::Route('robotics-club')}}/tshirt">T-Shirt Form</a></li>
							<li><a href="{{URL::Route('robotics-club')}}/gallery">Gallery</a></li>
							<!--<li><a href="{{URL::Route('robotics-club')}}/video">Videos</a></li>-->
						</ul><!-- /.sidenav -->
						<br>
						<div class="fb-page" data-href="https://www.facebook.com/roboticsclubpage?fref=ts" data-tabs="timeline" data-width="350" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/roboticsclubpage?fref=ts"><a href="https://www.facebook.com/roboticsclubpage?fref=ts">Robotics Club IIT Bombay</a></blockquote></div></div>
						
						<!-- ============================================================= SIDE NAVIGATION : END ============================================================= -->
						
					</div><!-- /.col -->
					
					<div class="col-md-9 inner-left-md border-left">
						@yield('inner-content')
					</div><!-- ./col -->
						
				</div><!-- /.row -->
			</div><!-- /.container -->
			
			
		</main>
		
		<!-- ============================================================= MAIN : END ============================================================= -->
		
@endsection