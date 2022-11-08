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
                <iframe width="100%" height="" style="min-height: 542px" src="https://www.youtube.com/embed/erc27e6NkZk"
                        title="2017 NATEL Official Video Protecting Our Democracy" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>
            <div>
                <span>The Official 2017 National Elections Theme song and Awareness Video.</span>
            </div>
        </div>
    </div>

@endsection
@section('script')

    <script src="{{ asset('js/faq.js') }}"></script>
    <script src="{{ asset('js/faq2.js') }}"></script>
@endsection

