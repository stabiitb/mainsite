@extends('layout.default')

@section('clubcontent')
<main>
			
			<div class="container inner">
				<div class="row">
			<h2>List of teams for <a href="{{URL::Route('smart-campus')}}">Smart Campus Challenge</a></h2>
 
<table class="table table-bordered table-responsive">
	<thead>
		<tr>
			<th>Team Id</th>
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
			<td>
				@if($team->abstract_path!="")
					<a href="{{URL::asset($team->abstract_path)}}">see abstract</a><br>
					
					<button  class="btn btn-small" onclick="addabstract({{$team->id}})">edit</button>
				@else
					<button class="btn btn-small" onclick="addabstract({{$team->id}})">Add Abstract</button>
				@endif
				<form method="post" id="abs-{{$team->id}}" enctype="multipart/form-data">
						<input type="hidden" value="{{$team->id}}" name="id">
						<input style="display:none" name="abstract" type="file" class="file" id="file-{{$team->id}}">
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
</div>
</main>
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