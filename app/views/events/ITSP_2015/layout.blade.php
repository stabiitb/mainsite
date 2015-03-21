@extends('layout.default')

@section('content')


		<!-- ============================================================= MAIN ============================================================= -->
		
		<main>
			
			<div class="container inner">
				<div class="row">
					
					<div class="col-md-3 inner-right-md inner-bottom-sm">
						
						<!-- ============================================================= SIDE NAVIGATION ============================================================= -->
							
						<ul class="sidenav">
							<li><a href="{{URL::Route('events.ITSP.index')}}">Home</a></li>
							<li><a href="{{URL::Route('events.ITSP.timeline')}}">Timeline</a></li>
							<li><a href="{{URL::Route('events.ITSP.faq')}}">FAQ</a></li>
							<li><a href="{{URL::Route('events.ITSP.index')}}">Archive</a></li>
							<li><a href="{{URL::Route('events.ITSP.index')}}">About</a></li>
							<li><a href="{{URL::Route('events.ITSP.form')}}">Register</a></li>
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