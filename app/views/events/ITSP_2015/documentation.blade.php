<?php
$auth=0;
$user=NULL;
$by=1;
$data=NULL;


if(Auth::check()){
	$user=Auth::User()->id;
	}
else{
	echo  "Please login to continue";
	return;
}		

if(isset($_GET['id']))
{		
	$data=ITSP::find($_GET['id']);
	if($data==NULL){
		echo "No team found";
		return;
	}
	$data=$data->toArray();
	$by=$data['user_id'];
	$by2=$data['user_id2'];
	$by3=$data['user_id3'];
	$by4=$data['user_id4'];
	$by5=$data['user_id5'];
	if($by==$user || $by2==$user || $by3==$user || $by4==$user || $by5==$user ||  Auth::User()->admin==1)		
		$auth=1;
	else 
		$auth=0;
//	echo $auth." ".$by." ".$user;
}
else
{
	echo "invalid url. Try www.stab-iitb.org/itsp/documentation?id={your itsp id}";
	return Redirect::to('/');
}

function copyfolder($source, $destination) 
{ 

       //Open the specified directory

       $directory = opendir($source); 

       //Create the copy folder location

       mkdir($destination);

       //Scan through the folder one file at a time

       while(($file = readdir($directory)) != false) 
       { 

              //Copy each individual file 
       		if ($file!=NULL && $file!='.' && $file != '..'){
              copy($source.'/' .$file, $destination.'/'.$file); 
       		}

       } 

} 

$path_chk=public_path()."/assets/itsp_assets/data/".$by;
if(!file_exists($path_chk.'/')){
	copyfolder(public_path()."/assets/itsp_assets/data/template",$path_chk);
}

if(!file_exists($path_chk.'/projectdetailstext.txt')){
    copy(public_path()."/assets/itsp_assets/data/template/projectdetailstext.txt",$path_chk.'/projectdetailstext.txt'); 
}

function fetch_data($path_to_file,$text=1)
{
  $str="";
    if(file_exists($path_to_file))
    {
      $file = fopen($path_to_file, "r");
      while(!feof($file))
        {
         $str.=fgets($file);
        }
      fclose($file);
      $str=trim($str);
     }
    if($str==""&&$text==1)
    	$str="Clich here to edit it";
    
    return $str;
}
?>

<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta name="keywords" content="ITSP , IIT Bombay , <?php  echo $data['project_name'];?>">
<meta name="author" content="Siddharth Bulia">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ITSP | <?php echo $data['team_name']." | ".$data['id']." | ".$by; ?></title>

<!-- =========================
 FAV AND TOUCH ICONS  
============================== -->
<link rel="shortcut icon" href="http://itsp.stab-iitb.org/assets/images/gt_favicon.png">
<link rel="apple-touch-icon" href="http://itsp.stab-iitb.org/assets/images/gt_favicon.png">
<link rel="apple-touch-icon" sizes="72x72" href="http://itsp.stab-iitb.org/assets/images/gt_favicon.png">
<link rel="apple-touch-icon" sizes="114x114" href="http://itsp.stab-iitb.org/assets/images/gt_favicon.png">

<!-- =========================
     STYLESHEETS      
============================== -->
<link rel="stylesheet" href="{{ URL::asset('assets/itsp_assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ URL::asset('assets/itsp_assets/css/redit.min.css')}}">
<link rel="stylesheet" href="{{ URL::asset('assets/itsp_assets/css/design.css')}}">
<link rel="stylesheet" href="{{ URL::asset('assets/itsp_assets/css/style.css')}}">


<!-- WEBFONT -->
<link href="{{ URL::asset('assets/itsp_assets/assets/')}}" rel="stylesheet" type="text/css">

<script src="{{ URL::asset('assets/itsp_assets/assets/jquery.min.js')}}"></script><style type="text/css"></style>
</head>


<body cz-shortcut-listen="true">
<img class="vegas-background" src="{{ URL::asset('assets/itsp_assets/assets/bg2.jpg')}}" style="position: fixed; left: 0px; top: -137.5px; width: 1366px; height: 910px; bottom: auto; right: auto;">
<img class="vegas-background" src="{{ URL::asset('assets/itsp_assets/assets/bg2.jpg')}}" style="position: fixed; left: 0px; top: -137.83333333333331px; opacity: 0.4921463413440897; width: 1366px; height: 910.6666666666666px; bottom: auto; right: auto;">
<!-- =========================
   PRE LOADER       
============================== -->
<div class="preloader" style="display: none;">
  <div class="status" style="display: none;">&nbsp;</div>
</div>
<!-- =========================
   HOME SECTION       
============================== -->
<header id="home" class="header">
	
	<!-- TOP BAR -->
	<div id="main-nav" class="navbar navbar-inverse bs-docs-nav fixed" role="banner">
		<div class="container">
			<div class="navbar-header responsive-logo">
				<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a href= {{URL::asset('/assets/itsp_assets/')}} class="navbar-brand">
				<img src= {{URL::asset('assets/itsp_assets/assets/logo.png')}} alt="Zerif">
				</a>
			</div>
			<nav class="navbar-collapse bs-navbar-collapse collapse" role="navigation" style="height: 1px;">
			<ul class="nav navbar-nav navbar-right responsive-nav main-nav-list">
				<li class=""><a href="./#home">Home</a></li>
				<li class=""><a href="./#focus">Introduction</a></li>
				<li class=""><a href="./#ideas">Concepts</a></li>
				<li class=""><a href="./#aboutus">Plan of Action</a></li>
				<li class=""><a href="./#team">Team</a></li>
				<li class=""><a href="./#pricingtable">Theory</a></li>
				<li class=""><a href="./#projectdetails">Details</a></li>
				<li><a href="./#products">Photos</a></li>
				<li><a href="./#components">Components</a></li>
				<li><a href="./#references">References</a></li>
				<li><a href="./#contact">Contact</a></li>
			</ul>
			</nav>
		</div>
	</div>
	<!-- / END TOP BAR -->
	
	<!-- BIG HEADING WITH CALL TO ACTION BUTTONS AND SHORT MESSAGES -->
	<div class="container">
		
		<!-- HEADING -->
		<h1 class="intro"><?php  echo $data['project_name']; ?></h1>
		<?php		
		if ($auth==1 && $data['completed']!=1){
			echo "<h2>Please Complete your team first. Go to ITSP profile and fill up all team member details.</h2>";
			$auth=0;
		}
			?>	
		
		
		<!-- 3 SHORT MESSAGE ABOUT COMPANY -->
        <div class="row bottom-message-section">
			<div class="col-lg-2 col-sm-2">
				<div class="short-text">
					<?php //<i class="icon icon-fontawesome-webfont-358"></i> Fixed price for packages ?>
				</div>
			</div>
			<div class="col-lg-8 col-sm-8">
				<div class="short-text" style="text-align:center">
					Club : <?php echo $data['club'];
					 ?>
		</div>
						<div class="row editable" id="projectdesc" style="text-align:center">
				<?php 
					echo fetch_data(public_path()."/assets/itsp_assets/data/".$by."/projectdesc.txt");
				?>
				</div>
				    @if (Session::get('messages') != null && Session::get('messages')->has('message'))
        <div class="col-md-12">
            <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            {{ Session::get('messages')->first('message') }}
            </div>
        </div>
    @endif

					@if ($auth==1)
						
						<form action="{{URL::route('events.ITSP_2015.documentation.links')}}" method="post">
					@endif	<table class="table" style="color:white">
								<tr>
									<td>YouTube Video Link 1</td>
									<td>
									@if($data['yotubeLink1']!=NULL)
									{{$data['yotubeLink1']}}
									@endif
									</td>
					@if ($auth==1)
									<td>
										<input style="color:black" type="text" name="youtubeLink1">
									</td>	
					@endif
								</tr>
								<tr>
									<td>YouTube Video Link 2</td>
									<td>
									@if($data['yotubeLink2']!=NULL)
									{{$data['yotubeLink2']}}
									@endif
									</td>
					@if ($auth==1)
									<td>
										<input style="color:black" type="text" name="youtubeLink2">
									</td>	
					@endif
								</tr>
								<tr>
									<td>Final Presentation Link</td>
									<td>
									@if($data['presentationLink']!=NULL)
									{{$data['presentationLink']}}
									@endif
									</td>
					@if ($auth==1)
									<td>
										<input style="color:black" type="text" name="presentationLink">
									</td>	
					@endif
								</tr>
								<tr>
									<td>Github Repository Link</td>
									<td>
									@if($data['githubLink']!=NULL)
									{{$data['githubLink']}}
									@endif
									</td>
					@if ($auth==1)
									<td>
										<input style="color:black" type="text" name="githubLink">
									</td>	
					@endif
								</tr>
					@if ($auth==1)
								<tr>
									<td>Submit</td>
									<td></td>
									<td>
										<input style="color:black" type="submit" name="submit" value="Submit">
									</td>
								</tr>		
					@endif
							</table>	
					@if ($auth==1)
						</form>
					@endif
					@if($auth==1)
						<form action="{{URL::route('events.ITSP_2015.documentation.savezip')}}" method="post" enctype="multipart/form-data">
						    <p style="text-align:center;color:rgb(255, 255, 0)">Zip all your bills and submit it here. Only zip format is allowed.</p>
						    <input style="text-align:center;" type="file" name="bills" id="fileToUpload">
						    <input style="text-align:center;display:none" type="text" value="{{$by}}" name="by" id="byuser">
						    <input style="text-align:center;" type="submit" value="Upload Bills" name="submit">
						</form>
						@if($data['project_desc']!=NULL)
							<p>Your bills are <a href="{{$data['project_desc']}}">here</a></p>
						@endif
					@endif

			</div>
			<div class="col-lg-2 col-sm-2">
				<div class="short-text">
				</div>
			</div>
		</div>
	</div> 
	
</header> 

<section class="focus" id="focus">
<div class="container">
	
	<!-- SECTION HEADER -->
	<div class="section-header">
		
		<!-- SECTION TITLE -->
		<h2 class="dark-text">Introduction</h2>
		
		<!-- SHORT DESCRIPTION ABOUT THE SECTION -->
		<h6 id="intro-head">
			<br>
		</h6>
		<div class="row editable" id="intro" style="text-align:left">
			<?php echo fetch_data(public_path()."/assets/itsp_assets/data/".$by."/intro.txt");
			?>
		</div>
	</div>
	<!-- / END SECTION HEADER -->

	
</div> <!-- / END CONTAINER -->
</section>  <!-- / END FOCUS SECTION -->

<!-- =========================
   SEPARATOR ONE      
============================== -->

<section class="separator-one">
<div class="color-overlay">
	<h2 class="container text"> Motivation for Project</h2>
	<div class="container text" data-scrollreveal="enter left after 0s over 1s" data-sr-init="true" data-sr-complete="true">
		<div id="motivation" clas="editable" style="text-align:left">
			 <?php
			 	echo fetch_data(public_path()."/assets/itsp_assets/data/".$by."/motivation.txt");
			 ?>
		</div>	
	</div>
</div>
</section>  <!-- / END SEPARATOR -->


<!-- =========================
   IDEAS   
============================== -->

<section class="ideas" id="ideas">
<div class="container">
	
	<div class="section-header">
		
		<!-- SECTION TITLE -->
		<h2 class="dark-text">Concepts behind the Project</h2>
		
		<!-- SHORT DESCRIPTION ABOUT THE SECTION -->
		<h6 id="intro-head">
			<br>
		</h6>
		<div class="row editable" id="idea" style="text-align:left">
			<?php echo fetch_data(public_path()."/assets/itsp_assets/data/".$by."/idea.txt");
			?>
		</div>
	</div>
</div>
	
	<!-- PROJECT DETAILS WILL BE LOADED HERE -->
	<div id="loaded-content"></div>

    <a id="back-button" class="red-btn" href="{{ URL::asset('assets/itsp_assets/assets/project_temp.html')}}"><i class="icon-fontawesome-webfont-27"></i> Go Back</a>
	
</div> <!-- / END CONTAINER -->
</section> <!-- / END WORKS SECTION -->


<!-- =========================
   PLAN OF ACTION  
============================== -->

<section class="about-us" id="aboutus">
<div class="container">
	
	<!-- SECTION HEADER -->
	<div class="section-header">
		
		<!-- SECTION TITLE -->
		<h2 class="white-text">Plan of Action</h2>
		
		<!-- SHORT DESCRIPTION ABOUT THE SECTION -->
		<h6 class="white-text">
				Week wise plan of action and accomplishment
		</h6>
	</div>
	<!-- / END SECTION HEADER -->
	
	<!-- 3 COLUMNS OF ABOUT US-->
	<div class="row editable" id="planofaction">
		
		<?php

			echo fetch_data(public_path()."/assets/itsp_assets/data/".$by."/planofaction.txt");
		?>
	</div> <!-- / END 3 COLUMNS OF ABOUT US-->
</div> <!-- / END CONTAINER -->

</section> <!-- END ABOUT US SECTION -->

<!-- =========================
   STATS              
============================== -->
<?php /*
<section class="stats">
	<div class="container">
	    <!-- STATS -->
	    <div class="row">
	        
	        <!-- START COLUMN -->
	        <div class="col-lg-3 col-sm-3">
	            <div class="stat" data-scrollreveal="enter bottom after 0s over 1s" data-sr-init="true" data-sr-complete="true">
	                <div class="icon-top red-text">
	                    <i class="icon-design-graphic-tablet-streamline-tablet"></i>
	                </div>
	                <div class="stat-text">
	                <h3 class="white-text red-border-bottom">1,236</h3>
	                <h6>Projects Completed</h6>
	                </div>
	            </div>
	        </div> <!-- / END COLUMN -->
	        
	        <!-- START COLUMN -->
	        <div class="col-lg-3 col-sm-3">
	            <div class="stat" data-scrollreveal="enter bottom after 0.15s over 1.15s" data-sr-init="true" data-sr-complete="true">
	                <div class="icon-top green-text">
	                    <i class="icon-man-people-streamline-user"></i>
	                </div>
	                <div class="stat-text">
	                <h3 class="white-text green-border-bottom">196</h3>
	                <h6>Happy Clients</h6>
	                </div>
	            </div>
	        </div> <!-- / END COLUMN -->
	        
	        <!-- START COLUMN -->
	        <div class="col-lg-3 col-sm-3">
	            <div class="stat" data-scrollreveal="enter bottom after 0.3s over 1.3s" data-sr-init="true" data-sr-complete="true">
	                <div class="icon-top blue-text">
	                    <i class="icon-email-mail-streamline"></i>
	                </div>
	                <div class="stat-text">
	                <h3 class="white-text blue-border-bottom">56,236</h3>
	                <h6>Mail Conversation</h6>
	                </div>
	            </div>
	        </div> <!-- / END COLUMN -->
	        
	        <!-- START COLUMN -->
	        <div class="col-lg-3 col-sm-3">
	            <div class="stat" data-scrollreveal="enter bottom after 0.45s over 1.45s" data-sr-init="true" data-sr-complete="true">
	                <div class="icon-top yellow-text">
	                    <i class="icon-picture-streamline-1"></i>
	                </div>
	                <div class="stat-text">
	                <h3 class="white-text yellow-border-bottom">2,519</h3>
	                <h6>Photos Taken</h6>
	                </div>
	            </div>
	        </div> <!-- / END COLUMN -->
	    </div>
</div>
</section>  <!-- / END STATS --> */
?>
<!-- =========================
   OUR TEAM SECTION   
============================== -->

<section class="our-team" id="team">
<div class="container">
	
	<!-- SECTION HEADER -->
	<div class="section-header">
		
		<!-- SECTION TITLE -->
		<h2 class="dark-text">Our Team</h2>
		
		<!-- SHORT DESCRIPTION ABOUT THE SECTION -->
		<h6>
			Check our awesome team memebers who have worked hard in accomplishment of this project. 
		</h6>
	</div>
	<!-- / END SECTION HEADER -->
	
	<!-- TEAM MEMBERS -->
	<div class="row" data-scrollreveal="enter left after 0s over 2s" data-sr-init="true" data-sr-complete="true"  style="text-align:center">
		<!-- MEMBER -->
		<?php
			$tot=$data['number'];
			// for ($i=1; $i < 5; $i++) { 
			// 	if($data['t'.$i.'_name']!='')
			// 	{
			// 		$tot++;
			// 	}
			// }
			for ($i=1; $i < $tot+1; $i++) { 
				$name="";
				$email="";
				if($i==1){
					$name=User::find($data['user_id'])->name;
					$email=User::find($data['user_id'])->email;
				}
				else{
					$name=User::find($data['user_id'.$i]);
					if ($name!=NULL){
						$name=User::find($data['user_id'.$i])->name;
					}
					else{
						$name="";
					}
					$email=User::find($data['user_id'.$i]);					
					if($email!=NULL){
						$email=User::find($data['user_id'.$i])->email;
					}
					else{
						$email="";
					}
				}
				if($data['user_id']!=NULL)
				{
					if(file_exists(public_path()."/assets/itsp_assets/data/".$by."/t".$i.".png"))
						$img=URL::asset("/assets/itsp_assets/data/".$by."/t".$i.".png");
					else
						$img=URL::asset("/assets/itsp_assets/assets/4.jpg");
					echo '
					<div class="col-lg-'.(12/$tot).' col-sm-'.(12/$tot).'">
						<div class="team-member">
							<figure class="profile-pic"> ';
							echo '<form enctype="multipart/form-data" id="img-up'.$i.'">
				                	<input type="hidden" value="'.$by.'" id="uploadedby'.$i.'">
				                    <input type="file" onchange="uploadimg('.$i.')" id="img-uploader'.$i.'" name="img" style="display:none;position:absolute;right:0px;top:0px">
				                 <img src="'.$img.'" alt="" ';
				                 if($auth==1)
				                 echo 'onclick="$(\'#img-uploader'.$i.'\').click()"';
				                 echo '>
				            </form>';
							
							echo '</figure>
							<div class="member-details">
								<h5 class="dark-text red-border-bottom">'.$name.'</h5>
								<div class="position">
									'.$email.'
								</div>
							</div>
						</div>
					</div>

					';
				}
			}
			


		?>			
		</div>
	</div> <!-- / END TEAM MEMBER LIST -->
	
</div> <!-- / END CONTAINER -->
</section> <!-- / END OUR TEAM SECTION -->

<!-- =========================
   PACKAGES SECTION   
============================== -->

<section class="packages" id="pricingtable">
<div class="container">
	
	<!-- SECTION HEADER -->
	<div class="section-header" style="padding-bottom:40px">
		
		<!-- SECTION TITLE -->
		<h2 class="white-text">Theory Involved</h2>
		
		<!-- SHORT DESCRIPTION ABOUT THE SECTION -->
	</div>
	<!-- / END SECTION HEADER -->
	

	<div class="row editable" id="theoryinvolved" data-scrollreveal="enter left after 0s over 1s" data-sr-init="true">
		<?php

			echo fetch_data(public_path()."/assets/itsp_assets/data/".$by."/theoryinvolved.txt");
		?>
		
	</div> 
	
</div> <!--END CONTAINER  -->
</section> 


<section class="features" id="projectdetails">
<div class="container">
		
		<!-- SECTION HEADER -->
	<div class="section-header">
		
		<!-- SECTION TITLE -->
		<h2 class="dark-text">Project Details</h2>
		
		<!-- SHORT DESCRIPTION ABOUT THE SECTION -->
		<h6>
			Here we present all the details of how we achieved to this project
		</h6>
	</div>
	<!-- / END SECTION HEADER -->

	<div class="row editable" id="projectdetailstext" data-scrollreveal="enter left after 0s over 1s" style="-webkit-transform: translatex(-60px);-moz-transform: translatex(-60px);-ms-transform: translatex(-60px);transform: translatex(-60px);opacity: 0;" data-sr-init="true">
		
			<?php

			echo fetch_data(public_path()."/assets/itsp_assets/data/".$by."/projectdetailstext.txt");
		?>
		
	</div> 
</div> 
</section> 



<section class="products" data-type="background" data-speed="1" id="products" style="background-position: 50% -6750px;">
<div class="color-overlay">
	<div class="section-header">
		
		<!-- SECTION TITLE -->
		<h2 class="dark-text">Project Pics</h2>
		
		<!-- SHORT DESCRIPTION ABOUT THE SECTION -->
		<h6 style="color:white">
			We have designed and developed this awesome products. Just take a look. 
		</h6>
	</div>
	<!-- / END SECTION HEADER -->
	<div class="row projects">
	
	<div class="col-md-12" id="portfolio-list">
		<!-- PORTFOLIO ITEMS-->
		<ul class="cbp-rfgrid">
			
        <!-- PROJECT -->
        <?php
        
        if (!file_exists(public_path().'/assets/itsp_assets/data/'.$by.'/images/')){ 
			      }
        else {
			$handle = opendir(public_path().'/assets/itsp_assets/data/'.$by.'/images/');
	        $count=0;
	     //This is the correct way to loop over the directory. 
	     	    while (false !== ($entry = readdir($handle))) {
		    	if($entry!=="." && $entry!=".." &&$entry!="logo.png')}}"&&$entry!='thumbnail'){
        		       echo '<li data-scrollreveal="enter left after 0s over 1s" data-sr-init="true" data-sr-complete="true">
			        	<a href="" class="" onclick="return false">
			        	<img src="'.URL::asset('assets/itsp_assets'.'/data/'.$by."/images/".$entry).'" style="width:100%;height:100%;" alt="'.URL::asset('assets/itsp_assets/images/upload.png').'">
							<div class="project-info">
								';
								$str="";		
    if(file_exists(public_path()."/assets/itsp_assets".'/data/'.$by."/imgalt/".$entry.'.txt'))
    {
    	$path_to_file=public_path()."/assets/itsp_assets".'/data/'.$by."/imgalt/".$entry.'.txt';
      $file = fopen($path_to_file, "r");
      while(!feof($file))
        {
         $str.=fgets($file);
        }
      fclose($file);
      $str=trim($str);
     }
     else
     {
     	echo "No Caption";
     }
		echo $str;						
								echo '
							</div>
						</a>
			        </li>';
			    }
		            
		    }
     	closedir($handle);
     	    	}

     	if($auth==1){
     		echo '<li data-scrollreveal="enter left after 0s over 1s" data-sr-init="true" data-sr-complete="true">
			        	<div>
			        		<img src="'.URL::asset("/assets/itsp_assets"."/assets/add.jpg"). '"style="width:100%;height:100%;" alt="project">
							<div class="project-info">
								<div class="project-details" style="margin-top:-10%">
									<h5 class="white-text red-border-bottom" >
									Upload your image </h5>
									<div class="details white-text">';
										echo '<form enctype="multipart/form-data" id="projectimg" >
						                    <input class="form-control inputimg" type="file"   name="img">

						                	<input type="hidden" value="'.$by.'" name="uploadedby" required>
						                    <input class="form-control inputimg" placeholder="Image title" type="text" required  name="heading">
						                    <input class="form-control inputimg" placeholder="Image Description" required type="text" name="detail">
						                    <button class="btn btn-success">GO</button>
						            </form>';
									echo '</div>
								</div>
							</div>
						</div>
			        </li>';
     	}
        ?>
        <!-- / PROJECT -->
        
      

        
		
       

        <!-- ... -->
		</ul>
	</div>
	<!-- / END SECTION HEADER -->
		
		<!-- PRODUCTS -->
	
	</div> <!-- / END CONTAINER -->
</div> 
</section> 

<?php
/*
<section class="newsletter">
<div class="container">
	<h3 class="white-text" data-scrollreveal="enter left after 0s over 1s" style="-webkit-transform: translatex(-60px);-moz-transform: translatex(-60px);-ms-transform: translatex(-60px);transform: translatex(-60px);opacity: 0;" data-sr-init="true">Stay in touch</h3>
	<div class="sub-heading white-text" data-scrollreveal="enter right after 0s over 1s" style="-webkit-transform: translatex(60px);-moz-transform: translatex(60px);-ms-transform: translatex(60px);transform: translatex(60px);opacity: 0;" data-sr-init="true">
		 Sign Up for Email Updates on on News &amp; Offers
	</div> 
	

	<form action="{{ URL::asset('assets/itsp_assets/assets/project_temp.html" class="subscription" role="form" data-scrollreveal="enter left after 0s over 1s" style="-webkit-transform: translatex(-60px);-moz-transform: translatex(-60px);-ms-transform: translatex(-60px);transform: translatex(-60px);opacity: 0;" data-sr-init="true">
		<input type="email" placeholder="Enter email" class="form-control input-box">
		<button class="btn btn-primary custom-button red-btn">Sign Up</button>
	</form>
	
	
</div> 
</section>  */
?>

<section class="testimonial" id="components">
<div class="container">
	  
	  <!-- SECTION HEADER -->
        <div class="section-header">
		
		<!-- SECTION TITLE -->
		<h2 class="white-text">components</h2>
		
		<!-- SHORT DESCRIPTION ABOUT THE SECTION -->
		<h6 class="white-text">
			Here are the list of items we have used to build this awesome project
		</h6>
	</div>

	<div class="row" data-scrollreveal="enter right after 0s over 1s" style="-webkit-transform: translatex(60px);-moz-transform: translatex(60px);-ms-transform: translatex(60px);transform: translatex(60px);opacity: 0;" data-sr-init="true">
		<div class="col-md-12 editable" id="componentlist" style="color:#444">
			<?php

			echo fetch_data(public_path()."/assets/itsp_assets/data/".$by."/componentlist.txt");
		?>
		</div> <!-- / END COLUMN -->
	</div> <!-- / END ROW -->
	
</div> <!-- / END CONTAINER -->
</section> 


<section class="purchase-now" id="references">
<div class="container" >
	<br>

	<h2 class="white-text">References</h2>
	<div class="row">
		<div class="col-md-12" data-scrollreveal="enter left after 0s over 1s" style="-webkit-transform: translatex(-60px);-moz-transform: translatex(-60px);-ms-transform: translatex(-60px);transform: translatex(-60px);opacity: 0;" data-sr-init="true">
			<div id="referencetext" class="editable" style="color:#fff">
				<?php
					echo fetch_data(public_path()."/assets/itsp_assets/data/".$by."/referencetext.txt");
				?>
			</div>
		</div>
	</div>
</div>
</section> 


<!-- =========================
   FEEDBACK        
============================== -->


@if($auth==1)
<section class="features" id="feedbackform">
	<div class="container">
			
			<!-- SECTION HEADER -->
		<div class="section-header">
			
			<!-- SECTION TITLE -->
			<h2 class="dark-text">Feedback</h2>
			
			<!-- SHORT DESCRIPTION ABOUT THE SECTION -->

			@if($data['mentor1']==NULL)
			<h6>
				Plese provide Feedback regarding your Mentors
			</h6>
			@endif

		</div>
		<!-- / END SECTION HEADER -->

		<div class="row" data-scrollreveal="enter left after 0s over 1s" >
			
			<div class="panel panel-default">
				<div class="panel-body">
					<h3 class="thin text-center">Feedback Form</h3>

					@if($data['mentor1']!=NULL)
					<br>
					<p class="text-center text-muted">You have already Submitted Feedback before! Resubmitting will OVERWRITE previous submission.</p>
					@endif
					

					<hr>
					<div class="alert alert-danger alert-dismissable" style="display:none" id="log-alert">
				        <button type="button" class="close"onclick="$(\'#log-alert\').css(\'display\',\'none\')">×</button>
				        <div id="log-alert-text">Invalid Input</div>
				    </div>

					<form id="feedback" action="{{URL::Route('events.ITSP_2015.feedback')}}">
						
						<div class="row">
								<div class="top-margin">
									<label>Name of Mentor 1<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="m1"  maxlength="49" required>
								</div>
								
								<div class="top-margin">
									<label>Name of Mentor 2<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="m2"  maxlength="49" required>
								</div>
								<div class="top-margin">
									<label>Feedback for Mentors<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="mentor_feedback" maxlength="499" required>
								</div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-lg-4 col-lg-offset-8 text-right">
								<button class="btn btn-action" type="submit">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			
		</div> 
	</div> 
</section> 

@endif



<!-- =========================
   CONTACT US         
============================== -->

<section class="contact-us" id="contact">
<div class="container">
	
	<!-- SECTION HEADER -->
        <div class="section-header">
		
		<!-- SECTION TITLE -->
		<h2 class="white-text">Contact Us</h2>
		
		<!-- SHORT DESCRIPTION ABOUT THE SECTION -->
		<h6 class="white-text">
			Have any question? Drop us a message. We will get back to you soon.
		</h6>
	</div>
	<!-- / END SECTION HEADER -->
	
	<!-- CONTACT FORM-->
	<div class="row">
		<form role="form" action="#" class="contact-form" id="contact-form">
			<div class="col-lg-4 col-sm-4" data-scrollreveal="enter left after 0s over 1s" style="-webkit-transform: translatex(-60px);-moz-transform: translatex(-60px);-ms-transform: translatex(-60px);transform: translatex(-60px);opacity: 0;" data-sr-init="true">
				<input type="text" name="name" required placeholder="Your Name" class="form-control input-box">
			</div>
			<div class="col-lg-4 col-sm-4" data-scrollreveal="enter left after 0s over 1s" style="-webkit-transform: translatex(-60px);-moz-transform: translatex(-60px);-ms-transform: translatex(-60px);transform: translatex(-60px);opacity: 0;" data-sr-init="true">
				<input type="email" name="email" required placeholder="Your Email" class="form-control input-box">
			</div>
			<div class="col-lg-4 col-sm-4" data-scrollreveal="enter left after 0s over 1s" style="-webkit-transform: translatex(-60px);-moz-transform: translatex(-60px);-ms-transform: translatex(-60px);transform: translatex(-60px);opacity: 0;" data-sr-init="true">
				<input type="text" name="subject" required placeholder="Subject" class="form-control input-box">
			</div>
			<div class="col-md-12" data-scrollreveal="enter right after 0s over 1s" style="-webkit-transform: translatex(60px);-moz-transform: translatex(60px);-ms-transform: translatex(60px);transform: translatex(60px);opacity: 0;" data-sr-init="true">
				<textarea name="message" required class="form-control textarea-box" placeholder="Your Message"></textarea>
			</div>
			<button class="btn btn-primary custom-button red-btn" type="submit" data-scrollreveal="enter left after 0s over 1s" style="-webkit-transform: translatex(-60px);-moz-transform: translatex(-60px);-ms-transform: translatex(-60px);transform: translatex(-60px);opacity: 0;" data-sr-init="true">Send Message</button>
		</form>
	</div>
	<!-- / END CONTACT FORM-->
</div> <!-- / END CONTAINER -->
</section> <!-- / END CONTACT US SECTION-->

<!-- =========================
   FOOTER             
============================== -->

<footer>
<div class="container">
	
	<!-- COMPANY ADDRESS-->
	<div class="col-md-5 company-details">
		<div class="icon-top red-text">
		    <i class="icon-fontawesome-webfont-302"></i>
		</div>
		Student Technical Activity Body , IIT Bombay , Mumbai
	</div>
	
	<!-- COMPANY EMAIL-->
	<div class="col-md-2 company-details">
		<div class="icon-top green-text">
		<i class="icon-fontawesome-webfont-329"></i>
		</div>
		 oc.stab@iitb.ac.in
	</div>
	
	<!-- COMPANY PHONE NUMBER -->
	<div class="col-md-2 company-details">
		Designed and developed by 
		<a href="http://www.cse.iitb.ac.in/~prateekchandan" target=_blank>
		Prateek Chandan
		</a><br>
		Maintained by 
		<a href="https://www.facebook.com/siddharth.bulia" target=_blank>
		Siddharth Bulia
		</a>

	</div>
	
	<!-- SOCIAL ICON AND COPYRIGHT -->
	<div class="col-lg-3 col-sm-3 copyright">
		<ul class="social">
			<li><a href="https://www.facebook.com/itsp.iitb"><i class="icon-facebook"></i></a></li>
			<li><a href="https://www.youtube.com/user/STABiitb"><i class="icon-youtube"></i></a></li>
			<li><a href="https://github.com/wncc"><i class="icon-github"></i></a></li>
		</ul>
		 ©2015 <a href="http://itsp.stab-iitb.org" target=_blank> ITSP </a> ,<a href="http://www.stab-iitb.org" target=_blank> STAB </a>,
		 <a href="http://www.iitb.ac.in" target=_blank> IIT Bombay </a>
	</div>
</div> <!-- / END CONTAINER -->
</footer> <!-- / END FOOOTER  -->

<!-- SCRIPTS -->
<script>var baseurl="{{URL::route('events.ITSP_2015.documentation')}}";</script>
<script src="{{ URL::asset('assets/itsp_assets/assets/bootstrap.min.js')}}"></script>
<script src="{{ URL::asset('assets/itsp_assets/assets/redit.js')}}"></script>
<script src="{{ URL::asset('assets/itsp_assets/assets/jquery.scrollTo.min.js')}}"></script>
<script src="{{ URL::asset('assets/itsp_assets/assets/jquery.nav.js')}}"></script>
<script src="{{ URL::asset('assets/itsp_assets/assets/jquery.knob.js')}}"></script>
<script src="{{ URL::asset('assets/itsp_assets/assets/smoothscroll.js')}}"></script>

<script src="{{ URL::asset('assets/itsp_assets/assets/owl.carousel.min.js')}}"></script>

<script src="{{ URL::asset('assets/itsp_assets/assets/jquery.vegas.min.js')}}"></script> 
<script src="{{ URL::asset('assets/itsp_assets/assets/scrollReveal.js')}}"></script>    
<script src="{{ URL::asset('assets/itsp_assets/assets/zerif.js')}}"></script>
<script type="text/javascript">
	<?php
		echo "var id='".$by."';"
	?>
</script>
<?php
 

	if($auth==1)
		echo '<script src='.URL::asset('assets/itsp_assets/assets/script.js').'></script>';
?>
<script type="text/javascript">
	  $("#contact-form").submit(function(e){
            e.preventDefault();
            console.log($(this).serialize());
            $("#contact-form")[0].reset();
            alert("Message sent");
            return false;
        });
</script>
</body></html>