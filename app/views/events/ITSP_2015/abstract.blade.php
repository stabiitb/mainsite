@extends('events.ITSP_2015.layout')

@section('inner-content')
<?php
     date_default_timezone_set('Asia/Kolkata');
     $closetime=strtotime("2015:04:10 23:59:59 "); 
     $curtime = time();
     //echo $closetime."  ".$curtime."\n";
?>
@if($curtime > $closetime)
    @if(Auth::check())
        @if(Auth::User()->ldap_verified==1)
    <h4> Deadline for abstract submission is 10th April 2015, 11:59:59 pm.</h4>     
	<h4> Write all the details of team members and contact details in abstract.</h4>
    <h4> No other format is allowed except pdf.</h4>
    <h4> If you are filling the form for the first time, leave the team id field blank.</h4>
    <h4> For changing team details and abstract, use the alloted team id, same team name and same roll number of first member.</h4>
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
                            
                        <form action="{{route('events.ITSP_2015.auth')}}" class="form-horizontal" method="post" role="form" enctype="multipart/form-data">

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="id" value="{{Input::old('id')}}" placeholder="Team Id. (Leave blank if you are filling it for first time)">                                        
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
                                        <td><input type="radio" name="club" value="Technovation"></td><td>Technovation</td>
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
                                        <td><input type="radio" name="club" value="Tech GSR"></td><td>Tech GSR</td>
                                </tr>                                                     
                            </table>   

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="icon-star"></i></span>
                                        <span>Slot</span>
                            </div>
                            <table class="table">
                                <div>
                                        <td><input type="radio" name="slot" value="1"></td><td>Slot 1 (5th May - 16th June)</td>
                                </tr>
                                <tr>
                                        <td><input type="radio" name="slot" value="2"></td><td>Slot 2 (18th May - 28th June)</td>
                                </tr>
                                </div>
                            </table>

              				 <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="icon-star"></i></span>
                                        <input type="text" class="form-control" name="t1_name" value="{{Input::old('t1_name')}}" placeholder="Member 1 Name">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="icon-star"></i></span>
                                        <input type="text" class="form-control" name="t1_roll" value="{{Input::old('t1_roll')}}" placeholder="Member 1 Roll Number">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="icon-star"></i></span>
                                        <input type="text" class="form-control" name="t1_email" value="{{Input::old('t1_email')}}" placeholder="Member 1 Email">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="icon-star"></i></span>
                                        <input type="text" class="form-control" name="t1_contact" value="{{Input::old('t1_contact')}}" placeholder="Member 1 Contact">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="icon-star"></i></span>
                                        <input type="text" class="form-control" name="t1_dept" value="{{Input::old('t1_dept')}}" placeholder="Member 1 Department">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="icon-star"></i></span>
                                        <input type="text" class="form-control" name="t1_hostel" value="{{Input::old('t1_hostel')}}" placeholder="Member 1 Hostel">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t2_name" value="{{Input::old('t2_name')}}" placeholder="Member 2 Name">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t2_roll" value="{{Input::old('t2_roll')}}" placeholder="Member 2 Roll Number">                                        
                             </div>


                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t2_email" value="{{Input::old('t2_email')}}" placeholder="Member 2 Email">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t2_contact" value="{{Input::old('t2_contact')}}" placeholder="Member 2 Contact">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t2_dept" value="{{Input::old('t2_dept')}}" placeholder="Member 2 Department">                                        
                             </div>


                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t2_hostel" value="{{Input::old('t2_hostel')}}" placeholder="Member 2 Hostel">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t3_name" value="{{Input::old('t3_name')}}" placeholder="Member 3 Name">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t3_roll" value="{{Input::old('t3_roll')}}" placeholder="Member 3 Roll Number">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t3_email" value="{{Input::old('t3_email')}}" placeholder="Member 3 Email">                                        
                             </div>


                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t3_contact" value="{{Input::old('t3_contact')}}" placeholder="Member 3 Contact">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t3_dept" value="{{Input::old('t3_dept')}}" placeholder="Member 3 Department">                                        
                             </div>


                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t3_hostel" value="{{Input::old('t3_hostel')}}" placeholder="Member 3 Hostel">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t4_name" value="{{Input::old('t4_name')}}" placeholder="Member 4 Name">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t4_roll" value="{{Input::old('t4_roll')}}" placeholder="Member 4 Roll Number">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t4_email" value="{{Input::old('t4_email')}}" placeholder="Member 4 Email">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t4_contact" value="{{Input::old('t4_contact')}}" placeholder="Member 4 Contact">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t4_dept" value="{{Input::old('t4_dept')}}" placeholder="Member 4 Department">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t4_hostel" value="{{Input::old('t4_hostel')}}" placeholder="Member 4 Hostel">                                        
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