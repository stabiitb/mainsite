@extends('club.robo.layout')

@section('inner-content')
<style type="text/css">
.item-details li.time:before {
	content: "\e865";
}
</style>



<section class="light-bg" style="padding:20px;margin-bottom:20px">
	<h2>Product Development Session</h2>
	<figure>
		<div class="row">
			<div class="col-md-6">
	    		<img class="custom-img" src="{{URL::asset('assets/images/2014/robo/pds.png')}}" alt="">
			</div>
			<div class="col-md-5 col-sm-6 inner-top-xs inner-left-xs">
				<p>Robotics club is organizing a session on Product Development where different phases and approach of how to take your idea/project to product level will be explained. Do come, it will be worth attending it!</p>
				<ul class="item-details">
					<li class="time"><i class="fa fa-clock-o"></i>9:00 PM to 10:00PM</li>
					<li class="date">Wednesday, September 17, 2014</li>
					<li class="categories">LC12</li>
				</ul>
                <div>
                	<b>
                    	<a href="{{URL::asset('assets/images/Productdevelopment.pdf')}}">The slides of Product Development session<sup style="color:red">New</sup></a>
                    </b>
               </div>
         

			</div>
		</div>
	</figure>
</section>
<!-- ============================================================= SECTION – BLOG ============================================================= -->
			<section  class="light-bg" style="padding:20px">
				<h2>XLR8</h2>
				<figure>
					
					<div class="row">
						<div class="col-md-4">
	           				<img class="custom-img" src="{{URL::asset('assets/images/xlr8/xlr81.jpg')}}" alt="">
						</div>
						<div class="col-md-4">
							<img class="custom-img" src="{{URL::asset('assets/images/xlr8/xlr82.jpg')}}" alt="">
						</div>
						<div class="col-md-4">
							<img class="custom-img" src="{{URL::asset('assets/images/xlr8/xlr83.jpg')}}" alt="">
						</div>
					</div>	
					<div class="row">
						<div class="col-md-4">
							<img class="custom-img" src="{{URL::asset('assets/images/xlr8/xlr84.jpg')}}" alt="">
						</div>
						<div class="col-md-4">
							<img class="custom-img" src="{{URL::asset('assets/images/xlr8/xlr85.jpg')}}" alt="">
						</div>
						<div class="col-md-4">
							<img class="custom-img" src="{{URL::asset('assets/images/xlr8/xlr86.jpg')}}" alt="">
						</div>
					</div>
                    
                </figure>
               
               

               



               <p>XLR8 the first technical event for freshmen is organised by Robotics club on 
               23rd and 24th august. The event is biggest event for freshmen. The teams also design the CAD model of their bots with the help of their 
               mentors. There are lot of innovations made by freshmen everyt time that includes 
               using rack and pinion mechanism, making suspension using steel scales, and even 
               designing the full transmitter receiver circuit.
               </p>    
                
                
         


                <div>
                	<b>
                    	<a href="{{URL::asset('assets/images/xlr8ps.pdf')}}">The Problem Statement for XLR8 2014
                    </b>
               </div>
         
               	<div>
                		<a href="{{URL::asset('assets/images/XLR8 mech final.pdf')}}">  The Slides for the Mechanical Session conducted on 11\08\2014
                	
               	</div>
                
                <div>
                		<a href="{{URL::asset('assets/images/XLR8 Electrical session.pdf')}}">  The Slides for the Electrical Session conducted on 11\08\2014
               	</div>
                

                <div>
                		<b><a href="{{URL::Route('robotics-club')}}/xlr8-registration">CLICK HERE</a></b> to go register your team for XLR8
               	</div>

               	<div>
                		<a href="{{URL::Route('robotics-club')}}/teams-and-mentors-xlr8-2014"> Check the Teams and Mentors for XLR8 <sup style="color:red">New</sup></a>
               	</div>
               	<div>
                		<a href="{{URL::asset('media/2014/robo/Lamington Visit Handouts.docx')}}">Click to download Lamington visit Handout<sup style="color:red">New</sup></a>
               	</div>




               

         

             


			</section>
			
			
			<!-- ============================================================= SECTION – BLOG : END ============================================================= -->

@endsection