@extends('layout.robo')

@section('inner-content')
<!-- ============================================================= SECTION – BLOG ============================================================= -->
			
			<section id="blog" class="light-bg">
				<div class="container inner-top-sm inner-bottom">
					
					<div class="row inner-bottom-xs">
						<div class="col-sm-12">	
							<ul class="format-filter text-center">
								<li><a class="active" href="#" data-filter="*" title="All" data-rel="tooltip" data-placement="top"><i class="icon-th"></i></a></li>
								<li><a href="#" data-filter=".format-standard" title="Standard" data-rel="tooltip" data-placement="top"><i class="icon-edit"></i></a></li>
								<li><a href="#" data-filter=".format-image" title="Image" data-rel="tooltip" data-placement="top"><i class="icon-picture-1"></i></a></li>
								<li><a href="#" data-filter=".format-gallery" title="Gallery" data-rel="tooltip" data-placement="top"><i class="icon-picture"></i></a></li>
								<li><a href="#" data-filter=".format-video" title="Video" data-rel="tooltip" data-placement="top"><i class="icon-video-1"></i></a></li>
								<li><a href="#" data-filter=".format-audio" title="Audio" data-rel="tooltip" data-placement="top"><i class="icon-music-1"></i></a></li>
								<li><a href="#" data-filter=".format-quote" title="Quote" data-rel="tooltip" data-placement="top"><i class="icon-quote"></i></a></li>
								<li><a href="#" data-filter=".format-link" title="Link" data-rel="tooltip" data-placement="top"><i class="icon-popup"></i></a></li>
							</ul><!-- /.format-filter -->
						</div><!-- /.col -->
					</div><!-- /.row -->
					
					<div class="row">
						<div class="col-sm-12">
							
							<div class="grid-blog col-3 no-sidebar">
								<div class="posts">
									
									<div class="post format-gallery">
										
										<div class="post-content">
											
											<div id="owl-work" class="owl-carousel owl-inner-pagination owl-inner-nav post-media">
												
												<div class="item">
													<figure>
														<img src="assets/images/art/work06-lg.jpg" alt="">
													</figure>
												</div><!-- /.item -->
												
												<div class="item">
													<figure>
														<img src="assets/images/art/work02-lg.jpg" alt="">
													</figure>
												</div><!-- /.item -->
												
												<div class="item">
													<figure>
														<img src="assets/images/art/work08a-lg.jpg" alt="">
													</figure>
												</div><!-- /.item -->
												
												<div class="item">
													<figure>
														<img src="assets/images/art/work09-lg.jpg" alt="">
													</figure>
												</div><!-- /.item -->
												
												<div class="item">
													<figure>
														<img src="assets/images/art/work16-lg.jpg" alt="">
													</figure>
												</div><!-- /.item -->
												
											</div><!-- /.owl-carousel -->
											
											<h2 class="post-title">
												<a href="blog-post.html">Learn how to successfully design brand identities</a>
											</h2>
											
											<ul class="meta">
												<li class="date">May 21, 2014</li>
												<li class="categories"><a href="#">Identity</a>, <a href="#">Graphic Design</a></li>
												<li class="comments"><a href="#">24</a></li>
												<li class="likes"><a href="#">73</a></li>
											</ul><!-- /.meta -->
											
											<p>Magnis modipsae que lib voloratati andigen daepeditem quiate ut repore autem labor. Laceaque quia sitiorem restem non restibusaes es modis.</p>
											
											<a href="blog-post.html" class="btn">Read more</a>
											
										</div><!-- /.post-content --> 
										
									</div><!-- /.post -->
									
									<div class="post format-quote">
										
										<div class="post-content">
											
											<ul class="meta">
												<li class="date">May 21, 2014</li>
												<li class="likes"><a href="#">37</a></li>
											</ul><!-- /.meta -->
											
											<blockquote>
												<p>Been putting off creating my portfolio for several years, then I found REEN and about 30 minutes later ... I have an awesome looking portfolio. Totally love it – keep up the good work!</p>
												<footer><cite>Bill Jobs</cite></footer>
											</blockquote>
											
										</div><!-- /.post-content --> 
										
									</div><!-- /.post -->
									
									<div class="post format-standard">
										
										<div class="post-content">
											
											<h2 class="post-title">
												<a href="blog-post.html">The ultimate guide for designers to start freelancing</a>
											</h2>
											
											<ul class="meta">
												<li class="date">May 14, 2014</li>
												<li class="categories"><a href="#">Business</a></li>
												<li class="comments"><a href="#">14</a></li>
												<li class="likes"><a href="#">30</a></li>
											</ul><!-- /.meta -->
											
											<p>Magnis modipsae que lib voloratati andigen daepeditem quiate ut repore autem labor. Laceaque quia sitiorem restem non restibusaes es modis.</p>
											
											<a href="blog-post.html" class="btn">Read more</a>
											
										</div><!-- /.post-content --> 
										
									</div><!-- /.post -->
									
									<div class="post format-image">
										
										<div class="post-content">
											
											<figure class="icon-overlay icn-link post-media">
												<a href="blog-post.html"><img src="assets/images/art/photograph04-lg.jpg" alt=""></a>
											</figure><!-- /.post-media -->
											
											<h2 class="post-title">
												<a href="blog-post.html">The girl and the summerlight</a>
											</h2>
											
											<ul class="meta">
												<li class="date">May 10, 2014</li>
												<li class="categories"><a href="#">Photography</a></li>
												<li class="comments"><a href="#">63</a></li>
												<li class="likes"><a href="#">114</a></li>
											</ul><!-- /.meta -->
											
											<p>Magnis modipsae que lib voloratati andigen daepeditem quiate ut repore autem labor. Laceaque quia sitiorem restem non restibusaes es modis.</p>
											
											<a href="blog-post.html" class="btn">Read more</a>
											
										</div><!-- /.post-content --> 
										
									</div><!-- /.post -->
									
									<div class="post format-video">
										
										<div class="post-content">
											
											<div class="video-container post-media">
												<iframe src="http://player.vimeo.com/video/65468064?title=0&amp;byline=0&amp;color=1abb9c" width="750" height="422" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
											</div><!-- /.post-media -->
											
											<h2 class="post-title">
												<a href="blog-post.html">Pure geometry in motion</a>
											</h2>
											
											<ul class="meta">
												<li class="date">May 07, 2014</li>
												<li class="categories"><a href="#">Motion&nbsp;Graphics</a></li>
												<li class="comments"><a href="#">25</a></li>
												<li class="likes"><a href="#">84</a></li>
											</ul><!-- /.meta -->
											
											<p>Magnis modipsae que lib voloratati andigen daepeditem quiate ut repore autem labor. Laceaque quia sitiorem restem non restibusaes es modis.</p>
											
											<a href="blog-post.html" class="btn">Read more</a>
											
										</div><!-- /.post-content --> 
										
									</div><!-- /.post -->
									
									<div class="post format-audio">
										
										<div class="post-content">
											
											<div class="post-media">
												<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/14132147&amp;color=1abb9c&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe>
											</div><!-- /.post-media -->
											
											<h2 class="post-title">
												<a href="blog-post.html">Music and design workflow</a>
											</h2>
											
											<ul class="meta">
												<li class="date">May 05, 2014</li>
												<li class="categories"><a href="#">Audio</a></li>
												<li class="comments"><a href="#">14</a></li>
												<li class="likes"><a href="#">48</a></li>
											</ul><!-- /.meta -->
											
											<p>Magnis modipsae que lib voloratati andigen daepeditem quiate ut repore autem labor. Laceaque quia sitiorem restem non restibusaes es modis.</p>
											
											<a href="blog-post.html" class="btn">Read more</a>
											
										</div><!-- /.post-content --> 
										
									</div><!-- /.post -->
									
									<div class="post format-link">
										
										<div class="post-content">
											
											<ul class="meta">
												<li class="date">May 01, 2014</li>
												<li class="categories"><a href="#">Interactive</a></li>
												<li class="likes"><a href="#">973</a></li>
											</ul><!-- /.meta -->
											
											<h2 class="post-title">
												<a href="http://www.wrapbootstrap.com" target="_blank">Super-Awesome Bootstrap Website Templates</a>
											</h2>
											
											<a href="http://www.wrapbootstrap.com" target="_blank">www.wrapbootstrap.com</a>
											
										</div><!-- /.post-content --> 
										
									</div><!-- /.post --> 
									
								</div><!-- /.posts -->
							</div><!-- /.grid-blog -->
							
							<ul class="pagination">
								<li><a href="#">Prev</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">Next</a></li>
							</ul><!-- /.pagination --> 
							
						</div><!-- /.col -->
					</div><!-- /.row -->
					
				</div><!-- /.container -->
			</section>
			
			<!-- ============================================================= SECTION – BLOG : END ============================================================= -->
			
@endsection