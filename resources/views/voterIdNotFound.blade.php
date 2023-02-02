@extends('layouts.eVotingApp')
@section('links')
<script>
    document.getElementsByTagName("html")[0].className += " js";

</script>
{{-- <link href="{{ asset('css/faq.css') }}" rel="stylesheet"> --}}
<link href="{{ asset('css/style.css') }}" rel="stylesheet">


@endsection
@section('content')
<div class="jumbotron progress-bar-striped bg-danger m-2 d-flex flex-column" style="position: relative;
top: 80px;">

    <h4 class="display-6 text-center">Your Voter ID is not found in our record.</h4>
    <div class=" d-flex justify-content-center align-items-center">
        <a class="glossy-button glossy-button--gold" href="{{route('voterLookUp')}}">Click here to find your Voter ID.</a>
    </div>
    <div class=" d-flex justify-content-center align-items-center">
        <a class="glossy-button glossy-button--gold" href="{{route('registerAsVoter')}}">Or click here to get registered as a Voter.</a>
    </div>
</div>
@endsection
