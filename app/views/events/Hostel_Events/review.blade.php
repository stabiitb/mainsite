@extends('events.Hostel_Events.layout')

@section('inner-content')
    <h1>Welcome Hostel Tech Events</h1>

        @for ($i = 1; $i < 7; $i++)
            <p>{{$data[$i]}}</p>
        @endfor

    <form action="{{route('events.Hostel_Events.rev_form', array($data[0]))}}" id="rev_form" class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
        <div style="margin-bottom: 25px" class="input-group">
            <span class="input-group-addon"><i class="icon-star"></i></span>
            <input id="name" type="text" class="form-control" name="status" value="{{Input::old('status')}}" placeholder="Status">
        </div>
        <div style="margin-bottom: 25px" class="input-group">
            <span class="input-group-addon"><i class="icon-star"></i></span>
            <input id="name" type="text" class="form-control" name="review" value="{{Input::old('review')}}" placeholder="Review">
        </div>
        <div style="margin-top:10px" class="form-group">


            <div class="col-sm-12 controls">
                <input type="submit" class="btn btn-success" >

            </div>
        </div>
    </form>



@endsection