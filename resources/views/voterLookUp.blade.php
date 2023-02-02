@extends('layouts.eVotingApp')

@section('links')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">


@endsection
@section('content')
<div class="content-body" style="margin-left: 0;">
    <div class="container-fluid">
        @if(Session::has('message'))
        <div class="jumbotron m-2 bg-success">
            <h4 class="display-6 text-center">{{ Session::get('message') }}</h4>
        </div>
        @endif
        <h1>Fill in the elector details to find if you are registered.</h1>
        <div class="container-login100">
            <div class="">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data" action="{{ route('findMe') }}">
                            <div class="row">
                                <div class="col-md-7 row align-items-center justify-content-center">
                                    @csrf
                                    <div class="form-group row align-items-center">
                                        <label for="staticEmail" class="col-sm-4 col-form-label">First name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control addInput" style="height: 40px;" name="name" id="name" aria-describedby="" placeholder="Enter the first name">
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <label for="staticEmail" class="col-sm-4 col-form-label">Last name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control addInput" style="height: 40px;" name="surName" id="surName" aria-describedby="" placeholder="Enter the last name">
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <label for="staticEmail" class="col-sm-4 col-form-label">Select Region</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" style="height: 40px;" name="birth_region" id="region_select">
                                                <option value="" disabled selected="selected">Select</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <label for="staticEmail" class="col-sm-4 col-form-label">Select Province</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" style="height: 40px;" name="birth_province" id="province_select">
                                                <option value="" disabled selected="selected">Select
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <label for="staticEmail" class="col-sm-4 col-form-label">Select District</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" style="height: 40px;" name="birth_district" id="district_select">
                                                <option value="" disabled selected="selected">Select
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <label for="staticEmail" class="col-sm-4 col-form-label">Select LLG</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" style="height: 40px;" name="birth_LLG" id="LLG_select">
                                                <option value="" disabled selected="selected">Select
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <label for="staticEmail" class="col-sm-4 col-form-label">Select ward</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" style="height: 40px;" name="birth_ward" id="ward_select">
                                                <option value="" disabled selected="selected">Select
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" class="glossy-button glossy-button--gold col-md-8">Check if I am registered.</button>

                                </div>
                                <div class="col-md-5 ">
                                    <div class="bg-light p-4" id="dataNotFound">

                                        <h1 class="text-danger display-3 text-center">DATA NOT FOUND</h1>
                                        <div class="d-flex justify-content-center">
                                            <a href="{{route('registerAsVoter')}}" class="glossy-button glossy-button--gold">Click here to register.</a>

                                        </div>
                                    </div>

                                    <div class=" bg-success" id="dataFound">
                                        <h1 class="text-white display-6 text-center">You are registered.</h1>
                                        <span class="text-white bg-info-hover display-6 text-center">Voter ID: </span>
                                        <span class="text-white bg-info-hover display-6 text-center" id="voterID"></span>
                                        <div class="modal-content profile-modal">
                                            <!-- SIDEBAR USERPIC -->
                                            <div class="d-flex justify-content-end">
                                                <img src="" id="candidateImage" class="img-responsive" alt="">

                                                <!-- END SIDEBAR USERPIC -->
                                                <!-- SIDEBAR USER TITLE -->
                                                <div class="profile-usertitle">
                                                    <div>
                                                        <span class="profile-usertitle-name">Full Name: </span>
                                                        <div class="profile-usertitle-nameDynamic">
                                                            <span id="candidateFirstName"></span>
                                                            <span id="candidateMiddleName"></span>
                                                            <span id="candidateSurName"></span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <span class="profile-usertitle-name">Current Address: </span>
                                                        <div class="profile-usertitle-nameDynamic">
                                                            <span id="village"></span>
                                                            <span id="ward"></span>
                                                            <span id="LLG"></span>
                                                            <span id="district"></span>
                                                            <span id="province"></span>
                                                            <span id="region"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="" id="castVoteBtn" class="bt btn-outline-info">Click here to cast your Vote.</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
<script src="{{asset('js/voterLookUp.js')}}"></script>
@endsection
