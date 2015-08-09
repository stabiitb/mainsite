@extends('club.aero.layout')

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
							
							<ul class="items col-3">
								$dir = public_path()."/assets/gallery_images";
								$dh  = opendir($dir);
								while (false !== ($image = readdir($dh))) {
    								$images[] = $image;
								}
								foreach($images as $pic){
									<li class="item thumb interactive">
										<a href="portfolio-post.html">
											<figure>
												<figcaption class="text-overlay">
													<div class="info">
														<h4>Appscreen Dashboard</h4>
														<p>Interactive</p>
													</div><!-- /.info -->
												</figcaption>
												<img src="{{ URL::asset('assets/gallery_images/pic')}}" alt="">
											</figure>
										</a>
									</li><!-- /.item -->
								}
        						        						
								<li class="item thumb interactive">
									<a href="portfolio-post.html">
										<figure>
											<figcaption class="text-overlay">
												<div class="info">
													<h4>Appscreen Dashboard</h4>
													<p>Interactive</p>
												</div><!-- /.info -->
											</figcaption>
											<img src="http://demo.fuviz.com/reen/assets/images/art/work01.jpg" alt="">
										</figure>
									</a>
								</li><!-- /.item -->
								
								<li class="item thumb identity">
									<a href="portfolio-post.html">
										<figure>
											<figcaption class="text-overlay">
												<div class="info">
													<h4>Grand Motel</h4>
													<p>Identity</p>
												</div><!-- /.info -->
											</figcaption>
											<img src="http://demo.fuviz.com/reen/assets/images/art/work02.jpg" alt="">
										</figure>
									</a>
								</li><!-- /.item -->
								
								<li class="item thumb identity">
									<a href="portfolio-post.html">
										<figure>
											<figcaption class="text-overlay">
												<div class="info">
													<h4>Signwall</h4>
													<p>Identity</p>
												</div><!-- /.info -->
											</figcaption>
											<img src="http://demo.fuviz.com/reen/assets/images/art/work16.jpg" alt="">
										</figure>
									</a>
								</li><!-- /.item -->
								
								<li class="item thumb print">
									<a href="portfolio-post.html">
										<figure>
											<figcaption class="text-overlay">
												<div class="info">
													<h4>Modern CD Case</h4>
													<p>Print</p>
												</div><!-- /.info -->
											</figcaption>
											<img src="http://demo.fuviz.com/reen/assets/images/art/work18.jpg" alt="">
										</figure>
									</a>
								</li><!-- /.item -->
								
								<li class="item thumb identity">
									<a href="portfolio-post.html">
										<figure>
											<figcaption class="text-overlay">
												<div class="info">
													<h4>Astor & Yancy</h4>
													<p>Identity</p>
												</div><!-- /.info -->
											</figcaption>
											<img src="http://demo.fuviz.com/reen/assets/images/art/work09.jpg" alt="">
										</figure>
									</a>
								</li><!-- /.item -->
								
								<li class="item thumb photography">
									<a href="portfolio-post.html">
										<figure>
											<figcaption class="text-overlay">
												<div class="info">
													<h4>Daydreaming</h4>
													<p>Photography</p>
												</div><!-- /.info -->
											</figcaption>
											<img src="http://demo.fuviz.com/reen/assets/images/art/photograph02.jpg" alt="">
										</figure>
									</a>
								</li><!-- /.item -->
								
								<li class="item thumb identity">
									<a href="portfolio-post.html">
										<figure>
											<figcaption class="text-overlay">
												<div class="info">
													<h4>Brand Stationery</h4>
													<p>Identity</p>
												</div><!-- /.info -->
											</figcaption>
											<img src="http://demo.fuviz.com/reen/assets/images/art/work08a.jpg" alt="">
										</figure>
									</a>
								</li><!-- /.item -->
								
								<li class="item thumb print">
									<a href="portfolio-post.html">
										<figure>
											<figcaption class="text-overlay">
												<div class="info">
													<h4>Tri Fold Brochure</h4>
													<p>Print</p>
												</div><!-- /.info -->
											</figcaption>
											<img src="http://demo.fuviz.com/reen/assets/images/art/work10.jpg" alt="">
										</figure>
									</a>
								</li><!-- /.item -->
								
								<li class="item thumb interactive">
									<a href="portfolio-post.html">
										<figure>
											<figcaption class="text-overlay">
												<div class="info">
													<h4>Vintage Bicycles</h4>
													<p>Interactive</p>
												</div><!-- /.info -->
											</figcaption>
											<img src="http://demo.fuviz.com/reen/assets/images/art/work03.jpg" alt="">
										</figure>
									</a>
								</li><!-- /.item -->
								
								<li class="item thumb print">
									<a href="portfolio-post.html">
										<figure>
											<figcaption class="text-overlay">
												<div class="info">
													<h4>Electric Dance Book Cover</h4>
													<p>Print</p>
												</div><!-- /.info -->
											</figcaption>
											<img src="http://demo.fuviz.com/reen/assets/images/art/work20.jpg" alt="">
										</figure>
									</a>
								</li><!-- /.item -->
								
								<li class="item thumb identity">
									<a href="portfolio-post.html">
										<figure>
											<figcaption class="text-overlay">
												<div class="info">
													<h4>Embroidered</h4>
													<p>Identity</p>
												</div><!-- /.info -->
											</figcaption>
											<img src="http://demo.fuviz.com/reen/assets/images/art/work05.jpg" alt="">
										</figure>
									</a>
								</li><!-- /.item -->
								
								<li class="item thumb identity print">
									<a href="portfolio-post.html">
										<figure>
											<figcaption class="text-overlay">
												<div class="info">
													<h4>Brand Stationery</h4>
													<p>Identity/Print</p>
												</div><!-- /.info -->
											</figcaption>
											<img src="http://demo.fuviz.com/reen/assets/images/art/work21.jpg" alt="">
										</figure>
									</a>
								</li><!-- /.item -->
								
								<li class="item thumb identity">
									<a href="portfolio-post.html">
										<figure>
											<figcaption class="text-overlay">
												<div class="info">
													<h4>Handmade Wood Gifts</h4>
													<p>Identity</p>
												</div><!-- /.info -->
											</figcaption>
											<img src="http://demo.fuviz.com/reen/assets/images/art/work17.jpg" alt="">
										</figure>
									</a>
								</li><!-- /.item -->
								
								<li class="item thumb identity">
									<a href="portfolio-post.html">
										<figure>
											<figcaption class="text-overlay">
												<div class="info">
													<h4>Designer Brand</h4>
													<p>Identity</p>
												</div><!-- /.info -->
											</figcaption>
											<img src="http://demo.fuviz.com/reen/assets/images/art/work19.jpg" alt="">
										</figure>
									</a>
								</li><!-- /.item -->
								
								<li class="item thumb print">
									<a href="portfolio-post.html">
										<figure>
											<figcaption class="text-overlay">
												<div class="info">
													<h4>Vinyl Records</h4>
													<p>Print</p>
												</div><!-- /.info -->
											</figcaption>
											<img src="http://demo.fuviz.com/reen/assets/images/art/work07.jpg" alt="">
										</figure>
									</a>
								</li><!-- /.item -->
								
							</ul><!-- /.items -->
							
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</section>
			
			
			<!-- ============================================================= SECTION – BLOG : END ============================================================= -->

@endsection
