@extends('layout.default')

@section('clubcontent')


		<!-- ============================================================= MAIN ============================================================= -->
		
		<main>
			
			<div class="container inner">
				<div class="row">
					
					<div class="col-md-3 inner-right-md inner-bottom-sm">
						
						<!-- ============================================================= SIDE NAVIGATION ============================================================= -->
						<figure style="padding:10px;text-align:center">
							<img src="{{URL::asset('assets/images/2014/smart-campus/icon.jpg')}}" alt="" style="max-width:70px">
						</figure>
						<ul class="sidenav">
							<li><a href="{{URL::Route('smart-campus')}}">Home</a></li>
							<li><a href="{{URL::Route('smart-campus')}}/instruction">Instruction</a></li>
							<li><a href="{{URL::Route('smart-campus')}}/faq">FAQ</a></li>
							<li><a href="{{URL::Route('smart-campus')}}/register">Register</a></li>
							<li><a href="{{URL::Route('smart-campus')}}/contact">Contact Us</a></li>
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