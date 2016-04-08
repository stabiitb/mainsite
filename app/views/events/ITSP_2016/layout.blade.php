@extends('layout.default')

@section('content')


		<!-- ============================================================= MAIN ============================================================= -->

		<main>

			<div class="container inner">
				<div class="row">
					
					<div class="col-md-3 inner-right-md inner-bottom-sm">
						
						<!-- ============================================================= SIDE NAVIGATION ============================================================= -->
							
						<ul class="sidenav">
							{{--<li><a href="{{URL::Route('events.ITSP_2015.index')}}">Form</a></li>--}}
							<li><a href="{{URL::Route('events.ITSP_2016.index')}}">Home</a></li>
							<li><a href="{{URL::Route('events.ITSP_2016.mentor')}}">Mentor Form</a></li>
							<li><a href="{{URL::Route('events.ITSP_2016.chat')}}">Chat</a></li>
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
