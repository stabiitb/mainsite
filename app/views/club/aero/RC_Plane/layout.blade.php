@extends('layout.default')

@section('content')


		<!-- ============================================================= MAIN ============================================================= -->
		
		<main>
			
			<div class="container inner">
				<div class="row">
					
					<div class="col-md-3 inner-right-md inner-bottom-sm">
						
						<!-- ============================================================= SIDE NAVIGATION ============================================================= -->
							
						<ul class="sidenav">
							<li><a href="{{URL::Route('aeromodelling-club')}}">Aeromodelling Club</a></li>
							<li><a href="{{URL::Route('club.aero.RC_Plane.index')}}">Home</a></li>
							<!--<li><a href="{{URL::Route('club.aero.RC_Plane.about')}}">About</a></li>-->
							<li><a href="{{URL::Route('club.aero.RC_Plane.students_reg')}}">Registration Form</a></li>
							<!--<li><a href="{{URL::Route('club.robo.XLR8_2015.mentor_reg')}}">Mentor Form</a></li>-->
							<li><a href="{{URL::Route('club.aero.RC_Plane.resources')}}">Resources</a></li>
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
