@extends('admin.parent.master')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <ul>
                @if ($errors->any())
                    <div class="mx-5">
                        @foreach ($errors->all() as $error)
                            <li style="height: 10px; font-size: 9px" class="alert alert-danger alert-dismissible fade show">
                                {{-- <div class="alert alert-danger alert-dismissible fade show py-2 mx-5 my-2" role="alert"> --}}
                                {{ $error }}
                                {{-- </div> --}}
                            </li>
                        @endforeach
                        @if (Session::has('message'))
                            <div class="alert alert-info"><span> {{ Session::get('message') }} </span></div>
                        @endif
                    </div>
                @endif
            </ul>
            <div class="row">
                {{-- <div class="col-md-6"> --}}
                <form method="post" enctype="multipart/form-data"
                    action="{{ url('/editCandidatePost/' . $candidate->id) }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Candidate name</label>
                                <input type="text" class="form-control addInput" name="name" id=""
                                    aria-describedby="" value="{{ $candidate->name }}">
                                <small id="emailHelp" class="form-text text-muted">Enter the fullname of
                                    candidate.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">CNIC #</label>
                                <input type="text" class="form-control addInput" name="CNIC" id=""
                                    aria-describedby="" value="{{ $candidate->CNIC }}" maxlength="13">
                                <small id="emailHelp" class="form-text text-muted">Enter the candidate CNIC # without
                                    dashes
                                    (-).</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Candidate's Mobile number</label>
                                <input type="number" class="form-control addInput" name="phone_no" id=""
                                    aria-describedby="" value="{{ $candidate->phone_no }}">
                                <small id="emailHelp" class="form-text text-muted">Enter the mobile number without
                                    spaces.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Candidate's address</label>
                                <input type="text" class="form-control addInput" name="address" id=""
                                    aria-describedby="" value="{{ $candidate->address }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group wrapper">
                                <div>
                                    <div class="wrapper">
                                        <label for="exampleInputEmail1">Upload candidate's profile image</label>
                                    </div>
                                    <div class="wrapper">
                                        <div class="file-upload">
                                            <input type="file" name="profilePicture" />
                                            <i class="fa fa-arrow-up"></i>
                                        </div>
                                    </div>
                                    <div class="wrapper">
                                        <small id="emailHelp" class="form-text text-muted">Upload the passport size image
                                            (max.
                                            size: 100kb).</small>
                                    </div>
                                    @if (!empty($candidate->displayPicture))
                                        <div class="wrapper">
                                            <img style="width:110px; height:110px;"
                                                src="{{ asset('img/uploads/candidate/') . '/' . $candidate->displayPicture }}" />
                                        </div>
                                        <div class="wrapper">
                                            <small id="emailHelp" class="blockquote">Previous uploaded
                                                image.</small>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    {{-- </div> --}}
    <!--**********************************
                                                                                                                                                                                                                                                                                                                        Content body end
                                                                                                                                                                                                                                                                                                                    ***********************************-->
@endsection
