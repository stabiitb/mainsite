@extends('layout.default')

@section('clubcontent')


		<!-- ============================================================= MAIN ============================================================= -->
		
		<main>
			
			<div class="container inner">
				<div class="row">
					
					<div class="col-md-3 inner-right-md inner-bottom-sm">
						
						<!-- ============================================================= SIDE NAVIGATION ============================================================= -->
							
						<ul class="sidenav">
							<li><a href="{{URL::Route('robotics-club')}}">Home</a></li>
							<li><a href="{{URL::Route('robotics-club')}}/vision">Vision</a></li>
							<li><a href="{{URL::Route('robotics-club')}}/event">Events</a></li>
							<li><a href="{{URL::Route('robotics-club')}}/team">Team</a></li>
						</ul><!-- /.sidenav -->
						
						<!-- ============================================================= SIDE NAVIGATION : END ============================================================= -->
						
					</div><!-- /.col -->
					
					<div class="col-md-9 inner-left-md border-left">
						@yield('inner-content')
					</div><!-- ./col -->
						
				</div><!-- /.row -->
			</div><!-- /.container -->
			
			<!-- ============================================================= SECTION – SHARE ============================================================= -->
			
			<section id="share" class="light-bg">
				<div class="container">
					
					<div class="col-sm-4 reset-padding">
						<a href="#" class="btn-share-md">
							<p class="name">Facebook</p>
							<i class="icon-s-facebook"></i>
							<p class="counter">1080</p>
						</a>
					</div><!-- /.col -->
					
					<div class="col-sm-4 reset-padding">
						<a href="#" class="btn-share-md">
							<p class="name">Twitter</p>
							<i class="icon-s-twitter"></i>
							<p class="counter">1263</p>
						</a>
					</div><!-- /.col -->
					
					<div class="col-sm-4 reset-padding">
						<a href="#" class="btn-share-md">
							<p class="name">Google +</p>
							<i class="icon-s-gplus"></i>
							<p class="counter">963</p>
						</a>
					</div><!-- /.col -->
					
				</div><!-- /.container -->
			</section>
			
			<!-- ============================================================= SECTION – SHARE : END ============================================================= -->
			
		</main>
		
		<!-- ============================================================= MAIN : END ============================================================= -->
		
@endsection
