@extends('layouts.eVotingApp')

@section('links')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        .content-body {
            margin-left: 0;
        }
    </style>
@endsection
@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <h3 class="display-4 text-center">Candidates Participating</h3>
            <span>Total voters in this Region: {{$votesAreaWise['votersInRegion']}} &nbsp;</span>
            <span>Total voters in this Province: {{$votesAreaWise['votersInProvince']}} &nbsp;</span>
            <span>Total voters in this District: {{$votesAreaWise['votersInDistrict']}}</span>
            <div class="row mt-3">
                @foreach($candidates as $candidate)
                    <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                        <div class="card card-bd dashboard-card">
                            <div class="bg-secondary card-border" style="background:#C8DBBE !important;"></div>
                            <div class="card-body box-style">
                                <div class="media align-items-center">
                                    <div class="media-body me-3">
                                        <span class="">Votes:</span>
                                        <span class="count num-text text-black font-w700">{{$voteCount[$candidate->id]->c}}</span>
                                        <ul>
                                            <li class="fs-14">
                                                <img
                                                    src="{{asset('/img/uploads/candidate/'.$candidate->displayPicture)}}"
                                                    alt="">
                                            </li>
                                            <li class="fs-14">
                                                <div>
                                                    <h5 class="candidateNames">{{$candidate->name}} {{$candidate->surName}}</h5>
                                                    <div class="row">
                                                        <img class="col-md-5"
                                                             width="50px" height="50px"
                                                             src="{{asset('/img/uploads/partyFlags/'.$candidate->politicalParty->flagImage)}}"
                                                             alt="">
                                                        <span
                                                            class="col-md-7">{{$candidate->politicalParty->name}}</span>
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
                @foreach($voteCount as $number)
                    <input type="hidden" class="countData" value="{{$number->c}}">
                @endforeach

            </div>
            <div class="row">
                <div class="col-xl-6 col-xxl-12">
                    <div class="card">
                        <div class="card-header d-block border-0 pb-0">
                            <div class="d-flex justify-content-between pb-3">
                                <h4 class="mb-0 text-black fs-20">{{$election->name}} [Date: {{$election->date_of_election}}]</h4>
{{--                                <div class="dropdown">--}}
{{--                                    <a href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"--}}
{{--                                             xmlns="http://www.w3.org/2000/svg">--}}
{{--                                            <path--}}
{{--                                                d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"--}}
{{--                                                stroke="#575757" stroke-width="2" stroke-linecap="round"--}}
{{--                                                stroke-linejoin="round"></path>--}}
{{--                                            <path--}}
{{--                                                d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z"--}}
{{--                                                stroke="#575757" stroke-width="2" stroke-linecap="round"--}}
{{--                                                stroke-linejoin="round"></path>--}}
{{--                                            <path--}}
{{--                                                d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z"--}}
{{--                                                stroke="#575757" stroke-width="2" stroke-linecap="round"--}}
{{--                                                stroke-linejoin="round"></path>--}}
{{--                                        </svg>--}}
{{--                                    </a>--}}
{{--                                    <div class="dropdown-menu dropdown-menu-left">--}}
{{--                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>--}}
{{--                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="fs-36 text-black font-w600 me-4">Polling Results</span>
{{--                                <span class="fs-36 text-black font-w600 me-4">25%</span>--}}
                                <div>
                                    <svg class="me-2" width="27" height="14" viewBox="0 0 27 14"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 13.435L13.435 0L26.8701 13.435H0Z" fill="#FF0000"></path>
                                    </svg>
                                    <span id="leadingCandidate"></span>
{{--                                    <span id="leading">last month $563,443</span>--}}
                                </div>
                            </div>
                        </div>
                        <div class="card-body pb-0 px-2 pt-2">
                            <div  class="timeline-chart">Leading: </div>
                            <div id="resultsChart" class="timeline-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-6 col-sm-6">
                    <div class="card">
                        <div class="card-header border-0 pb-0">
                            <h4 class="fs-20 mb-0 text-black">New Clients</h4>
                            <div class="dropdown">
                                <a href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                            stroke="#575757" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z"
                                            stroke="#575757" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z"
                                            stroke="#575757" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                                <div class="dropdown-menu dropdown-menu-left">
                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-center pb-0 px-2 pt-2">
                            <div id="widgetChart1" class="widgetChart1 dashboard-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-6 col-sm-6">
                    <div class="card">
                        <div class="card-header border-0 pb-0">
                            <h4 class="fs-20 mb-0 text-black">Monthly Target</h4>
                            <div class="dropdown">
                                <a href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                            stroke="#575757" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z"
                                            stroke="#575757" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z"
                                            stroke="#575757" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                                <div class="dropdown-menu dropdown-menu-left">
                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-center pt-0">
                            <div id="radialChart" class="monthly-project-chart"></div>
                            <span class="fs-14 text-black d-block op5">100 Projects/ monthy</span>
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
