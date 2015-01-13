@extends('layout.default')

@section('content')
<main>
			<!-- ============================================================= SECTION – STANDARD TABS SIDE ============================================================= -->
			
			<section id="standard-tabs-side" class="border-top">
				<div class="container inner">
					
					<div class="row">
						<div class="col-md-8 col-sm-9 center-block text-center">
							<header>
								<h1>January 2015 STAB Events</h1>
								<p></p>
							</header>
						</div><!-- /.col -->
					</div><!-- ./row -->
					
					<div class="row">
						<div class="col-xs-12 inner-top">
							<div class="tabs tabs-side tab-container">
								
								<ul class="etabs">
									<li class="tab"><a href="#tab-1">Aeromodelling Club</a></li>
									<li class="tab"><a href="#tab-2">Electronics Club</a></li>
									<li class="tab"><a href="#tab-3">Krittika</a></li>
									<li class="tab"><a href="#tab-4">Maths and Physics Club</a></li>
									<li class="tab"><a href="#tab-5">Robotics Club</a></li>
									<li class="tab"><a href="#tab-6">Web and Coding Club</a></li>
								</ul><!-- /.etabs -->
								
								<div class="panel-container">
									
									<div class="tab-content" id="tab-1">
										<div class="row">
											
											<div class="col-md-6">
												<figure><img src="assets/images/art/product05.jpg" alt=""></figure>
											</div><!-- /.col -->
											
											<div class="col-md-6 inner-top-xs inner-left-xs">
												<h3>Strategy</h3>
												<p>Magnis modipsae que lib voloratati andigen daepedor quiate ut reporemni aut labor. Lorem quiae sitiorem ut restibusaes es tumquam core posae volor remped modis volor. Doloreiur qui commolu ptatemp dolupta retibusam emni volorimne consent dolor lomnus.</p>
											</div><!-- /.col -->
											
										</div><!-- /.row -->
									</div><!-- /.tab-content -->
									
									<div class="tab-content" id="tab-2">
										<div class="row">
											
											<div class="col-md-6 col-md-push-6 inner-left-xs">
												<figure><img src="assets/images/art/product01.jpg" alt=""></figure>
											</div><!-- /.col -->
											
											<div class="col-md-6 col-md-pull-6 inner-top-xs inner-right-xs">
												<h3>User Experience</h3>
												<p>Magnis modipsae que lib voloratati andigen daepedor quiate ut reporemni aut labor. Laceaque quiae sitiorem ut restibusaes es tumquam core posae volor remped modis volor. Doloreiur qui commolu ptatemp dolupta orem retibusam emnis et consent accullignis lomnus conecus iure posae volor.</p>
											</div><!-- /.col -->
											
										</div><!-- /.row -->
									</div><!-- /.tab-content -->
									
									<div class="tab-content" id="tab-3">
										<div class="row">
											
											<div class="col-lg-4 col-lg-push-4 col-md-6 inner-left-xs inner-right-xs">
												<figure><img src="assets/images/art/product06.jpg" alt=""></figure>
											</div><!-- /.col -->
											
											<div class="col-lg-4 col-lg-pull-4 col-md-6 inner-top-xs">
												<h3>Design</h3>
												<p>Magnis modipsae lib voloratati andigen daepedor quiate aut labor. Laceaque quiae sitiorem resti est lore tumquam core posae volor uso remped modis volor. Doloreiur qui commolu ptatemp dolupta orem retibusam emnis et consent it accullignis orum lomnus.</p>
											</div><!-- /.col -->
											
											<div class="col-lg-4 col-md-6 inner-top-xs">
												<h3>User interface</h3>
												<p>Magnis modipsae lib voloratati andigen daepedor quiate aut labor. Laceaque quiae sitiorem resti est lore tumquam core posae volor uso remped modis volor. Doloreiur qui commolu ptatemp dolupta orem retibusam emnis et consent it accullignis orum lomnus.</p>
											</div><!-- /.col -->
											
										</div><!-- /.row -->
									</div><!-- /.tab-content -->
									
									<div class="tab-content" id="tab-4">
										<div class="row">
											<div class="col-md-12">
												<div class="col-md-12">
													<h3>Jigyasa Inter-College Science Quiz</h3> 
													<ul class="meta">
														<li class="date"><a href="#">18th January, 2015</a></li>
													</ul>
													<p class="text-small"> Jigyasa is an annual Science Quiz organized by students of University of Mumbai - Department of Atomic Energy Centre for Excellence in Basic Sciences. It is a platform for students of undergraduate colleges in the state of Maharashtra to exhibit their aptitude for science as well as innovative thinking. Maths and Physics Club IIT Bombay is collaborating in organising first round at IIT Bombay for IIT Bombay students. For further information, log on to <a href="http://jigyasa9.wix.com/jigyasa2015">http://jigyasa9.wix.com/jigyasa2015</a></p>
												</div>

												<div class="col-md-12 inner-top-sm">
													<h3>Talk on Mathematics</h3> 
													<ul class="meta">
														<li class="date"><a href="#">29th January, 2015</a></li>
													</ul>
													<p class="text-small">Will be delivered by Shanay Shah, 5th year Electrical Engineering student. The topic of the talk is "Why cant we express roots of a general 5th degree polynomials in terms of radicals". The talk won't involve complete proof but will go through important steps involved.</p>
												</div>

												<div class="col-md-12 inner-top-sm">
													<h3>PhysX GC</h3> 
													<ul class="meta">
														<li class="date"><a href="#">31st January, 2015</a></li>
													</ul>
													<p class="text-small">Teams will have to measure a universal constant from the provided list using an experimental apparatus made by them. It will be judged by the professors subjectively with scoring on accuracy, precision, technique used and degree of sophistication.</p>
												</div>
												
											</div><!-- /.col -->

											<div class="col-md-12 inner-top-sm">
												<h4>
													Contact for all events:
												</h4>
												<ul>
													<li>Anchal Gupta (Manager): 8286005181 anchal.physics@gmail.com</li>
													<li> Dave (Convener): 9967322436 darshildave94@gmail.com</li>
													<li>Vaibhav Bhosale (Convener): 9405916175 vaibhavbhosale15@gmail.com</li>
												</ul>
												<a href="{{URL::Route('MnP')}}/team">See Club's Contact Page</a>
											</div>

										</div><!-- /.row -->
									</div><!-- /.tab-content -->
									
									<div class="tab-content" id="tab-5">
										
										<div class="row">
											<div class="col-md-8">
												<figure><img src="assets/images/art/product03.jpg" alt=""></figure>
											</div><!-- /.col -->
										</div><!-- /.row -->
										
										<div class="row">
											<div class="col-md-8 inner-top-xs">
												<h3>Social</h3>
												<p>Magnis modipsae que lib voloratati andigen daepedor quiate ut reporemni aut labor. Laceaque sitiorem ut restibusaes es tumquam core posae volor remped modis volor. Doloreiur qui commolu ptatemp dolupta orem retibusam emnis et consent accullignis lomnus.</p>
											</div><!-- /.col -->
										</div><!-- /.row -->
										
									</div><!-- /.tab-content -->
									
									<div class="tab-content" id="tab-6">
										
										<div class="row">
											<div class="col-md-8">
												<h3>Marketing</h3>
												<p>Magnis modipsae que lib voloratati andigen daepedor quiate ut reporemni aut labor. Laceaque sitiorem ut restibusaes es tumquam core posae volor remped modis volor. Doloreiur qui commolu ptatemp dolupta orem retibusam emnis et consent accullignis lomnus.</p>
											</div><!-- /.col -->
										</div><!-- /.row -->
										
										<div class="row">
											<div class="col-md-8 inner-top-xs">
												<figure><img src="assets/images/art/humans01.jpg" alt=""></figure>
											</div><!-- /.col -->
										</div><!-- /.row -->
										
									</div><!-- /.tab-content -->
									 
								</div><!-- /.panel-container -->
								 
							</div><!-- /.tabs -->
						</div><!-- /.col -->
					</div><!-- /.row -->
					
				</div><!-- /.container -->
			</section>
			
			<!-- ============================================================= SECTION – STANDARD TABS SIDE : END ============================================================= -->
	</main>
@endsection