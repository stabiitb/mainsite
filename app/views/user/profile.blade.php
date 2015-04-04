@extends('layout.default')
@section('content')
<main>
		<section class="light-bg img-bg img-bg-softer">
				<div class="container" style="padding-top:50px;padding-bottom:50px;">
					<div class="row">
						<div class="col-md-8">
							<header>
								<h2>Welcome , {{$user->Name}}</h2>
								<h3>Your user id is {{$user->id}}</h3>
							</header>
						</div><!-- /.col -->
					</div><!-- ./row -->
				</div><!-- /.container -->
			</section>

    @if (Session::get('messages') != null && Session::get('messages')->has('message'))
       									
			<section id="error" class="light-bg">
				<div class="container inner-xs">
					<div class="row">
						<div class="col-sm-10 center-block text-center">
						    {{ Session::get('messages')->first('message') }}
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</section>    
	@else
			<section class="img-bg img-bg-softer inner">
				<div class="container" >
					<div class="row">
						<div class="col-md-12"> 
						@if($user->ldap_verified == 0)
						Verify now . Enter your GPO Id. 
							<form action="{{URL::Route('user.verify')}}" method="post">
							<input name="gpo_id" type="text" placeholder="gpo Id">
							<input type="submit" value="verify">
							</form>
						@else
						GPO email : {{$user->ldap_email}}
						@endif
						</div>
					</div><!-- ./row -->
				</div><!-- /.container -->
			</section>
	@endif

</main>
@endsection