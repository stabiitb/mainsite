@extends('club.robo.layout')

@section('inner-content')
<style type="text/css">
.item-details li.time:before {
	content: "\e865";
}
</style>
<figure>
	<img src="{{URL::asset('assets/images/2014/robo/DARPA.png')}}" alt="">
</figure>
<p> Source : <a href="http://www.livescience.com/40450-coolest-darpa-projects.html">http://www.livescience.com/40450-coolest-darpa-projects.html</a></p>

<p>
To know more about Darpa and their works:- 
<ul class="circled"> 
	<li><a href="http://www.darpa.mil/our_work/">http://www.darpa.mil/our_work/</a></li>
	<li><a href="http://www.businessinsider.com/darpa-military-projects-that-will-change-your-life-2012-7?op=1">http://www.businessinsider.com/darpa-military-projects-that-will-change-your-life-2012-7?op=1</a></li>
	<li><a href="http://www.extremetech.com/extreme/105117-inventing-our-world-darpas-top-inventions/2">http://www.extremetech.com/extreme/105117-inventing-our-world-darpas-top-inventions/2</a></li>
	<li><a href="http://en.wikipedia.org/wiki/DARPA">http://en.wikipedia.org/wiki/DARPA</a></li>
	<li><a href="http://transmissionsmedia.com/10-brilliant-darpa-inventions/">http://transmissionsmedia.com/10-brilliant-darpa-inventions</a></li>
</ul>
</p>

<p>Link to Robotics Challenge by Darpa:- <a href="http://www.theroboticschallenge.org">http://www.theroboticschallenge.org</a></p>
@endsection