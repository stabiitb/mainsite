@extends('events.smartcampus.template')

@section('inner-content')

<h3>Fill up the form to register:</h3>
@if (Session::get('messages') != null && Session::get('messages')->has('message'))
					<div class="col-md-12">
						<div class="alert alert-success alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						{{ Session::get('messages')->first('message') }}
						</div>
					</div>
					@endif
					<p><i><a href="{{URL::Route('smart-campus')}}/all-team">Click here</a> to see all registrations</i></p>
						<form id="contactform" class="forms" method="post">
								
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
										<label style="width:100%">Hostel No / Room No<sup style="color:red">*</sup></label>
									</div>
									<div class="col-sm-6">
										<input type="text" name="hno" class="form-control" placeholder="H9 / 178" required>
									</div><!-- /.col -->
								</div><!-- /.row -->
								<div class="row">
									<div class="col-md-3">
										<label>Department<sup style="color:red">*</sup></label>
									</div>
									<div class="col-md-6">
										<input type="text" name="dept" class="form-control" placeholder="Computer Science and Engineering" required>
									</div><!-- /.col -->
								</div><!-- /.row -->
								<div class="row">
									<div class="col-md-3">
										<label>Year of Study<sup style="color:red">*</sup></label>
									</div>
									<div class="col-md-6">
										<input type="text" name="year" class="form-control" placeholder="2nd" required>
									</div><!-- /.col -->
								</div><!-- /.row -->
								<div class="row">
									<div class="col-md-3">
										<label style="width:100%">Are you a UG/PG? </label>
									</div>
									<div class="col-sm-3">
									<input type="radio" name="ug_pg" checked="checked" style="width:10%" value="UG"> UG
									</div><!-- /.col -->
									<div class="col-sm-3">
										<input type="radio" name="ug_pg" style="width:10%" value="PG"> PG										
									</div><!-- /.col -->
								</div><!-- /.row -->
								<div class="row">
									<div class="col-md-3">
										<label>Email<sup style="color:red">*</sup></label>
									</div>
									<div class="col-md-6">
										<input type="email" name="email" class="form-control" placeholder="student@iitb.ac.in" required>
									</div><!-- /.col -->
								</div><!-- /.row -->

								<div class="row">
									<div class="col-md-3">
										<label>Contact No<sup style="color:red">*</sup></label>
									</div>
									<div class="col-md-6">
										<input type="text" name="contact" class="form-control" placeholder="+91-9876543210" required>
									</div><!-- /.col -->
								</div><!-- /.row -->

								<div class="row">
									<div class="col-md-3">
										<label style="width:100%">Technical Skills<sup style="color:red">*</sup></label>
									</div>
									<div class="col-md-6">
										<input type="text" name="skills" class="form-control" placeholder="Arduino , Image Processing .." required>
									</div><!-- /.col -->
								</div><!-- /.row -->

								<div class="row">
									<div class="col-md-3">
										<label style="width:100%">Do you have any ideas for project?</label>
									</div>
									<div class="col-sm-6">
										<textarea name="idea" class="form-control"></textarea>
									</div><!-- /.col -->
								</div><!-- /.row -->

								<div class="row">
									<div class="col-md-3">
										<label style="width:100%">Statement Of Purpose<sup style="color:red">*</sup></label>
									</div>
									<div class="col-sm-6">
										<textarea name="sop" class="form-control" required></textarea>
									</div><!-- /.col -->
								</div><!-- /.row -->

								<div class="row">
									<div class="col-md-3">
										<label style="width:100%">Do you have a team ? </label>
									</div>
									<div class="col-sm-3">
									<input type="radio" name="team" checked="checked" style="width:10%" onclick="$('#team-detail').css('display','none');$('#team-detail-box').val('')"> No
									</div><!-- /.col -->
									<div class="col-sm-3">
										<input type="radio" name="team" style="width:10%" onclick="$('#team-detail').css('display','block')"> Yes										
									</div><!-- /.col -->
								</div><!-- /.row -->

								<div class="row"  id="team-detail" style="display:none">
									<div class="col-md-3">
										<label style="width:100%">Team Details (No of Team Members and name)</label>
									</div>
									<div class="col-sm-6">
										<input name="team-detail" class="form-control" type="text"  id="team-detail-box">
									</div><!-- /.col -->
									<div class="col-md-12">
										Note : Each team member have to register individually
									</div>
								</div><!-- /.row -->

								
								
								<button type="submit" class="btn btn-default btn-submit">Register</button>
								
							</form>

@endsection