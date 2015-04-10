@extends('events.ITSP_2015.layout')
@section('inner-content')
@if(Auth::check())
<form method="get" action="{{URL::route('events.ITSP_2015.final_reviews')}}">
Team Id<input name="team_id" type="text">
<input type="submit">
</form>
@if(isset($review))
<br>
<h2>Reviews</h2>
{{$review}}

@endif
@else
{{$error}}
@endif
@endsection