@extends('layouts.eVotingApp')
@section('links')
{{--    <link href="{{ asset('css/style.css') }}" rel="stylesheet">--}}
@endsection
@section('content')
    <div class="modal fade" id="addProjectSidebar">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="text-black font-w500">Enter your voter ID:</label>
                        <input type="text" name="voterID" onkeyup="generateVoteCastURL();" value="" id="inputID"
                               class=" inputID form-control">
                        <a id="openBallotBtn" class="glossy-button glossy-button--gold"
                           href="javascript:void(0)">
                            Proceed
                        </a><br>
                        <a href="" class="link-secondary">Don't have voter ID? Click here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                                        <div class="col-lg-10 row">
                                            <div class="col-sm-6 d-flex justify-content-center">
                                                <a class="glossy-button glossy-button--gold"
                                                   href="{{ route('registerAsVoter') }}">
                                                    VOTER
                                                </a>
                                            </div>
                                            <div class="col-sm-6 d-flex justify-content-center">
                                                <a class="glossy-button glossy-button--gold"
                                                   href="{{ route('registerAsCandidate') }}">
                                                    Candidate
                                                </a>
                                            </div>
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

                                            <a class="glossy-button glossy-button--gold" data-bs-toggle="modal"
                                               data-bs-target="#addProjectSidebar"><span style="color: white">Cast your vote</span></a>

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
    <script src="{{asset('/js/generateVoteCastURL.js')}}"></script>
@endsection
