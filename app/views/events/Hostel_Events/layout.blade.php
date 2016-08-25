@extends('layout.default')

@section('content')


		<!-- ============================================================= MAIN ============================================================= -->

<main>

	<div class="container inner">
		<div class="row">

			<div class="col-md-3 inner-right-md inner-bottom-sm">

				<!-- ============================================================= SIDE NAVIGATION ============================================================= -->

				<ul class="sidenav">
					<li><a href="{{URL::Route('events.Hostel_Events.home')}}">Home</a> </li>
					<li><a href="{{URL::Route('events.Hostel_Events.tech_events')}}">Form</a></li>
				</ul><!-- /.sidenav -->

				<!-- ============================================================= SIDE NAVIGATION : END ============================================================= -->

			</div><!-- /.col -->

			<div class="col-md-9 inner-left-md border-left">
				<?php if(Session::get('messages') != null && Session::get('messages')->has('message')): ?>
				<div class="col-md-12">
					<div class="alert alert-success alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<?php echo Session::get('messages')->first('message'); ?>

					</div>
				</div>
				<?php endif; ?>
				@yield('inner-content')
			</div><!-- ./col -->

		</div><!-- /.row -->
	</div><!-- /.container -->


</main>

<!-- ============================================================= MAIN : END ============================================================= -->

@endsection
