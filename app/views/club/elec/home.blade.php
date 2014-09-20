@extends('club.elec.layout')

@section('inner-content')
<section id="popular-posts" class="light-bg">
	<div id="owl-work" class="owl-carousel owl-inner-pagination owl-inner-nav post-media">

		<div class="item">
			<figure>
				<img src="{{URL::asset('assets/images/art/elec.png')}}" alt="">
			</figure>
		</div><!-- /.item -->

		<div class="item">
			<figure>
				<img src="{{URL::asset('assets/images/2014/elec/teampic.jpg')}}" alt="">
			</figure>
		</div><!-- /.item -->

		<div class="item">
			<figure>
				<img src="{{URL::asset('assets/images/2014/elec/wel1.jpg')}}" alt="">
			</figure>
		</div><!-- /.item -->
	</div>
</section>


	
<h1>Electronics Club</h1>
<p>
	Want to know a computer works, or how to design a weird circuit? Well, this is the place for you!
</p>		
<p>
	The Electronics Club is a community of electronics hobbyists and enthusiasts within IIT, Bombay. We conduct various events and sessions through out the year to bring out the techie in you. We pour in our every ounce of energy and support to satisfy your curiosity. Every comrade of this community is given exposure to basic Electronic components, Mechanical, Monetary related issues. We have a large number of seniors expert in various areas who are more than ready to sort your bug out. The newly commissioned Tinkerers' Lab provides an excellent place to experiment and try out new things. 
</p>
<p>
	Enthu about joining a Big Tech Team like Mars Society, Pratham, AUV, or Formula Student? <br>
Well, this is the place to be!

</p>
<br>
	We work in close association with other clubs including:
<ul class="circled">
<li><a href="{{URL::Route('robotics-club')}}">Robotics Club</a></li>
<li><a href="technovation.stab-iitb.org">Technovation</a></li>
</ul>
@endsection