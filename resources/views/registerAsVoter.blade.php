<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting App</title>

    <link rel="stylesheet" href="{{ asset('vendor/chartist/css/chartist.min.css') }}">
    <link href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main1.css') }}" rel="stylesheet">


</head>

<body>
    <ul>
        @if ($errors->any())
            <div class="mx-5">
                @foreach ($errors->all() as $error)
                    <li style="height: 10px; font-size: 10px" class="alert alert-danger alert-dismissible fade show">
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
        <div class="col-md-1">
            <a class="btn btn-outline-success" href="{{ url('/') }}">Home</a>
        </div>
        <div class="col-md-11">
            <h1 class="display-3 text-center">Population Registration System</h1>
        </div>
        <div class="container-login100">
            <div class="">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data" action="{{ route('registerAsVoterPost') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Voter name</label>
                                        <input type="text" class="form-control addInput" name="name"
                                            id="" aria-describedby="" placeholder="">
                                        <small id="emailHelp" class="form-text text-muted">Enter the fullname of
                                            voter.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">CNIC #</label>
                                        <input type="text" class="form-control addInput" name="CNIC"
                                            id="" aria-describedby="" placeholder="" maxlength="13">
                                        <small id="emailHelp" class="form-text text-muted">Enter the voter CNIC #
                                            without
                                            dashes
                                            (-).</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Voter's Mobile number</label>
                                        <input type="number" class="form-control addInput" name="phone_no"
                                            id="" aria-describedby="" placeholder="">
                                        <small id="emailHelp" class="form-text text-muted">Enter the mobile number
                                            without
                                            spaces.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Voter's email</label>
                                        <input type="email" class="form-control addInput" name="email"
                                            id="" aria-describedby="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Voter's address</label>
                                        <input type="text" class="form-control addInput" name="address"
                                            id="" aria-describedby="" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group wrapper">
                                        <div>
                                            <div class="wrapper">
                                                <label for="exampleInputEmail1">Upload voter's profile image</label>
                                            </div>
                                            <div class="wrapper">
                                                <div class="file-upload">
                                                    <input type="file" name="profilePicture"
                                                        onchange="PreviewImage();" id="files" />
                                                    <i class="fa fa-arrow-up" id="uploadIcon"></i>
                                                    <img class="imgCard mt-4 mb-2" id="uploadPreview" src=""
                                                        class="mt-3" />
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
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>
        <script src="{{ asset('js/imageUploadIcon.js') }}"></script>

</body>

</html>
