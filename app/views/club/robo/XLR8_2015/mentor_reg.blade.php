@extends('club.robo.XLR8_2015.layout')
@section('inner-content')
						<section id="reg" >
							<div class="row">			
								<div class="col-sm-12 inner-right-xs inner-bottom-sm">
									<h2>XLR8 Mentors Registration</h2>
									<p>Build a Bot. Race your Bot!</p>
								</div><!-- /.col -->
							</div>
							<div class="row">
								@if (Auth::check())
									<iframe  width="100%" height="800px" src="https://docs.google.com/forms/d/12Svhrqr0oZK2Y6P1T9LAxQMn-e6iNBmh9IqRfXmP4GU/viewform" frameborder="0" allowfullscreen></iframe>								
								@else
									<p>Please Login with Facebook to Fill the Form</p>
								@endif
							</div><!-- ./row -->
						</section>
@endsection