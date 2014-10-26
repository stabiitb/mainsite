@extends('layout.default')

@section('clubcontent')
<main>
			
			<div class="container inner">
				<div class="row">
			<h2>List of teams for <a href="{{URL::Route('smart-campus')}}">Smart Campus Challenge</a></h2>
 
<table class="table table-bordered table-responsive">
	<thead>
		<tr>
			<th>Sl No</th>
			<th>Name</th>
			<th>Roll</th>
			<th>Email</th>
			<th>Contact</th>
			<th>Hno/Room no</th>
			<th>Department</th>
			<th>Skills</th>
			<th>Project Idea</th>
			<th>SOP</th>
			<th>Team Details</th>
			<th>Abstract</th>
		</tr>
	</thead>
	<tbody>
		@foreach($teams as $team)
		<tr>
			<td>{{$team->id}}</td>
			<td>{{$team->name}}</td>
			<td>{{$team->roll}}</td>
			<td>{{$team->email}}</td>
			<td>{{$team->contact}}</td>
			<td>{{$team->hno}}</td>
			<td>{{$team->dept}}</td>
			<td>{{$team->skills}}</td>
			<td>{{$team->idea}}</td>
			<td>{{$team->sop}}</td>
			<td>{{$team->sop}}</td>
			<td></td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
</div>
</main>

@endsection