@extends('layout.default')

@section('content')
<style type="text/css">
	
</style>

	<main>
		<section class="light-bg">
				<div class="container inner">
					
					<div class="row">
						<div class="col-md-8 col-sm-9 center-block text-center">
							<header>
								<h1>ITSP 2015 Projects</h1>
							</header>
						</div><!-- /.col -->
					</div><!-- ./row -->
					
					<div class="row">
						<div class="col-xs-12 inner-top">
							<div class="tabs tabs-top tab-container">
								
								<ul class="etabs text-center">
									<li class="tab"><a href="#tab-0" class="active">All</a></li>
									<li class="tab"><a href="#tab-1" class="">Aeromodelling Club</a></li>
									<li class="tab"><a href="#tab-2" class="">Electronics Club</a></li>
									<li class="tab"><a href="#tab-3" class="">TechGSR</a></li>
									<li class="tab"><a href="#tab-4" class="">Krittika</a></li>
									<li class="tab"><a href="#tab-5" class="">Maths and Physics Club</a></li>
									<li class="tab"><a href="#tab-6" class="">Robotics Club</a></li>
									<li class="tab"><a href="#tab-7" class="">Technovation</a></li>
									<li class="tab"><a href="#tab-8" class="">Web and Coding Club</a></li>
								</ul><!-- /.etabs -->
								
								<div class="panel-container">

									<!--===========================================-->
									
									@foreach($clubs as $key1 => $myclub)
									
									<div class="tab-content" id="tab-{{$key1}}">
										<div class="row">
											<table border="0" align="center" class="table">
												<tbody>
													<tr>
														<th>
															Sr No
														</th>
														<th>
															Team id
														</th>
														<th>
															Team Name
														</th>
														<th>
															Project Name
														</th>
														<th>
															Project Description
														</th>
														<th>
															Slot
														</th>
														<th>
															Club
														</th>
														<th>
															Team Members
														</th>
														<th>
															Abstract
														</th>
													</tr>
													
													@foreach($myclub as $key => $project)
													<tr>
														<td>{{$key}}</td>

														<td>{{$project->id}}</td>
														<td>{{$project->team_name}}</td>
														<td calss="title">
															<a href="http://www.stab-iitb.org/itsp/documentation?id={{$project->id}}">{{$project->project_name}}</a>
														</td>
														<td><div class="desc">{{ $project->project_desc }}</div></td>
														<td>{{$project->slot}}</td>
														<td>{{$project->club}}</td>
														<td>
															@if($project->t1_name != '')
															<li>{{$project->t1_name}}</li>
															@endif
															@if($project->t2_name != '')
															<li>{{$project->t2_name}}</li>
															@endif
															@if($project->t3_name != '')
															<li>{{$project->t3_name}}</li>
															@endif
															@if($project->t4_name != '')
															<li>{{$project->t4_name}}</li>
															@endif
															<br>
															Contact: {{$project->t1_contact}}
														</td>
														<td>
															@if($project->abstract == '')
															No Abstract
															@else
															<a href="{{$project->abstract}}" target="_blank">See Here</a>
															@endif
														</td>
														
													</tr>

													@endforeach
													
												</tbody>
											</table>
										</div><!-- /.row -->
									</div><!-- /.tab-content -->
									@endforeach

									<!--===========================================-->
									 
								</div><!-- /.panel-container -->
								 
							</div><!-- /.tabs -->
						</div><!-- /.col -->
					</div><!-- /.row -->
					
				</div><!-- /.container -->
			</section>
	</main>
@endsection