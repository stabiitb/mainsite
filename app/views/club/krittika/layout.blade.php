@extends('layout.default')

@section('clubcontent')


		<!-- ============================================================= MAIN ============================================================= -->
		
		<main>
			
			<div class="container inner">
				<div class="row">
					
					<div class="col-md-3 inner-right-md inner-bottom-sm">
						
						<!-- ============================================================= SIDE NAVIGATION ============================================================= -->
							
						<ul class="sidenav">
							<li><a href="{{URL::Route('krittika')}}">Home</a></li>
							<!-- <li><a href="{{URL::Route('krittika')}}/vision">Vision</a></li> -->
							<li><a href="{{URL::Route('krittika')}}/event">Events</a></li>
							<li><a href="{{URL::Route('krittika')}}/team">Team</a></li>
							<!--<li><a href="{{URL::Route('krittika')}}/gallery">Gallery</a></li>
							<li><a href="{{URL::Route('krittika')}}/video">Videos</a></li>-->
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