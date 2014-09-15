@extends('layout.default')

@section('content')
<main>
			
			
			<section class="light-bg img-bg img-bg-softer">
				<div class="container" style="padding-top:50px;padding-bottom:50px;">
					<div class="row">
						<div class="col-md-8">
							<header>
								<h2>Tech & RnD Expo - List of Registered Teams</h2>
							</header>
						</div><!-- /.col -->
					</div><!-- ./row -->
				</div><!-- /.container -->
			</section>
			
			<!-- ============================================================= SECTION – HERO : END ============================================================= -->
			
			<div class="container inner">
				<div class="row">
				
					<div class="col-md-12 inner-right-md">
						
						<!-- ============================================================= SECTION – CONTACT FORM ============================================================= -->
						
						<section id="contact-form">
							
							<h2>List of Registered Teams</h2>
							
							<table class="table">
								<thead>
									<tr>
										<th>
											Sl No
										</th>
										<th>
											Team Id
										</th>
										<th>
											Team Name
										</th>
										<th>
											Project Description
										</th>
										<th>
											Slot
										</th>
										<th>
											No of Team Members
										</th>
										<th>
											Team Member Detail
										</th>
										<th>
											Comments
										</th>
									</tr>
									
								</thead>
								@foreach($all as $key => $user)
									<tr>
										<td>
											{{$key+1}}
										</td>
										<td>
											{{$user->team_id}}
										</td>
										<td>
											{{$user->team_name}}
										</td>
										<td>
											{{$user->desc}}
										</td>
										<td>
											{{$user->slot}}
										</td>
										<td>
											{{$user->no_of_member}}
										</td>
										<td>
											<div>
												<ul>
													<li>
														{{$user->name}}
													</li>
													<li>
														{{$user->email}}
													</li>
													<li>
														{{$user->phone}}
													</li>
												</ul>
											</div>
										</td>
										<td>
											{{$user->comment}}
										</td>
									</tr>
								@endforeach
							</table>
							
						</section>
						
					
					</div><!-- ./col -->
					
						
				</div><!-- /.row -->
			</div><!-- /.container -->
			
</main>
@endsection