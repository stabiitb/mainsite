@extends('layout.default')
@section('content')
<main>
		<section class="light-bg img-bg img-bg-softer">
				<div class="container" style="padding-top:50px;padding-bottom:50px;">
					<div class="row">
						<div class="col-md-8">
							<header>
								<h2>Welcome , {{$user->Name}}</h2>
							</header>
						</div><!-- /.col -->
					</div><!-- ./row -->
				</div><!-- /.container -->
			</section>

			<section class="img-bg img-bg-softer inner">
				<div class="container" >
					<div class="row">
						<div class="col-md-12"> 
						@if($user->ldap_verified == 0)
						Verify now . 
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
</main>
@endsection