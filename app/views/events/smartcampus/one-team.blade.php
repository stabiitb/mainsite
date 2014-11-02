@extends('events.smartcampus.template')

@section('inner-content')

			<h1>TEAM ID : {{$team->id}}</h1>
 

		
			<div class="row"><div class="col-md-3">Team ID : </div> <div class="col-md-9"> {{$team->id}}</div></div>
			<div class="row"><div class="col-md-3">Name : </div> <div class="col-md-9"> {{$team->name}}</div></div>
			<div class="row"><div class="col-md-3">Roll : </div> <div class="col-md-9">{{$team->roll}}</div></div>
			<div class="row"><div class="col-md-3">UG/PG : </div> <div class="col-md-9">{{$team->ug_pg}}</div></div>
			<div class="row"><div class="col-md-3">Email : </div> <div class="col-md-9"> {{$team->email}}</div></div>
			<div class="row"><div class="col-md-3">Contact : </div> <div class="col-md-9"> {{$team->contact}}</div></div>
			<div class="row"><div class="col-md-3">Hostel No/room No : </div> <div class="col-md-9"> {{$team->hno}}</div></div>
			<div class="row"><div class="col-md-3">Department: </div> <div class="col-md-9"> {{$team->dept}}</div></div>
			<div class="row"><div class="col-md-3">Skills: </div> <div class="col-md-9"> {{$team->skills}}</div></div>
			<div class="row"><div class="col-md-3">Idea: </div> <div class="col-md-9"> {{$team->idea}}</div></div>
			<div class="row"><div class="col-md-3">Statement of Purpose: </div> <div class="col-md-9"> {{$team->sop}}</div></div>
			<div class="row"><div class="col-md-3">Team Details: </div> <div class="col-md-9"> {{$team->team_detail}}</div></div>
		
<br>
<br>
<br>
<a href="{{URL::Route('logout')}}"><u>logout</u></a>
<script type="text/javascript">
	function addabstract(id){
		$("#file-"+id).click();
		console.log(id);
	}
	$('.file').on('change',function(e){
		if($(this).val()!=""){
			$(this).parent().submit();
		}
	})
</script>
@endsection