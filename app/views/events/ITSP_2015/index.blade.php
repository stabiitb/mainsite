@extends('events.ITSP_2015.layout')
@section('inner-content')
	<h1>Welcome to ITSP 2015</h1>
	<!-- <h3>Abstract Submission link is <a href="{{URL::route('events.ITSP_2015.abstract')}}">here</a>.</h3> -->

	<br>
	<h3 class="text-center"><a href="{{URL::route('events.ITSP_2015.projects')}}" class="btn">Browse ITSP 2015 Projects</a></h3>
	<!-- <h3>For registration, click <a href="{{URL::Route('events.ITSP_2015.form')}}" class="btn">here</a></h3>
	<ul>
		<li class="single-block">1) If your idea is selected, you need not worry about room retention, money, anything at all. <br>
								 2) You need not necessarily have a team while registering now.<br>
								 3) We'll soon have multiple brainstorming sessions, do attend.<br>
								 4) Abstract submission deadline will soon be announced.<br>
								 For further queries join the <a href="https://www.facebook.com/groups/1566380240276628/"><b>ITSP FB group</b></a>.</li>
	</ul> -->
	<br>
	
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<iframe  width="500" height="270" src="https://www.youtube.com/embed/YcB_bDiuAwo" frameborder="0" allowfullscreen></iframe>
			<h3 class="text-center">ITSP Trailer</h3>		
		</div>
		<div class="col-md-2"></div>
	</div>
@endsection