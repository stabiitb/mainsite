@extends('events.Hostel_Events.layout')

@section('inner-content')

                <div class="container">
                    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-7  col-sm-8 ">
                        <div class="panel panel-info" >
                            <div class="panel-heading">
                                <div class="panel-title centered" >Submit Documentation</div>
                                <!-- <div style="float:right; font-size: 80%; position: relative; "><a href="#">Forgot password?</a></div>  -->
                            </div>

                            <div style="padding-top:30px" class="panel-body" >

                                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                                <form action="{{route('events.Hostel_Events.auth')}}" class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
                                {{--<form action="{{route('events.Hostel_Events.techform._auth')}}" class="form-horizontal" method="post" role="form" enctype="multipart/form-data">--}}

                                    <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="icon-star"></i></span>
                                        <input id="name" type="text" class="form-control" name="user_name" value="{{Input::old('user_name')}}" placeholder="Name">
                                    </div>
                                    <div style="margin-bottom: 25px" class="input-group">

                                        Date of Event:
                                        <input type="date" class="form-control" name="date" value="{{Input::old('date')}}" placeholder="Date">
                                    </div>

                                    <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="icon-star"></i></span>
                                        <input id="roll" type="text" class="form-control" name="event_name" value="{{Input::old('event_name')}}" placeholder="Event Name">
                                    </div>

                                    <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="icon-star"></i></span>
                                        <span>Choose the Hostel</span>
                                    </div>
                                    <table class="table">
                                        <div >
                                            <td><input type="checkbox" name="Hostel[]" value="Hostel 1"></td><td>Hostel 1</td>
                                            </tr>
                                            <td><input type="checkbox" name="Hostel[]" value="Hostel 2"></td><td>Hostel 2</td>
                                            </tr>
                                            <td><input type="checkbox" name="Hostel[]" value="Hostel 3"></td><td>Hostel 3</td>
                                            </tr>
                                            <td><input type="checkbox" name="Hostel[]" value="Hostel 4"></td><td>Hostel 4</td>
                                            </tr>
                                            <td><input type="checkbox" name="Hostel[]" value="Hostel 5"></td><td>Hostel 5</td>
                                            </tr>
                                            <td><input type="checkbox" name="Hostel[]" value="Hostel 6"></td><td>Hostel 6</td>
                                            </tr>
                                            <td><input type="checkbox" name="Hostel[]" value="Hostel 7"></td><td>Hostel 7</td>
                                            </tr>
                                            <td><input type="checkbox" name="Hostel[]" value="Hostel 8"></td><td>Hostel 8</td>
                                            </tr>
                                            <td><input type="checkbox" name="Hostel[]" value="Hostel 9"></td><td>Hostel 9</td>
                                            </tr>
                                            <td><input type="checkbox" name="Hostel[]" value="Hostel 10"></td><td>Hostel 10</td>
                                            </tr>
                                            <td><input type="checkbox" name="Hostel[]" value="Hostel 11"></td><td>Hostel 11</td>
                                            </tr>
                                            <td><input type="checkbox" name="Hostel[]" value="Hostel 12"></td><td>Hostel 12</td>
                                            </tr>
                                            <td><input type="checkbox" name="Hostel[]" value="Hostel 13"></td><td>Hostel 13</td>
                                            </tr>
                                            <td><input type="checkbox" name="Hostel[]" value="Hostel 14"></td><td>Hostel 14</td>
                                            </tr>
                                            <td><input type="checkbox" name="Hostel[]" value="Hostel 15"></td><td>Hostel 15</td>
                                            </tr>
                                            <td><input type="checkbox" name="Hostel[]" value="Hostel 16"></td><td>Hostel 16</td>
                                            </tr>
                                        </div>
                                    </table>
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
                                                <td><input type="radio" name="club" value="BioTech Club"></td><td>Bio Tech Club</td>
                                            </tr>
                                        </div>

                                    </table>



                                    <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="icon-star"></i></span>
                                        <input id="roll" type="text" class="form-control" name="youtube_video" value="{{Input::old('youtube_video')}}" placeholder="Youtube Video URL">
                                    </div>



                                    <div style="margin-bottom: 25px" class="input-group">
                                        <span>Upload file Documentation pdf and Photographs Links</span>
                                    </div>
                                    <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="icon-star"></i></span>
                                        <input type="text" class="form-control" name="doc_link" value="{{Input::old('doc_link')}}" placeholder="Documentation Link">
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