@extends('club.mnp.layout')

@section('inner-content')
<h1>Our Team</h1>
<!-- ============================================================= SECTION – TEAM ============================================================= -->

<section id="team" class="light-bg inner-xs inner-left-xs inner-right-xs">

    <h3 class="team-headline sidelines text-center"><span>Managers</span></h3>

    <div class="row thumbs gap-md text-center">

        <div class="col-sm-6 col-sm-offset-3 thumb">
            <figure class="member">

                <div class="member-image">

                    <div class="text-overlay">
                        <div class="info">
                            <ul class="social">
                                <li><a href="https://www.facebook.com/anchal.scientist"><i class="icon-s-facebook"></i></a>
                                </li>
                            </ul>
                            <!-- /.social -->
                        </div>
                        <!-- /.info -->
                    </div>
                    <!-- /.text-overlay -->

                    <img src="{{URL::asset('assets/images/2014/anchal.jpg')}}">

                </div>
                <!-- /.member-image -->

                <figcaption class="member-details bordered no-top-border">
                    <h3>
						Anchal
						<span>Manager</span>
					</h3>
                </figcaption>

            </figure>
        </div>
        <!-- /.col -->


    </div>
    <!-- /.row -->
    <br>

    <h3 class="team-headline sidelines text-center"><span>UG Conveners</span></h3>

    <div class="row thumbs gap-md text-center">

        <div class="col-sm-4 thumb">
            <figure class="member">

                <div class="member-image">

                    <div class="text-overlay">
                        <div class="info">
                            <ul class="social">
                                <li><a href="https://www.facebook.com/Darshil.1994"><i class="icon-s-facebook"></i></a>
                                </li>
                            </ul>
                            <!-- /.social -->
                        </div>
                        <!-- /.info -->
                    </div>
                    <!-- /.text-overlay -->

                    <img src="{{URL::asset('assets/images/convener/mnp/darshil.jpg')}}">

                </div>
                <!-- /.member-image -->

                <figcaption class="member-details bordered no-top-border">
                    <h3>
												Darshil Dave 
												<span>Engineering Physics</span>
											</h3>
                </figcaption>

            </figure>
        </div>
        <!-- /.col -->

        <div class="col-sm-4	 thumb">
            <figure class="member">

                <div class="member-image">

                    <div class="text-overlay">
                        <div class="info">
                            <ul class="social">
                                <li><a href="https://www.facebook.com/suvajit.majumder1"><i class="icon-s-facebook"></i></a>
                                </li>
                            </ul>
                            <!-- /.social -->
                        </div>
                        <!-- /.info -->
                    </div>
                    <!-- /.text-overlay -->

                    <img src="{{URL::asset('assets/images/convener/mnp/suvajit.jpg')}}">

                </div>
                <!-- /.member-image -->

                <figcaption class="member-details bordered no-top-border">
                    <h3>
												Suvajit Majumdar 
												<span>Engineering Physics</span>
											</h3>
                </figcaption>

            </figure>
        </div>
        <!-- /.col -->

        <div class="col-sm-4	 thumb">
            <figure class="member">

                <div class="member-image">

                    <div class="text-overlay">
                        <div class="info">
                            <ul class="social">
                                <li><a href="https://www.facebook.com/vaibhavbhosale15"><i class="icon-s-facebook"></i></a>
                                </li>
                            </ul>
                            <!-- /.social -->
                        </div>
                        <!-- /.info -->
                    </div>
                    <!-- /.text-overlay -->

                    <img src="{{URL::asset('assets/images/convener/mnp/vaibhav.jpg')}}">

                </div>
                <!-- /.member-image -->

                <figcaption class="member-details bordered no-top-border">
                    <h3>
												Vaibhav Bhosale 
												<span>Computer Science and Engineering</span>
											</h3>
                </figcaption>

            </figure>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row thumbs gap-md text-center">

        <div class="col-sm-4 thumb">
            <figure class="member">

                <div class="member-image">

                    <div class="text-overlay">
                        <div class="info">
                            <ul class="social">
                                <li><a href="https://www.facebook.com/shashanka.viriventi"><i class="icon-s-facebook"></i></a>
                                </li>
                            </ul>
                            <!-- /.social -->
                        </div>
                        <!-- /.info -->
                    </div>
                    <!-- /.text-overlay -->

                    <img src="{{URL::asset('assets/images/convener/mnp/shashank.jpg')}}">

                </div>
                <!-- /.member-image -->

                <figcaption class="member-details bordered no-top-border">
                    <h3>
												Shashank Sharma
												<span>Civil Engineering</span>
											</h3>
                </figcaption>

            </figure>
        </div>
        <!-- /.col -->

     

        <div class="col-sm-4	 thumb">
            <figure class="member">

                <div class="member-image">

                    <div class="text-overlay">
                        <div class="info">
                            <ul class="social">
                                <li><a href="https://www.facebook.com/bhumesh.kumar.5686"><i class="icon-s-facebook"></i></a>
                                </li>
                            </ul>
                            <!-- /.social -->
                        </div>
                        <!-- /.info -->
                    </div>
                    <!-- /.text-overlay -->

                    <img src="{{URL::asset('assets/images/convener/mnp/bhumesh.jpg')}}">

                </div>
                <!-- /.member-image -->

                <figcaption class="member-details bordered no-top-border">
                    <h3>
												Bhumesh Kumar
												<span>Electrical Engineering</span>
											</h3>
                </figcaption>

            </figure>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->


</section>

<!-- ============================================================= SECTION – TEAM : END ============================================================= -->
			
@endsection