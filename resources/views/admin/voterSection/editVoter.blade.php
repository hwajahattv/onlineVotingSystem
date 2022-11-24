@extends('admin.parent.master')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            @if ($errors->any())
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
            @endif
            <!-- Add Project -->

            <div class="row">
                {{-- <div class="col-md-6"> --}}
                <form method="post" enctype="multipart/form-data"
                    action="{{ url('/editVoterPost/' . $voter->id) }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">First name <i
                                                class="fa-solid fa-asterisk fa-2xs "></i></label>
                                        <input type="text" class="form-control addInput" name="name"
                                               id="" aria-describedby="" placeholder="" value="{{ $voter->name }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Middle name </label>
                                        <input type="text" class="form-control addInput" name="middleName"
                                               id="" aria-describedby="" placeholder="" value="{{ $voter->middleName }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Surname <i
                                                class="fa-solid fa-asterisk fa-2xs "></i></label>
                                        <input value="{{ $voter->surName }}" type="text" class="form-control addInput" name="surName"
                                               id="" aria-describedby="" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Age</label>
                                        <input value="{{ $voter->age }}" type="number" class="form-control addInput" name="age"
                                               id="" aria-describedby="" placeholder="" maxlength="13">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Gender <i
                                                class="fa-solid fa-asterisk fa-2xs "></i></label>
                                        <select class="form-control" name="gender"
                                                aria-label="Default select example">
                                            <option selected value={{ $voter->gender }}>{{ $voter->gender }}</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Date of birth <i
                                                class="fa-solid fa-asterisk fa-2xs "></i></label>
                                        <div class="cal-icon"><input value="{{ $voter->dob }}" type="date" id="date"
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
                                            <option selected value={{ $voter->occupation }}>{{ $voter->occupation }}</option>
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
                                        <div class="cal-icon"><input value="{{ $voter->school }}" type="text" name="school"
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
                                                    id="selectReligion">
                                                <option selected ={{ $voter->religion }}>{{ $voter->religion }}</option>
                                                <option value="Atheist">Atheist</option>
                                                <option value="Baha'i">Baha'i</option>
                                                <option value="Buddhism">Buddhism</option>
                                                <option value="Christianity">Christianity</option>
                                                <option value="Hinduism">Hinduism</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Judaism">Judaism</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 hideField" id="otherReligon">
                                    <div class="form-group">
                                        <label>Mention other religion name</label>
                                        <div class="cal-icon"><input value="{{ $voter->otherReligon }}" type="text" name="otherReligon"
                                                                     class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" id="localChurch">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Local Church</label>
                                            <input value="{{ $voter->local_church }}" type="text" class="form-control addInput"
                                                   name="local_church" id="" aria-describedby=""
                                                   placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 hideField" id="churchList">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Select Church <i
                                                    class="fa-solid fa-asterisk fa-2xs "></i></label>
                                            <select class="form-control" name="local_church"
                                                    id="selectReligion">
                                                <option selected value={{ $voter->local_church }}>{{ $voter->local_church }}</option>
                                                <option value="Roman Catholic Church">Roman Catholic Church</option>
                                                <option value="Evangelical Lutheran Church of Papua New Guinea">Evangelical Lutheran Church of Papua New Guinea</option>
                                                <option value="United Church in Papua New Guinea">United Church in Papua New Guinea</option>
                                                <option value="Christianity">Seventh-day Adventist Church</option>
                                                <option value="Pentecostal">Pentecostal</option>
                                                <option value="Evangelical Alliance (PNG)">Evangelical Alliance (PNG)</option>
                                                <option value="Anglican Church of Papua New Guinea">Anglican Church of Papua New Guinea</option>
                                                <option value="Baptist">Baptist</option>
                                                <option value="Salvation Army">Salvation Army</option>
                                                <option value="Other Christian Churches">Other Christian Churches</option>
                                                <option value="Judaism">Judaism</option>
                                                <option value="Jehovah's Witnesses">Jehovah's Witnesses</option>
                                                <option value="Church of Christ">Church of Christ</option>
                                            </select>
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
                                            <option value={{ $voter->birth_region }} selected="selected">{{ $voter->birth_region }} </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Birth Province <i
                                                class="fa-solid fa-asterisk fa-2xs "></i></label>
                                        <select class="form-control" name="birth_province"
                                                id="province_select">
                                            <option value={{ $voter->birth_province }}  selected="selected">{{ $voter->birth_province }}
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
                                            <option value={{ $voter->birth_district }} selected="selected">{{ $voter->birth_district }}
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
                                            <option value={{ $voter->birth_LLG }} selected="selected">{{ $voter->birth_LLG }}
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
                                            <option value={{ $voter->birth_ward }} selected="selected">{{ $voter->birth_ward }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Birth village</label>
                                            <input value="{{ $voter->birth_village }}" type="text" class="form-control addInput"
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
                                            <option value={{ $voter->current_region }} selected="selected">{{ $voter->current_region }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Current Province <i
                                                class="fa-solid fa-asterisk fa-2xs "></i></label>
                                        <select class="form-control" name="current_province"
                                                id="current_province">
                                            <option value={{ $voter->current_region }} selected="selected">{{ $voter->current_province }}
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
                                            <option value={{ $voter->current_district }} selected="selected">{{ $voter->current_district }}
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
                                            <option value={{ $voter->current_LLG }} selected="selected">{{ $voter->current_LLG }}
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
                                            <option value={{ $voter->current_ward }} selected="selected">{{ $voter->current_ward }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Current Village</label>
                                        <input value="{{ $voter->current_village }}" type="text" class="form-control addInput"
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
                                            <img class="imgCard mt-4 mb-2" height="" width="" id="uploadPreview" src=""/>
                                        </div>
                                    </div>
                                    <div class="wrapper">
                                        <small id="emailHelp" class="form-text text-muted">Upload the
                                            passport
                                            size image
                                            (max.
                                            size: 100kb).</small>
                                    </div>
                                    @if (!empty($voter->displayPicture))
                                        <div class="wrapper">
                                            <img style="width:110px; height:110px;"
                                                 src="{{ asset('img/uploads/voter/') . '/' . $voter->displayPicture }}" />
                                        </div>
                                        <div class="wrapper">
                                            <small id="emailHelp" class="blockquote">Previous uploaded
                                                image.</small>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
    {{-- </div> --}}
    <!--**********************************
                                                                                                                                                                                                                                                                                                                        Content body end
                                                                                                                                                                                                                                                                                                                    ***********************************-->
@endsection
