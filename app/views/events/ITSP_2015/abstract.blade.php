@extends('events.ITSP_2015.layout')

@section('inner-content')

	<h4> Write all the details of team members and contact details in abstract.</h4>
	<h4> No other format is allowed except pdf.</h4>
	<h4> All fields of member 1 and starting 4 fields are compulsory.</h4>
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
                                        <input id="name" type="text" class="form-control" name="team_name" value="" placeholder="Team Name">                                        
                             </div>


                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="roll" type="text" class="form-control" name="project_name" value="" placeholder="Project Name">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
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
                            </table>   

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <span>Slot</span>
                            </div>
                            <table class="table">
                                <div>
                                        <td><input type="radio" name="slot" value="May"></td><td>May</td>
                                </tr>
                                <tr>
                                        <td><input type="radio" name="slot" value="June"></td><td>June</td>
                                </tr>
                                </div>
                            </table>

              				 <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t1_name" value="" placeholder="Member 1 Name">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t1_roll" value="" placeholder="Member 1 Roll Number">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t1_email" value="" placeholder="Member 1 Email">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t1_contact" value="" placeholder="Member 1 Contact">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t1_hostel" value="" placeholder="Member 1 Hostel">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t2_name" value="" placeholder="Member 2 Name">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t2_roll" value="" placeholder="Member 2 Roll Number">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t2_email" value="" placeholder="Member 2 Email">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t2_contact" value="" placeholder="Member 2 Contact">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t2_hostel" value="" placeholder="Member 2 Hostel">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t3_name" value="" placeholder="Member 3 Name">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t3_roll" value="" placeholder="Member 3 Roll Number">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t3_email" value="" placeholder="Member 3 Email">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t3_contact" value="" placeholder="Member 3 Contact">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t3_hostel" value="" placeholder="Member 3 Hostel">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t4_name" value="" placeholder="Member 4 Name">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t4_roll" value="" placeholder="Member 4 Roll Number">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t4_email" value="" placeholder="Member 4 Email">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t4_contact" value="" placeholder="Member 4 Contact">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="t4_hostel" value="" placeholder="Member 4 Hostel">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="file" class="form-control" name="abstract" value="" placeholder="abstract">                                        
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
  	
@endsection