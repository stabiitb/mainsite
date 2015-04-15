@extends('layout.default')
@section('content')
<main>
		<section class="light-bg img-bg img-bg-softer">
				<div class="container" style="padding-top:50px;padding-bottom:50px;">
					<div class="row">
						<div class="col-md-8">
							<header>
								<h2>Welcome , {{$user->name}}</h2>
								<h3>Your Stab id is {{$user->id}}</h3>
							</header>
						</div><!-- /.col -->
					</div><!-- ./row -->
				</div><!-- /.container -->
			</section>

    @if (Session::get('messages') != null && Session::get('messages')->has('message'))
       									
			<section id="error" class="light-bg">
				<div class="container inner-xs">
					<div class="row">
						<div class="col-sm-10 center-block text-center">
						    {{ Session::get('messages')->first('message') }}
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</section>    
	@else
			<section class="img-bg img-bg-softer inner">
				<div class="container" >
					<div class="row">
						<div class="col-md-12"> 
						@if($user->ldap_verified == 0)
						Verify now . Enter your GPO Id. 
							<form action="{{URL::Route('user.verify')}}" method="post">
							<input name="gpo_id" type="text" placeholder="gpo Id">
							<input type="submit" value="verify">
							</form>
						@elseif($user->facad==NULL)
							<h3>Only for students applying for ITSP</h3>
							<h3 style="color:red">Dont include @iitb.ac.in in ldap id of your facad</h3>
							<h3>Fill this form form positively by 14th Nov. This is very important for room retention</h3>
							<form action="{{URL::Route('user.update')}}" method="post">
							<input name="name" type="text" placeholder="Full Name">
							<input name="roll_no" type="text" placeholder="IITB Roll Number">
							<input name="hostel" type="text" placeholder="Hostel Allotted for the next year (Give only hostel number eg. if your hostel is 6 , write only '6')">
							<input name="dept" type="text" placeholder="Department(Please use full dept name, dont use short form like meta,chem,cse)">
							<input name="contact" type="text" placeholder="Phone Number">
							<input name="facad" type="text" placeholder="Name of Faculty Advisor (Full name of facad)">
							<h4 style="color:red">Use camp.iitb.ac.in to find the ldap id of your facad.</h4> 
							<input name="facad_ldap" type="text" placeholder="Ldap Id of Faculty Advisor (Only ldap id, do not include '@iitb.ac.in'">
							<input type="submit" value="Update Profile">
							</form>				
							<br>
							<br>
						GPO email : {{$user->ldap_email}}
						@else
						@if($user->want_room==NULL)
								<form class="form-horizontal" action="{{URL::route('events.ITSP_2015.want_room')}}" method="get">
								<table>
								<tr>
								<td>Do you want to retain your room?</td>
								</tr>
								<tr>
								<td><input name="want_room" type="radio" value="yes">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspYes</td>
								<td><input name="want_room" type="radio" value="No">No</td>
								</td>
								</tr>
								<tr>
								<td><input type="submit" value="Submit"></td>
								</tr>
								</table>
								</form>
								<br>
								<br>
						@endif
							<i><u><a href="{{URL::route('user.edit')}}"> Edit your info</a></u></i>
							<table class="table">
							<tr>
								<td>Name</td>
								<td>{{$user->name}}</td>
							</tr>	
							<tr>
								<td>Roll Number</td>
								<td>{{$user->roll_no}}</td>
							</tr>	
							<tr>
								<td>Department</td>
								<td>{{$user->department}}</td>
							</tr>	
							<tr>
								<td>Hostel</td>
								<td>{{$user->hostel}}</td>
							</tr>	
							<tr>
								<td>Email Id</td>
								<td>{{$user->email}}</td>
							</tr>	
							<tr>
								<td>GPO Id</td>
								<td>{{$user->ldap_email}}</td>
							</tr>	
							<tr>
								<td>Contact</td>
								<td>{{$user->contact}}</td>
							</tr>	
							<tr>
								<td>ITSP team Id</td>
								<td>{{$user->itsp}}</td>
							</tr>	
							<tr>
								<td>Want Room</td>
								<td>{{$user->want_room}}</td>
							</tr>								
							<tr>
								<td>Faculty Advisor</td>
								<td>{{$user->facad}}</td>
							</tr>	
							<tr>
								<td>Faculty Ldap Id</td>
								<td>{{$user->facad_ldap}}</td>
							</tr>	
							</table>
							<br>
							<br>
							@if($user->room_retained==0 && $user->want_room=='yes')
								<form action="{{URL::route('events.ITSP_2015.room_retained')}}" method="get">
								<table>
								<tr>
								<td>Have your request been approved??
								<input name="room_retained" type="checkbox" value="yes">
								</td>
								</tr>
								<tr>
								<td><input type="submit" value="My room is confirmed"></td>
								</tr>
								</table>
								</form>
							@elseif($user->room_retained==1)
							<h4>Your room has been retained</h4>
							@endif
						@endif
						</div>
					</div><!-- ./row -->
				</div><!-- /.container -->
			</section>
	@endif

</main>
@endsection