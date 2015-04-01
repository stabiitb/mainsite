@extends('events.ITSP_2015.layout')

@section('inner-content')

	<h4>Upload Your Abstract in pdf format as {Club}_{TeamName}_{Roll No of teammate}.pdf</h4>
	<h4> Write all the details of team members and contact details in abstract.</h4>
	<h4> No other format is allowed except pdf.</h4>
	<h4> Example if Club is WnCC, Team Name is champions and Roll No is 140010002. </h4>
	<h4>Name your abstract as WNCC_Champions_140010002.pdf</h4>

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
                                        <input id="login-username" type="text" class="form-control" name="i	d" value="" placeholder="Gmail Id">                                        
                             </div>
                                

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login" type="text" class="form-control" name="team" value="" placeholder="Team Name">                                        
                             </div>
                              

                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login1" type="text" class="form-control" name="club" value="" placeholder="Club">                                        
                             </div>

							<div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login1" type="text" class="form-control" name="roll" value="" placeholder="Roll No of a team mate">                                        
                             </div>



                                <div style="margin-top:10px" class="form-group">
                                    

                                    <div class="col-sm-12 controls">
                                     <input name="pdf" class="form-control" type="file">

                                    </div>
                                </div>                               


                                <div style="margin-top:10px" class="form-group">
                                    

                                    <div class="col-sm-12 controls">
                                     <input type="submit" class="btn btn-success" >

                                    </div>
                                </div>

<!-- 
                                 <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                </div>     -->
                            </form>     



                        </div>                     
                    </div>  
        </div> 
<!--         <div id"signupbox" style="display:none; margin-top:50px" class="mainbox col-md-7 col-sm-8">
        			<h2> Only one registration per team </h2>
        			<h4> GPO id of any member of team</h4>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative;"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                        </div>  
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form" action="{{URL::Route('events.ITSP_2015.signup')}}" >
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                
                                  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">GPO Email Id</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="gpoEmail" placeholder="Email Address">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">GPO Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="gpoPasswd" placeholder="GPO Password">
                                    </div>
                                </div>    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">Team User Id</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="teamId" placeholder="Team Id">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">ITSP Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="passwd" placeholder="Password">
                                    </div>
                                </div>
                                   

                                <div class="form-group">
                                    <!-- Button -->                                        
                                   <!--  <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                                    </div>
                                </div> 

                                
                                
                            </form>
                         </div>
                    </div>

               
               
                
         </div> 
 -->    </div>
    	
@endsection