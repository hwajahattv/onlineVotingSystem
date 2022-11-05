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
                        {{--                        @if (Session::has('message')) --}}
                        {{--                            <div class="alert alert-info"><span> {{ Session::get('message') }} </span></div> --}}
                        {{--                        @endif --}}
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
                                                            <option value="" selected="selected"
                                                                    disabled="disabled">--
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
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Birth Region <i
                                                                class="fa-solid fa-asterisk fa-2xs "></i></label>
                                                        <select class="form-control" name="birth_region"
                                                                id="region_select">
                                                            <option value="" selected="selected">Select Region</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Birth Province <i
                                                                class="fa-solid fa-asterisk fa-2xs "></i></label>
                                                        <select class="form-control" name="birth_province"
                                                                id="province_select">
                                                            <option value="" selected="selected">Select Province
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Birth District</label>
                                                        <select class="form-control" name="birth_district"
                                                                id="district_select">
                                                            <option value="" selected="selected">Select District
                                                            </option>
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
                                                               name="birth_LLG" id="" aria-describedby=""
                                                               placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Birth Ward</label>
                                                        <input type="text" class="form-control addInput"
                                                               name="birth_ward" id="" aria-describedby=""
                                                               placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Birth Village</label>
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
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Current Region <i
                                                                class="fa-solid fa-asterisk fa-2xs "></i></label>
                                                        <select class="form-control" name="current_region"
                                                                id="region_select2">
                                                            <option value="" selected="selected">Select Region</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Current Province <i
                                                                class="fa-solid fa-asterisk fa-2xs "></i></label>
                                                        <select class="form-control" name="current_province"
                                                                id="province_select1">
                                                            <option value="" selected="selected">Select Province
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Current District</label>
                                                        <select class="form-control" name="current_district"
                                                                id="district_select1">
                                                            <option value="" selected="selected">Select District
                                                            </option>
                                                        </select>
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
                                                               name="current_LLG" id="" aria-describedby=""
                                                               placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Current Ward</label>
                                                        <input type="text" class="form-control addInput"
                                                               name="current_ward" id="" aria-describedby=""
                                                               placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Current Village</label>
                                                        <input type="text" class="form-control addInput"
                                                               name="current_village" id="" aria-describedby=""
                                                               placeholder="">
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
        $("#selectOccupation").change(function () {
            if ($("#selectOccupation").find(":selected").val() == "Student") {
                $("#schoolName").removeClass("hideField");
            } else {
                if (!$("#schoolName").hasClass("hideField")) {
                    $("#schoolName").addClass("hideField");
                }
            }
        });
        var subjectObject = {
            "HIGHLANDS": {
                "CHIMBU": [
                    "CHUAVE",
                    "GUMINE",
                    "KARIMUI-NOMANE",
                    "KEROWAGI",
                    "SINASINA-YONGGAMUGL,",
                    "KUNDIAWA",
                ],
                "EASTERN HIGHLANDS": [
                    "DAULO",
                    "GOROKA",
                    "HENGANOFI",
                    "KAINANTU",
                    "LUFA",
                    "OBURA-WONENARA",
                    "OKAPA",
                    "UNGAI-BENA",
                ],
                "ENGA": [
                    "KANDEP",
                    "KOMPIAM/AMBUM",
                    "LAGAIP",
                    "POGERA-PAIELA",
                    "WABAG",
                    "WAPENAMANDA",
                ],
                "HELA": ["KOMO-HULIA", "KOROBA KUPIAGO", "MAGARIMA", "TARI/PORI"],
                "JIWAKA": ["ANGLIMP/SOUTH WAGHI", "JIMI", "NORTH WAGHI"],
                "SOUTHERN HIGHLANDS": [
                    "IALIBU/PANGIA",
                    "IMBONGGU",
                    "KAGUA/ERAVE",
                    "MENDI",
                ],
                "WESTERN HIGHLANDS": [
                    "DEI",
                    "HAGEN CENTRAL",
                    "MUL-BAIYER",
                    "TAMBUL/NEBILYER",
                ],
            },
            "NEW_GUINEA_ISLANDS": {
                "BOUGAINVILLE": [
                    "CENTRAL BOUGAINVILLE",
                    "NORTH BOUGAINVILLE",
                    "SOUTH BOUGAINVILLE",
                ],
                "EAST NEW BRITAIN": ["GAZELLE", "KOKOPO", "POMIO", "RABAUL"],
                "MANUS": ["MANUS"],
                "NEW IRELAND": ["KAVIENG", "NAMATANAI"],
                "WEST NEW BRITAIN": ["KANDRIAN-GLOUCESTER", "NAKANAI", "TALASEA"],
            },

            "MOMASE": {
                "EAST SEPIK": [
                    "AMBUNTI-DREIKIKIR",
                    "ANGORAM",
                    "MAPRIK",
                    "WEWAK",
                    "WOSERA-GAUI",
                    "YANGORU-SAUSSIA",
                ],
                "MADANG": [
                    "BOGIA",
                    "MADANG",
                    "MIDDLE RAMU",
                    "RAI COAST",
                    "SUMKAR",
                    "USINO-BUNDI",
                ],
                "MOROBE": [
                    "BULOLO",
                    "FINSCHAFEN",
                    "HUON GULF",
                    "KABWUM",
                    "LAE",
                    "MARKHAM",
                    "MENYAMYA",
                    "NAWAE",
                    "TEWAI-SIASSI",
                    "WAU-WARIA",
                ],
                "WEST SEPIK": [
                    "AITAPE-LUMI",
                    "NUKU",
                    "TELEFOMIN",
                    "VANIMO-GREEN RIVER",
                ],
            },
            "SOUTHERN": {
                "CENTRAL": ["ABAU", "GOILALA", "x.x", "KAIRUKU", "RIGO"],
                "Gulf": ["KEREMA", "KIKORI"],
                "MILNE BAY": [
                    "ALOTAU",
                    "ESAALA",
                    "KIRIWINA/GOODENOUGH",
                    "SAMARAI-MURUA",
                ],
                "NATIONAL CAPITAL DISTRICT": [
                    "MORESBY NORTH-EAST",
                    "MORESBY NORTH-WEST",
                    "MORESBY SOUTH",
                ],
                "NORTHERN": ["IJIVITARI", "POPONDETTA", "SOHE"],
                "WESTERN": ["DELTA FLY", "MIDDLE FLY", "NORTH FLY", "SOUTH FLY"],
            },
        };
        window.onload = function () {
            var subjectSel = document.getElementById("region_select");
            var topicSel = document.getElementById("province_select");
            var chapterSel = document.getElementById("district_select");

            for (var x in subjectObject) {
                subjectSel.options[subjectSel.options.length] = new Option(x, x);
            }

            subjectSel.onchange = function () {
                //empty Chapters- and Topics- dropdowns
                chapterSel.length = 1;
                topicSel.length = 1;
                //display correct values
                for (var y in subjectObject[this.value]) {
                    topicSel.options[topicSel.options.length] = new Option(y, y);
                }
            };
            topicSel.onchange = function () {
                //empty Chapters dropdown
                chapterSel.length = 1;
                //display correct values
                var z = subjectObject[subjectSel.value][this.value];
                for (var i = 0; i < z.length; i++) {
                    chapterSel.options[chapterSel.options.length] = new Option(
                        z[i],
                        z[i]
                    );
                }
            };

            var subjectSel1 = document.getElementById("region_select1");
            var topicSel1 = document.getElementById("province_select1");
            var chapterSel1 = document.getElementById("district_select1");

            for (var x in subjectObject) {
                subjectSel1.options[subjectSel1.options.length] = new Option(x, x);
            }

            subjectSel1.onchange = function () {
                //empty Chapters- and Topics- dropdowns
                chapterSel1.length = 1;
                topicSel1.length = 1;
                //display correct values
                for (var y in subjectObject[this.value]) {
                    topicSel1.options[topicSel1.options.length] = new Option(y, y);
                }
            };
            topicSel1.onchange = function () {
                //empty Chapters dropdown
                chapterSel1.length = 1;
                //display correct values
                var z = subjectObject[subjectSel1.value][this.value];
                for (var i = 0; i < z.length; i++) {
                    chapterSel.options[chapterSel.options.length] = new Option(
                        z[i],
                        z[i]
                    );
                }
            };
        };

    </script>
@endsection
