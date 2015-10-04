@extends('events.techexpo.2015.layout')
@section('inner-content')
						<section id="reg" >
							<div class="row">			
								<div class="col-sm-12 inner-right-xs inner-bottom-sm">
									<h2>Tech & RnD Exposition 2015 - Technical Projects Registration</h2>
									<p> This form is only for ITSP projects/tech projects.</p>
									<p> For registering your Rnd projects, please register <u><a href="{{URL::Route('events.techexpo.2015')}}/registration_rnd_projects">here</a></u></p>  
								</div><!-- /.col -->
							</div>
							<div class="row">
									<iframe  width="100%" height="800px" src=" https://stab.typeform.com/to/eqrBUk" frameborder="0" allowfullscreen></iframe>								
							</div><!-- ./row -->
						</section>
@endsection