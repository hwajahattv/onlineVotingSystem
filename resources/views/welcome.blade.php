@extends('layouts.eVotingApp')

@section('content')
    <div class="content-body" style="margin-left: 0;">
        <div class="container-fluid">
            <div class="">
                <div style="height: 200px" class="">

                    <div class="card card-bd welcome_dashboard-card">
                        <div class="bg-secondary card-border" style="background:#C8DBBE !important;"></div>
                        <div class="card-body box-style">
                            <div class="media align-items-center">
                                <div class="media-body me-3 ">
                                    <h2 class=" text-black font-w700 text-center">The 2022 Papua New Guinea National Election Results</h2>
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
                                <div class="bg-warning card-border"></div>
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
                    <a href="{{ route('registerAsVoter') }}">
                        <div class="card card-bd welcome_dashboard-card">
                            <div class="bg-primary card-border"></div>
                            <div class="card-body box-style">
                                <div class="media align-items-center">
                                    <div class="media-body me-3">
                                        <h2 style="font-size: 1rem;" class="text-black font-w700">Get registered as a
                                            voter</h2>
                                        <span class="fs-14">Population Registration System</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div style="height: 200px" class="">
                    <div class="card card-bd welcome_dashboard-card">
                        <div class="bg-info card-border"></div>
                        <div class="card-body box-style">
                            <div class="media align-items-center">
                                <div class="media-body me-3">
                                    <h2 class="text-black font-w700">Cast your vote</h2>
                                    <span class="fs-14">Election ABC</span>
                                </div>
                                <i class='fas fa-vote-yea' style='font-size:42px; color: #3ECDFF'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
