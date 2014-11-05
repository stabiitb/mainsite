@extends('layout.default')

@section('clubcontent')


		<!-- ============================================================= MAIN ============================================================= -->
		
		<main>
			
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<a href="{{$url}}" class="btn btn-lg">Click here to Download This in Excel Sheet</a>
					</div>
				</div><!-- /.row -->
				<div class="row">
					<div class="col-md-12" style="max-height:600px;overflow:auto">
						<table class="table table-bordered ">
							<thead>
								<tr>
									<th>Team Id</th>
									<th>Name</th>
									<th>Roll No</th>
									<th>Hostel No / Room</th>
									<th>Year and (UG/PG) </th>
									<th>Department </th>
									<th>Contact</th>
									<th>Skills</th>
									<th>Project Idea</th>
									<th>SOP</th>
									<th>Team Details</th>
									<!--th>Abstract</th-->
								</tr>
							</thead>
							<tbody>
								@foreach($teams as $team)
								<tr>
									<td>{{$team->id}}</td>
									<td>{{$team->name}}</td>
									<td>{{$team->roll}}</td>
									<td>{{$team->hno}}</td>
									<td>{{$team->year}} , {{$team->ug_pg}}</td>
									<td>{{$team->dept}}</td>
									<td>{{$team->contact}}</td>
									<td>{{$team->skills}}</td>
									<td>{{$team->idea}}</td>
									<td>{{$team->sop}}</td>
									<td>{{$team->team_detail}}</td>
								
									{{--
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
									--}}
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div><!-- /.row -->
			</div><!-- /.container -->
			
			
		</main>
		
		<!-- ============================================================= MAIN : END ============================================================= -->
		
@endsection