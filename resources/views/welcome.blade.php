@extends('layouts.eVotingApp')
@section('links')
{{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}
@endsection
@section('content')
<div class="modal fade" id="addProjectSidebar">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-group">
                    <label class="text-black font-w500">Enter your voter ID:</label>
                    <input type="text" name="voterID" onkeyup="generateVoteCastURL();" value="" id="inputID" class=" inputID form-control">
                    <a id="openBallotBtn" class="glossy-button glossy-button--gold" href="javascript:void(0)">
                        Proceed
                    </a><br>
                    <a href="{{route('voterLookUp')}}" class="link-secondary">Don't have voter ID? Click here</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content-body welcome_page_body">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-center">
            <img class="mb-3 mr-2" src="{{asset('img/pngFlag.png')}}" width="100px" alt="Flag">
            <h3 class=" text-black font-w600">WELCOME TO "PNG's BIOMETRIC REGISTRATION & e-VOTING SYSTEM"</h3>
        </div>
        <div class="card card-bd welcome_dashboard-card">
            <div class="card-border1" style='background-color: rgb(252,210,15)'></div>
            <div class="card-body box-style">
                <div class="media">
                    <div class="media-body me-3 ">
                        <div class="card-container">
                            <div class=" controllinks ">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-users fa-5x" style='color: #EA0'></i>
                                </div>
                            </div>
                            <h2 class=" text-black font-w700 text-center card-top-text">Population Registration
                                Portal</h2>
                            <div class="col-md-8 d-flex justify-content-center menublock ">
                                <div class="col-md-4 text-center">
                                    <span class="glossy-text">Register as:</span>
                                </div>
                                <div class="col-md-4 d-flex justify-content-center align-items-center">
                                    <a class="glossy-button glossy-button--gold" href="{{ route('registerAsVoter') }}">
                                        Voter
                                    </a>
                                </div>
                                <div class="col-md-4 d-flex justify-content-center align-items-center">
                                    <a class="glossy-button glossy-button--gold" href="{{ route('registerAsCandidate') }}">
                                        Candidate
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-bd welcome_dashboard-card">
            <div class="card-border1" style='background-color: rgb(207,9,33)'></div>
            <div class="card-body box-style">
                <div class="media">
                    <div class="media-body me-3  ">
                        <div class="card-container">
                            <div class="d-flex justify-content-center controllinks ">
                                <i class="fas fa-vote-yea fa-5x" style='color: #EA0'></i>
                            </div>
                            <h2 class=" text-black font-w700 text-center card-top-text">Election Voting Portal</h2>


                            <div class="d-flex justify-content-center menublock ">
                                <a class="glossy-button glossy-button--gold" data-bs-toggle="modal" data-bs-target="#addProjectSidebar"><span style="color: white">Cast your vote</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-bd welcome_dashboard-card">
            <div class="card-border1" style='background-color: #000'></div>
            <div class="card-body box-style">
                <div class="media ">
                    <div class="media-body me-3 ">
                        <div class="card-container">
                            <div class="d-flex justify-content-center controllinks ">
                                <i class="fa-solid fa-square-poll-vertical fa-5x" style='color: #EA0'></i>
                            </div>
                            <h2 class="text-black font-w700 text-center card-top-text">Elections Results
                                Portal</h2>
                            <div class="d-flex justify-content-center menublock ">
                                <a class="glossy-button glossy-button--gold" href="{{ url('/resultsHome') }}">
                                    Access now
                                </a>

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
