@extends('layout.default')

@section('content')
<main>
			
	<section  class="light-bg">
		<div class="container inner">
					
					<div class="row">
						<div class="col-md-8 col-sm-9 center-block text-center">
							<header>
								<h1>Tech GC Points</h1>
								<p>Year : 2014 - 2015</p>
							</header>
						</div><!-- /.col -->
					</div><!-- /.row -->
					<br>
					<div class="row  text-center">
						<div class="col-sm-10 col-sm-offset-1 inner-left inner-right">
							<iframe src="https://docs.google.com/spreadsheets/d/1IZ5zH7BqUaBKgROWrCj4WPP35YhPSMRqAwIuLR66BLA/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false" style="width:100%; min-height:500px;"></iframe>
						</div>
					</div>
					<br>

					<section id="standard-tabs-side" class="border-top">
						<div class="container inner">
							
							<div class="row">
								<div class="col-md-8 col-sm-9 center-block text-center">
									<header>
										<h1>Individual Results of Different GC's</h1>
									</header>
								</div><!-- /.col -->
							</div><!-- ./row -->
							
							<div class="row">
								<div class="col-xs-12 inner-top">
									<div class="tabs tabs-side tab-container">
										
										<ul class="etabs">
											<li class="tab"><a href="#tab-1">Smart Hostel GC</a></li>
											<li class="tab"><a href="#tab-2">Logic GC</a></li>
										</ul><!-- /.etabs -->
										
										<div class="panel-container">
											
											<div class="tab-content" id="tab-1">
												<div class="row">
													<h2>
														Smart Hostel General Championship (High Prep)
														<br>
														<span style="font-size:15px">by Robotics Club </span> 
													</h2>

													<table class="table">
														<thead>
															<tr>
																<th>Position</th>
																<th>Hostel</th>
																<th>Total</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>1</td>
																<td>7</td>
																<td>319</td>
															</tr>
															<tr>
																<td>2</td>
																<td>8</td>
																<td>296</td>
															</tr>
															<tr>
																<td>3</td>
																<td>5</td>
																<td>291</td>
															</tr>
															<tr>
																<td>4</td>
																<td>9</td>
																<td>288</td>
															</tr>
															<tr>
																<td>5</td>
																<td>3</td>
																<td>281</td>
															</tr>
															<tr>
																<td>6</td>
																<td>2</td>
																<td>272</td>
															</tr>
															<tr>
																<td>7</td>
																<td>6</td>
																<td>272</td>
															</tr>
															<tr>
																<td>8</td>
																<td>4</td>
																<td>115</td>
															</tr>
															<tr>
																<td>9</td>
																<td>10</td>
																<td>40</td>
															</tr>
														</tbody>
													</table>

												</div><!-- /.row -->
											</div><!-- /.tab-content -->
											
											<div class="tab-content" id="tab-2">
												<div class="row">
													<h2>
														Logic GC results
														<br>
														<span style="font-size:15px">by Math &amp; Physics Club</span>
													</h2>
													<table>
													    <tbody>
													        <tr style="height:21px;border-top:1px solid rgb(200,200,200);">
													            <td style="padding:2px 3px;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200);border-left:1px solid rgb(200,200,200);vertical-align:middle">Position</td>
													            <td style="padding:2px 3px;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200);white-space:normal;vertical-align:middle">Hostel</td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200)">Team ID</td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200)">Team Members</td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200)">Marks</td>
													            <td style="padding:2px 3px;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200);vertical-align:middle">Average marks</td>
													        </tr>
													        <tr style="height:21px">
													            <td style="padding:2px 3px;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200);border-left:1px solid rgb(200,200,200);vertical-align:middle" rowspan="3" colspan="1"><span><div style="max-height:62px">1st</div></span>
													            </td>
													            <td style="padding:2px 3px;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200);white-space:normal;vertical-align:middle" rowspan="3" colspan="1"><span><div style="max-height:62px">H4</div></span>
													            </td>
													            <td style="padding:2px 3px;vertical-align:bottom">T10</td>
													            <td style="padding:2px 3px;vertical-align:bottom">Eeshan, Abhijeet, Hemil</td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-right:1px solid rgb(200,200,200);text-align:right">146</td>
													            <td style="padding:2px 3px;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200);vertical-align:middle;text-align:right" rowspan="3" colspan="1"><span><div style="max-height:62px">120.33</div></span>
													            </td>
													        </tr>
													        <tr style="height:21px">
													            <td style="padding:2px 3px;vertical-align:bottom">T6</td>
													            <td style="padding:2px 3px;vertical-align:bottom">Pradyot, Lokit, Siddharth</td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-right:1px solid rgb(200,200,200);text-align:right">111</td>
													        </tr>
													        <tr style="height:21px">
													            <td style="padding:2px 3px;vertical-align:bottom;border-bottom:1px solid rgb(200,200,200)">T1</td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-bottom:1px solid rgb(200,200,200)">Ameya behere, Alok Shah, Aniket Desai</td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200);text-align:right">104</td>
													        </tr>
													        <tr style="height:21px">
													            <td style="padding:2px 3px;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200);border-left:1px solid rgb(200,200,200);vertical-align:middle" rowspan="3" colspan="1"><span><div style="max-height:62px">2nd</div></span>
													            </td>
													            <td style="padding:2px 3px;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200);white-space:normal;vertical-align:middle" rowspan="3" colspan="1"><span><div style="max-height:62px">H15AB</div></span>
													            </td>
													            <td style="padding:2px 3px;vertical-align:bottom">T1</td>
													            <td style="padding:2px 3px;vertical-align:bottom">Govind, Rupanshu</td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-right:1px solid rgb(200,200,200);text-align:right">129</td>
													            <td style="padding:2px 3px;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200);vertical-align:middle;text-align:right" rowspan="3" colspan="1"><span><div style="max-height:62px">119.16</div></span>
													            </td>
													        </tr>
													        <tr style="height:21px">
													            <td style="padding:2px 3px;vertical-align:bottom">T7</td>
													            <td style="padding:2px 3px;vertical-align:bottom">Karan Jain, Balaharirar S.S., Sheetal Jain</td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-right:1px solid rgb(200,200,200);text-align:right">124.5</td>
													        </tr>
													        <tr style="height:21px">
													            <td style="padding:2px 3px;vertical-align:bottom;border-bottom:1px solid rgb(200,200,200)">T9</td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-bottom:1px solid rgb(200,200,200)">Varunesh Goyal, Aviral Kumar, Piyush Jain</td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200);text-align:right">104</td>
													        </tr>
													        <tr style="height:21px">
													            <td style="padding:2px 3px;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200);border-left:1px solid rgb(200,200,200);vertical-align:middle" rowspan="3" colspan="1"><span><div style="max-height:62px">3rd</div></span>
													            </td>
													            <td style="padding:2px 3px;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200);white-space:normal;vertical-align:middle" rowspan="3" colspan="1"><span><div style="max-height:62px">H3</div></span>
													            </td>
													            <td style="padding:2px 3px;vertical-align:bottom">T6</td>
													            <td style="padding:2px 3px;vertical-align:bottom">Sanidhya, Roshan, Nishit</td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-right:1px solid rgb(200,200,200);text-align:right">130.5</td>
													            <td style="padding:2px 3px;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200);vertical-align:middle;text-align:right" rowspan="3" colspan="1"><span><div style="max-height:62px">117.66</div></span>
													            </td>
													        </tr>
													        <tr style="height:21px">
													            <td style="padding:2px 3px;vertical-align:bottom">T2</td>
													            <td style="padding:2px 3px;vertical-align:bottom">Aman Goel, Ashish Rathi, Malina Meher Prabhu Charan</td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-right:1px solid rgb(200,200,200);text-align:right">113.5</td>
													        </tr>
													        <tr style="height:21px">
													            <td style="padding:2px 3px;vertical-align:bottom;border-bottom:1px solid rgb(200,200,200)">T4</td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-bottom:1px solid rgb(200,200,200)">Karan, Parth, Pranjal</td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200);text-align:right">109</td>
													        </tr>
													        <tr style="height:21px">
													            <td style="padding:2px 3px;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200);border-left:1px solid rgb(200,200,200);vertical-align:middle" rowspan="3" colspan="1"><span><div style="max-height:62px">4th</div></span>
													            </td>
													            <td style="padding:2px 3px;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200);white-space:normal;vertical-align:middle" rowspan="3" colspan="1"><span><div style="max-height:62px">H7</div></span>
													            </td>
													            <td style="padding:2px 3px;vertical-align:bottom">T1</td>
													            <td style="padding:2px 3px;vertical-align:bottom">Yash Didhe, Jay Mardia, Harshwardhan</td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-right:1px solid rgb(200,200,200);text-align:right">127</td>
													            <td style="padding:2px 3px;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200);vertical-align:middle;text-align:right" rowspan="3" colspan="1"><span><div style="max-height:62px">112.66</div></span>
													            </td>
													        </tr>
													        <tr style="height:21px">
													            <td style="padding:2px 3px;vertical-align:bottom">T3</td>
													            <td style="padding:2px 3px;vertical-align:bottom">Nitin, Rohit, Saikiran</td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-right:1px solid rgb(200,200,200);text-align:right">106</td>
													        </tr>
													        <tr style="height:21px">
													            <td style="padding:2px 3px;vertical-align:bottom;border-bottom:1px solid rgb(200,200,200)">T8</td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-bottom:1px solid rgb(200,200,200)">Suman, Manohar, Rakesh</td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200);text-align:right">105</td>
													        </tr>
													        <tr style="height:21px">
													            <td style="padding:2px 3px;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200);border-left:1px solid rgb(200,200,200);vertical-align:middle" rowspan="3" colspan="1"><span><div style="max-height:62px">5th</div></span>
													            </td>
													            <td style="padding:2px 3px;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200);white-space:normal;vertical-align:middle" rowspan="3" colspan="1"><span><div style="max-height:62px">H2</div></span>
													            </td>
													            <td style="padding:2px 3px;vertical-align:bottom">T3</td>
													            <td style="padding:2px 3px;vertical-align:bottom">Prashant, Shanay, Shardul</td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-right:1px solid rgb(200,200,200);text-align:right">116.5</td>
													            <td style="padding:2px 3px;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200);vertical-align:middle;text-align:right" rowspan="3" colspan="1"><span><div style="max-height:62px">111.5</div></span>
													            </td>
													        </tr>
													        <tr style="height:21px">
													            <td style="padding:2px 3px;vertical-align:bottom">T7</td>
													            <td style="padding:2px 3px;vertical-align:bottom">Shivam, Mihir, Pratyaksh</td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-right:1px solid rgb(200,200,200);text-align:right">110</td>
													        </tr>
													        <tr style="height:21px">
													            <td style="padding:2px 3px;vertical-align:bottom;border-bottom:1px solid rgb(200,200,200)">T4</td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-bottom:1px solid rgb(200,200,200)">Ramprakash, Sanket, Prateesh</td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200);text-align:right">108</td>
													        </tr>
													        <tr style="height:21px">
													            <td style="padding:2px 3px;vertical-align:bottom;border-bottom:1px solid rgb(200,200,200)">
													                <br>
													            </td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-bottom:1px solid rgb(200,200,200)">
													                <br>
													            </td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-bottom:1px solid rgb(200,200,200)">
													                <br>
													            </td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-bottom:1px solid rgb(200,200,200)">
													                <br>
													            </td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-bottom:1px solid rgb(200,200,200)">
													                <br>
													            </td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-bottom:1px solid rgb(200,200,200)">
													                <br>
													            </td>
													        </tr>
													        <tr style="height:21px">
													            <td style="padding:2px 3px;border-bottom:1px solid rgb(200,200,200);border-left:1px solid rgb(200,200,200);font-weight:bold;vertical-align:middle">INDIVIDUALS</td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-bottom:1px solid rgb(200,200,200)">
													                <br>
													            </td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-bottom:1px solid rgb(200,200,200)">
													                <br>
													            </td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-bottom:1px solid rgb(200,200,200)">
													                <br>
													            </td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-bottom:1px solid rgb(200,200,200)">
													                <br>
													            </td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-bottom:1px solid rgb(200,200,200)">
													                <br>
													            </td>
													        </tr>
													        <tr style="height:21px">
													            <td style="padding:2px 3px;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200);border-left:1px solid rgb(200,200,200);vertical-align:middle">1st</td>
													            <td style="padding:2px 3px;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200);white-space:normal;vertical-align:middle">H4</td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200)">T10</td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200)">Eeshan, Abhijeet, Hemil</td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200);text-align:right">146</td>
													            <td style="padding:2px 3px;vertical-align:bottom">
													                <br>
													            </td>
													        </tr>
													        <tr style="height:21px">
													            <td style="padding:2px 3px;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200);border-left:1px solid rgb(200,200,200);vertical-align:middle">2nd</td>
													            <td style="padding:2px 3px;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200);white-space:normal;vertical-align:middle">H3</td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200)">T6</td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200)">Sanidhya, Roshan, Nishit</td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200);text-align:right">130.5</td>
													            <td style="padding:2px 3px;vertical-align:bottom">
													                <br>
													            </td>
													        </tr>
													        <tr style="height:21px">
													            <td style="padding:2px 3px;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200);border-left:1px solid rgb(200,200,200);vertical-align:middle">3rd</td>
													            <td style="padding:2px 3px;background-color:rgb(255,255,255);border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200);white-space:normal;vertical-align:middle">H15AB</td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200)">T1 </td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-right:1px solid rgb(200,200,200)">Govind, Rupanshu</td>
													            <td style="padding:2px 3px;vertical-align:bottom;border-right:1px solid rgb(200,200,200);border-bottom:1px solid rgb(200,200,200);text-align:right">129</td>
													            <td style="padding:2px 3px;vertical-align:bottom">
													                <br>
													            </td>
													        </tr>
													        <tr style="height:21px">
													            <td style="padding:2px 3px;vertical-align:bottom;background-color:rgb(102,102,102)">
													                <br>
													            </td>
													            <td style="padding:2px 3px;vertical-align:bottom;background-color:rgb(102,102,102)">
													                <br>
													            </td>
													            <td style="padding:2px 3px;vertical-align:bottom;background-color:rgb(102,102,102)">
													                <br>
													            </td>
													            <td style="padding:2px 3px;vertical-align:bottom;background-color:rgb(102,102,102)">
													                <br>
													            </td>
													            <td style="padding:2px 3px;vertical-align:bottom;background-color:rgb(102,102,102)">
													                <br>
													            </td>
													            <td style="padding:2px 3px;vertical-align:bottom;background-color:rgb(102,102,102)">
													                <br>
													            </td>
													        </tr>
													    </tbody>
													</table>
												</div>
											</div>
															 
										</div><!-- /.panel-container -->
										 
									</div><!-- /.tabs -->
								</div><!-- /.col -->
							</div><!-- /.row -->
						</div><!-- /.container -->
					</section>
		</div>
	</section>
			
</main>
@endsection