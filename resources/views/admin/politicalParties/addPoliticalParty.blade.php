@extends('admin.parent.master')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <ul>
                @if ($errors->any())
                    <div class="mx-5">
                        @foreach ($errors->all() as $error)
                            <li style="height: 10px; font-size: 10px"
                                class="alert alert-danger alert-dismissible fade show">
                                {{ $error }}
                            </li>
                        @endforeach
                    </div>
                @endif
            </ul>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <h3 class="text-center display-6">Register a Political Party</h3>
                            <form method="post" enctype="multipart/form-data" action="{{ route('addPoliticalPartyPost') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Name of the party <i
                                                            class="fa-solid fa-asterisk fa-2xs "></i></label>
                                                    <input type="text" class="form-control addInput" name="name"
                                                           id="" aria-describedby="" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Inauguration date</label>
                                                    <div class="cal-icon"><input type="date" id="date"
                                                                                 name="since" class="form-control"><i
                                                            class="far fa-calendar-alt"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group wrapper">
                                            <div>
                                                <div class="wrapper">
                                                    <label for="exampleInputEmail1">Upload image of Party flag</label>
                                                </div>
                                                <div class="wrapper">
                                                    <div class="file-upload">
                                                        <input type="file" name="profilePicture"
                                                               onchange="PreviewImage();" id="files"/>
                                                        <i class="fa fa-arrow-up" id="uploadIcon"></i>
                                                        <img class="imgCard mt-4 mb-2" id="uploadPreview" src=""/>
                                                    </div>
                                                </div>
                                                <div class="wrapper">
                                                    <small id="emailHelp" class="form-text text-muted">Upload the
                                                        passport
                                                        size image
                                                        (max.
                                                        size: 100kb).</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>                                                                                                                                                                                                                                                                                                                                                                                            Content body end
                                                                                                                                                                                                                                                                                                                                                                                                                        ***********************************-->
@endsection
@section('script')
    <script src="{{ asset('js/imageUploadIcon.js') }}"></script>
@endsection
