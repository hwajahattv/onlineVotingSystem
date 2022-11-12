
@extends('layouts.eVotingApp')
@section('links')
    <script>document.getElementsByTagName("html")[0].className += " js";</script>
    <link href="{{ asset('css/faq.css') }}" rel="stylesheet">
@endsection
@section('content')
            <div class="jumbotron progress-bar-striped bg-danger mt-2 d-flex flex-column">
                <h4 class="display-6 text-center m-2">Your Voter ID is not found in our record.</h4>
                <a class="btn btn-outline-dark text-center m-2" href="{{route('voterLookUp')}}">Click here to find your Voter ID.</a>
                <a class="btn btn-outline-dark text-center m-2" href="{{route('registerAsVoter')}}">Or click here to get registered as a Voter.</a>
            </div>
@endsection

