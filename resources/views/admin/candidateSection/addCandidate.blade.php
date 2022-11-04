@extends('admin.parent.master')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
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
                <div class="col-xl-12">
                    <div class="card overflow-hidden">
                        <div class="card-body">

                            <h3 class="text-center display-3">Enter the candidate details</h3>
                            <form method="post" enctype="multipart/form-data" action="{{ route('addCandidatePost') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">First name <i
                                                            class="fa-solid fa-asterisk fa-2xs "></label>
                                                    <input type="text" class="form-control addInput" name="name"
                                                        id="" aria-describedby="" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Middle name</label>
                                                    <input type="text" class="form-control addInput" name="middleName"
                                                        id="" aria-describedby="" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Surname</label>
                                                    <input type="text" class="form-control addInput" name="surname"
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
                                                    <label for="exampleInputEmail1">Gender</label>
                                                    <select class="form-control" name="gender"
                                                        aria-label="Default select example">
                                                        <option selected disabled>Open this select menu</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Date of birth</label>
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
                                                    <label for="exampleInputEmail1">Occupation</label>
                                                    <select class="form-control" name="occupation" id="selectOccupation">
                                                        <option selected disabled>--select--</option>
                                                        <option value="Student">Student</option>
                                                        <option value="Self Employed">Self Employed</option>
                                                        <option value="Subsistence Farmer">Subsistence Farmer</option>
                                                        <option value="House wife">House wife</option>
                                                        <option value="Public Servant">Public Servant</option>
                                                        <option value="Private Sector Worker">Private Sector Worker</option>
                                                        <option value="Religious Worker">Religious Worker</option>
                                                        <option value="others">others</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4 hideField" id="schoolName">
                                                <div class="form-group">
                                                    <label>Date of birth</label>
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
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Religion</label>
                                                        <select class="form-control" name="religion" id="selectOccupation">
                                                            <option selected disabled>--select--</option>
                                                            <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                                            <option value="African Traditional &amp; Diasporic">African Traditional &amp; Diasporic</option>
                                                            <option value="Agnostic">Agnostic</option>
                                                            <option value="Atheist">Atheist</option>
                                                            <option value="Baha'i">Baha'i</option>
                                                            <option value="Buddhism">Buddhism</option>
                                                            <option value="Cao Dai">Cao Dai</option>
                                                            <option value="Chinese traditional religion">Chinese traditional religion</option>
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
                                                            <option value="Unitarian-Universalism">Unitarian-Universalism</option>
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
                                                        <input type="text" class="form-control addInput" name="local_church"
                                                               id="" aria-describedby="" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Birth Region</label>
                                                        <input type="text" class="form-control addInput" name="birth_region"
                                                               id="" aria-describedby="" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Birth Province</label>
                                                        <input type="text" class="form-control addInput" name="birth_province"
                                                               id="" aria-describedby="" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Birth District</label>
                                                        <input type="text" class="form-control addInput" name="birth_district"
                                                               id="" aria-describedby="" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Birth LLG</label>
                                                        <input type="text" class="form-control addInput" name="birth_LLG"
                                                               id="" aria-describedby="" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Birth Ward</label>
                                                        <input type="text" class="form-control addInput" name="birth_ward"
                                                               id="" aria-describedby="" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Birth Village</label>
                                                        <input type="text" class="form-control addInput" name="birth_village"
                                                               id="" aria-describedby="" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Current Region</label>
                                                        <input type="text" class="form-control addInput" name="current_region"
                                                               id="" aria-describedby="" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Current Province</label>
                                                        <input type="text" class="form-control addInput" name="current_province"
                                                               id="" aria-describedby="" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Current District</label>
                                                        <input type="text" class="form-control addInput" name="current_district"
                                                               id="" aria-describedby="" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Current LLG</label>
                                                        <input type="text" class="form-control addInput" name="current_LLG"
                                                               id="" aria-describedby="" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Current Ward</label>
                                                        <input type="text" class="form-control addInput" name="current_ward"
                                                               id="" aria-describedby="" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Current Village</label>
                                                        <input type="text" class="form-control addInput" name="current_village"
                                                               id="" aria-describedby="" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

{{--                                        <div class="form-group">--}}
{{--                                            <label for="exampleInputEmail1">Candidate's Mobile number</label>--}}
{{--                                            <input type="number" class="form-control addInput" name="phone_no"--}}
{{--                                                id="" aria-describedby="" placeholder="">--}}
{{--                                            <small id="emailHelp" class="form-text text-muted">Enter the mobile number--}}
{{--                                                without--}}
{{--                                                spaces.</small>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="exampleInputEmail1">Candidate's email</label>--}}
{{--                                            <input type="email" class="form-control addInput" name="email"--}}
{{--                                                id="" aria-describedby="" placeholder="">--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="exampleInputEmail1">Candidate's address</label>--}}
{{--                                            <input type="text" class="form-control addInput" name="address"--}}
{{--                                                id="" aria-describedby="" placeholder="">--}}
{{--                                        </div>--}}
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

