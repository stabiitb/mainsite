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
	<form method="post" id="review_form" action="{{URL::route('events.ITSP_2015.take_reviews')}}">
	Team Id<input type="text" name="team_id" >
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