@extends('layouts.eVotingApp')

@section('links')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="content-body" style="margin-left: 0;">
    <div class="container-fluid">
        <div class="container-login100">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form method="post" enctype="multipart/form-data" action="{{url('/castVotePost/'.$voter->id)}}">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <select name="electionID">
                            <option value="" selected disabled>Select Election</option>
                            @foreach($elections as $election)
                            <option {{ old('electionID') == $election->id ? "selected" : "" }} value="{{$election->id}}">{{$election->name}} {{$election->date_of_election}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <h3 class="text-center">Area of Election: <span> {{$voter->current_ward}} , {{$voter->current_LLG}} , {{$voter->current_district}} , {{$voter->current_province}} , {{$voter->current_region}}</span>
                </h3>
                <h3 class="text-center">Candidates:</h3>

                <div class="row">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <th>Name</th>
                            <th>Party</th>
                        </thead>
                        <tbody>
                            @foreach($candidates as $candidate)
                            <tr>
                                <td class="d-flex align-items-center">{{$candidate->id}}<img src="{{asset('/img/uploads/candidate/'.$candidate->displayPicture)}}" id="candidateImage" width="100px" class="img-responsive" alt="Candidate-Image">

                                    <div class="profile-usertitle-nameDynamic">
                                        <span id="candidateFirstName">{{$candidate->name}}</span>
                                        <span id="candidateMiddleName">{{$candidate->middleName}}</span>
                                        <span id="candidateSurName">{{$candidate->surName}}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="profile-usertitle-nameDynamic">
                                        <img src="{{asset('/img/uploads/partyFlags/'.$candidate->politicalParty->flagImage)}}" width="50px" height="40px" id="partyFlag" class="img-responsive" alt="PartyFlag-image">
                                        <span id="party">{{$candidate->politicalParty->name}}</span>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="first_pref">1st Preference Vote: </label>
                        <select name="candidateID1" id="candidateID1" class="form-control form-control-lg">
                            <option value="" selected disabled>Select candidate to vote</option>
                            @foreach($candidates as $candidate)
                            <option value="{{$candidate->id}}">{{$candidate->name}} <span style="font-size: 8px;"> of </span> {{$candidate->politicalParty->name}}
                            </option>
                            @endforeach
                        </select>
                        <div class="hideField" id="2nd_pref_block">
                            <label for="second_pref">2nd Preference Vote: </label>
                            <select name="candidateID2" id="candidateID2" class="form-control form-control-lg">
                                <option value="" selected disabled>Select candidate to vote</option>
                                @foreach($candidates as $candidate)
                                <option value="{{$candidate->id}}">{{$candidate->name}} <span style="font-size: 8px;"> of </span> {{$candidate->politicalParty->name}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="hideField" id="3rd_pref_block">
                            <label for="third_pref">3rd Preference Vote: </label>
                            <select name="candidateID3" id="candidateID3" class="form-control form-control-lg">
                                <option value="" selected disabled>Select candidate to vote</option>
                                @foreach($candidates as $candidate)
                                <option value="{{$candidate->id}}">{{$candidate->name}} <span style="font-size: 8px;"> of </span> {{$candidate->politicalParty->name}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <input name="voterID" type="hidden" value="{{$voter->id}}">
                <button type="submit" class="btn btn-primary btn-lg">Cast vote</button>
            </form>

        </div>
    </div>
</div>
@endsection
