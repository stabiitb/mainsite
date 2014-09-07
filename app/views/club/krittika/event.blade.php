@extends('club.krittika.layout')

@section('inner-content')
<!-- ============================================================= SECTION – BLOG ============================================================= -->
			<section>
				<h2>List of events Conducted</h2>
				<br>
			</section>
			<!-- ============================================================= SECTION – BLOG ============================================================= -->
			
			<section id="blog" class="light-bg">
					
				<div class="inner-top-sm inner-bottom">
					<div class="row">
						<div class="col-sm-10 col-md-offset-1">
							
							<div class="grid-blog no-sidebar">
								<div class="posts">
															
									<div class="post format-image" style="width:50%;">
										
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
											
											<p>we went a step further in our understanding of Astronomy with a lecture delivered from Alankar Kotwal ...</p>
											
											<a href="{{URL::route('krittika')}}/the-cosmic-ladder-distance" class="btn">Read more</a>
											
										</div><!-- /.post-content --> 
										
									</div><!-- /.post -->

									<div class="post format-image" style="width:50%">
										
										<div class="post-content">
											
											<figure class="icon-overlay icn-link post-media">
												<a href="{{URL::route('krittika')}}/astronomy-demystified"><img src="{{URL::asset('assets/images/2014/krittika/astronomy_demys.jpg')}}" alt=""></a>
											</figure><!-- /.post-media -->
											
											<h2 class="post-title">
												<a href="blog-post.html">Astronomy Demystified</a>
											</h2>
											
											<ul class="meta">
												<li class="date">20th August 2014</li>
												<li class="categories">by Ruturaj Atre</li>
											</ul><!-- /.meta -->
											
											<p>Yesterday we kicked off the journey by a lecture delivered by the former manager of the club...</p>
											
											<a href="{{URL::route('krittika')}}/astronomy-demystified" class="btn">Read more</a>
											
										</div><!-- /.post-content --> 
										
									</div><!-- /.post -->
									
																	
								</div><!-- /.posts -->


							</div><!-- /.grid-blog -->
							
							
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div>
			</section>
			
			<!-- ============================================================= SECTION – BLOG : END ============================================================= -->
			
			
			<!-- ============================================================= SECTION – BLOG : END ============================================================= -->

@endsection