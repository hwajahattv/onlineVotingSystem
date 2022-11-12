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

<div class="row">
    <div class="container-login100 ">
            <div class="col-md-1">
                <a class="btn btn-outline-success" href="{{ url('/') }}">Home</a>
            </div>
            <div class="col-md-11">
                <h1 class="text-dark text-center">Population Registration System (Voter)</h1>
            </div>
        @if ($errors->any())
            <div class="col-md-6">
                <div class="jumbotron m-2 mx-5">
                    <ol class="alert alert-danger alert-dismissible">
                        @foreach ($errors->all() as $error)
                            <li style="height: 14px; font-size: 12px"
                                class=" fade show">
                                * &nbsp; {{ $error }}
                            </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        @endif
        @if(Session::has('message'))
            <div class="col-md-12">
                <div class="jumbotron m-2 bg-success">
                    <h4 class="display-6 text-center">{{ Session::get('message') }}</h4>
                </div>
            </div>
        @endif
        <div class="">
            <div class="card overflow-hidden">
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="{{ route('registerAsVoterPost') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">First name <i
                                                    class="fa-solid fa-asterisk fa-2xs "></i></label>
                                            <input type="text" class="form-control addInput" name="name"
                                                   id="" aria-describedby="" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Middle name </label>
                                            <input type="text" class="form-control addInput" name="middleName"
                                                   id="" aria-describedby="" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Surname <i
                                                    class="fa-solid fa-asterisk fa-2xs "></i></label>
                                            <input type="text" class="form-control addInput" name="surName"
                                                   id="" aria-describedby="" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Age</label>
                                            <input type="number" class="form-control addInput" name="age"
                                                   id="" aria-describedby="" placeholder="" maxlength="13">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Gender <i
                                                    class="fa-solid fa-asterisk fa-2xs "></i></label>
                                            <select class="form-control" name="gender"
                                                    aria-label="Default select example">
                                                <option selected disabled>--select--</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Date of birth <i
                                                    class="fa-solid fa-asterisk fa-2xs "></i></label>
                                            <div class="cal-icon"><input type="date" id="date"
                                                                         name="dob" class="form-control"><i
                                                    class="far fa-calendar-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Occupation <i
                                                    class="fa-solid fa-asterisk fa-2xs "></i></label>
                                            <select class="form-control" name="occupation"
                                                    id="selectOccupation">
                                                <option selected disabled>--select--</option>
                                                <option value="Student">Student</option>
                                                <option value="Self Employed">Self Employed</option>
                                                <option value="Subsistence Farmer">Subsistence Farmer</option>
                                                <option value="House wife">House wife</option>
                                                <option value="Public Servant">Public Servant</option>
                                                <option value="Private Sector Worker">Private Sector Worker
                                                </option>
                                                <option value="Religious Worker">Religious Worker</option>
                                                <option value="others">others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 hideField" id="schoolName">
                                        <div class="form-group">
                                            <label>School name</label>
                                            <div class="cal-icon"><input type="text" name="school"
                                                                         class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Religion <i
                                                        class="fa-solid fa-asterisk fa-2xs "></i></label>
                                                <select class="form-control" name="religion"
                                                        id="selectOccupation">
                                                    <option selected disabled>--select--</option>
                                                    <option value="African Traditional &amp; Diasporic">African
                                                        Traditional &amp; Diasporic
                                                    </option>
                                                    <option value="Agnostic">Agnostic</option>
                                                    <option value="Atheist">Atheist</option>
                                                    <option value="Baha'i">Baha'i</option>
                                                    <option value="Buddhism">Buddhism</option>
                                                    <option value="Cao Dai">Cao Dai</option>
                                                    <option value="Chinese traditional religion">Chinese
                                                        traditional religion
                                                    </option>
                                                    <option value="Christianity">Christianity</option>
                                                    <option value="Hinduism">Hinduism</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Jainism">Jainism</option>
                                                    <option value="Juche">Juche</option>
                                                    <option value="Judaism">Judaism</option>
                                                    <option value="Neo-Paganism">Neo-Paganism</option>
                                                    <option value="Nonreligious">Nonreligious</option>
                                                    <option value="Rastafarianism">Rastafarianism</option>
                                                    <option value="Secular">Secular</option>
                                                    <option value="Shinto">Shinto</option>
                                                    <option value="Sikhism">Sikhism</option>
                                                    <option value="Spiritism">Spiritism</option>
                                                    <option value="Tenrikyo">Tenrikyo</option>
                                                    <option value="Unitarian-Universalism">
                                                        Unitarian-Universalism
                                                    </option>
                                                    <option value="Zoroastrianism">Zoroastrianism</option>
                                                    <option value="primal-indigenous">primal-indigenous</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Local Church</label>
                                                <input type="text" class="form-control addInput"
                                                       name="local_church" id="" aria-describedby=""
                                                       placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Birth Region <i
                                                    class="fa-solid fa-asterisk fa-2xs "></i></label>
                                            <select class="form-control" name="birth_region"
                                                    id="region_select">
                                                <option value="" selected="selected">--select--</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Birth Province <i
                                                    class="fa-solid fa-asterisk fa-2xs "></i></label>
                                            <select class="form-control" name="birth_province"
                                                    id="province_select">
                                                <option value="" selected="selected">--select--
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Birth District <i
                                                    class="fa-solid fa-asterisk fa-2xs "></i></label>
                                            <select class="form-control" name="birth_district"
                                                    id="district_select">
                                                <option value="" selected="selected">--select--
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Birth LLG <i
                                                    class="fa-solid fa-asterisk fa-2xs "></i></label>
                                            <select class="form-control" name="birth_LLG"
                                                    id="LLG_select">
                                                <option value="" selected="selected">--select--
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Birth Ward <i
                                                    class="fa-solid fa-asterisk fa-2xs "></i></label>
                                            <select class="form-control" name="birth_ward"
                                                    id="ward_select">
                                                <option value="" selected="selected">--select--
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Birth village</label>
                                                <input type="text" class="form-control addInput"
                                                       name="birth_village" id="" aria-describedby=""
                                                       placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Current Region <i
                                                    class="fa-solid fa-asterisk fa-2xs "></i></label>
                                            <select class="form-control" name="current_region"
                                                    id="region_select1">
                                                <option value="" selected="selected">--select--</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Current Province <i
                                                    class="fa-solid fa-asterisk fa-2xs "></i></label>
                                            <select class="form-control" name="current_province"
                                                    id="province_select1">
                                                <option value="" selected="selected">--select--
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Current District <i
                                                    class="fa-solid fa-asterisk fa-2xs "></i></label>
                                            <select class="form-control" name="current_district"
                                                    id="district_select1">
                                                <option value="" selected="selected">--select--
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Current LLG <i
                                                    class="fa-solid fa-asterisk fa-2xs "></i></label>
                                            <select class="form-control" name="current_LLG"
                                                    id="LLG_select1">
                                                <option value="" selected="selected">--select--
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Current Ward <i
                                                    class="fa-solid fa-asterisk fa-2xs "></i></label>
                                            <select class="form-control" name="current_ward"
                                                    id="ward_select1">
                                                <option value="" selected="selected">--select--</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Current Village</label>
                                            <input type="text" class="form-control addInput"
                                                   name="current_village" id="" aria-describedby=""
                                                   placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group wrapper">
                                    <div>
                                        <div class="wrapper">
                                            <label for="exampleInputEmail1">Upload candidate's profile
                                                image</label>
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
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

{{-- jQuery CDN --}}
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>
<script src="{{ asset('js/imageUploadIcon.js') }}"></script>

<script src="{{ asset('js/addCandidate.js') }}"></script>
</body>

</html>
