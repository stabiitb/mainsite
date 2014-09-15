@extends('layout.default')

@section('content')
<main>
			
			
			<section class="light-bg img-bg img-bg-softer">
				<div class="container" style="padding-top:50px;padding-bottom:50px;">
					<div class="row">
						<div class="col-md-8">
							<header>
								<h2>Previous Stab Teams</h2>
							</header>
						</div><!-- /.col -->
					</div><!-- ./row -->
				</div><!-- /.container -->
			</section>
			
			<!-- ============================================================= SECTION – HERO : END ============================================================= -->
			
			<div class="container inner">
				<div class="row">
				
					<div class="col-md-12 inner-right-md">
						
						<!-- ============================================================= SECTION – CONTACT FORM ============================================================= -->
						
						<section id="contact-form">
						
							<h3><a href="{{URL::Route('team_2013')}}">Stab Team 2013</a></h3>
							<h3><a href="{{URL::Route('team_2012')}}">Stab Team 2012</a></h3>
																				
						</section>
						
					
					</div><!-- ./col -->
					
						
				</div><!-- /.row -->
			</div><!-- /.container -->
			
</main>
@endsection