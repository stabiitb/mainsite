@extends('layout.default')

@section('content')
<main>
		<section >
				<div class="container inner">
					
					<div class="row">
						<div class="col-md-8 col-sm-9 center-block text-center">
							<header>
								<h2>Please Login To Continue</h2>
								<p>Note : This is only for STAB Managers</p>
							</header>
						</div><!-- /.col -->
					</div><!-- /.row -->

					<div class="row">
						<div class="col-md-4 col-sm-9 center-block text-center">
							<form method="post" action="{{URL::Route('login')}}">
							<br>
								<div class="form-group">
								<input class="form-control" name="password" type="password" placeholder="Enter Password to continue">
								</div>
								<button class="btn">Continue</button>
							</form>
						</div><!-- /.col -->
					</div><!-- /.row -->
					
				</div>
		</section>		
			
</main>
@endsection