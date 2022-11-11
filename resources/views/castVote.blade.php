@extends('layouts.eVotingApp')

@section('links')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="content-body" style="margin-left: 0;">
        <div class="container-fluid">
            <div class="container-login100">
                <div class="">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data"
                                  action="{{url('/castVotePost/'.$voter->id)}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <select name="electionID">
                                            <option value="" selected disabled>Select Election</option>
                                            @foreach($elections as $election)
                                                <option
                                                    value="{{$election->id}}">{{$election->name}} {{$election->date_of_election}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <h3 class="text-center">Area of Election: <span> {{$voter->current_ward}} , {{$voter->current_LLG}} , {{$voter->current_district}} , {{$voter->current_province}} , {{$voter->current_region}}</span>
                                </h3>
                                <h3 class="text-center">Candidates:</h3>
                                <div class="row">
                                    @foreach($candidates as $candidate)
                                        <div class="modal-dialog col-md-3" role="document">
                                            <div class="modal-content profile-modal">
                                                <!-- SIDEBAR USERPIC -->
                                                <div class="d-flex justify-content-end">
                                                    <img
                                                        src="{{asset('/img/uploads/candidate/'.$candidate->displayPicture)}}"
                                                        id="candidateImage" class="img-responsive" alt="">
                                                    <div class="profile-usertitle">
                                                        <div>
                                                            <div class="profile-usertitle-nameDynamic">
                                                                <span
                                                                    id="candidateFirstName">{{$candidate->name}}</span>
                                                                <span
                                                                    id="candidateMiddleName">{{$candidate->middleName}}</span>
                                                                <span
                                                                    id="candidateSurName">{{$candidate->surName}}</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <span class="profile-usertitle-name">Political Party:</span>
                                                            <div class="profile-usertitle-nameDynamic">
                                                                <img
                                                                    src="{{asset('/img/uploads/partyFlags/'.$candidate->politicalParty->flagImage)}}"
                                                                    width="50px" height="40px" id="partyFlag"
                                                                    class="img-responsive" alt="">
                                                                <span
                                                                    id="party">{{$candidate->politicalParty->name}}</span>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <select name="candidateID">
                                            <option value="" selected disabled>Select candidate to vote</option>
                                            @foreach($candidates as $candidate)
                                                <option value="{{$candidate->id}}">{{$candidate->name}} <span
                                                        style="font-size: 8px;"> of </span> {{$candidate->politicalParty->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <input name="voterID" type="hidden" value="{{$voter->id}}">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

