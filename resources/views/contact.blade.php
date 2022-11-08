@extends('layouts.eVotingApp')
@section('links')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="content-body" style="margin-left: 0;">
        <div class="container-fluid">
            <div class="text-bg" style="padding: 0px">
                <h1>ELECTION THEME SONG (VIDEO).</h1>
            </div>
            <div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3935.672448497317!2d147.1810952145341!3d-9.450093893229463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x690230d6e191914b%3A0x5edecd8269e3c619!2sFrangipani%20St%2C%20Port%20Moresby%2C%20Papua%20New%20Guinea!5e0!3m2!1sen!2s!4v1667889146293!5m2!1sen!2s"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

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
                                        <a class="welcome_page_btn" href="{{ url('/home') }}">
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

