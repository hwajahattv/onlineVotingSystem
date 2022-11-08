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
                <div style="height: 200px" class="">
                    <div class="card card-bd welcome_dashboard-card">
                        <div class="bg-warning card-border1"></div>
                        <div class="card-body box-style">
                            <div class="media align-items-center">
                                <div class="media-body me-3 ">
                                    <h2 class=" text-black font-w700 text-center">
                                        National Election Results Website Videos</h2>
                                    <ul>
                                        <li class="fs-14 welcome_page_li">
                                            <a class="welcome_page_btn" href="{{ url('/home') }}">
                                                THE PNGEC RESULTS WEBSITE
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
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
                <div style="height: 200px" class="">
                    <div class="card card-bd welcome_dashboard-card">
                        <div class="bg-danger card-border1"></div>
                        <div class="card-body box-style">
                            <div class="media align-items-center">
                                <div class="media-body me-3">
                                    <h2 class="text-black font-w700 text-center">Check out our Official National Election Video and Song</h2>
                                    <ul>
                                        <li class="fs-14 welcome_page_li">
                                            <a class="welcome_page_btn" href="{{ route('electionVideoPage') }}">
                                                PLAY ME
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <i class='fa-solid fa-video' style='font-size:42px; color: #dc3545'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
