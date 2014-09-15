@extends('layout.default')

@section('content')
<main>
			<!-- ============================================================= SECTION – PORTFOLIO POST ============================================================= -->
			
			<section id="portfolio-post">
				<div class="container inner-top-md">
					
					<!--div class="row">
						<div class="col-sm-12">
							<div id="owl-work" class="owl-carousel owl-inner-pagination owl-outer-nav owl-ui-lg">
								
								<div class="item">
									<figure>
										<img src="assets/images/art/work08-lg.jpg" alt="">
									</figure>
								</div>
								
								<div class="item">
									<figure>
										<img src="assets/images/art/work08a-lg.jpg" alt="">
									</figure>
								</div>
								
								<div class="item">
									<figure>
										<img src="assets/images/art/work08b-lg.jpg" alt="">
									</figure>
								</div>
								
								<div class="item">
									<figure>
										<img src="assets/images/art/work08c-lg.jpg" alt="">
									</figure>
								</div>
								
								<div class="item">
									<figure>
										<img src="assets/images/art/work08d-lg.jpg" alt="">
									</figure>
								</div>
								
							</div>
						</div>
					</div><!-- /.row -->
					
					<div class="row">
						
						<div class="col-sm-7 inner-top-xs inner-right-xs">
							<header>
								<h2>Tech & RnD Exposition  2014</h2>
							</header>
								<p class="text-normal">Students' Technical Activities Body, IITB, takes great pleasure in inviting you to the inaugural edition of 'Tech & RnD Exposition' aimed at showcasing
								student participation in technical and research efforts in the institute.  </p>
 
								<p>The Visions for Tech & RnD Exposition 2014 are</p>
								<ul class="circled">
									<li>
									To <b>bridge the gap</b> between student community, professional research and industries
									</li>
									<li>
										To provide <b>an informal environment</b> for free flow of ideas and dialogue
									</li>
									<li>
										To <b>create a stage</b> to display student works, both for appreciation and constructive feedback. 
									</li>
									<li>
										To <b>applaud success</b>, set precedents and provide encouragement to aspiring technologists. 
									</li>
								</ul>
							<p>
								 We would want to improve the quality and impact of technical activities in IITB to a further extent, by bringing student-projects face to face with the expectations of the industry. Also, the exposition, without doubt will prove to be a fertile ground for collaborations and exchange of ideas. We strongly believe that the presence of your organization in the event would be a great impetus to our efforts in furthering the vision. 
							</p>
							<p>
								The major events planned for the exposition include:<br>
								<ul class="circled">
									<li>
										Exhibition of <b>more than 70 student projects</b> completed in the last summer
									</li>
									<li>
										<b>Research Symposium</b> on recent involvements of students in research groups at IITB and other well-known universities around the world	
									</li>
									<li>
										<b>Project display by Technical</b> teams in the institute which have won competitions of international repute multiple times and talks by professors across all departments on diverse subjects
									</li>
								</ul>
							</p>
							<br>
						</div><!-- /.col -->
						
						<div class="col-sm-4 col-sm-offset-1 outer-top-xs inner-left-xs border-left">
							<ul class="item-details">
								<li class="date">Sunday, August  24, 2014</li>
								<li class="categories">IIT Bombay</li>
							</ul><!-- /.item-details -->
							<div class="btn-wrapper">
								<a href="{{URL::Route('expo.register')}}" class="btn btn-large btn-green">Register your team</a>
							</div>
							<div class="btn-wrapper">
								<a href="{{URL::Route('expo.all')}}" class="btn btn-large btn-navy">See all teams</a>
							</div>
						</div><!-- /.col -->
						
					</div><!-- /.row -->
					
				</div><!-- /.container -->
				
			</section>
			
			<!-- ============================================================= SECTION – PORTFOLIO POST : END ============================================================= -->
			
			
</main>
@endsection