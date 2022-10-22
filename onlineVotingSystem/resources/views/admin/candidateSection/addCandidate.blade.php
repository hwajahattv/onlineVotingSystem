@extends('admin.parent.master')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <!-- Add Project -->
            <div class="modal fade" id="addProjectSidebar">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Create Project</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label class="text-black font-w500">Project Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">Dadeline</label>
                                    <div class="cal-icon"><input type="date" class="form-control"><i
                                            class="far fa-calendar-alt"></i></div>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">Client Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary">CREATE</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <ul>
                @if ($errors->any())
                    <div class="mx-5">
                        @foreach ($errors->all() as $error)
                            <li style="height: 10px; font-size: 10px"
                                class="alert alert-danger alert-dismissible fade show">
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
                <div class="col-xl-12">
                    <div class="card overflow-hidden">
                        <div class="card-body">


                            <form method="post" enctype="multipart/form-data" action="{{ route('addCandidatePost') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Candidate name</label>
                                            <input type="text" class="form-control addInput" name="name"
                                                id="" aria-describedby="" placeholder="">
                                            <small id="emailHelp" class="form-text text-muted">Enter the fullname of
                                                candidate.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">CNIC #</label>
                                            <input type="text" class="form-control addInput" name="CNIC"
                                                id="" aria-describedby="" placeholder="" maxlength="13">
                                            <small id="emailHelp" class="form-text text-muted">Enter the candidate CNIC #
                                                without
                                                dashes
                                                (-).</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Candidate's Mobile number</label>
                                            <input type="number" class="form-control addInput" name="phone_no"
                                                id="" aria-describedby="" placeholder="">
                                            <small id="emailHelp" class="form-text text-muted">Enter the mobile number
                                                without
                                                spaces.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Candidate's email</label>
                                            <input type="email" class="form-control addInput" name="email"
                                                id="" aria-describedby="" placeholder="">
                                            <small id="emailHelp" class="form-text text-muted">Enter the email.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Candidate's address</label>
                                            <input type="text" class="form-control addInput" name="address"
                                                id="" aria-describedby="" placeholder="">
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
                                                    <small id="emailHelp" class="form-text text-muted">Upload the passport
                                                        size image
                                                        (max.
                                                        size: 100kb).</small>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                         --}}
                                        {{-- <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div> --}}
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- </div> --}}
    <!--**********************************
                                                                                                                                                                                                                                        Content body end
                                                                                                                                                                                                                                    ***********************************-->
@endsection
