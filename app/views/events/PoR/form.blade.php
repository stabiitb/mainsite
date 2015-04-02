@extends('events.PoR.layout')
@section('inner-content')
<?php  $closetime=strtotime("2 April 2015"); 
		$curtime = time();
?>
@if($curtime < $closetime)
<style type="text/css">
	iframe{
		min-height: 600px;
	}
</style>
<main>
<iframe id="typeform-full" width="100%" height="100%" frameborder="0" src="https://stab.typeform.com/to/Ft7BMT"></iframe>
<script type="text/javascript" src="https://s3-eu-west-1.amazonaws.com/share.typeform.com/embed.js"></script>
</main>
@else
<h2>Registration Link has been closed. For any club related queries, contact respective club manager.
@endif


@endsection