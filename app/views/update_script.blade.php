@extends('club.'.$cl.'.layout')

@section('inner-content')

<h1>Our Team</h1>
<!-- ============================================================= SECTION – TEAM ============================================================= -->
						
						<section id="team" class="light-bg inner-xs inner-left-xs inner-right-xs">
								
							<h3 class="team-headline sidelines text-center"><span>Manager</span></h3>
							
							<div class="row thumbs gap-md text-center">
								
								
								@foreach($managers as $manager)
									@if(count($managers)==1)
										<div class="col-sm-6 col-sm-offset-3 thumb">
									@else
										<div class="col-sm-6 thumb">
									@endif
										<figure class="member">
											
											<div class="member-image">
												
												<div class="text-overlay">
													<div class="info">
														<ul class="social">
															<li><a href="{{$manager[4]}}"><i class="icon-s-facebook"></i></a></li>
														</ul><!-- /.social -->
													</div><!-- /.info -->
												</div><!-- /.text-overlay -->
												<img src= "{{URL::asset('assets/images/2015/club_teams/'.$manager[0])}}" style="height:300px;width:300px">
											</div><!-- /.member-image -->
											
											<figcaption class="member-details bordered no-top-border">
												<h3>
													{{$manager[0]}}
													<span>Manager</span>
												</h3>
											</figcaption>
											
										</figure>
									</div><!-- /.col -->
								@endforeach


								
							</div><!-- /.row -->
							<br>
							<h3 class="team-headline sidelines text-center"><span>UG Conveners</span></h3>

								<div class="row thumbs gap-md text-center">
								
								@foreach($conveners as $key=>$convener)
								@if($key==4 or $key==8)
								<br>
								<br>
								<br>
								<br>
								<br>
								<br>
								<br>
								<br>
								<br>
								<br>
								<br>
								<br>
								@endif
								<div class="col-sm-3 thumb">
									<figure class="member">
											
										<div class="member-image">
											
											<div class="text-overlay">
												<div class="info">
													<ul class="social">
														<li><a href="{{$convener[4]}}"><i class="icon-s-facebook"></i></a></li>
													</ul><!-- /.social -->
												</div><!-- /.info -->
											</div><!-- /.text-overlay -->

											<img src= "{{URL::asset('assets/images/2016/club_teams/'.$convener[0].'.jpg')}}" style="height:200px;width:200">

										</div><!-- /.member-image -->
										
										<figcaption class="member-details bordered no-top-border">
											<h3>
												{{$convener[0]}}
											</h3>
										</figcaption>
										
									</figure>
								</div><!-- /.col -->
								@endforeach

						</div>	
						</section>
@endsection
