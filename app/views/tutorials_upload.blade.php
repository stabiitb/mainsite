 @extends('layout.default')
@section('content')
<main>
	@if (Session::get('messages') != null && Session::get('messages')->has('message'))			
	<section id="error" class="light-bg">
		<div class="container inner-xs">
			<div class="row">
				<div class="col-sm-10 center-block text-center">
					{{ Session::get('messages')->first('message') }}
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>    
	@endif

	<section class="white-bg">
		<div class="container" style="padding-top:50px;padding-bottom:50px;">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<header>
							<h3>Upload Tutorial</h3>
					</header>
					<form id="tutorial_form" enctype="multipart/form-data" class="forms" action="{{URL::Route('tutorials.save')}}" method="post">
						<input class="form-control" name="Name" type="text" placeholder="Name" required>
						<input class="form-control" name="Club" size="8" placeholder="Enter corresponding Club" required>
						<br>
						<span>Choose Tutorial File. Max Size: 2MB</span>
						<input style="margin-top:10px;" name="File" type="file" placeholder="Enter Tutorial File" required> 
						<input class="btn btn-green" type="submit" value="Upload">
					</form>
				</div><!-- /.col -->
			</div><!-- ./row -->
		</div><!-- /.container -->
	</section>
</main>
@endsection