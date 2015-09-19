@extends('events.techexpo.2015.layout')
@section('inner-content')
						<section id="reg" >
							<div class="row">			
								<div class="col-sm-12 inner-right-xs inner-bottom-sm">
									<h2>Tech & RnD Exposition 2015 - RnD Projects Registration</h2>
									<p> This form is only for RnD or SURP(formerly ISPA) or some research projects you did as a part of your internship.</p>
									<p> For registering your ITSP projects/self tech project, please register <u><a href="{{URL::Route('events.techexpo.2015')}}/registration_tech_projects">here</a></u></p>  
								</div><!-- /.col -->
							</div>
							<div class="row">
									<iframe  width="100%" height="800px" src=" https://stab.typeform.com/to/AxECYL" frameborder="0" allowfullscreen></iframe>								
							</div><!-- ./row -->
						</section>
@endsection