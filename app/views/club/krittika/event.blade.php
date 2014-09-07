@extends('club.krittika.layout')

@section('inner-content')
<!-- ============================================================= SECTION – BLOG ============================================================= -->
			<section>
				<h2>List of events Conducted</h2>
				<br>
			</section>
			<!-- ============================================================= SECTION – BLOG ============================================================= -->
			
			<section id="blog" class="light-bg">
					
					
					<div class="row">
						<div class="col-sm-12">
							
							<div class="grid-blog col-3 no-sidebar">
								<div class="posts">
															
									<div class="post format-image">
										
										<div class="post-content">
											
											<figure class="icon-overlay icn-link post-media">
												<a href="{{URL::route('krittika')}}/the-cosmic-ladder-distance"><img src="{{URL::asset('assets/images/2014/krittika/club_ladder.jpg')}}" alt=""></a>
											</figure><!-- /.post-media -->
											
											<h2 class="post-title">
												<a href="blog-post.html">The Cosmic Distance Ladder</a>
											</h2>
											
											<ul class="meta">
												<li class="date">7th Sept 2014</li>
												<li class="categories">by Alankar Kotwal</li>
											</ul><!-- /.meta -->
											
											<p>we went a step further in our understanding of Astronomy with a lecture delivered from Alankar Kotwal (Gold Medalist at the 6th International Olympiad on Astronomy and Astrophysics) who has also successfully completed GSoC in Laboratory for Cosmological Data Mining</p>
											
											<a href="{{URL::route('krittika')}}/the-cosmic-ladder-distance" class="btn">Read more</a>
											
										</div><!-- /.post-content --> 
										
									</div><!-- /.post -->
																	
								</div><!-- /.posts -->
							</div><!-- /.grid-blog -->
							
							
						</div><!-- /.col -->
					</div><!-- /.row -->
					
			</section>
			
			<!-- ============================================================= SECTION – BLOG : END ============================================================= -->
			
			
			<!-- ============================================================= SECTION – BLOG : END ============================================================= -->

@endsection