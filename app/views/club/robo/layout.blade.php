	@extends('layout.default')

@section('clubcontent')


		<!-- ============================================================= MAIN ============================================================= -->
		
		<main>
			
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
							<!--<li><a href="{{URL::Route('robotics-club')}}/gallery">Gallery</a></li>
							<li><a href="{{URL::Route('robotics-club')}}/video">Videos</a></li>-->
						

						</ul><!-- /.sidenav -->
						
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