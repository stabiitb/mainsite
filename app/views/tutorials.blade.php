@extends('layout.default')

@section('content')
<main>
			<div class="container inner white-bg">

			<section id="portfolio">
								
				<div class="container inner-bottom">
					<div class="row">
						<div class="col-md-12 portfolio">
							 <!--animated fadeInUp col-md-9 portfolio-->
							<ul class="filter text-center">
								<li><a href="#" data-filter="*" class="active">All</a></li>
								<?php 
									foreach($all_tut as $key=>$club){
									
									echo '<li><a href="#" data-filter=".'.$key.'" >'.$key.'</a></li>';}

								?>
							</ul><!-- /.filter -->
							<ul class="items col-3" id="images">
								@foreach($all_tut as $key=>$club)
								@for($x = 0; $x < count($club); $x++) 
									<li class="item thumb {{$key}}">
											<figure>
												<?php
													$tut_name = $club[$x]["name"];
													$stored_name  = $club[$x]["url"];
													$by = $club[$x]["by"];
												?>
												<section class="light-bg" style="padding:20px;margin-bottom:20px">
												<h2><a href="{{ URL::asset('assets/tutorials/'.$stored_name)}}"><?php echo ($tut_name);?></a></h2>
												<figure>
													<div class="row">
														<div class="col-md-5 col-sm-6 inner-top-xs inner-left-xs">
															<p>Uploaded By <?php echo ($by);?></p>
														</div>
													</div>
												</figure>
												</section>
											</figure>
									</li><!-- /.item -->
								@endfor	
								@endforeach

							</ul><!-- /.items -->
							
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</section>
			</div>
	</main>		
			
@endsection