@extends('layouts.eVotingApp')
@section('links')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="content-body" style="margin-left: 0;">
        <div class="container-fluid">

            <div style="height: 280px" class="row">
                <div class="card card-bd welcome_dashboard-card col-md-6">
                    <div class="bg-secondary card-border" style="background:#C8DBBE !important;"></div>
                    <div class="card-body box-style">
                        <div class="media align-items-center ">
                            <div class="media-body me-3 ">
                                <h2 class=" text-black font-w700 text-center">Contact US</h2>
                                <span class="text-black">Headquarters:</span>
                                <br>
                                <span class="text-white mt-2">Phone: 303 5559</span>
                                <br>
                                <span class="text-white mt-2">Email: contactus@png-biometric-evoting.online</span>
                                <ul class="mt-2">
                                    <li class="fs-14 welcome_page_li">
                                        <a class="welcome_page_btn" href="{{ url('/allRegionOffices') }}">
                                            MORE PROVINCIAL OFFICES
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')

    <script src="{{ asset('js/faq.js') }}"></script>
    <script src="{{ asset('js/faq2.js') }}"></script>
@endsection

