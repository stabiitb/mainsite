@extends('club.krittika.layout')

@section('inner-content')
<!-- ============================================================= SECTION – BLOG ============================================================= -->
			
			<section id="blog-post" class="light-bg">
				<div class="inner-top-sm inner-bottom classic-blog no-sidebar">
					<div class="row">
						<div class="col-md-11 center-block">
							<div class="sidemeta">
								
								<div class="post format-gallery">
									
									<div class="date-wrapper">
										<div class="date">
											<span class="day">7</span>
											<span class="month">sept</span>
										</div><!-- /.date -->
									</div><!-- /.date-wrapper -->
									
									
									<div class="post-content">
										
										
										
										<p class="author"><a href="#" title="Post author" data-rel="tooltip" data-placement="left">Alankar Kotwal</a></p> 
										
										<h1 class="post-title">The Cosmic Distance Ladder</h1>
										
										<p>We went a step further in our understanding of Astronomy with a lecture delivered from Alankar Kotwal (Gold Medalist at the 6th International Olympiad on Astronomy and Astrophysics) who has also successfully completed GSoC in Laboratory for Cosmological Data Mining. </p>
										<figure>
											<img src="{{URL::asset('assets/images/2014/krittika/club_ladder.jpg')}}" alt="">
											<figcaption>An enthusiastic crowd, mostly freshmen and sophomore, attended the lecture.</figcaption>
										</figure>
										
										
										<p>He began with the general description of how big the universe is even on small scales (He gave a very nice example of comparing 1 AU with the length of the infinity corridor). He then started the basic ways in which the distance is calculated in the cosmological scale followed by introduction of the concept of Machine Learning and how it is applied in this field. All through the lecture he showed how the basic concepts in the physics we learn can be used in these mind blowing applications. He managed the content of lecture in the right way so that the audience remained enthusiastic all through the lecture.</p>
										
										<p>He ended  the lecture by briefing about his work at the GSoC this summer. The lecture was followed by a shower of questions by the audience not only regarding the Cosmic Distance Ladder but also on various other topics of astronomy. I am also attaching the <a href="{{URL::asset('media/2014/krittika/CosmicDistanceLadder.pptx')}}">presentation</a> he used for the ones who missed the event.</p>
										<p>I thank Alankar Kotwal for delivering such a wonderful lecture, the conveners of the club - Pavan, Naitik, Nitish, Vivek, Ahilan and Vishnu, and the really enthusiastic audience who came and made the event successful.</p>

										<button class="btn btn-success"><a href="{{URL::asset('media/2014/krittika/CosmicDistanceLadder.pptx')}}">Download Presentation</a></button>
									</div><!-- /.post-content -->
									
								</div><!-- /.post -->
								
								</div><!-- /.panel -->
							</div><!-- /.panel-group -->
								
								
							</div><!-- /.sidemeta -->
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</section>
			
			<!-- ============================================================= SECTION – BLOG POST : END ============================================================= -->
			
			
			<!-- ============================================================= SECTION – BLOG : END ============================================================= -->
			
			
			<!-- ============================================================= SECTION – BLOG : END ============================================================= -->

@endsection