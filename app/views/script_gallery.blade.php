@extends('club.'.$cl.'.layout')

@section('inner-content')

			<section id="portfolio">
								
				<div class="container inner-bottom">
					<div class="row">
						<div class="col-sm-12 portfolio">
							
							<ul class="filter text-center">
								<li><a href="#" data-filter="*" class="active">All</a></li>
								
								<!--<li><a href="#" data-filter=".RC Plane">RC Plane</a></li>-->
								
							</ul><!-- /.filter -->
							
							<ul class="items col-3" id="images">
								@foreach($pics as $pic)
									<li class="item thumb *">
											<figure>
												<figcaption class="text-overlay">
													<div class="info">
														
														<p>photo</p>
													</div>  
												</figcaption>
												<img id = $pic src="{{ URL::asset('assets/gallery_images/'.$cl.'/'.$pic)}}" alt="yo">
												
											</figure>
										</a>
									</li><!-- /.item -->
								@endforeach
							</ul><!-- /.items -->
							
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</section>
			
			

@endsection