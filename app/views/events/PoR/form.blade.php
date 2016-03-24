@extends('events.PoR.layout')
@section('inner-content')
<?php  $closetime=strtotime("5 April 2016");
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
{{--<main>--}}
{{--<iframe id="typeform-full" width="100%" height="100%" frameborder="0" src="https://docs.google.com/forms/d/1f6q-G9FHY6svlvdi3IuBDjH3T2Hyq8nV8AqpWie0Ra0/viewform?c=0&w=1"></iframe>--}}
{{--<!-- <script type="text/javascript" src="https://s3-eu-west-1.amazonaws.com/share.typeform.com/embed.js"></script> -->--}}
{{--</main>--}}

		<!-- Change the width and height values to suit you best -->
<div class="typeform-widget" data-url="https://stab.typeform.com/to/OJyEwz" data-text="2016-17 Convener and Tech Secy" style="width:100%;height:500px;"></div>
<script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'widget.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}})()</script>
<div style="font-family: Sans-Serif;font-size: 12px;color: #999;opacity: 0.5; padding-top: 5px;">Powered by <a href="https://www.typeform.com/examples/forms/?utm_campaign=OJyEwz&amp;utm_source=typeform.com-44242-Basic&amp;utm_medium=typeform&amp;utm_content=typeform-embedded-poweredbytypeform&amp;utm_term=EN" style="color: #999" target="_blank">Typeform</a></div>
@else
<h2>Please login to fill the form.</h2>

@endif
@else
<h2>Registration Link has been closed. For any club related queries, contact respective club manager.</h2>
@endif


@endsection