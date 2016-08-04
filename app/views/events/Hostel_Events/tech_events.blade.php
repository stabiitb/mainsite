@extends('events.ITSP_2015.layout')

@section('inner-content')
    {{--@if($curtime > $closetime)--}}
        {{--@if(Auth::check())--}}
            {{--@if(Auth::User()->ldap_verified==1)--}}
                {{--<h4> Deadline for abstract submission is 10th April 2015, 11:59:59 pm.</h4>--}}
                {{--<h4> Write all the details of team members and contact details in abstract.</h4>--}}
                {{--<h4> No other format is allowed except pdf.</h4>--}}
                {{--<h4> If you are filling the form for the first time, leave the team id field blank.</h4>--}}
                {{--<h4> For changing team details and abstract, use the alloted team id, same team name and same roll number of first member.</h4>--}}
                {{--<h4> All <i class="icon-star"></i> fields are compulsory.</h4>--}}
                {{--@if (Session::get('messages') != null && Session::get('messages')->has('message'))--}}
                    {{--<div class="col-md-12">--}}
                        {{--<div class="alert alert-success alert-dismissible" role="alert">--}}
                            {{--<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>--}}
                            {{--{{ Session::get('messages')->first('message') }}--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--@endif--}}

                <div class="container">
                    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-7  col-sm-8 ">
                        <div class="panel panel-info" >
                            <div class="panel-heading">
                                <div class="panel-title centered" >Submit Abstract</div>
                                <!-- <div style="float:right; font-size: 80%; position: relative; "><a href="#">Forgot password?</a></div>  -->
                            </div>

                            <div style="padding-top:30px" class="panel-body" >

                                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                                <form action="{{route('events.ITSP_2015.auth')}}" class="form-horizontal" method="post" role="form" enctype="multipart/form-data">

                                    <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="id" value="{{Input::old('id')}}" placeholder="STAB ID">
                                    </div>

                                    <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="icon-star"></i></span>
                                        <input id="name" type="text" class="form-control" name="team_name" value="{{Input::old('team_name')}}" placeholder="Name">
                                    </div>


                                    <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="icon-star"></i></span>
                                        <input id="roll" type="text" class="form-control" name="project_name" value="{{Input::old('project_name')}}" placeholder="Event Name">
                                    </div>

                                    <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="icon-star"></i></span>
                                        <span>Choose the Hostel</span>
                                    </div>
                                    <table class="table">
                                        <div >
                                            <td><input type="radio" name="club" value="Hostel 1"></td><td>Hostel 1</td>
                                            </tr>
                                            <td><input type="radio" name="club" value="Hostel 2"></td><td>Hostel 2</td>
                                            </tr>
                                            <td><input type="radio" name="club" value="Hostel 3"></td><td>Hostel 3</td>
                                            </tr>
                                            <td><input type="radio" name="club" value="Hostel 4"></td><td>Hostel 4</td>
                                            </tr>
                                            <td><input type="radio" name="club" value="Hostel 5"></td><td>Hostel 5</td>
                                            </tr>
                                            <td><input type="radio" name="club" value="Hostel 6"></td><td>Hostel 6</td>
                                            </tr>
                                            <td><input type="radio" name="club" value="Hostel 7"></td><td>Hostel 7</td>
                                            </tr>
                                            <td><input type="radio" name="club" value="Hostel 8"></td><td>Hostel 8</td>
                                            </tr>
                                            <td><input type="radio" name="club" value="Hostel 9"></td><td>Hostel 9</td>
                                            </tr>
                                            <td><input type="radio" name="club" value="Hostel 10"></td><td>Hostel 10</td>
                                            </tr>
                                            <td><input type="radio" name="club" value="Hostel 11"></td><td>Hostel 11</td>
                                            </tr>
                                            <td><input type="radio" name="club" value="Hostel 12"></td><td>Hostel 12</td>
                                            </tr>
                                            <td><input type="radio" name="club" value="Hostel 13"></td><td>Hostel 13</td>
                                            </tr>
                                            <td><input type="radio" name="club" value="Hostel 14"></td><td>Hostel 14</td>
                                            </tr>
                                            <td><input type="radio" name="club" value="Hostel 15"></td><td>Hostel 15</td>
                                            </tr>
                                            <td><input type="radio" name="club" value="Hostel 16"></td><td>Hostel 16</td>
                                            </tr>
                                        </div>
                                    </table>

                                    <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="icon-star"></i></span>
                                        <input id="roll" type="text" class="form-control" name="youtube_video" value="{{Input::old('youtube_video')}}" placeholder="Youtube Video URL">
                                    </div>

                                    <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="icon-star"></i></span>
                                        <input id="roll" type="text" class="form-control" name="date" value="{{Input::old('youtube_video')}}" placeholder="Date">
                                    </div>

                                    <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="icon-star"></i></span>
                                        <span>Upload .zip file(Documentation pdf and Photographs)</span>
                                    </div>
                                    <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="icon-star"></i></span>
                                        <input type="file" class="form-control" name="abstract" placeholder="abstract">
                                    </div>

                            </div>
                        </div>


                        <div style="margin-top:10px" class="form-group">


                            <div class="col-sm-12 controls">
                                <input type="submit" class="btn btn-success" >

                            </div>
                        </div>
                        </form>



                    </div>
                </div>
                </div>
                </div>
            {{--@else--}}
                {{--Please activate your account. Click <a href="{{URL::Route('user.profile')}}">here</a> to enter your GPO account details.--}}
            {{--@endif--}}

        {{--@else--}}
            {{--Please Login with Facebook account to continue.--}}
        {{--@endif--}}
    {{--@else--}}
        {{--<h3>Abstract Submission Link has been Closed</h3>--}}
    {{--@endif--}}

@endsection