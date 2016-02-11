@extends('events.PoR.layout')
@section('inner-content')
<?php  $closetime=strtotime("2 April 2016"); 
		$curtime = time();
?>
@if($curtime < $closetime)
@if(Auth::check())
<style type="text/css">
	iframe{
		min-height: 600px;
	}
</style>
<main>
<iframe id="typeform-full" width="100%" height="100%" frameborder="0" src="http://goo.gl/forms/KBGXpNSN3K"></iframe>
<!-- <script type="text/javascript" src="https://s3-eu-west-1.amazonaws.com/share.typeform.com/embed.js"></script> -->
</main>
@else
<h2>Please login to fill the form.</h2>
@endif
@else
<h2>Registration Link has been closed. For any club related queries, contact respective club manager.
@endif


@endsection