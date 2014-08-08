@extends('layout.default')

@section('content')
<main>
			
			<!-- ============================================================= SECTION – PORTFOLIO POST ============================================================= -->
			
			<section id="portfolio-post">
				<div class="container inner-top-md">
					
					<div class="row">
						<div class="col-md-8 col-sm-10 center-block text-center" style="">
							<header>
								<h1>LIGHTSABER</h1>
							</header>
						</div>
						<hr>
						<div class="col-sm-12">
								<div class="item text-center">
									<figure>
										<object data="{{URL::asset('media/2013/Lightsaber_Issue1.pdf')}}" type="application/pdf" style="max-width:900px;width:100%;min-height:800px">
										<p>YOur brouswer doesnt support pdf reader.  
											<a href="{{URL::asset('media/2013/Lightsaber_Issue1.pdf')}}">Click here to sownload</a>
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