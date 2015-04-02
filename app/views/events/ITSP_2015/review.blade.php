@extends('events.ITSP_2015.layout')
@section('inner-content')
	<form action="review_update" method="post">
	@for($users as $user)
		<div class="row">
			<div class="col-md-2">{{$user->team_name}}</div>
			<div class="col-md-2">{{$user->project_name}}</div>
			<div class="col-md-2">{{$user->project_desc}}</div>
			<div class="col-md-2"><a href="{{$user->project_desc}}">Abstract</a></div>
			<input type="text" name=""
			<input type="checkbox" name="reviewed" value="{{$user->id}}" >

	@endfor	

@endsection