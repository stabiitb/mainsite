@extends('events.PoR.layout')
@section('inner-content')
<?php  $closetime=strtotime("9 April 2016");
		$curtime = time();
?>
@if($curtime < $closetime)
{{--@if(Auth::check())--}}
@if(true)
<style type="text/css">
	iframe{
		min-height: 600px;
	}
</style>
<iframe src="https://docs.google.com/forms/d/1qB1lrEfksfPYlyw43udepjiaNrtJz8uD6RPgPEu4k-Y/viewform?embedded=true" width="760" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>

@else
<h2>Please login to fill the form.</h2>

@endif
@else
<h2>Registration Link has been closed. For any club related queries, contact respective club manager.</h2>
@endif


@endsection