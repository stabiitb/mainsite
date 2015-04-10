@extends('events.ITSP_2015.layout')
@section('inner-content')
@if(Auth::check())
<form method="get" action="{{URL::route('events.ITSP_2015.final_reviews')}}">
Team Id<input name="team_id" type="text">
<input type="submit">
</form>
@if(isset($user))
	<br>
	<strong>Status :</strong> {{$user->status}}
	<br>
	<strong>Alloted Slot :</strong> {{$user->alloted_slot}}
	<br>
	<strong>Reviews:</strong> {{$user->reviews}}
@elseif(isset($review))
<br>
<strong>Review:</strong>
{{$review}}

@endif
@else
{{$error}}
@endif
@endsection