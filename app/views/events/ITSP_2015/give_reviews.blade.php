@extends('events.ITSP_2015.layout')
@section('inner-content')
@if(Auth::check())

	@if(Auth::User()->admin==1)
 		@if (Session::get('messages') != null && Session::get('messages')->has('message'))
        <div class="col-md-12">
            <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            {{ Session::get('messages')->first('message') }}
            </div>
        </div>
    	@endif
    <h4>Id is different from User_id or team_id. It is the first field in the the abstract table.</h4>	
	<form method="post" id="review_form" action="{{URL::route('events.ITSP_2015.take_reviews')}}">
	Id<input type="text" name="team_id" >
	Status
	<table class="table">
	<tr>
		<td>Rejected</td>
		<td><input type="radio" name="status" value="Rejected" ></td>
	</tr>
	<tr>
		<td>Selected</td>
		<td><input type="radio" name="status" value="Selected" ></td>
	</tr>
	<tr>
		<td>Review and Resubmit</td>
		<td><input type="radio" name="status" value="Review and Resubmit" ></td>
	</tr>	
	</table>
	Alloted Slot
	<table class="table">
	<tr>
	<td>Slot 1</td>
	<td><input type="radio" name="alloted_slot" value="1" ></td>
	<td>Slot 2</td>
	<td><input type="radio" name="alloted_slot" value="2" ></td>
	</tr>
	</table>
	Review<textarea  name="review" form="review_form" rows="4"></textarea>
	<input type="submit">
	</form>
	@else
		<h3>You dont have required permissions.</h3>
	@endif
@else
	<h3>Login to continue</h3>
@endif	


@endsection