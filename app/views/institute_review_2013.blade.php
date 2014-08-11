@extends('layout.default')

@section('content')
<main>
			
			<!-- ============================================================= SECTION – PORTFOLIO POST ============================================================= -->
			
			<section id="portfolio-post">
				<div class="container inner-top-md">
					
					<div class="row">
						<div class="col-md-10 col-sm-10 center-block text-center" style="">
							<header>
								<h1>InstiReview , HobbyClubs &amp; TechTeams</h1>
							</header>
						</div>
						<hr>
						<div class="col-sm-12">
								<div class="item">
									<figure>
										<object data="{{URL::asset('media/2014/InstiReview_HobbyClubs&TechTeams.pdf')}}" type="application/pdf" style="width:100%;min-height:800px">
										<p>YOur brouswer doesnt support pdf reader.  
										<a href="{{URL::asset('media/2014/InstiReview_HobbyClubs&TechTeams.pdf')}}">Click here to sownload</a>
										</p>
									</object>
									</figure>
								</div><!-- /.item -->
								
						</div><!-- /.col -->
					</div><!-- /.row -->
					
					
				</div><!-- /.container -->
				
			</section>
			
			<!-- ============================================================= SECTION – PORTFOLIO POST : END ============================================================= -->
			
</main>
@endsection