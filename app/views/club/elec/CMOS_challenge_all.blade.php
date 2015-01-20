@extends('club.elec.layout')

@section('inner-content')

<table class="table table-bordered ">
							<thead>
								<tr>
									<th>Team Id</th>
									<th>Name</th>
									<th>Roll No</th>
									<th>Semester</th>
									<th>Program</th>
									<th>Difficulty </th>
									<th>Feedback</th>
									<th>Solution</th>
								</tr>
							</thead>
							<tbody>
								@foreach($all as $team)
								<tr>
									<td>{{$team->id}}</td>
									<td>{{$team->name}}</td>
									<td>{{$team->roll}}</td>
									<td>{{$team->semester}}</td>
									<td>{{$team->program}}</td>
									<td>{{$team->difficulty}}</td>
									<td>{{$team->feedback}}</td>
									<td><a href="{{URL::asset($team->abstract_path)}}">See Solution</a></td>
								
									
								</tr>
								@endforeach
							</tbody>
						</table>

@endsection