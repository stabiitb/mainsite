@extends('layout.default')

@section('content')


		<!-- ============================================================= MAIN ============================================================= -->
		
		<main>
			
			<div class="container inner">
				<div class="row">
					
					<div class="col-md-3 inner-right-md inner-bottom-sm">
						
						<!-- ============================================================= SIDE NAVIGATION ============================================================= -->
							
						<ul class="sidenav">
							<li><a href="{{URL::Route('events.techexpo.2015')}}/about">Tech & RnD Exposition 2015 - Home</a></li>
							<li><a href="{{URL::Route('events.techexpo.2015')}}/gallery">Glimpse of last year</a></li>
							<li><a href="{{URL::Route('events.techexpo.2015')}}/video-gallery">Last year videos</a></li>
							<li><a href="{{URL::Route('events.techexpo.2015')}}/registration_tech_projects">ITSP/Tech Projects Registration</a></li>
							<li><a href="{{URL::Route('events.techexpo.2015')}}/registration_rnd_projects">RnD Projects Registration</a></li>
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
