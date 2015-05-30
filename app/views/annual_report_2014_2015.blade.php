@extends('layout.default')

@section('content')
<main>
			
			<!-- ============================================================= SECTION – PORTFOLIO POST ============================================================= -->
			
			<section id="portfolio-post">
				<div class="container inner-top-md">
					
					<div class="row">
						<div class="col-md-10 col-sm-10 center-block text-center" style="">
							<header>
								<h1>Annual Report 2014 - 2015</h1>
							</header>
						</div>
						<hr>
						<div class="col-sm-6 col-sm-offset-3  inner-bottom inner-left-sm inner-right-sm">
									<h3 class="sidelines text-center"><span>Club Wise Report</span></h3>
									<ul class="circled">
										<li><a href="{{asset('media/2014/annual_report/Aero_Annual_report_2014_2015.pdf')}}" target="blank">Aeromodelling Club</a></li>
										<li><a href="{{asset('media/2014/annual_report/Elec_Annual_report_2014_2015.pdf')}}" target="blank">Electronics Club</a></li>
										<li><a href="{{asset('media/2014/annual_report/Krittika_Annual_report_2014_2015.pdf')}}" target="blank">Krittika (Astronomy Club)</a></li>
										<li><a href="{{asset('media/2014/annual_report/MnP_Annual_report_2014_2015.pdf')}}" target="blank">Maths and Physics Club</a></li>
										<li><a href="{{asset('media/2014/annual_report/Robotics_Annual_report_2014_2015.pdf')}}" target="blank">Robotics Club</a></li>
										<li><a href="{{asset('media/2014/annual_report/WnCC_Annual_report_2014_2015.pdf')}}" target="blank">Web and Coding Club</a></li>
										<li><a href="{{asset('media/2014/annual_report/Technovation_Annual_report_2014_2015.pdf')}}" target="blank">Technovation</a></li>
										<li><a href="{{asset('media/2014/annual_report/TL_Annual_report_2014_2015.pdf')}}" target="blank">Tinkerer's Lab</a></li>
									</ul><!-- /.circled -->
						</div><!-- /.col -->
								
					</div><!-- /.row -->
					
					
				</div><!-- /.container -->
				
			</section>
			
			<!-- ============================================================= SECTION – PORTFOLIO POST : END ============================================================= -->
			
</main>
@endsection