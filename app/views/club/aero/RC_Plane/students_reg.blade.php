@extends('club.aero.RC_Plane.layout')
@section('inner-content')
						<section id="reg" >
							<div class="row">			
								<div class="col-sm-12 inner-right-xs inner-bottom-sm">
									<h2>RC Plane Students Registration</h2>
									<p>Make your own Remote Controlled Plane</p>
								</div><!-- /.col -->
							</div>
							<div class="row">
								@if (Auth::check())
									<iframe  width="100%" height="800px" src=" https://docs.google.com/forms/d/1Xuxd8cf9-RJF-3OH4TXL5MrPdh-SbF2ZlKPTBy92G_Q/viewform" frameborder="0" allowfullscreen></iframe>								
								@else
									<p>Please Login with Facebook to Fill the Form</p>
								@endif
							</div><!-- ./row -->
						</section>
@endsection