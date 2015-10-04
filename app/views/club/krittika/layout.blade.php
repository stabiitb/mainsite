@extends('layout.default')

@section('clubcontent')


		<!-- ============================================================= MAIN ============================================================= -->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

		<main>
			
			<div class="container inner">
				<div class="row">
					
					<div class="col-md-3 inner-right-md inner-bottom-sm">
						
						<!-- ============================================================= SIDE NAVIGATION ============================================================= -->
							
						<ul class="sidenav">
							<li><a href="{{URL::Route('krittika')}}">Home</a></li>
							<li><a href="{{URL::Route('krittika')}}/vision">Vision</a></li>
							<li><a href="{{URL::Route('krittika')}}/event">Events</a></li>
							<li><a href="{{URL::Route('krittika')}}/team">Team</a></li>
							<li><a href="{{URL::Route('krittika')}}/gallery">Gallery</a></li>
							<!--<li><a href="{{URL::Route('krittika')}}/video">Videos</a></li>-->
						</ul><!-- /.sidenav -->
						<br>
						<div class="fb-page" data-href="https://www.facebook.com/pages/Krittika-Astronomy-Club-of-IIT-Bombay/138574169549160?fref=ts" data-tabs="timeline" data-width="350" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/pages/Krittika-Astronomy-Club-of-IIT-Bombay/138574169549160?fref=ts"><a href="https://www.facebook.com/pages/Krittika-Astronomy-Club-of-IIT-Bombay/138574169549160?fref=ts">Krittika - Astronomy Club of IIT Bombay</a></blockquote></div></div>
						
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