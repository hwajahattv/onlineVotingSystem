@extends('layouts.eVotingApp')
@section('links')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="content-body" style="margin-left: 0;">
        <div class="container-fluid">
            <div class="">
                <div class="">
                    <div class="card card-bd welcome_dashboard-card">
                        <div class="card-border1" style='background-color: #EA0'></div>
                        <div class="card-body box-style">
                            <div class="media align-items-center">
                                <div class="media-body me-3 ">
                                    <div class="media-body me-3 ">
                                        <h2 class=" text-black font-w700 text-center">Population Registration
                                            Portal</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-10 d-flex justify-content-center">

                                            <a class="glossy-button glossy-button--gold"
                                               href="{{ route('registerAsVoter') }}">
                                                VOTER
                                            </a>

                                            <a class="glossy-button glossy-button--gold"
                                               href="{{ route('registerAsCandidate') }}">
                                                Candidate
                                            </a>

                                        </div>
                                        <div class="col-lg-2 d-flex justify-content-center" style="margin-top: -30px;">
                                            <i class="fa fa-users fa-5x" style='color: #EA0'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="card card-bd welcome_dashboard-card">
                        <div class="card-border1" style='background-color: #EA0'></div>
                        <div class="card-body box-style">
                            <div class="media align-items-center">
                                <div class="media-body me-3 ">
                                    <div class="media-body me-3 ">
                                        <h2 class=" text-black font-w700 text-center">Election Voting
                                            Portal</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-10 d-flex justify-content-center">

                                            <a class="glossy-button glossy-button--gold"
                                               href="{{ url('/voterLookUp') }}">
                                                Cast your vote
                                            </a>

                                        </div>
                                        <div class="col-lg-2 d-flex justify-content-center" style="margin-top: -30px;">
                                            <i class="fas fa-vote-yea fa-5x" style='color: #EA0'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="card card-bd welcome_dashboard-card">
                        <div class="card-border1" style='background-color: #EA0'></div>
                        <div class="card-body box-style">
                            <div class="media align-items-center">
                                <div class="media-body me-3 ">
                                    <div class="media-body me-3 ">
                                        <h2 class=" text-black font-w700 text-center">PNG Elections Results
                                            Portal</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-10 d-flex justify-content-center">
                                            <a class="glossy-button glossy-button--gold"
                                               href="{{ url('/resultsHome') }}">
                                                Access now
                                            </a>
                                        </div>
                                        <div class="col-lg-2 d-flex justify-content-center" style="margin-top: -30px;">
                                            <i class="fa-solid fa-square-poll-vertical fa-5x" style='color: #EA0'></i>
                                        </div>
                                    </div>
                                </div>
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
