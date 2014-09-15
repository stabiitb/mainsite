@extends('layout.default')

@section('content')
<main>
			
			
			<section class="light-bg img-bg img-bg-softer">
				<div class="container" style="padding-top:50px;padding-bottom:50px;">
					<div class="row">
						<div class="col-md-8">
							<header>
								<h2>ITSP Exhibition Registration</h2>
								<p>The exhibition will happen on 11th and 12th October as a part of 'Tech & RnD Exposition 2014'. Register by filling in the details below:  </p>
								<p>To know more about it <a href="{{URL::Route('tech_rnd')}}">go here</a></p>
							</header>
						</div><!-- /.col -->
					</div><!-- ./row -->
				</div><!-- /.container -->
			</section>
			
			<!-- ============================================================= SECTION – HERO : END ============================================================= -->
			
			<div class="container inner">
				<div class="row">
					@if (Session::get('messages') != null && Session::get('messages')->has('message'))
					<div class="col-md-8 col-md-offset-2">
						<div class="alert {{ Session::get('messages')->first('type')}} alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						{{ Session::get('messages')->first('message') }}
						</div>
					</div>
					@endif
					<div class="col-md-8 col-md-offset-1 inner-right-md">
						
						<!-- ============================================================= SECTION – CONTACT FORM ============================================================= -->
						
						<section id="contact-form">
							
							<h2>Fill up all details</h2>
							
							<form id="contactform" class="forms" method="post">
								
								<div class="row">
									<div class="col-md-2">
										<label>Team Id<sup style="color:red">*</sup></label>
									</div>
									<div class="col-sm-6">
										<input type="text" name="team_id" class="form-control" placeholder="Team Id (Required)" required>
									</div><!-- /.col -->
								</div><!-- /.row -->

								<div class="row">
									<div class="col-md-2">
										<label>Team Name<sup style="color:red">*</sup></label>
									</div>
									<div class="col-sm-6">
										<input type="text" name="team_name" class="form-control" placeholder="Team Name (Required)" required>
									</div><!-- /.col -->
								</div><!-- /.row -->

								<div class="row">
									<div class="col-md-2">
										<label>One Line Description<sup style="color:red">*</sup></label>
									</div>
									<div class="col-sm-6">
										<input type="text" name="desc" class="form-control" placeholder="Short description (Required)" required>
									</div><!-- /.col -->
								</div><!-- /.row -->
								<div class="row">
									<div class="col-md-2">
										<label>Slot<sup style="color:red">*</sup></label>
									</div>
									<div class="col-md-6">
										<input type="radio" name="slot" checked="checked" value="1" style="width:10%" required> 1
										<input type="radio" name="slot" value="2"  style="width:10%" required> 2
									</div><!-- /.col -->
								</div><!-- /.row -->
								<div class="row">
									<div class="col-md-2">
										<label>No of Team Members<sup style="color:red">*</sup></label>
									</div>
									<div class="col-sm-6">
										<select type="text" name="no_of_member" class="form-control" required>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
										</select>
									</div><!-- /.col -->
								</div><!-- /.row -->

								<div class="row">
									<div class="col-md-12">
										<label style="width:100%">Details of any one team member:</label>
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-2">
										<label>Name<sup style="color:red">*</sup></label>
									</div>
									<div class="col-sm-6">
										<input type="text" name="name" class="form-control" placeholder=" Name (Required)" required>
									</div><!-- /.col -->
								</div><!-- /.row -->

								<div class="row">
									<div class="col-md-2">
										<label>Email<sup style="color:red">*</sup></label>
									</div>
									<div class="col-sm-6">
										<input type="email" name="email" class="form-control" placeholder="Email(Required)" required>
									</div><!-- /.col -->
								</div><!-- /.row -->

								<div class="row">
									<div class="col-md-2">
										<label>Phone<sup style="color:red">*</sup></label>
									</div>
									<div class="col-sm-6">
										<input type="text" name="phone" class="form-control" placeholder="Phone no (Required)" required>
									</div><!-- /.col -->
								</div><!-- /.row -->

								<div class="row">
									<div class="col-md-2">
										<label>Comments/Query</label>
									</div>
									<div class="col-sm-6">
										<textarea name="comment" class="form-control" placeholder="Other Comments"></textarea>
									</div><!-- /.col -->
								</div><!-- /.row -->


								
								
								<button type="submit" class="btn btn-default btn-submit">Submit message</button>
								
							</form>
							
							<div id="response"></div>
							
						</section>
						
					
					</div><!-- ./col -->
					
					<div class="col-md-3 outer-top-md inner-left-sm border-left">
						<div class="btn-wrapper">
								<a href="{{URL::Route('expo.all')}}" class="btn btn-large btn-navy">See all teams</a>
						</div>
					</div>				
										
				</div><!-- /.row -->
			</div><!-- /.container -->
			
</main>
@endsection