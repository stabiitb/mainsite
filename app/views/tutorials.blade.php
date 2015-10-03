@extends('layout.default')

@section('content')

			<section id="portfolio">
								
				<div class="container inner-bottom">
					<div class="row">
						<div class="col-md-9 portfolio">
							 <!--animated fadeInUp col-md-9 portfolio-->
							<ul class="filter text-center">
								<li><a href="#" data-filter="*" class="active">All</a></li>
								<?php 
									$count=0;
									foreach($all_tut as $key=>$pic){
									if($count%2==0){
										$count++;
									continue;
									}
									$count++;
									echo '<li><a href="#" data-filter=".'.$key.'" >'.$key.'</a></li>';}
								?>
							</ul><!-- /.filter -->
							<ul class="items col-3" id="images">
								@foreach($all_tut as $key=>$pic)
								@for($x = 1; $x < count($pic); $x++) 
									<li class="item thumb {{$key}}">
											<figure>
												<figcaption class="text-overlay">
													<div class="info">
														<p>photo</p>
													</div>  
												</figcaption>
												$pic[$x][1];
													<img src="{{ URL::asset('media/2015/club_assets/'.$cl.'/Events/'.$key.'/Photos/'.$pic[$x])}}" alt="yo">
													
													
											</figure>
									</li><!-- /.item -->
								@endfor	
								@endforeach

							</ul><!-- /.items -->
							
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</section>
			
@endsection