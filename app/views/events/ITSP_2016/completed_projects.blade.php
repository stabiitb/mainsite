
@extends('layout.default')

@section('content')
    <style type="text/css">

    </style>

    <main>
        <section class="light-bg">
            <div class="container inner">

                <div class="row">
                    <div class="col-md-8 col-sm-9 center-block text-center">
                        <header>
                            <h1>ITSP 2016 Completed Projects</h1>
                        </header>
                    </div><!-- /.col -->
                </div><!-- ./row -->

                <div class="row">
                    <div class="col-xs-12 inner-top">
                        <div class="tabs tabs-top tab-container">

                            <ul class="etabs text-center">
                                <li class="tab"><a href="#tab-0" class="">Aeromodelling Club</a></li>
                                <li class="tab"><a href="#tab-1" class="">Electronics Club</a></li>
                                <li class="tab"><a href="#tab-2" class="">Maths and Physics Club</a></li>
                                <li class="tab"><a href="#tab-3" class="">Robotics Club</a></li>
                                <li class="tab"><a href="#tab-4" class="">Web and Coding Club</a></li>
                                <li class="tab"><a href="#tab-5" class="">All</a></li>
                            </ul><!-- /.etabs -->

                            <div class="panel-container">

                                <!--===========================================-->

                                @foreach($clubs as $key1 => $myclub)

                                    <div class="tab-content" id="tab-{{$key1}}">
                                        <div class="row">
                                            <table border="0" align="center" class="table">
                                                <tbody>
                                                <tr>
                                                    <th>
                                                        Sr No
                                                    </th>
                                                    <th>
                                                        Team id
                                                    </th>
                                                    <th>
                                                        Team Name
                                                    </th>
                                                    <th>
                                                        Project Name
                                                    </th>
                                                    <th>
                                                        Club
                                                    </th>
                                                    <th>
                                                        Team Members
                                                    </th>
                                                    <th>
                                                        Link to Abstract
                                                    </th>

                                                </tr>

                                                @foreach($myclub as $key => $project)
                                                    <tr>
                                                        <td>{{$key + 1}}</td>

                                                        <td>{{$project->id}}</td>

                                                        <td>{{$project->team_name}}</td>
                                                        <td><b><a href="{{
																URL::asset('media/ITSP2016/final_documentation/' . str_replace(' ','', $project->club) . '/' . $project->id .  '.pdf')}}">
                                                                    {{$project->project_name}}</a></b></td>
                                                        <td>{{$project->club}}</td>
                                                        <td>
                                                            @if($project->user1 != '')
                                                                <li>{{User::find($project->user1)->name;}}</li>
                                                            @endif
                                                            @if($project->user2 != '')
                                                                <li>{{User::find($project->user2)->name;}}</li>
                                                            @endif
                                                            @if($project->user3 != '')
                                                                <li>{{User::find($project->user3)->name;}}</li>
                                                            @endif
                                                            @if($project->user4 != '')
                                                                <li>{{User::find($project->user4)->name;}}</li>
                                                            @endif

                                                            <br>
                                                            Email: {{User::find($project->user1)->email;}}
                                                        </td>
                                                        <td><b><a href="{{
																URL::asset('media/ITSP2016/abstracts/' . str_replace(' ','', $project->club) . '/' . $project->id .  '.pdf')}}">
                                                                    Link to Abstract</a></b></td>


                                                    </tr>

                                                @endforeach

                                                </tbody>
                                            </table>
                                        </div><!-- /.row -->
                                    </div><!-- /.tab-content -->
                                    @endforeach

                                            <!--===========================================-->

                            </div><!-- /.panel-container -->

                        </div><!-- /.tabs -->
                    </div><!-- /.col -->
                </div><!-- /.row -->

            </div><!-- /.container -->
        </section>
    </main>
@endsection