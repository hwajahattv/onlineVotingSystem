@extends('layouts.eVotingApp')
@section('links')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="content-body" style="margin-left: 0;">
        <div class="container-fluid">
            <div class="">
                <div style="height: 200px" class="">
                    <div class="card card-bd welcome_dashboard-card">
                        <div class="bg-secondary card-border1" style="background:#C8DBBE !important;"></div>
                        <div class="card-body box-style">
                            <div class="media align-items-center">
                                <div class="media-body me-3 ">
                                    <h2 class=" text-black font-w700 text-center">The 2022 Papua New Guinea National
                                        Election Results</h2>
                                    <ul>
                                        <li class="fs-14 welcome_page_li">
                                            <a class="welcome_page_btn" href="{{ url('/home') }}">
                                                VIEW THE ELECTION RESULTS HERE
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                {{--                <div style="height: 200px" class="">--}}
                {{--                    <div class="card card-bd welcome_dashboard-card">--}}
                {{--                        <div class="bg-warning card-border1"></div>--}}
                {{--                        <div class="card-body box-style">--}}
                {{--                            <div class="media align-items-center">--}}
                {{--                                <div class="media-body me-3 ">--}}
                {{--                                    <h2 class=" text-black font-w700 text-center">--}}
                {{--                                        National Election Results Website Videos</h2>--}}
                {{--                                    <ul>--}}
                {{--                                        <li class="fs-14 welcome_page_li">--}}
                {{--                                            <a class="welcome_page_btn" href="{{ url('/home') }}">--}}
                {{--                                                THE PNGEC RESULTS WEBSITE--}}
                {{--                                            </a>--}}
                {{--                                        </li>--}}
                {{--                                    </ul>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                <div style="height: 200px" class="">
                    <div class="card card-bd welcome_dashboard-card">
                        <div class="bg-primary card-border1"></div>
                        <div class="card-body box-style">
                            <div class="media align-items-center">
                                <div class="media-body me-3 ">
                                    <h2 class=" text-black font-w700 text-center">Population Registration System</h2>
                                    <ul>
                                        <li class="fs-14 welcome_page_li">
                                            <a class="welcome_page_btn" href="{{ route('registerAsVoter') }}">
                                                GET REGISTERED AS A VOTER
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <i class="fa fa-users" style='font-size:42px; color: #007bff'></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="height: 200px" class="">
                    <div class="card card-bd welcome_dashboard-card">
                        <div class="bg-success2 card-border11"></div>
                        <div class="card-body box-style">
                            <div class="media align-items-center">
                                <div class="media-body me-3">
                                    <h2 class="text-black font-w700 text-center">Cast your vote</h2>
                                    <span class="fs-14 text-white">Test Election</span>
                                </div>
                                <i class='fas fa-vote-yea' style='font-size:42px; color: #612697'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
{{--    <script>--}}
{{--        function fetchAPI(id){--}}
{{--            // preventDefault();--}}
{{--            console.log(id);--}}

{{--            var url='https://encore.mediaroom.com/api/newsfeed_releases/get.php?'+id;--}}
{{--            $.ajax({--}}
{{--                type: "GET",--}}
{{--                url: url,--}}
{{--                accepts: {--}}
{{--                    text: "application/xml"--}}
{{--                },--}}
{{--                cache: false,--}}
{{--                success: function (event, xhr) {--}}
{{--                    //var json = "<div class=\"alert alert-success\" role=\"alert\">"+ JSON.stringify(data, null, 4) +"</div>";--}}
{{--                    var xml = "<div id=\"insert-box\" class=\"alert alert-success\" role=\"alert\">"+xhr.responseXML+"</div>";--}}
{{--                    $('#listFilms').html(xml);--}}

{{--                    $("#btn-list").prop("disabled", false);--}}
{{--                },--}}
{{--                error: function (e) {--}}
{{--                    var feedback = "<div id=\"insert-box\" class=\"alert alert-warning\" role=\"alert\"></div>"--}}
{{--                    $('#listFilms').html(feedback);--}}

{{--                    console.log("ERROR : ", e);--}}
{{--                    $("#btn-list").prop("disabled", false);--}}
{{--                }--}}
{{--            });--}}
{{--        }--}}
{{--    </script>--}}
@endsection
