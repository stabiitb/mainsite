@extends('events.Hostel_Events.layout')

@section('inner-content')
    <h1>Welcome Hostel Tech Events</h1>
    <ol>
    @foreach($events as $event)

        <li><p><a href={{URL::route('events.Hostel_Events.review', [$event->id])}}>{{$event->event_name}}</a></p></li>
    @endforeach
    </ol>
@endsection