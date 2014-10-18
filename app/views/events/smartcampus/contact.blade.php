@extends('events.smartcampus.template')

@section('inner-content')

					<div class="row">
						<div class="col-md-8 col-sm-10 center-block">
							<header>
								<h2>Contacts:</h2>
							</header>
						</div><!-- /.col -->
					</div><!-- /.row -->
					<hr>
					<div class="row  text-center">
						<div class="col-sm-6 inner-left inner-right">
							<figure class="member">
								<div class="icn-link">
									<span class="icn-more"></span><img src="{{URL::asset('assets/images/2014/chetan.jpg')}}" class="img-circle">
								</div><!-- /.icon-overlay -->
								
								<figcaption>
									<h2>
										Chetan
										<span><i class="icon-phone"></i>9167469004</span>
										<span><i class="icon-mail">chetan.agrawal39@gmail.com</i></span>
									</h2>
								</figcaption>
								
							</figure>
						</div><!-- /.col -->
						<div class="col-sm-6 inner-left inner-right">
							<figure class="member">
								<div class="icn-link">
									<span class="icn-more"></span><img src="{{URL::asset('assets/images/2014/ankita.png')}}" class="img-circle">
								</div><!-- /.icon-overlay -->
								<figcaption>
									<h2>
										Ankita
										<span><i class="icon-phone"></i> 9773619340</span>
										<span><i class="icon-mail">aesha.ajp@gmail.com</i></span>
									</h2>
								</figcaption>	
							</figure>
						</div><!-- /.col -->
					</div><!-- /.row -->

					<div class="row  text-center">
						<div class="col-sm-6  col-sm-offset-3 inner-left inner-right">
							<figure class="member">
								
								<figcaption>
									<h2>
										Rythima Shinde
										<span><i class="icon-mail">rhythimashinde@gmail.com</i></span>
									</h2>
								</figcaption>	
							</figure>
						</div><!-- /.col -->
					</div><!-- /.row -->
					

@endsection