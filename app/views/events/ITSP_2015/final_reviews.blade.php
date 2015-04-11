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

<br>
<br>
    @if (Session::get('messages') != null && Session::get('messages')->has('message'))
        <div class="col-md-12">
            <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            {{ Session::get('messages')->first('message') }}
            </div>
        </div>
    @endif
<h4>If you want to resubmit your abstract, fill this form with your team id and the new abstract and <i> inform the respective Club manager</i>.</h4>
<form method="post" action="{{URL::route('events.ITSP_2015.resubmit_abstract')}}" enctype="multipart/form-data">
<input name='id' type='text'>
<input name='abs' type='file'>
<input type="submit">
</form>
@else
{{$error}}
@endif
@endsection