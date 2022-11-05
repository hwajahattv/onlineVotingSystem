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
                                {{-- <div class="alert alert-danger alert-dismissible fade show py-2 mx-5 my-2" role="alert"> --}}
                                {{ $error }}
                                {{-- </div> --}}
                            </li>
                        @endforeach
                        {{--                        @if (Session::has('message'))--}}
                        {{--                            <div class="alert alert-info"><span> {{ Session::get('message') }} </span></div>--}}
                        {{--                        @endif--}}
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
                                                        <option selected disabled>Open this select menu</option>
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
                                                    <div class="cal-icon"><input type="text"
                                                                                 name="school" class="form-control">
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
                                                            <option value="" selected="selected" disabled="disabled">--
                                                                select one --
                                                            </option>
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
                                                               name="local_church"
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
                                                        <label for="exampleInputEmail1">Birth Region <i
                                                                class="fa-solid fa-asterisk fa-2xs "></i></label>
                                                        <select id="region_select" name="region">
                                                            <option value="">Select region</option>
                                                            <option value="https://rollsearch.pngec.gov.pg/regions/pngec/HIGHLANDS/index.html">
                                                                HIGHLANDS
                                                            </option>
                                                            <option
                                                                value="https://rollsearch.pngec.gov.pg/regions/pngec/NEW_GUINEA_ISLANDS/index.html">NEW
                                                                GUINEA ISLANDS
                                                            </option>
                                                            <option value="https://rollsearch.pngec.gov.pg/regions/pngec/MOMASE/index.html">MOMASE
                                                            </option>
                                                            <option value="https://rollsearch.pngec.gov.pg/regions/pngec/SOUTHERN/index.html">
                                                                SOUTHERN
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Birth Province <i
                                                                class="fa-solid fa-asterisk fa-2xs "></i></label>
                                                        <select id="province_select" name="province">
                                                            <option value="">Select province</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Birth District</label>
                                                        <select id="district_select" name="district">
                                                            <option value="">Select district</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Birth LLG</label>
                                                        <input type="text" class="form-control addInput"
                                                               name="birth_LLG"
                                                               id="" aria-describedby="" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Birth Ward</label>
                                                        <input type="text" class="form-control addInput"
                                                               name="birth_ward"
                                                               id="" aria-describedby="" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Birth Village</label>
                                                        <input type="text" class="form-control addInput"
                                                               name="birth_village"
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
                                                        <label for="exampleInputEmail1">Current Region <i
                                                                class="fa-solid fa-asterisk fa-2xs "></i></label>
                                                        <input type="text" class="form-control addInput"
                                                               name="current_region"
                                                               id="" aria-describedby="" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Current Province <i
                                                                class="fa-solid fa-asterisk fa-2xs "></i></label>
                                                        <input type="text" class="form-control addInput"
                                                               name="current_province"
                                                               id="" aria-describedby="" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Current District</label>
                                                        <input type="text" class="form-control addInput"
                                                               name="current_district"
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
                                                        <input type="text" class="form-control addInput"
                                                               name="current_LLG"
                                                               id="" aria-describedby="" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Current Ward</label>
                                                        <input type="text" class="form-control addInput"
                                                               name="current_ward"
                                                               id="" aria-describedby="" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Current Village</label>
                                                        <input type="text" class="form-control addInput"
                                                               name="current_village"
                                                               id="" aria-describedby="" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Political Party <i
                                                            class="fa-solid fa-asterisk fa-2xs "></i></label>
                                                    <select class="form-control" name="political_party"
                                                            id="selectOccupation">
                                                        <option selected disabled>--select--</option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="others">others</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Police clearance ceritifcate <i
                                                            class="fa-solid fa-asterisk fa-2xs "></i></label>
                                                    <select class="form-control" name="policeClearanceCertificate"
                                                            id="selectOccupation">
                                                        <option selected disabled>--select--</option>
                                                        <option value="A">Yes</option>
                                                        <option value="B">No</option>
                                                    </select>
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
                                                        <input type="file" name="profilePicture"/>
                                                        <i class="fa fa-arrow-up"></i>
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
    </div>
    {{-- </div> --}}
    <!--**********************************
                                                                                                                                                                                                                                                                                                                                                                                                                        Content body end
                                                                                                                                                                                                                                                                                                                                                                                                                    ***********************************-->
@endsection
@section('script')
    <script>
    document.addEventListener('DOMContentLoaded', (event) => {

    var region_select=  document.getElementById("region_select");
    var province_select=document.getElementById("province_select");
    var district_select=document.getElementById("district_select");

    region_select.addEventListener("change", function() {
    let selected_option=region_select.value;
    cascade_selects_from_region(selected_option);
    });

    province_select.addEventListener("change", function() {
    let selected_option=province_select.value;
    cascade_selects_from_province(selected_option);
    });

    district_select.addEventListener("change", function() {
    let selected_option=district_select.value;
    });

    }
    );

    function cascade_selects_from_region(region_uri) {
    clear_selects(['province','district']);

    // Set the province select to those for this region
    set_select_via_parent(region_uri, 'province')
    }

    function cascade_selects_from_province(province_uri) {
    clear_selects(['district']);

    // Set the district select to those for this province
    set_select_via_parent(province_uri, 'district')
    }

    function clear_select(id) {
    let select=document.getElementById(id+"_select");
    let blopt="<option value=''>Select "+id+"</option>";
    select.innerHTML="<select name="+id+"_select id="+id+"_select>"+blopt+"</select>";
    }

    function clear_selects(areas) {
    for(var i=0; i<areas.length; i++) { clear_select(areas[i]) };
    }

    function set_select_via_parent(parent_uri, child_tag) {
    let child_select=document.getElementById(child_tag + '_select');
    fetch(parent_uri).then(
    function(response) {
    response.text().then( function(text) {
    let blopt="<option value=''>Select "+child_tag+"</option>";
    child_select.innerHTML="<select name="+child_tag+" id="+child_tag+">"+blopt+text+"</select>"; } )
    }
    ).catch(function (err) { console.warn(err) });
    }

    function caps(str) {
    str=str.replace(/\s+/g, '_')
    return str.toUpperCase();
    }
    </script>
@endsection
