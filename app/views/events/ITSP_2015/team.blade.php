@extends('layout.default')
@section('content')
<main>
		<section class="light-bg img-bg img-bg-softer">
				<div class="container" style="padding-top:50px;padding-bottom:50px;">
					<div class="row">
						<div class="col-md-8">
							<header>
								<h2>Welcome </h2>
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
						@if($user1->itsp==NULL)
						<h3>Enter your team id to register your team</h3>
							<form action="{{URL::Route('events.ITSP_2015.team_verify')}}" method="get">
							<input name="team_id" type="text" placeholder="Team Id">
							<input type="submit" value="Submit">
							</form>
						@else
						<h4>Team Id : {{$team->id}}</h4>
						<h4>Team Name : {{$team->team_name}}</h4>
						<h4>Project Name : {{$team->project_name}}</h4>
						<h4>Club : {{$team->club}}</h4>
						<h4>Alloted Slot : {{$team->alloted_slot}}</h4>
						<h4>Status : {{$team->status}}</h4>
						<h4>Abstract <u><i><a href="{{$team->abstract}}">here</a></i></u></h4>
						<br>
						@if($team->completed==NULL)
						<h4 style="color:blue">Enter details of other team members to add them to the team</h4>
						<h4 style="color:blue">You can add team members only once, so first confirm about all the Members Stab IDs.</h4>
						<form action="{{URL::Route('events.ITSP_2015.team_update')}}" method="get">
							
							<input name="number" type="text" placeholder="Total Members in team (Max 4 Allowed)">
							Id of team member 1 : {{$user1->id}}<br>
							<input name="id2" type="text" placeholder="Stab Id of member 2">
							<input name="id3" type="text" placeholder="Stab Id of member 3">
							<input name="id4" type="text" placeholder="Stab Id of member 4">
							@if($user1->id==213)
							<input name="id5" type="text" placeholder="Stab Id of member 5 (especially for your team)">
							@endif
							<input type="submit" value="Submit">
							</form>
						@else

						<a href="{{URL::route('events.ITSP_2015.edit_team')}}"><u><i>Refresh the team and again add all team members</i></u></a>
						<h2 align="center">Team Details</h2>
						<table class="table">
							<tr>
								<th></th>
								<th>Team Member 1</th>
								@if(isset($user2))<th>Team Member 2</th>@endif
								@if(isset($user3))<th>Team Member 3</th>@endif
								@if(isset($user4))<th>Team Member 4</th>@endif
								@if(isset($user5))<th>Team Member 5</th>@endif
							</tr>
							<tr>
								<td><b>Name</b></td>
								<td>{{$user1->name}}</td>
								@if(isset($user2))<td>{{$user2->name}}</td>@endif
								@if(isset($user3))<td>{{$user3->name}}</td>@endif
								@if(isset($user4))<td>{{$user4->name}}</td>@endif
								@if(isset($user5))<td>{{$user5->name}}</td>@endif
							</tr>
						</table>
						@endif

						@endif
						</div>
					</div><!-- ./row -->
				</div><!-- /.container -->
			</section>

	@endif

</main>
@endsection