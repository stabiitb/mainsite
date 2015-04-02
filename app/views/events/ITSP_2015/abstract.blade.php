@extends('events.ITSP_2015.layout')

@section('inner-content')

	<h4> Write all the details of team members and contact details in abstract.</h4>
	<h4> No other format is allowed except pdf.</h4>

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

<!-- 							<div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="ldap" type="text" class="form-control" name="ldapId" value="" placeholder="Ldap Id">                                        
                             </div>

							<div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="pword" type="password" class="form-control" name="passwd" value="" placeholder="Ldap Password">                                        
                             </div> -->
                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="name" type="text" class="form-control" name="name" value="" placeholder="Name of a group member">                                        
                             </div>


                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="roll" type="text" class="form-control" name="roll" value="" placeholder="Roll Number of a group member">                                        
                             </div>

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="team" type="text" class="form-control" name="team" value="" placeholder="Team Name">                                        
                             </div>
              

              				 <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="passwd" type="text" class="form-control" name="passwd" value="" placeholder="Passkey (Remember this for resubmitting abstract)">                                        
                             </div>
                                                                  
                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="gmailId" value="" placeholder="Gmail Id of a group member">                                        
                             </div>
              
                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="phone" value="" placeholder="Contact No.">                                        
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
                                        <input id="login1" type="file" class="form-control" name="abstract" value="" placeholder="Abstract">                                        
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