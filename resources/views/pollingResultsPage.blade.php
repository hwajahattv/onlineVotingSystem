@extends('layouts.eVotingApp')

@section('links')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<style>
    /* .content-body {
        margin-left: 0;
    } */

</style>
@endsection
@section('content')

<div class="content-body">
    <div class="container-fluid">
        <h3 class="display-4 text-center">Candidates Participating</h3>
        <span class="glossy-text">Total voters in this District: {{$votesAreaWise['votersInDistrict']}}</span>
        <div class="row mt-3">
            @foreach($voteCount as $vote)

            <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                <div class="card card-bd dashboard-card">
                    <div class="bg-secondary card-border" style="background:#C8DBBE !important;"></div>
                    <div class="card-body box-style">
                        <div class="media align-items-center">
                            <div class="media-body me-3">
                                <span class="">Votes:</span>

                                <span class="count num-text text-black font-w700">{{$vote->c}}</span>
                                <input type="hidden" class="countData" value="{{$vote->c}}">

                                <ul>
                                    <li class="fs-14">
                                        {{-- <img src="{{asset('/img/uploads/candidate/'.$vote->displayPicture)}}" alt=""> --}}

                                    </li>
                                    <li class="fs-14">
                                        <div>
                                            <h5 class="candidateNames">{{$vote->cname}}</h5>
                                            <div class="row">
                                                {{-- <img class="col-md-5" width="50px" height="50px" src="{{asset('/img/uploads/partyFlags/'.$candidate->politicalParty->flagImage)}}" alt=""> --}}
                                                {{-- <span class="col-md-7">{{$candidate->politicalParty->name}}</span> --}}
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
        <div class="row">
            <div class="col-xl-6 col-xxl-12">
                <div class="card">
                    <div class="card-header d-block border-0 pb-0">
                        <div class="pb-3">
                            <h4 class="mb-0 text-black fs-20">{{$election->name}} [Date: {{$election->date_of_election}}]</h4>
                            <h6 class="mb-0 text-black fs-20">Total Votes: {{$votesAreaWise['votersInDistrict']}}</h6>
                            <h6 class="mb-0 text-black fs-20">Turn out till now: {{$votesAreaWise['turn_out']}}%</h6>
                            @if(!$majority)
                            <a href="{{route('fetchResults2',['district'=>$district,'election'=>$election->id])}}" class="btn btn-outline-primary">Count 2nd Preference Votes</a>


                            @endif
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="fs-36 text-black font-w600 me-4">1st preference Results</span>
                            <div>
                                <svg class="me-2" width="27" height="14" viewBox="0 0 27 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 13.435L13.435 0L26.8701 13.435H0Z" fill="#FF0000"></path>
                                </svg>
                                <span id="leadingCandidate"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pb-0 px-2 pt-2">
                        <div class="timeline-chart">Leading: </div>
                        <div id="resultsChart" class="timeline-chart"></div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<!--**********************************


@endsection
@section('script')
    <script src="{{ asset('js/dashboard/dashboard-results.js') }}"></script>
@endsection
