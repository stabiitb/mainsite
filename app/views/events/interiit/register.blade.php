@extends('layout.default')

@section('clubcontent')


		<!-- ============================================================= MAIN ============================================================= -->
		
		<main>
			
			<div class="container inner">
				<div class="row">
					
					<div class="col-md-12 inner-left-md">	
						<h1>Inter IIT Tech Meet Registration</h1>
						<p>Click <a href="{{URL::asset('media/2014/Inter-IIT-Tech-Meet-Events-and-rules.pdf')}}"> here </a> to see list of problems</p>
						<p><br></p>
					</div>
					
					<div class="col-md-12 inner-left-md">
						<!-- Change the width and height values to suit you best -->
				<div class="typeform-widget" data-url="https://prateekchandan.typeform.com/to/r3V9Iv" data-text="Inter IIT Tech Meet Registration" style="width:100%;height:500px;"></div>
				<script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'widget.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}})()</script>
				<div style="font-family: Sans-Serif;font-size: 12px;color: #999;opacity: 0.5; padding-top: 5px;">Powered by <a href="http://www.typeform.com/?utm_campaign=typeform_r3V9Iv&amp;utm_source=website&amp;utm_medium=typeform&amp;utm_content=typeform-embedded&amp;utm_term=English" style="color: #999" target="_blank">Typeform<a/></div>

					</div><!-- ./col -->
						
				</div><!-- /.row -->
			</div><!-- /.container -->
			
			
		</main>
		
		<!-- ============================================================= MAIN : END ============================================================= -->
		
@endsection