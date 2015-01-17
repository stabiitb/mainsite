@extends('club.elec.layout')

@section('inner-content')

<?php  $closetime=strtotime("20 January 2015"); 
		$curtime = time();
?>

@if (Session::get('messages') != null && Session::get('messages')->has('message'))
	<div class="col-md-12">
		<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		{{ Session::get('messages')->first('message') }}
		</div>
	</div>
@endif


@if($closetime > $curtime)
<h3>Submit your Solution for CMOS Design Challenge:</h3>
<form id="contactform" class="forms" method="post" enctype="multipart/form-data">
		
		<div class="row">
			<div class="col-md-3">
				<label>Name<sup style="color:red">*</sup></label>
			</div>
			<div class="col-sm-6">
				<input type="text" name="name" class="form-control" placeholder="Name" required>
			</div><!-- /.col -->
		</div><!-- /.row -->

		<div class="row">
			<div class="col-md-3">
				<label>Roll no<sup style="color:red">*</sup></label>
			</div>
			<div class="col-sm-6">
				<input type="text" name="roll" class="form-control" placeholder="Roll No" required>
			</div><!-- /.col -->
		</div><!-- /.row -->

		<div class="row">
			<div class="col-md-3">
				<label style="width:100%">Semester<sup style="color:red">*</sup></label>
			</div>
			<div class="col-sm-6">
				<input type="text" name="semester" class="form-control" placeholder="1/2/3/4/5/6/7/8" required>
			</div><!-- /.col -->
		</div><!-- /.row -->
		<div class="row">
			<div class="col-md-3">
				<label>Program<sup style="color:red">*</sup></label>
			</div>
			<div class="col-md-6">
				<input type="text" name="program" class="form-control" placeholder="PhD/M.Tech/DD/B.Tech" required>
			</div><!-- /.col -->
		</div><!-- /.row -->
		<div class="row">
			<div class="col-sm-4">
				<label style="width:100%">Difficulty Leven on Scale of 5?<sup style="color:red">*</sup> </label>
			</div>
			<div class="col-sm-1">
				<input type="radio" name="difficulty" checked="checked" style="width:10%" value="1"> 1
			</div><!-- /.col -->
			<div class="col-sm-1">
				<input type="radio" name="difficulty" style="width:10%" value="2"> 2				
			</div><!-- /.col -->
			<div class="col-sm-1">
				<input type="radio" name="difficulty" style="width:10%" value="3"> 3
			</div><!-- /.col -->
			<div class="col-sm-1">
				<input type="radio" name="difficulty" style="width:10%" value="4"> 4				
			</div><!-- /.col -->
			<div class="col-sm-1">
				<input type="radio" name="difficulty" style="width:10%" value="5"> 5				
			</div><!-- /.col -->
		</div><!-- /.row -->

		<div class="row">
			<div class="col-md-3">
				<label style="width:100%">Feedback</label>
			</div>
			<div class="col-sm-6">
				<textarea name="feedback" class="form-control"></textarea>
			</div><!-- /.col -->
		</div><!-- /.row -->

		<div class="row">
			<div class="col-md-3">
				<label>Upload Your Solution<sup style="color:red">*</sup></label>
			</div>
			<div class="col-md-6">
				<input type="file" name="solution" class="form-control" required>
			</div><!-- /.col -->
		</div><!-- /.row -->

		
		
		<button type="submit" class="btn btn-default btn-submit">Register</button>
		
	</form>

@else
	<h3>Registrations have been closed for now</h3>
	<h3>Selected Candidates will be informed by 9th November</h3>

	<p>Note : For any queries <a href="{{URL::Route('smart-campus')}}/contact">Contact Us</a></p>
	<p><i><a href="{{URL::Route('smart-campus')}}/all-team">Click here</a> to see all registrations</i></p>
	<br>
@endif

@endsection