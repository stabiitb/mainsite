@extends('club.'.$cl.'.layout')

@section('inner-content')

			<section id="portfolio">
								
				<div class="container inner-bottom">
					<div class="row">
						<div class="col-sm-12 portfolio">
							
							<ul class="filter text-center">
								<li><a href="#" data-filter="*" class="active">All</a></li>
								<li><a href="#" data-filter=".identity">Identity</a></li>
								<li><a href="#" data-filter=".interactive">Interactive</a></li>
								<li><a href="#" data-filter=".print">Print</a></li>
								<li><a href="#" data-filter=".photography">Photography</a></li>
							</ul><!-- /.filter -->
							
							<ul class="items col-3" id="images">
								@foreach($pics as $pic)
									<li class="item thumb interactive">
											<figure>
												<figcaption class="text-overlay">
													<div class="info">
														<h4>Appscreen Dashboard</h4>
														<p>Interactive</p>
													</div><!-- /.info -->
												</figcaption>
												<img src="{{ URL::asset('assets/gallery_images/aero/'.$pic)}}" alt="yo">
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