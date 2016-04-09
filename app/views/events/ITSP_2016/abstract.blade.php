@extends('events.ITSP_2016.layout')

@section('inner-content')
<?php
     date_default_timezone_set('Asia/Kolkata');
     $closetime=\Carbon\Carbon::create(2016,4, 10, 06, 59, 59);
     $curtime = \Carbon\Carbon::now();
//     echo $closetime."  ".$curtime."\n";
?>
@if($curtime < $closetime)
    @if(Auth::check())
     @if(Auth::User()->ldap_verified==1)
    <h4> Deadline for First Abstract Submission is 9th April 2016, 23:59:59 pm.</h4>

    <h4> Then you must create a stab id and fill up all the details asked. Faculty advisor's ldap will be required for room retention purposes.
        Your StabId can be found under profile.</h4>
    <h4> Team Member 1 will be the team leader.
        The team leader is the only one who can fill this form, ie Member 1 should be the one who is logged in.</h4>
    <h4> One member can only be a part of one team.</h4>

    {{--<h4> No other format is allowed except pdf.</h4>--}}
    <h4>
        You need to have your abstract on a google docs and share it with commenting rights.
        To do so, Open the google docs, click on share, click on get sharable link, and choose
        anybody with the link can comment. This way we can directly comment on your abstract.
    </h4>

    <h4> If you are filling the form for the first time, leave the team id field blank.</h4>
    <h4> For changing team details and abstract, use the alloted team id, same team name and same Stab ID of first member.</h4>
	<h4> All <i class="icon-star"></i> fields are compulsory.</h4>
    @if (Session::get('messages') != null && Session::get('messages')->has('message'))
        <div class="col-md-12">
            <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            {{ Session::get('messages')->first('message') }}
            </div>
        </div>
    @endif
    
    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-7  col-sm-8 ">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title centered" >Submit Abstract</div>
                       <!-- <div style="float:right; font-size: 80%; position: relative; "><a href="#">Forgot password?</a></div>  -->
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form action="{{route('events.ITSP_2016.auth')}}" class="form-horizontal" method="post" role="form" enctype="multipart/form-data">

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="team_id" value="{{Input::old('team_id')}}" placeholder="Team Id. (Leave blank if you are filling it for first time)">
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="icon-star"></i></span>
                                        <input id="name" type="text" class="form-control" name="team_name" value="{{Input::old('team_name')}}" placeholder="Team Name">                                        
                             </div>


                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="icon-star"></i></span>
                                        <input id="roll" type="text" class="form-control" name="project_name" value="{{Input::old('project_name')}}" placeholder="Project Name">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="icon-star"></i></span>
                                        <span>Choose the Club</span>
                            </div>
                            <table class="table">
                                <div >
                                        <td><input type="radio" name="club" value="WnCC"></td><td>WnCC</td>
                                </tr>
                                <tr>
                                        <td><input type="radio" name="club" value="Maths and Physics"></td><td>Maths and Physics</td>
                                </tr>
                                <tr>
                                        <td><input type="radio" name="club" value="Electronics Club"></td><td>Electronics Club</td>
                                </tr>
                                <tr>
                                        <td><input type="radio" name="club" value="Robotics Club"></td><td>Robotics Club</td>
                                </tr>
                                <tr>
                                        <td><input type="radio" name="club" value="Krittika Club"></td><td>Krittika Club</td>
                                </tr>
                                <tr>
                                        <td><input type="radio" name="club" value="Aeromodelling Club"></td><td>Aeromodelling Club</td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="club" value="BioTech Club"></td><td>Bio Tech Club</td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="club" value="Energy Club"></td><td>Energy Club</td>
                                </tr>
                                    </div>

                            </table>

              				 <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="icon-star"></i></span>
                                        <input type="text" class="form-control" name="t1_stabid" value="{{Input::old('t1_id')}}" placeholder="Member 1 ID">
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t2_stabid" value="{{Input::old('t2_id')}}" placeholder="Member 2 ID">
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t3_stabid" value="{{Input::old('t3_id')}}" placeholder="Member 3 ID">
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t4_stabid" value="{{Input::old('t4_id')}}" placeholder="Member 4 ID">
                             </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="icon-star"></i></span>
                                <input type="text" class="form-control" name="abs_link" value="{{Input::old('abs_gdocs_link')}}" placeholder="Abstract Link">
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

    @else
        Please activate your account. Click <a href="{{URL::Route('user.profile')}}">here</a> to enter your GPO account details.
    @endif

    @else
        Please Login with Facebook account to continue.
    @endif  
@else
    <h3>Abstract Submission Link has been Closed</h3>
@endif    
  	
@endsection