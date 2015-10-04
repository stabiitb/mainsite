@extends('events.techexpo.2015.layout')
	@section('css')
	,pic{
    opacity: 0.5;
    -webkit-opacity: 0.5;
    -moz-opacity: 0.5;
    transition: 0.5s ease;
    -webkit-transition: 0.5s ease;
    -moz-transition: 0.5s ease;
    
}
	.pic:hover{
    -webkit-transform: scale(1.5,1.5);
    -moz-transform:scale(1.5,1.5);
    opacity: 1;
    -webkit-opacity: 1;
    -moz-opacity: 1;
}

	@endsection
@section('inner-content')

			<section id="portfolio">
								
				<div class="container inner-bottom">
					<div class="row">
						<div class="col-md-9 portfolio">
							 <!--animated fadeInUp col-md-9 portfolio-->
							<ul class="filter text-center">
								<li><a href="#" data-filter="*" class="active">All</a></li>
							</ul><!-- /.filter -->
							<ul class="items col-3" id="images">
								@for($x = 1; $x < count($pics) ; $x++) 
									<li class="item thumb">
											<figure>
												<figcaption class="text-overlay">
													<div class="info">
														<p>photo</p>
													</div>  
												</figcaption>
													<img class="pic" src="{{ URL::asset('media/2015/techexpo/gallery_2014/'.$pics[$x])}}">
											</figure>
									</li><!-- /.item -->
								@endfor

							</ul><!-- /.items -->
							
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</section>
			
			

@endsection