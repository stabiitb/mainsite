@extends('layout.default')
@section('script')
<script src="//d3js.org/d3.v3.min.js" charset="utf-8"></script>
@endsection
@section('content')
<main>
			
	<section  class="light-bg">
		<div class="container inner">
					
					<div class="row">
						<div class="col-md-8 col-sm-9 center-block text-center">
							<header>
								<h1>Tech GC Points</h1>
								<p>Year : 2015 - 2016</p>
							</header>
						</div><!-- /.col -->
					</div><!-- /.row -->
					<br>
					<div class="row  text-center">
						<div class="col-sm-11 col-sm-offset-1 center-block inner-left inner-right">
							<iframe src="https://docs.google.com/spreadsheets/d/1kTQ6zwYY0hiKmSi_6ZpkWm7fMBvN40-lWaQ3rAcCFZs/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false" style="width:100%; min-height:500px;"></iframe>
						</div>
					</div>
					<br>

		</div>
	</section>
			
</main>
@endsection